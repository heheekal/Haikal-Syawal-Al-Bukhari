<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan Data</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f3f4f6;
            font-family: Arial, sans-serif;
        }

        .card {
            width: 100%;
            max-width: 500px;
            background: #fff;
            border-radius: 16px;
            padding: 30px 24px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
            color: #111827;
        }

        .data-item {
            margin: 14px 0;
            padding: 12px 14px;
            background: #f9fafb;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            color: #374151;
        }

        .label {
            font-weight: bold;
            color: #1f2937;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Data Mahasiswa</h1>
        <div class="data-item"><span class="label">Nama:</span> {{ $nama }}</div>
        <div class="data-item"><span class="label">NIM:</span> {{ $nim }}</div>
        <div class="data-item"><span class="label">Program Studi:</span> {{ $prodi }}</div>
    </div>
</body>
</html>