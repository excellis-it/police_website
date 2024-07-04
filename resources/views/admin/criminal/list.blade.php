@extends('admin.layouts.master')
@section('title')
    All Suspect Details - {{ env('APP_NAME') }}
@endsection
@push('styles')
    <style>
        .dataTables_filter {
            margin-bottom: 10px !important;
        }
    </style>
@endpush
@section('head')
    All Suspect Entries
@endsection
@section('content')
    <section id="loading">
        <div id="loading-content"></div>
    </section>
    <div class="main-content">
        <div class="inner_page">

            <div class="card table_sec stuff-list-table">
                <div class="row justify-content-end">
                    <div class="col-md-12">
                        <div class="row g-1">
                            <div class="col-md-8" style="float: left">
                                <select class="form-select" aria-label="Default select example" id="show-item">
                                    <option value="10">10</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="500">500</option>
                                    <option value="1000">1000</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <div class="search-field prod-search">
                                    <input type="text" name="search" id="search" placeholder="search..." required
                                        class="form-control">
                                    <a href="javascript:void(0)" class="prod-search-icon"><i
                                            class="ph ph-magnifying-glass"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>
                                    Sl No.
                                </th>
                                <th class="sorting" data-tippy-content="Sort by Name" data-sorting_type="desc"
                                data-column_name="name" style="cursor: pointer"> Name<span id="name_icon"><i class="ph ph-caret-down"></i></span></th>
                               {{-- policestation --}}
                                <th class="sorting" data-tippy-content="Sort by Police Station" data-sorting_type="desc"
                                data-column_name="policestation" style="cursor: pointer"> Police Station<span id="policestation_icon"><i class="ph ph-caret-down"></i></span></th>
                                {{-- case_no --}}
                                <th class="sorting" data-tippy-content="Sort by Case No" data-sorting_type="desc"
                                data-column_name="case_no" style="cursor: pointer"> Case No<span id="case_no_icon"><i class="ph ph-caret-down"></i></span></th>
                                {{-- under_section_icon --}}
                                <th class="sorting" data-tippy-content="Sort by Under Section" data-sorting_type="desc"
                                data-column_name="under_section" style="cursor: pointer"> Under Section<span id="under_section_icon"><i class="ph ph-caret-down"></i></span></th>
                                {{-- address --}}
                                <th class="sorting" data-tippy-content="Sort by Address" data-sorting_type="desc"
                                data-column_name="address" style="cursor: pointer"> Address<span id="address_icon"><i class="ph ph-caret-down"></i></span></th>
                                <th>Entry Date</th>
                                <th>
                                    Arrest Date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @include('admin.criminal.table')

                        </tbody>
                    </table>
                    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="desc" />
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
    <script>
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var user_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('criminals.change-status') }}',
                data: {
                    'status': status,
                    'user_id': user_id
                },
                success: function(resp) {
                    console.log(resp.success)
                }
            });
        });
    </script>
     <script>
        $(document).ready(function() {

            function clear_icon() {
                $('#name_icon').html('');
                $('#policestation_icon').html('');
                $('#case_no_icon').html('');
                $('#under_section_icon').html('');
                $('#address_icon').html('');
            }

            function fetch_data(page, sort_type, sort_by, query, show_item) {
                $.ajax({
                    url: "{{ route('criminals.fetch-data') }}",
                    data: {
                        page: page,
                        sortby: sort_by,
                        sorttype: sort_type,
                        query: query,
                        show: show_item
                    },
                    success: function(data) {
                        $('tbody').html(data.data);
                    }
                });
            }

            $(document).on('change', '#show-item', function() {
                $('#hidden_page').val(1);
                var show_item = $(this).val();
                var query = $('#search').val();
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();
                fetch_data(1, sort_type, column_name, query, show_item);
            });

            $(document).on('keyup', '#search', function() {
                var query = $('#search').val();
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();
                var page = $('#hidden_page').val();
                var show_item = $('#show-item').val();
                fetch_data(page, sort_type, column_name, query , show_item);
            });

            $(document).on('click', '.sorting', function() {
                var column_name = $(this).data('column_name');
                var order_type = $(this).data('sorting_type');
                var reverse_order = '';
                if (order_type == 'asc') {
                    $(this).data('sorting_type', 'desc');
                    reverse_order = 'desc';
                    clear_icon();
                    $('#' + column_name + '_icon').html(
                        '<i class="ph ph-caret-down"></i>');
                }
                if (order_type == 'desc') {
                    $(this).data('sorting_type', 'asc');
                    reverse_order = 'asc';
                    clear_icon();
                    $('#' + column_name + '_icon').html(
                        '<i class="ph ph-caret-up"></i>');
                }
                $('#hidden_column_name').val(column_name);
                $('#hidden_sort_type').val(reverse_order);
                var page = $('#hidden_page').val();
                var query = $('#search').val();
                var show_item = $('#show-item').val();
                fetch_data(page, reverse_order, column_name, query, show_item);
            });

            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                $('#hidden_page').val(page);
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();
                var query = $('#search').val();
                $('li').removeClass('active');
                $(this).parent().addClass('active');
                var show_item = $('#show-item').val();
                // add page number to url
                window.history.pushState("", "", `?page=${page}`);
                fetch_data(page, sort_type, column_name, query, show_item);
            });

        });
    </script>
@endpush
