@extends('admin.template.template')
@section('content')
    <div class="home-content">
        <h1>Dashboard</h1>
        <div class="box-content">
            <div class="box danger">
                <div class="box-body">
                    <h4>Jumlah Pemasukan</h4>
                    <h3>Rp 4588999</h3>
                </div>
                <div class="box-icon">
                    <i class="bx bx-money"></i>
                </div>
            </div>
            <div class="box info">
                <div class="box-body">
                    <h4>Jumlah Pengeluaran</h4>
                    <h3>Rp 4588999</h3>
                </div>
                <div class="box-icon">
                    <i class="bx bx-wallet-alt"></i>
                </div>
            </div>
            <div class="box success">
                <div class="box-body">
                    <h4>Jumlah Anggota</h4>
                    <h3>10</h3>
                </div>
                <div class="box-icon">
                    <i class="bx bx-user"></i>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-title info">
                <h5>Data Anggota Dan Pemasukan</h5>
            </div>
            <div class="card-body large">
                <br>
                <table width="100%" border="1">
                    <tr>
                        <th rowspan="2">Nama</th>
                        <th colspan="12">Bulan</th>
                        <th rowspan="2">Jumlah</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                    </tr>
                    <tr>
                        <td>Ridho Arif</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>Rp 788888</td>
                    </tr>
                </table>
                <br>
            </div>
        </div>
    </div>
@endsection
