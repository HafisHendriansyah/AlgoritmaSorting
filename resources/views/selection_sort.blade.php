{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Sort</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #333;
            border-bottom: 3px solid #2196F3;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        h2 {
            color: #555;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #2196F3;
        }

        button {
            background-color: #2196F3;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
        }

        button:hover {
            background-color: #1976D2;
        }

        .hasil {
            background-color: #f9f9f9;
            padding: 20px;
            margin-top: 20px;
            border-left: 4px solid #2196F3;
            border-radius: 4px;
        }

        .hasil p {
            margin: 10px 0;
            line-height: 1.6;
        }

        .hasil strong {
            color: #333;
        }

        .data-value {
            color: #2196F3;
            font-weight: bold;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            background-color: #fff;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
        }

        hr {
            border: none;
            border-top: 2px solid #e0e0e0;
            margin: 40px 0;
        }

        .input-wrapper {
            margin-bottom: 10px;
        }

        .input-label {
            font-size: 13px;
            color: #888;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selection Sort</h1>

        <h2>Pengurutan Angka</h2>
        <form method="POST" action="{{ url('/selection-sort/angka') }}">
            @csrf
            <label>Masukkan angka (pisahkan dengan koma)</label>
            <input type="text" name="angka" placeholder="Contoh: 5,3,8,1,4" required>
            <button type="submit">Urutkan</button>
        </form>

        @if (isset($dataAwalAngka))
            <div class="hasil">
                <p><strong>Data Awal:</strong> <span class="data-value">{{ implode(', ', $dataAwalAngka) }}</span></p>
                <p><strong>Data Terurut:</strong> <span class="data-value">{{ implode(', ', $dataTerurutAngka) }}</span></p>
            </div>
        @endif

        <hr>

        <h2>Pengurutan Nama</h2>
        <form method="POST" action="{{ url('/selection-sort/objek') }}">
            @csrf
            <label>Masukkan 3 nama untuk diurutkan</label>

            <div class="input-wrapper">
                <div class="input-label">Nama 1</div>
                <input type="text" name="nama[]" placeholder="Masukkan nama" required>
            </div>

            <div class="input-wrapper">
                <div class="input-label">Nama 2</div>
                <input type="text" name="nama[]" placeholder="Masukkan nama" required>
            </div>

            <div class="input-wrapper">
                <div class="input-label">Nama 3</div>
                <input type="text" name="nama[]" placeholder="Masukkan nama" required>
            </div>

            <button type="submit">Urutkan</button>
        </form>

        @if (isset($dataAwalObjek))
            <div class="hasil">
                <p><strong>Data Awal:</strong></p>
                <ul>
                    @foreach ($dataAwalObjek as $item)
                        <li>{{ $item->nama }}</li>
                    @endforeach
                </ul>

                <p><strong>Data Terurut (A-Z):</strong></p>
                <ul>
                    @foreach ($dataTerurutObjek as $item)
                        <li>{{ $item->nama }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selection Sort Visual</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-4">Selection Sort</h3>
                <!-- SORT ANGKA -->
                <h5>Pengurutan Angka</h5>
                <form method="POST" action="{{ url('/selection-sort/angka') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Masukkan angka (pisahkan dengan koma)</label>
                        <input type="text" name="angka" class="form-control" placeholder="Contoh: 5,3,8,1,4"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Urutkan</button>
                </form>

                @if (isset($dataAwalAngka))
                    <div class="alert alert-secondary mt-3">
                        <p class="mb-1"><strong>Data Awal:</strong></p>
                        <p>{{ implode(', ', $dataAwalAngka) }}</p>

                        <p class="mb-1"><strong>Data Terurut:</strong></p>
                        <p>{{ implode(', ', $dataTerurutAngka) }}</p>
                    </div>
                @endif

                <hr>

                <!-- SORT NAMA -->
                <h5>Pengurutan Nama</h5>
                <form method="POST" action="{{ url('/selection-sort/objek') }}">
                    @csrf

                    <div class="mb-2">
                        <label class="form-label">Nama 1</label>
                        <input type="text" name="nama[]" class="form-control" required>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Nama 2</label>
                        <input type="text" name="nama[]" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama 3</label>
                        <input type="text" name="nama[]" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Urutkan</button>
                </form>

                @if (isset($dataAwalObjek))
                    <div class="alert alert-secondary mt-3">
                        <p><strong>Data Awal:</strong></p>
                        <ul class="mb-3">
                            @foreach ($dataAwalObjek as $item)
                                <li>{{ $item->nama }}</li>
                            @endforeach
                        </ul>

                        <p><strong>Data Terurut (A-Z):</strong></p>
                        <ul>
                            @foreach ($dataTerurutObjek as $item)
                                <li>{{ $item->nama }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
