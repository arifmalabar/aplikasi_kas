@extends('admin.template.template')
@section('content')
    <div class="home-content">
        <h1>{{ $judul }}</h1>
        <div class="card">
            <div class="card-title info">
                <h5>Data Kas Anggota</h5>
            </div>
            <div class="card-body large">
                <br>
                <a href="/kas_anggota/entry" class="btn info"><i class="bx bx-plus"></i> Tambah Data</a>
                <a href="/cetak_anggota" class="btn warning"> Cetak Anggota</a>
                <br><br>
                <table width="100%" border="1">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Kas</th>
                        <th>Jumlah Kas Yang Dikeluarkan</th>
                        <th>Opsi</th>
                    </tr>
                    @php $no = 1; @endphp
                    @foreach($data_kas as $kas)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $kas->NIM }}-{{ $kas->anggota->nama }}</td>
                            <td>{{ $kas->jenis_kas->nama_kas }}</td>
                            <td>{{ $kas->nominal }}</td>
                            <td><a href="/kas_anggota/hapus/{{ $kas->kode_kas }}" class="btn danger btn-delete"><i class="bx bx-trash"></i></a>|<a href="/kas_anggota/edit/{{ $kas->kode_kas }}" class="btn warning"><i class="bx bx-edit"></i></a></td>
                        </tr>
                    @endforeach
                </table>
                <br>
            </div>
        </div>
    </div>
    @section('script')
        <script src="{{ asset('script/validation.js') }}"></script>
    @endsection
@endsection
