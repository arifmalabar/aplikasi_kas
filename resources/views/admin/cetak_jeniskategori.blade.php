<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak JenisKategori</title>
</head>
<body>
<h3>Jenis Kategori</h3>
<table width="100%" border="1">
    <tr>
        <th>No</th>
        <th>Nama Kas</th>
        <th>Total</th>\
    </tr>
    @php $no=1 @endphp
    @foreach($data_jeniskas as $jk)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $jk->nama_kas }}</td>
            <td>Rp {{ $jk->jumlah_kas }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
