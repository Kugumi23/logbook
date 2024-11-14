<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Teknisi Provider</title>
</head>
<body>
    <h3>Riwayat Kunjungan</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Teknisi</th>
                <th>Provider</th>
                <th>Waktu Kedatangan</th>
                <th>Waktu Kepulangan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($visitors as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->nama_teknisi}}</td>
                <td>{{$data->nama_vendor}}</td>
                <td>{{$data->waktu_kedatangan}}</td>
                <td>{{$data->waktu_kepulangan}}</td>
                <td>{{$data->keterangan}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" align="center">tidak ada data yang ditampilkan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>