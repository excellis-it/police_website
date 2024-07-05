@if (count($criminals) > 0)
    @foreach ($criminals as $key => $criminal)
        <tr>
            <td>
                {{$criminals->firstItem() + $key}}
            </td>
            <td>{{ $criminal->name }}</td>
            <td>{{ $criminal->policestation }}</td>
            <td>{{ $criminal->case_no }}</td>
            <td>{{ $criminal->under_section }}</td>
            <td>{{ $criminal->address }}</td>
            <td>{{date('d-m-Y', strtotime($criminal->created_at))}}</td>
            <td>
                {{ $criminal->arrest_date ? date('d-m-Y', strtotime($criminal->arrest_date)) : ''}}
            </td>
            <td>
                <div class="button-switch">
                    <input type="checkbox" id="switch-orange" class="switch toggle-class" data-id="{{ $criminal['id'] }}"
                        {{ $criminal['status'] ? 'checked' : '' }} />
                    <label for="switch-orange" class="lbl-off"></label>
                    <label for="switch-orange" class="lbl-on"></label>
                </div>
            </td>
            <td>
                <div class="edit-1 d-flex align-items-center justify-content-center">
                    <a title="Edit Customer" href="{{ route('criminals.edit', $criminal->id) . (request()->page ? '?page=' . request()->page : '') }}">
                        <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                    </a>

                    <a title="Delete Customer" data-route="{{ route('criminals.delete', $criminal->id) }}"
                        href="javascipt:void(0);" id="delete"> <span class="trash-icon"><i
                                class="ph ph-trash"></i></span></a>
                </div>
            </td>

        </tr>
    @endforeach
    {{-- pagination --}}
    <tr>
        <td colspan="9">
            <div class="d-flex justify-content-center">
                {!! $criminals->links() !!}
            </div>
        </td>
    </tr>
    @else
    <tr>
        <td colspan="9" class="text-center">No Data Found</td>
    </tr>
@endif
