<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Storage;
use File;

use function PHPUnit\Framework\fileExists;

class CustomerController extends Controller
{
    use ImageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criminals = User::Role('CRIMINAL')->orderBy('id', 'desc')->paginate(10);
        return view('admin.criminal.list')->with(compact('criminals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.criminal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'policestation' => 'required',
            'case_no' => 'required',
            'under_section' => 'required',
            'arrest_date' => 'required',
            'address' => 'required',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->policestation = $request->policestation;
        $data->case_no = $request->case_no;
        $data->under_section = $request->under_section;
        $data->address = $request->address;
        $data->arrest_date = $request->arrest_date;
        if ($request->hasFile('profile_picture')) {
            $data->profile_picture = $this->imageUpload($request->file('profile_picture'), 'criminals');
        }
        $data->save();
        $data->assignRole('CRIMINAL');

        return redirect()->route('criminals.index')->with('message', ' created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $criminal = User::findOrFail($id);
        return view('admin.criminal.edit')->with(compact('criminal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'policestation' => 'required',
            'case_no' => 'required',
            'under_section' => 'required',
            'address' => 'required',
            'arrest_date' => 'required',
        ]);

        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->policestation = $request->policestation;
        $data->case_no = $request->case_no;
        $data->under_section = $request->under_section;
        $data->address = $request->address;
        $data->arrest_date = $request->arrest_date;
        if ($request->hasFile('profile_picture')) {
            $data->profile_picture = $this->imageUpload($request->file('profile_picture'), 'criminals');
        }
        $data->save();
        if ($request->page) {
            return redirect()->route('criminals.index', ['page' => $request->page])->with('message', 'Suspect updated successfully.');
        }
        return redirect()->route('criminals.index')->with('message', 'Suspect updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changeCustomersStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('criminals.index')->with('error', 'Suspect has been deleted successfully.');
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $criminals = User::where('id', 'like', '%' . $query . '%')
                ->orWhere('name', 'like', '%' . $query . '%')
                ->orWhere('policestation', 'like', '%' . $query . '%')
                ->orWhere('case_no', 'like', '%' . $query . '%')
                ->orWhere('under_section', 'like', '%' . $query . '%')
                ->orWhere('address', 'like', '%' . $query . '%')
                // arrest date search 03-07-2024
                ->orderBy($sort_by, $sort_type)
                ->Role('CRIMINAL')
                ->paginate($request->show);

            return response()->json(['data' => view('admin.criminal.table', compact('criminals'))->render()]);
        }
    }
}
