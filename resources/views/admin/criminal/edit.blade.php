@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Edit Suspect Details
@endsection
@push('styles')
@endpush
@section('head')
    Edit Suspect Details
@endsection
@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <div class="form-head">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Main Information</h4>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('criminals.update', $criminal->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="page" value="{{ request()->page }}">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="row justify-content-between">
                                    <div class="col-md-6">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                <label for="floatingInputValue">Profile Picture</label>
                                                <input type="file" class="form-control" id="floatingInputValue"
                                                    name="profile_picture" value="{{ old('profile_picture') }}"
                                                    placeholder="Profile Picture*">
                                                @if ($errors->has('profile_picture'))
                                                    <div class="error" style="color:red;">
                                                        {{ $errors->first('profile_picture') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                <label for="floatingInputValue">Name*</label>
                                                <input type="text" class="form-control" id="floatingInputValue"
                                                    name="name" value="{{ $criminal->name }}" placeholder="Name*">
                                                @if ($errors->has('name'))
                                                    <div class="error" style="color:red;">{{ $errors->first('name') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                <label for="floatingInputValue">Address*</label>
                                                <input type="text" class="form-control" id="floatingInputValue"
                                                    name="address" value="{{ $criminal->address }}" placeholder="Address*">
                                                @if ($errors->has('address'))
                                                    <div class="error" style="color:red;">{{ $errors->first('address') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="text-right">
                                    @if ($criminal->profile_picture)
                                        <img src="{{ Storage::url($criminal->profile_picture) }}" alt=""
                                            style="width: 100px; height: 100px; border-radius: 10px; object-fit: cover; box-shadow: 5px 3px 10px rgb(0 0 0 / 25%);">
                                    @else
                                        <img src="{{ asset('assets/images/dummy.png') }}" alt=""
                                            style="width: 100px; height: 100px; border-radius: 10px; object-fit: cover; box-shadow: 5px 3px 10px rgb(0 0 0 / 25%);">
                                    @endif
                                </div>
                            </div>

                        </div>


                </div>
                <div class="sales-report-card-wrap mt-5">
                    <div class="form-head">
                        <h4>Case Referance</h4>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="form-group-div">
                                <div class="form-group">
                                    <label for="floatingInputValue">Police Station*</label>
                                    <input type="text" class="form-control" id="floatingInputValue" name="policestation"
                                        value="{{ $criminal->policestation }}" placeholder="Police Station*">
                                    @if ($errors->has('policestation'))
                                        <div class="error" style="color:red;">{{ $errors->first('policestation') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="form-group-div">
                                <div class="form-group">
                                    <label for="floatingInputValue">Case No*</label>
                                    <input type="text" class="form-control" id="floatingInputValue" name="case_no"
                                        value="{{ $criminal->case_no }}" placeholder="Case No*">
                                    @if ($errors->has('case_no'))
                                        <div class="error" style="color:red;">{{ $errors->first('case_no') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- country --}}
                        <div class="col-xl-4 col-md-6">
                            <div class="form-group-div">
                                <div class="form-group">
                                    <label for="floatingInputValue">Under Section*</label>
                                    <input type="text" class="form-control" id="floatingInputValue" name="under_section"
                                        value="{{ $criminal->under_section }}" placeholder="Under Section*">
                                    @if ($errors->has('under_section'))
                                        <div class="error" style="color:red;">{{ $errors->first('under_section') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="btn-1">
                                <button type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#eye-button-1').click(function() {
                $('#password').attr('type', $('#password').is(':password') ? 'text' : 'password');
                $(this).find('i').toggleClass('ph-eye-slash ph-eye');
            });
            $('#eye-button-2').click(function() {
                $('#confirm_password').attr('type', $('#confirm_password').is(':password') ? 'text' :
                    'password');
                $(this).find('i').toggleClass('ph-eye-slash ph-eye');
            });
        });
    </script>
@endpush
