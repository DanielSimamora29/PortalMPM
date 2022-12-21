@extends('layouts.contentSuperAdmin')

@section('style', asset('../assets/css/profile.css'))

@section('content')

@section('page_name', 'Profile')

<div class="row">
    <div class="col-xl-4">
        <!-- Profile picture card-->
        <div class="card mb-4 mb-xl-0">
            <div class="card-header"><h2><b>Foto Profile</b></h2></div>
            <div class="card-body text-center">
                <!-- Profile picture image-->
                <img class="img-account-profile rounded-circle mb-2" src="../assets/profile/default.png" alt="">
                <!-- Profile picture help block-->
                <div class="small font-italic text-muted mb-4">Super Admin</div>
                <!-- Profile picture upload button-->
                <button class="btn btn-primary" type="button">Upload new image</button>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <!-- Account details card-->
        <div class="card mb-4">
            <div class="card-header"><h2><b>Detail Akun</b></h2></div>
            <div class="card-body">
                <form>
                    <!-- Form Group (username)-->
                    <div class="mb-3">
                        <label for="username"><b>Username</b></label>
                        <input class="form-control" id="inputUsername" type="text" placeholder="" value="" required disabled>
                    </div>
                    <div class="mb-3">
                        <label for="name"><b>Nama</b></label>
                        <input class="form-control" id="inputUsername" type="text" placeholder="" value="" required disabled>
                    </div>
                    <!-- Save changes button-->
                    <div class="mb-3">
                    <button type="button" class="btn btn-primary" onclick="editjemaat()">Ubah</button>
                    &nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-success" id="tblSave" disabled>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection