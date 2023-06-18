@extends('admin.template.template')
@section('content')
<div class="home-content">
    <h1>Input Data Jenis Kas</h1>
    <div class="card">
        <div class="card-body large">
            <form action="/tambah_jeniskas" method="post">
                <div class="input-form">
                    <label for="input-nama">Nama Kas</label>
                    <input type="text" onkeyup="upper()" name="nama_kas" id="input-nama" placeholder="Masukan Nama kas" class="input nama_kas">
                </div>
                @csrf
                <div class="input-form">
                    <label for="input-jumlah">Jumlah Kas</label>
                    <input type="number" onkeyup="upper()" name="jumlah_kas" id="input-jumlah" placeholder="Masukan Jumlah Kas" class="input jumlah_kas">
                </div>
                <div class="input-form">
                    <label for="input-jumlah">Keterangan Kas</label>
                    <textarea class="input keterangan_kas" placeholder="Masukan keterangan disini" name="keterangan">
						</textarea>
                </div>
                <div class="input-form">
                    <button onclick="validation()" name="status" value="tambah" class="btn success large"><i class="bx bx-check"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
