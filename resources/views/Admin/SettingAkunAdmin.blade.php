@extends('layouts.contentAdmin')

{{-- @section('style', asset('../assets/css/profile.css')) --}}

@section('content')

@section('page_name', 'Setting Akun')

<div class="col-12 p-3 bg-white shadow rounded">
    <div class="card-header">
        <div class="card-title">Ubah Password</div>
    </div>
    <form class="mt-3" action="#" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-12 col-md-12 mt-3">
                <label for="passwordlama">Password Lama</label>
                <input type="Password" class="form-control" name="password" placeholder="Masukkan Password Lama" value="">
                <span class="invalid-feedback font-weight-bold"></span>
            </div>
            <div class="form-group col-12 col-md-6 mt-3">
                <label for="username">Password Baru</label>
                <input type="Password" class="form-control" name="passwordbaru" placeholder="Masukkan Password Baru" value="">
                <span class="invalid-feedback font-weight-bold"></span>
            </div>
            <div class="form-group col-12 col-md-6 mt-3">
                <label for="username">Konfirmasi Password Baru</label>
                <input type="Password" class="form-control" name="konfirmasipassword" placeholder="Konfirmasi Password baru" value="">
                <span class="invalid-feedback font-weight-bold"></span>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </div>
    </div>
    </form>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


@endsection