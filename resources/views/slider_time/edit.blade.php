@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Slider Time Update
@endsection
@push('styles')
@endpush
@section('head')
    Slider Time Update
@endsection
@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <form action="{{ route('slider-time-maintains.update', $slider_time->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Name</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="name" value="{{ $slider_time->name }}" placeholder="Name">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Duration (In Second)</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="duration" value="{{ $slider_time->duration }}" placeholder="Duration">
                                        @if ($errors->has('duration'))
                                            <div class="error" style="color:red;">{{ $errors->first('duration') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="sales-report-card-wrap mt-5">
                    <div class="row">
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
@endpush
