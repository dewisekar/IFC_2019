@extends('peserta.layouts.app')
@section('css')
    <link rel="stylesheet" href="../notika/css/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="../notika/css/dialog/sweetalert2.min.css">
    <link rel="stylesheet" href="../notika/css/dialog/dialog.css">
    <link rel="stylesheet" href="../notika/css/dropzone/dropzone.css">

@endsection

@section('content')
	<div class="breadcomb-area" style="margin-top: 2%;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-form"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Selamat datang, Tim {{ Auth::user()->name  }}!</h2>
										<p>Jangan lupa untuk melengkapi berkas-berkas persyaratan di bawah ini ya!</p>
									</div>
								</div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Form Offline</h2>
                            <p>Silahkan download formulir di bawah ini. Isi dengan cara diketik dan ditandatangani sesuai dengan ketentuan pada masing-masing form. Jangan lupa untuk menyerahkan form ke panita IFC 2019 sebelum tanggal ..</p>
                        </div>
                        <table class="table table-sc-ex">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Form</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Form C1</td>
                                    <td><button data-toggle="tooltip" data-placement="left" title="Download Form" class="btn notika-btn-teal"><i class="notika-icon notika-sent" style="color:white"></i></button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Form C2</td>
                                    <td><button data-toggle="tooltip" data-placement="left" title="Download Form" class="btn notika-btn-teal"><i class="notika-icon notika-sent" style="color:white"></i></button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Form C4</td>
                                    <td><button data-toggle="tooltip" data-placement="left" title="Download Form" class="btn notika-btn-teal"><i class="notika-icon notika-sent" style="color:white"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd">
                            @if ($jumpes < 20)
                                <h2>Daftar Pemain <button class="btn notika-btn-teal"  data-toggle="modal" data-target="#myModalone" style="color: white;"><i class="notika-icon notika-plus-symbol"></i>  Tambah Pemain</button></h2>
                            @else
                                <h2>Daftar Pemain</h2>
                            @endif
                        </div>
                        <div class="modal fade" id="myModalone" role="dialog">
                            <div class="modal-dialog modals-default">
                                <div class="modal-content">
                                    <form action="{{url('/pemain')}}" method="POST")>
                                        @csrf
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h2>Tambah Pemain</h2>                                            
                                            <div class="form-example-int">
                                                <div class="form-group">
                                                    <label>Nama Pemain</label>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control input-sm" placeholder="Nama Pemain" name="p_nama">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int mg-t-15">
                                                <div class="form-group">
                                                    <label>NRP</label>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control input-sm" placeholder="NRP" name="p_nrp">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int mg-t-15">
                                                <div class="form-group">
                                                    <label>No. Punggung</label>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control input-sm" min="1" max="99" placeholder="No. Punggung" name="p_nopung">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int mg-t-15">
                                                <div class="form-group">
                                                    <label>Posisi</label>
                                                    <select class="form-control" name="p_posisi">
                                                        <option>Pemain</option>
                                                        <option>Kiper</option>
                                                    </select>
                                                </div>
                                            </div>                                                                          
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-default">Save changes</button>
                                            <button type="button" class="btn btn-danger notika-btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>     
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>NRP</th>
                                        <th>No. Punggung</th>
                                        <th>Posisi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($peserta as $item)
                                    <tr>
                                        <td>{{$no++}}.</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->nrp}}</td>
                                        <td>{{$item->nopunggung}}</td>
                                        <td>{{$item->posisi}}</td>
                                        <td>
                                            <button class="btn btn-icon-notika btn-warning notika-btn-warning" data-toggle="modal" data-target="#pemainEdit{{$item->id_peserta}}"><i class="notika-icon notika-edit"></i></button>
                                            <button class="btn btn-icon-notika btn-danger notika-btn-danger" data-toggle="modal" data-target="#pemaindelete{{$item->id_peserta}}"><i class="notika-icon notika-trash"></i></button>
                                        </td>
                                        <!--modal edit pemain-->
                                        <div class="modal fade" id="pemainEdit{{$item->id_peserta}}" role="dialog">
                                            <div class="modal-dialog modals-default">
                                                <div class="modal-content">
                                                    <form action="{{url('/editpemain/'.$item->id_peserta)}}" method="POST")>
                                                        @csrf
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h2>Edit Pemain</h2>                                            
                                                            <div class="form-example-int">
                                                                <div class="form-group">
                                                                    <label>Nama Pemain</label>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control input-sm" placeholder="Nama Pemain" name="p_nama" value="{{$item->nama}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-example-int mg-t-15">
                                                                <div class="form-group">
                                                                    <label>NRP</label>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control input-sm" placeholder="NRP" name="p_nrp"  value="{{$item->nrp}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-example-int mg-t-15">
                                                                <div class="form-group">
                                                                    <label>No. Punggung</label>
                                                                    <div class="nk-int-st">
                                                                        <input type="number" class="form-control input-sm" min="1" max="99" placeholder="No. Punggung" name="p_nopung" value="{{$item->nopunggung}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-example-int mg-t-15">
                                                                <div class="form-group">
                                                                    <label>Posisi</label>
                                                                    <select class="form-control" name="p_posisi">
                                                                        <option> {{$item->posisi}}</option>
                                                                        <option>Pemain</option>
                                                                        <option>Kiper</option>
                                                                    </select>
                                                                </div>
                                                            </div>                                                                          
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default">Save changes</button>
                                                            <button type="button" class="btn btn-danger notika-btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form> 
                                                </div>
                                            </div>
                                        </div>
                                        <!--modal delete-->
                                        <div class="modal fade" id="pemaindelete{{$item->id_peserta}}" role="dialog">
                                            <div class="modal-dialog  modal-sm ">
                                                <form action="{{url('/deletepemain/'.$item->id_peserta)}}" method="POST")>
                                                     @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h2>Hapus Pemain</h2>
                                                            <p>Apakah anda yakin akan menghapus data pemain ini?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default">Yes</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>NRP</th>
                                        <th>No. Punggung</th>
                                        <th>Posisi</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>                                
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd text-left">
                            @if( $jumof <4)
                                <h2>Daftar Official <button class="btn notika-btn-teal"  data-toggle="modal" data-target="#modalPelatih" style="color: white;"><i class="notika-icon notika-plus-symbol"></i>  Tambah Official</button></h2>
                            @else
                                <h2>Daftar Official</h2>
                            @endif
                        </div>
                        <div class="modal fade" id="modalPelatih" role="dialog">
                            <div class="modal-dialog modals-default">
                                <div class="modal-content">
                                    <form action="{{url('/official')}}" method="POST")>
                                        @csrf
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h2>Tambah Official</h2>                                            
                                            <div class="form-example-int">
                                                <div class="form-group">
                                                    <label>Nama Official</label>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control input-sm" placeholder="Nama Official" name="o_nama">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int mg-t-15">
                                                <div class="form-group">
                                                    <label>No. Identitas</label>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control input-sm" placeholder="No. Identitas" name="o_noidentitas">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-example-int mg-t-15">
                                                <div class="form-group">
                                                    <label>Posisi</label>
                                                    <select class="form-control" name="o_posisi">
                                                        <option>Pelatih</option>
                                                        <option>Asisten Pelatih</option>
                                                        <option>Manager</option>
                                                        <option>Fotografer</option>
                                                    </select>
                                                </div>
                                            </div>                                                                          
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-default">Save changes</button>
                                            <button type="button" class="btn btn-danger notika-btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>     
                        <div class="table-responsive">
                            <table id="data-table-basic2" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>No. Identitas</th>
                                        <th>Posisi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($official as $item)
                                    <tr>
                                        <td>{{$no2++}}.</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->noidentitas}}</td>
                                        <td>{{$item->posisi}}</td>
                                        <td>
                                            <button class="btn btn-icon-notika btn-warning notika-btn-warning" data-toggle="modal" data-target="#officialEdit{{$item->id_official}}"><i class="notika-icon notika-edit"></i></button>
                                            <button class="btn btn-icon-notika btn-danger notika-btn-danger" data-toggle="modal" data-target="#offcialdelete{{$item->id_offcial}}"><i class="notika-icon notika-trash"></i></button>
                                        </td>
                                        <!--modal edit-->
                                        <div class="modal fade" id="officialEdit{{$item->id_official}}" role="dialog">
                                            <div class="modal-dialog modals-default">
                                                <div class="modal-content">
                                                    <form action="{{url('/editofficial/'.$item->id_official)}}" method="POST")>
                                                        @csrf
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h2>Edit Official</h2>                                            
                                                            <div class="form-example-int">
                                                                <div class="form-group">
                                                                    <label>Nama Official</label>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control input-sm" placeholder="Nama Official" name="o_nama" value="{{$item->nama}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-example-int mg-t-15">
                                                                <div class="form-group">
                                                                    <label>No. Identitas</label>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control input-sm" placeholder="No. Identitas" name="o_noidentitas"  value="{{$item->noidentitas}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-example-int mg-t-15">
                                                                <div class="form-group">
                                                                    <label>Posisi</label>
                                                                    <select class="form-control" name="o_posisi">
                                                                        <option> {{$item->posisi}}</option>
                                                                        <option>Pelatih</option>
                                                                        <option>Asisten Pelatih</option>
                                                                        <option>Manager</option>
                                                                        <option>Fotografer</option>
                                                                    </select>
                                                                </div>
                                                            </div>                                                                          
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default">Save changes</button>
                                                            <button type="button" class="btn btn-danger notika-btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form> 
                                                </div>
                                            </div>
                                        </div>
                                        <!--modal delete-->
                                        <div class="modal fade" id="offcialdelete{{$item->id_offcial}}" role="dialog">
                                            <div class="modal-dialog  modal-sm ">
                                                <form action="{{url('/deleteofficial/'.$item->id_official)}}" method="POST")>
                                                     @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h2>Hapus Official</h2>
                                                            <p>Apakah anda yakin akan menghapus data official ini?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-default">Yes</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>No. Identitas</th>
                                        <th>Posisi</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>                                
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Unggah Berkas</h2>
                            <p>Silahkan upload KTM dan KRSM seluruh pemain yang telah dijadikan ke dalam satu file .zip. Ukuran .zip maximal 30 MB.</p>
                        </div>
                        @if($jumfile >0)
                        <div class="row">
                            <div class="col-md-6">
                                <p> Berkasmu adalah: 
                                    @foreach ($fileberkas as $item)
                                        <a href="{{url('/deleteberkas/'.$item->id_berkas)}}">{{$item->title}}</a>
                                    @endforeach
                                </p>                                
                            </div>
                            <div class="col-md-6">
                                @foreach ($fileberkas as $item)
                                    <a href="{{url('/downloadback/'.$item->id_berkas)}}">Hapus Berkas</a>
                                @endforeach
                            </div>
                        </div>
                        @else
                        <div id="dropzone1" class="multi-uploader-cs">
                            <form action="/upload" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-5 col-md-3 col-sm-3 col-xs-12">
                                        <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
                                            <input type="file" name="file">
                                            <span class="help-block text-danger">{{ $errors->first('file') }}</span>
                                        </div>
                                        <div class="form-example-int">
                                             <button class="btn btn-success" type="submit">Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Data Lain</h2>
                            <p>Silahkan download formulir di bawah ini. Isi dengan cara diketik dan ditandatangani sesuai dengan ketentuan pada masing-masing form. Jangan lupa untuk menyerahkan form ke panita IFC 2019 sebelum tanggal ..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Examples area End-->
@endsection

@section('js')
    <script src="../notika/js/bootstrap-select/bootstrap-select.js"></script>
    <script src="../notika/js/dialog/sweetalert2.min.js"></script>
    <script src="../notika/js/dialog/dialog-active.js"></script>
    <script>
        $(document).ready(function() {
           $('#data-table-basic2').DataTable();

        });
    </script>
    <script src="../notika/js/dropzone/dropzone.js"></script>

@endsection