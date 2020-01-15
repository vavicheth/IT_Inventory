@extends('layouts.master')

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
    <div class="col-sm-6">
        <h4 class="page-title">Data Table</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
            <li class="breadcrumb-item active">Data Table</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Buttons example</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Name Khmer</th>
                            <th>ABR</th>
                            <th>ABR KH</th>
                            <th>Bed</th>
                            <th>Description</th>
                            <th>Active</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ URL::asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ URL::asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('assets/pages/datatables.init.js') }}"></script>

    <script>

        {{--$(document).ready(function () {--}}
        {{--    $('#datatable-buttons').DataTable({--}}
        {{--        processing:true,--}}
        {{--        serverSide: true,--}}
        {{--        ajax:{--}}
        {{--            url:"{{route('departments.index')}}",--}}
        {{--        },--}}
        {{--        columns:[--}}
        {{--            {data:'name',name:'name'},--}}
        {{--            {data:'name_kh',name:'name_kh'},--}}
        {{--            {data:'abr',name:'abr'},--}}
        {{--            {data:'abr_kh',name:'abr_kh'},--}}
        {{--            {data:'bed',name:'bed'},--}}
        {{--            {data:'description',name:'description'},--}}
        {{--            {data:'active',name:'active'}--}}
        {{--        ]--}}
        {{--    });--}}

        {{--});--}}

        $(document).ready(function(){

            $('#datatable-buttons').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{route('departments.index')}}",
                },
                columns: [
                    {data:'name',name:'name'},
                    {data:'name_kh',name:'name_kh'},
                    {data:'abr',name:'abr'},
                    {data:'abr_kh',name:'abr_kh'},
                    {data:'bed',name:'bed'},
                    {data:'description',name:'description'},
                    {data:'active',name:'active'}
                ]
            });
        });





    </script>

@endsection