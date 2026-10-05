<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f3f4f6;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            padding: 30px 24px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin: 0 0 20px;
            font-size: 28px;
            text-align: center;
            color: #1f2937;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        label {
            font-weight: 600;
            color: #374151;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            font-size: 14px;
            transition: 0.2s ease;
        }

        input:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        button {
            margin-top: 8px;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: #2563eb;
            color: white;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s ease;
        }

        button:hover {
            background: #1d4ed8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulir Data Mahasiswa</h1>
        <form action="{{ route('Post.Page') }}" method="POST">
            @csrf
            <div>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div>
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required>
            </div>

            <div>
                <label for="prodi">Program Studi:</label>
                <input type="text" id="prodi" name="prodi" required>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>