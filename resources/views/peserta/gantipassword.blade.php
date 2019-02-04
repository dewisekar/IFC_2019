@extends('peserta.layouts.app')
@section('title')
    <title>IFC 2019 - Ganti Password</title>
@endsection
@section('content')
    <div class="breadcomb-area" style="margin-top: 2%;">
		<div class="container">
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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-form"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Ganti Password</h2>
										<p>Ganti Password untuk mengamankan akunmu!</p>
									</div>
								</div>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
						<form action="/gantipassword" method="POST">
							@csrf
                        	<div class="form-example-int">
                        	    <div class="form-group">
                        	        <label>Password Lama:</label>
                        	        <div class="nk-int-st">
                        	            <input type="password" class="form-control input-sm" placeholder="Password Lama" name="oldpass">
                        	        </div>
                        	    </div>
                        	</div>
                        	<div class="form-example-int">
								<div class="form-group">
									<label>Password Baru:</label>
									<div class="nk-int-st">
										<input type="password" class="form-control input-sm" placeholder="Password Baru" name="newpass">
									</div>
								</div>
							</div>
							<div class="form-example-int">
								<div class="form-group">
									<label>Retype Password Baru:</label>
									<div class="nk-int-st">
										<input type="password" class="form-control input-sm" placeholder="Password Baru" name="newpass_confirmation">
									</div>
								</div>
							</div>
                        	<div class="form-example-int mg-t-15">
                        	    <button class="btn btn-success notika-btn-success" type="submit">Ubah</button>
							</div>
						</form>
                    </div>
                </div>
            </div>
		</div>
	</div>
@endsection
