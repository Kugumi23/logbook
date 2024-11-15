<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Teknisi</td>
                <td>Provider</td>
                <td>Waktu kedatangan</td>
                <td>Waktu kepulangan</td>
                <td>keterangan</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($visitors as $data)
                @if ($data->waktu_kepulangan == null)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nama_teknisi}}</td>
                    <td>{{$data->nama_vendor}}</td>
                    <td>{{$data->waktu_kedatangan}}</td>
                    <td>{{$data->waktu_kepulangan}}</td>
                    <td>{{$data->keterangan}}</td>
                    <td>
                        <form action="{{ route('visitors.update') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $data->id }}" name="id_teknisi">
                            <button type="submit" name="submit">Selesai</button>
                        </form>
                    </td>
                </tr>
                @endif
            @empty
            <tr>
                <td colspan="7">Tidak ada data yang diambil</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>