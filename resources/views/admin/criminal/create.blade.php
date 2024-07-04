@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create Suspect
@endsection
@push('styles')
@endpush
@section('head')
    Create Suspect
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <div class="form-head">
                        <h4>Main Information</h4>
                    </div>
                    <form action="{{ route('criminals.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10">
                                <div class="row justify-content-between">
                                    <div class="col-md-6">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                <label for="floatingInputValue">Name*</label>
                                                <input type="text" class="form-control" id="floatingInputValue"
                                                    name="name" value="{{ old('name') }}" placeholder="Name*">
                                                @if ($errors->has('name'))
                                                    <div class="error" style="color:red;">{{ $errors->first('name') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                <label for="floatingInputValue">Profile Picture*</label>
                                                <input type="file" class="form-control" id="floatingInputValue" onchange="readURL(this);"
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
                                    <div class="col-md-12">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                <label for="floatingInputValue">Address*</label>
                                                <input type="text" class="form-control" id="floatingInputValue"
                                                    name="address" value="{{ old('address') }}" placeholder="Address*">
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
                                    <img src="{{ asset('assets/images/dummy.png') }}" alt="" id="blah"
                                        style="width: 100%; height: 100%; border-radius: 10px; object-fit: cover; box-shadow: 5px 3px 10px rgb(0 0 0 / 25%);">

                                </div>
                            </div>
                        </div>

                </div>
                <div class="sales-report-card-wrap mt-5">
                    <div class="form-head">
                        <h4>Case Referance</h4>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group-div">
                                <div class="form-group">
                                    <label for="floatingInputValue">Police Station*</label>
                                    <input type="text" class="form-control" id="floatingInputValue" name="policestation"
                                        value="{{ old('policestation') }}" placeholder="Police Station*">
                                    @if ($errors->has('policestation'))
                                        <div class="error" style="color:red;">{{ $errors->first('policestation') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group-div">
                                <div class="form-group">
                                    <label for="floatingInputValue">Case No*</label>
                                    <input type="text" class="form-control" id="floatingInputValue" name="case_no"
                                        value="{{ old('case_no') }}" placeholder="Case No*">
                                    @if ($errors->has('case_no'))
                                        <div class="error" style="color:red;">{{ $errors->first('case_no') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- country --}}
                        <div class="col-xl-6 col-md-6">
                            <div class="form-group-div">
                                <div class="form-group">
                                    <label for="floatingInputValue">Under Section*</label>
                                    <input type="text" class="form-control" id="floatingInputValue" name="under_section"
                                        value="{{ old('under_section') }}" placeholder="Under Section*">
                                    @if ($errors->has('under_section'))
                                        <div class="error" style="color:red;">{{ $errors->first('under_section') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-6 col-md-6">
                            <div class="form-group-div">
                                <div class="form-group">
                                    <label for="floatingInputValue">Arrest Date*</label>
                                    <input type="date" class="form-control datepicker" id="floatingInputValue" max="{{ date('Y-m-d') }}"  onfocus="'showPicker' in this && this.showPicker()"
                                        name="arrest_date" value="{{ old('arrest_date') }}"
                                        placeholder="Arrest Date*">
                                    @if ($errors->has('arrest_date'))
                                        <div class="error" style="color:red;">{{ $errors->first('arrest_date') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="btn-1">
                                <button type="submit">Create</button>
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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
