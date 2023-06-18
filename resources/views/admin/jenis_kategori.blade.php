@extends('admin.template.template')
@section('content')
    <div class="home-content">
        <h1>Kategori kas</h1>
        <div class="card">
            <div class="card-title info">
                <h5>Data Anggota Dan Pemasukan</h5>
            </div>
            <div class="card-body large">
                <br>
                <a href="/cetak_jeniskas" style="background-color: lightgreen" class="btn info"><i class="bx bx-file"></i> Ekspor To PDF</a>
                <a href="/halaman_tambah_jeniskas" class="btn info"><i class="bx bx-plus"></i> Tambah Data</a>
                <br><br>
                <table width="100%" border="1">
                    <tr>
                        <th>No</th>
                        <th>Nama Kas</th>
                        <th>Total</th>
                        <th>Opsi</th>
                    </tr>
                    @php $no=1 @endphp
                    @foreach($data_jeniskas as $jk)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $jk->nama_kas }}</td>
                        <td>Rp {{ $jk->jumlah_kas }}</td>
                        <td><a href="/hapus_jeniskas/{{ $jk->kode_jeniskas }}" class="btn danger btn-delete"><i class="bx bx-trash"></i></a>|<a href="/halaman_update_jeniskas/{{ $jk->kode_jeniskas }}" class="btn warning"><i class="bx bx-edit"></i></a></td>
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
