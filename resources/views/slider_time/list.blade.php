@extends('admin.layouts.master')
@section('title')
Slider Time - {{ env('APP_NAME') }}
@endsection
@push('styles')
    <style>
        .dataTables_filter {
            margin-bottom: 10px !important;
        }
    </style>
@endpush
@section('head')
    Slider Time
@endsection
@section('content')
    <section id="loading">
        <div id="loading-content"></div>
    </section>
    <div class="main-content">
        <div class="inner_page">

            <div class="card table_sec stuff-list-table">
                {{-- <div class="row justify-content-end">
                    <div class="col-md-6">
                        <div class="row g-1 justify-content-end">
                            <div class="col-md-8 pr-0">
                                <div class="search-field prod-search">
                                    <input type="text" name="search" id="search" placeholder="search..." required
                                        class="form-control">
                                    <a href="javascript:void(0)" class="prod-search-icon"><i
                                            class="ph ph-magnifying-glass"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                               <th>Sl No.</th>
                                <th>Name</th>
                                <th>Slide Time</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($slider_times) > 0)
                                @foreach ($slider_times as $key => $slider_time)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $slider_time->name }}</td>
                                        <td>{{ $slider_time->duration }} sec</td>
                                        <td>
                                            <div class="edit-1 d-flex align-items-center justify-content-center">
                                                <a title="Edit Customer"
                                                    href="{{ route('slider-time-maintains.edit', $slider_time->id) }}">
                                                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span></a>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="text-center">No Data Found</td>
                                </tr>
                            @endif


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).on('click', '#delete', function(e) {
            swal({
                    title: "Are you sure?",
                    text: "To delete this criminal.",
                    type: "warning",
                    confirmButtonText: "Yes",
                    showCancelButton: true
                })
                .then((result) => {
                    if (result.value) {
                        window.location = $(this).data('route');
                    } else if (result.dismiss === 'cancel') {
                        swal(
                            'Cancelled',
                            'Your stay here :)',
                            'error'
                        )
                    }
                })
        });
    </script>
@endpush
