<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>QRIS Generator</title>
</head>
<body style="text-align:center; margin-top:50px;">
    <h2>QRIS Dinamis</h2>
    <p>{{ $qrString }}</p>
    <img src="data:image/png;base64,{{ $qrImage }}" alt="QRIS" style="width:250px;">
</body>
</html>
