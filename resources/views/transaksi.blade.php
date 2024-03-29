<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Point Of Sales</title>
</head>
<body>
    <h1>Point of Sale</h1>
    <h2>Daftar Transaksi</h2>
    <table border="2" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <th>{{ $item['nama'] }}</th>
                    <th>{{ $item['harga'] }}</th>
                    <th>{{ $item['jumlah'] }}</th>
                    <th>{{ $item['subtotal'] }}</th>
                </tr>
            @endforeach
        </tbody>
</body>
</html>