<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Data Anggota</title>
</head>
<body>
<h3>Data Anggota</h3>
<table width="100%" border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
    </tr>
    @php $no = 1; @endphp
    @foreach($data_anggota as $dt)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $dt->NIM }}</td>
            <td>{{ $dt->nama }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
