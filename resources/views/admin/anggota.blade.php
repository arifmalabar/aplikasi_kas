@extends('admin.template.template')
@section('content')
    <div class="home-content">
        <h1>Data Anggota</h1>
        <div class="card">
            <div class="card-title info">
                <h5>Data Anggota Dan Pemasukan</h5>
            </div>
            <div class="card-body large">
                <br>
                <a href="/halaman_tambah" class="btn info"><i class="bx bx-plus"></i> Tambah Data</a>
                <a href="/cetak_anggota" class="btn warning"> Cetak Anggota</a>
                <br><br>
                <table width="100%" border="1">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Opsi</th>
                    </tr>
                    @php $no =1; @endphp
                    @foreach($data_anggota as $dt)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $dt->NIM }}</td>
                        <td>{{ $dt->nama }}</td>
                        <td><a href="/delete_anggota/{{ $dt->NIM }}" class="btn danger btn-delete"><i class="bx bx-trash"></i></a>|<a href="/halaman_update/{{ $dt->NIM }}" class="btn warning"><i class="bx bx-edit"></i></a></td>
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
