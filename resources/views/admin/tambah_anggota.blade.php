@extends('admin.template.template')
@section('content')
<div class="home-content">
    <h1>Input Data Anggota</h1>
    <div class="card">
        <form action="/tambah_anggota" method="post">
            @csrf
            <div class="card-body large">
                <div class="input-form">
                    <label for="input-nim">NIM</label>
                    <input type="text" name="NIM" id="input-nim" placeholder="Masukan NIM"  class="input nim">
                </div>
                <div class="input-form">
                    <label for="input-nama">Nama</label>
                    <input type="text" name="nama" id="input-nama" placeholder="Masukan Nama" class="input nim">
                </div>
                <div class="input-form">
                    <label for="input-email">Username/Email</label>
                    <input type="email" name="email" id="input-email" placeholder="Masukan Email" class="input nim">
                </div>
                <div class="input-form">
                    <label for="input-jk">Jenis Kelamin</label>
                    <br>
                    <input type="radio" name="jenis_kelamin" value="pria" id="input-jkl"><label for="input-jkl"> Laki-Laki</label>
                    <input type="radio" name="jenis_kelamin" value="wanita" id="input-jkp"><label for="input-jkp"> Perempuan</label>
                </div>
                <div class="input-form">
                    <button type="submit" name="status" value="tambah" class="btn success large"><i class="bx bx-check"></i> Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
