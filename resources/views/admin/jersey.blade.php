@extends('admin.layouts.app')

@section('title')
    IFC 2019 - Daftar Peserta
@endsection

@section('css')
    <link rel="stylesheet" href="../codebase/assets/js/plugins/datatables/dataTables.bootstrap4.min.css">
@endsection
@section('content')
    <h2 class="content-heading">Daftar Peserta</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>                            
    @endif
    @include('peserta.layouts.alert')
    <div class="block">
        <div class="block-content">
            <nav class="breadcrumb push">
                <a class="breadcrumb-item" href="dashboard">Dashboard</a>
                <span class="breadcrumb-item active">Daftar Jersey Tim</span>
            </nav>
        </div>
    </div>
    <div class="block">
        <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist">
            <li class="nav-item">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Daftar Peserta IFC</h3>
                </div>
            </li>
            <li class="nav-item ml-auto">
                <div class="btn-group btn-group-sm mr-10">
                    <button type="button" class="btn btn-primary" onclick="window.location.href='../admin/downloadjersey'">
                        <i class="fa fa-download"> </i> Download Data Jersey
                    </button>
                </div>
            </li>
        </ul>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-vcenter" id="tabel1">
                <thead>
                    <tr>
                        <th class="text-center"  style="width: 5%;">No.</th>
                        <th>Nama Tim</th>
                        <th class="d-none d-sm-table-cell">Pa/Pi</th>
                        <th class="d-none d-sm-table-cell">Warna Jersey</th>
                        <th class="d-none d-sm-table-cell">Warna Celana</th>
                        <th class="d-none d-sm-table-cell">Warna Kaos Kaki</th>
                </thead>
                <tbody>
                    @foreach ($jersey as $item)
                    <tr>
                        <td class="text-center" style="width: 5%;">{{$no++}}.</td>
                        <td>{{$item->name}}</td>
                        <td class="d-none d-sm-table-cell">{{$item->jenis}}</td>
                        @foreach ($item->jersey as $item2)
                            <td class="d-none d-sm-table-cell">
                                {{$item2->jersey}}
                            </td>
                            <td class="d-none d-sm-table-cell">{{$item2->celana}}</td>
                            <td class="d-none d-sm-table-cell">{{$item2->kaoskaki}}</td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->
@endsection

@section('js')
        <!-- Page JS Plugins -->
        <script src="../codebase/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../codebase/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="../codebase/assets/js/pages/be_tables_datatables.js"></script>
        <script>
            $(document).ready( function () {
                $('#tabel1').DataTable();
            } );
        </script>
@endsection