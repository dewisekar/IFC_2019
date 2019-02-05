@extends('admin.layouts.app2')

@section('title')
    IFC 2019 - Daftar Peserta
@endsection

@section('css')
    <link rel="stylesheet" href="../../codebase/assets/js/plugins/datatables/dataTables.bootstrap4.min.css">
@endsection
@section('content')
    <h2 class="content-heading">Detail Peserta | {{$tim->name}} - {{$tim->jenis}}</h2>
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
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="block-content">
                    <nav class="breadcrumb push">
                        <a class="breadcrumb-item" href="../dashboard">Dashboard</a>
                        <a class="breadcrumb-item" href="../peserta">Daftar Peserta</a>
                        <span class="breadcrumb-item active">{{$tim->name}} - {{$tim->jenis}}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-7">
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Pemain</h3>
                        </div>
                    </li>
                </ul>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center"  style="width: 5%;">No.</th>
                                <th>Nama Pemain</th>
                                <th class="d-none d-sm-table-cell">NRP</th>
                                <th class="d-sm-table-cell" style="width: 15%;">No. Punggung</th>
                                <th class="d-none d-sm-table-cell" style="width: 10%;">Posisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemain as $item)
                            <tr>
                                <td class="text-center" style="width: 5%;">{{$no++}}.</td>
                                <td class="font-w600">{{$item->nama}}</td>
                                <td class="d-none d-sm-table-cell">{{$item->nrp}} </td>
                                <td class="d-sm-table-cell" style="width: 15%;">
                                    {{$item->nopunggung}}
                                </td>
                                <td class="d-none d-sm-table-cell" style="width: 10%;">
                                     {{$item->posisi}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Official</h3>
                        </div>
                    </li>
                </ul>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full" id="tabel2">
                        <thead>
                            <tr>
                                <th class="text-center"  style="width: 5%;">No.</th>
                                <th>Nama Official</th>
                                <th class="d-none d-sm-table-cell">No. Identitas</th>
                                <th class="d-sm-table-cell" style="width: 10%;">Posisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($official as $item)
                            <tr>
                                <td class="text-center" style="width: 5%;">{{$no2++}}.</td>
                                <td class="font-w600">{{$item->nama}}</td>
                                <td class="d-none d-sm-table-cell">{{$item->noidentitas}} </td>
                                <td class="d-sm-table-cell" style="width: 10%;">
                                     {{$item->posisi}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="block">
                <div class="block-content">
                    <div class="col-md-12 text-center">
                        <p >Berkas Peserta: 
                        @foreach ($fileberkas as $item) 
                            <a href="{{url('../admin/downloadberkas/'.$item->id_berkas)}}">{{$item->title}}</a>
                        @endforeach
                        </p>
                        <button type="button" class="btn btn-outline-info mr-5 mb-20" onclick="window.location.href='../downloaddetailpemain/{{$tim->id}}'">
                            <i class="fa fa-download mr-5"></i>Download Data Pemain & Official
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
        <!-- Page JS Plugins -->
        <script src="../../codebase/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../codebase/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="../../codebase/assets/js/pages/be_tables_datatables.js"></script>
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>

@endsection