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
                <span class="breadcrumb-item active">Daftar Peserta</span>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- Crystal on Background Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-crystal" style="background-color:skyblue">
                    <div class="ribbon-box">
                        Jumlah Pendaftar
                    </div>
                    <div class="text-center py-50">
                        <h4 class="font-w700 text-white text-uppercase mb-0">PUTRA : {{$putra}}</h4>
                        <h4 class="font-w700 text-white text-uppercase mb-1">PUTRI : {{$putri}}</h4>
                    </div>
                </div>
            </div>
            <!-- END Crystal on Background Color -->
        </div>
        <div class="col-md-6">
            <!-- Crystal on Background Color -->
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-crystal" style="background-color:skyblue">
                    <div class="ribbon-box">
                        Jumlah Tim Terfinalisasi
                    </div>
                    <div class="text-center py-50">
                        <h4 class="font-w700 text-white text-uppercase mb-0">PUTRA : {{$putra2}}</h4>
                        <h4 class="font-w700 text-white text-uppercase mb-1">PUTRI : {{$putri2}}</h4>
                    </div>
                </div>
            </div>
            <!-- END Crystal on Background Color -->
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
                    <button type="button" class="btn btn-primary" onclick="window.location.href='../admin/downloadpemain'">
                        <i class="fa fa-download"> </i> Download Data Pemain & Official
                    </button>
                </div>
                <div class="btn-group btn-group-sm mr-15">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-fadein">
                        <i class="fa fa-plus"> </i> Tambah Tim
                    </button>
                </div>
            </li>
        </ul>
        <!--Insert New Account Modal-->
        <div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="../admin/tambahtim" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header" style="background-color: #02495d">
                                <h3 class="block-title">Tambah Tim</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="form-group row">
                                    <label class="col-12" for="example-text-input">Nama Tim (Departemen)</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="example-text-input" name="name" placeholder="Eg: Informatika">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="example-select">Putra/putri</label>
                                    <div class="col-md-12">
                                        <select class="form-control" id="example-select" name="jenis">
                                            <option>Putra</option>
                                            <option>Putri</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="example-text-input">Username</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="example-text-input" name="email" placeholder="Format: departemen@putra/putri.ifc">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="example-text-input">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" id="example-text-input" name="password" placeholder="Minimal 6 karakter">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="example-text-input">Confirm Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" id="example-text-input" name="password_confirmation" placeholder="Minimal 6 karakter">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-alt-success" >
                                <i class="fa fa-check"></i> Tambah
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center"  style="width: 5%;">No.</th>
                        <th>Nama Tim</th>
                        <th class="d-none d-sm-table-cell">Username</th>
                        <th class="d-sm-table-cell" style="width: 15%;">Pa/Pi</th>
                        <th class="d-none d-sm-table-cell" style="width: 10%;">Status Finalisasi</th>
                        <th class="d-none d-sm-table-cell">Berkas</th>
                        <th class="text-center" style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                    <tr>
                        <td class="text-center" style="width: 5%;">{{$no++}}.</td>
                        <td class="font-w600">{{$item->name}}</td>
                        <td class="d-none d-sm-table-cell">{{$item->email}} </td>
                        <td class="d-sm-table-cell" style="width: 15%;">
                            {{$item->jenis}}
                        </td>
                        <td class="d-none d-sm-table-cell" style="width: 10%;">
                             @if($item->finalisasi == 0)
                                <span class="badge badge-danger">Belum</span>
                            @else
                                <span class="badge badge-success">Sudah</span>
                            @endif
                        </td>
                        <td class="d-none d-sm-table-cell">
                            @foreach ($item->fileberkas as $item2)
                                <a href="{{url('../admin/downloadberkas/'.$item2->id_berkas)}}">{{$item2->title}}</a>
                            @endforeach  
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete{{$item->id}}">
                                    <i class="fa fa-times"></i>
                                </button>
                               <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" onclick="window.location.href='../admin/detailpeserta/{{$item->id}}'" title="Detail Peserta">
                                    <i class="fa fa-search-plus"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!--Delete Account Modal-->
                    <div class="modal fade" id="modal-delete{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header" style="background-color: #5d0202">
                                        <h3 class="block-title">Apakah anda yakin untuk menghapus akun tim in?</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cancel</button>
                                    <form action="{{url('../admin/deletetim/'.$item->id)}}" method="POST">
                                        @csrf
                                    <button type="submit" class="btn btn-alt-danger">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
    </div>
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
@endsection