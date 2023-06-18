@extends('admin.template.template')
@section('content')
    @foreach($data_kas as $dk)
        <div class="home-content">
            <h1>Edit Kas </h1>
            <div class="card">
                <div class="card-body large">
                    <form action="/kas_anggota/edit/update/{{ $dk->kode_kas }}" method="post">
                        <div class="input-form">
                            <label for="input-nama">Nama Anggota</label>
                            <select name="nim" class="input">
                                @foreach($data_anggota as $dt)
                                    <option {{ ($dt->NIM == $dk->NIM) ? "selected" : "" }} value="{{ $dt->NIM }}">{{ $dt->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-form">
                            <label for="input-nama">Nama Kas</label>
                            <select name="kode_jeniskas" class="input">
                                @foreach($data_jeniskas as $dj)
                                    <option {{ ($dj->kode_jeniskas == $dk->kode_jeniskas) ? "selected" : "" }} value="{{ $dj->kode_jeniskas }}">{{ $dj->nama_kas }}</option>
                                @endforeach
                            </select>
                        </div>
                        @csrf
                        <div class="input-form">
                            <label for="input-jumlah">Jumlah Kas</label>
                            <input type="number" onkeyup="upper()" value="{{ $dk->nominal }}" name="nominal" id="input-jumlah" placeholder="Masukan Jumlah Kas" class="input jumlah_kas">
                        </div>
                        <div class="input-form">
                            <label for="input-jumlah">Tanggal Bayar</label>
                            <input type="date" onkeyup="upper()" value="{{ $dk->tanggal_bayar }}" name="tanggal_bayar" id="input-jumlah" placeholder="Masukan Jumlah Kas" class="input jumlah_kas">
                        </div>
                        <div class="input-form">
                            <label for="input-nama">Nama Kas</label>
                            <select name="metode" class="input">
                                <option {{ ($dk->metode == "tunai") ? "selected" : "" }} value="tunai">Tunai</option>
                            </select>
                        </div>
                        <div class="input-form">
                            <button onclick="validation()" name="status" value="tambah" class="btn warning large"><i class="bx bx-check"></i> Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
