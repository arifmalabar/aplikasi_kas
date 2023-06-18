@extends('admin.template.template')
@section('content')
    @php $no =1; @endphp
    @foreach($data_anggota as $t)
        <div class="home-content">
            <h1>Edit Data Anggota</h1>
            <div class="card">
                <form action="/update_anggota/{{ $t->NIM }}" method="post">
                    @csrf
                    <div class="card-body large">
                        <div class="input-form">
                            <label for="input-nim">NIM</label>
                            <input type="text" name="NIM" value="{{ $t->NIM }}" id="input-nim" placeholder="Masukan NIM"  class="input nim">
                        </div>
                        <div class="input-form">
                            <label for="input-nama">Nama</label>
                            <input type="text" name="nama" id="input-nama" value="{{ $t->nama }}" placeholder="Masukan Nama" class="input nim">
                        </div>
                        <div class="input-form">
                            <label for="input-email">Username/Email</label>
                            <input type="email" name="email" id="input-email" value="{{ $t->email }}" placeholder="Masukan Email" class="input nim">
                        </div>
                        <div class="input-form">
                            <label for="input-jk">Jenis Kelamin</label>
                            <br>
                            <input type="radio" name="jenis_kelamin" {{ ($t->jenis_kelamin == "pria") ? "checked" : "" }} value="pria" id="input-jkl"><label for="input-jkl"> Laki-Laki</label>
                            <input type="radio" name="jenis_kelamin" {{ ($t->jenis_kelamin == "wanita") ? "checked" : "" }} value="wanita" id="input-jkp"><label for="input-jkp"> Perempuan</label>
                        </div>
                        <div class="input-form">
                            <button type="submit" name="status" value="tambah" class="btn success large"><i class="bx bx-check"></i> Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
