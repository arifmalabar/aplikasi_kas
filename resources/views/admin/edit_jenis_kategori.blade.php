@extends('admin.template.template')
@section('content')
    @php $no=1 @endphp
    @foreach($data_jeniskas as $jk)
    <div class="home-content">
        <h1>Edit Data Jenis Kas</h1>
        <div class="card">
            <div class="card-body large">
                <form action="/update_jeniskas/{{ $jk->kode_jeniskas }}" method="post">
                    <div class="input-form">
                        <label for="input-nama">Nama Kas</label>
                        <input type="text" onkeyup="upper()" value="{{ $jk->nama_kas }}" name="nama_kas" id="input-nama" placeholder="Masukan Nama kas" class="input nama_kas">
                    </div>
                    @csrf
                    <div class="input-form">
                        <label for="input-jumlah">Jumlah Kas</label>
                        <input type="number" onkeyup="upper()" value="{{ $jk->jumlah_kas }}" name="jumlah_kas" id="input-jumlah" placeholder="Masukan Jumlah Kas" class="input jumlah_kas">
                    </div>
                    <div class="input-form">
                        <label for="input-jumlah">Keterangan Kas</label>
                        <textarea class="input keterangan_kas" placeholder="Masukan keterangan disini" name="keterangan">
						    {{ $jk->keterangan }}
                        </textarea>
                    </div>
                    <div class="input-form">
                        <button onclick="validation()" name="status" value="tambah" class="btn warning large"><i class="bx bx-check"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
@endsection
