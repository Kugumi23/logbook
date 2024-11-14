<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logbook</title>
</head>
<body>
    <div>
        <form action="{{ route('visitors.store') }}" method="post">
            @csrf
            <legend>Logbook Teknisi Providers</legend>
            <div>
                <label for="nama_teknisi">Nama Teknisi</label>
                <input type="text" name="nama_teknisi" id="nama_teknisi" value="{{ old('nama_teknisi') }}">
            </div>
            <div>
                <label for="nama_vendor">Vendor</label>
                <select name="nama_vendor" id="nama_vendor" value="{{ old('nama_vendor') }}">
                    <option value="TELKOM" {{ old('nama_vendor')=='TELKOM' ? 'selected' : '' }}>TELKOM</option>
                    <option value="ICONNET" {{ old('nama_vendor')=='ICONNET' ? 'selected' : '' }}>ICONNET</option>
                    <option value="BIZNET" {{ old('nama_vendor')=='BIZNET' ? 'selected' : '' }}>BIZNET</option>
                </select>
            </div>
            <div>
                <label for="keterangan">Keterangan Kunjungan</label>
                <textarea name="keterangan" id="keterangan"></textarea>
            </div>
            <button type="submit" name="submit">Selesai</button>
        </form>
    </div>
</body>
</html>