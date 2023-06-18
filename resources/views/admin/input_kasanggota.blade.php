@extends('admin.template.template')
@section('content')
    <div class="home-content">
        <h1>Input Kas</h1>
        <div class="card">
            <div class="card-body large">
                <form action="/kas_anggota/entry/tambah" method="post">
                    <div class="input-form">
                        <label for="input-nama">Nama Anggota</label>
                        <select name="nim" class="input">
                            @foreach($data_anggota as $dt)
                                <option value="{{ $dt->NIM }}">{{ $dt->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-form">
                        <label for="input-nama">Nama Kas</label>
                        <select name="kode_jeniskas" class="input">
                            @foreach($data_jeniskas as $dj)
                                <option value="{{ $dj->kode_jeniskas }}">{{ $dj->nama_kas }}</option>
                            @endforeach
                        </select>
                    </div>
                    @csrf
                    <div class="input-form">
                        <label for="input-jumlah">Jumlah Kas</label>
                        <input type="number" onkeyup="upper()" name="nominal" id="input-jumlah" placeholder="Masukan Jumlah Kas" class="input jumlah_kas">
                    </div>
                    <div class="input-form">
                        <label for="input-jumlah">Jumlah Kas</label>
                        <input type="date" onkeyup="upper()" name="tanggal_bayar" id="input-jumlah" placeholder="Masukan Jumlah Kas" class="input jumlah_kas">
                    </div>
                    <div class="input-form">
                        <label for="input-nama">Nama Kas</label>
                        <select name="metode" class="input">
                            <option value="tunai">Tunai</option>
                        </select>
                    </div>
                    <div class="input-form">
                        <button onclick="validation()" name="status" value="tambah" class="btn success large"><i class="bx bx-check"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
