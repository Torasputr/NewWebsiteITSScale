<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Service Form Submitted</title>
</head>

<body>
    <h2>Form Klaim Garansi Baru</h2>
    <p><strong>Jenis:</strong> {{ $data['type'] }}</p>
    <p><strong>Serial Number:</strong> {{ $data['sn'] }}</p>
    <p><strong>Nama Barang:</strong> {{ $data['name'] ?? '-' }}</p>
    <p><strong>Nama Sales:</strong> {{ $data['sales'] ?? '-' }}</p>
    <p><strong>Nama Perusahaan:</strong> {{ $data['company'] }}</p>
    <p><strong>Alamat:</strong> {{ $data['address'] }}</p>
    <p><strong>Telepon:</strong> {{ $data['phone'] }}</p>
    @if ($data['tanggal'])
        <p><strong>Tanggal Temu:</strong> {{ $data['tanggal'] }}</p>
    @endif
    <p><strong>Keterangan:</strong> {{ $data['keterangan'] ?? '-' }}</p>
</body>

</html>
