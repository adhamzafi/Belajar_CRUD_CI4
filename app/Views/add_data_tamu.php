<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            max-width: 600px;
            border: 1px solid #d3d3d3;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .judul {
            text-align: center;
            margin-bottom: 20px;
            background-color: #343a40;
            color: white;
            border-radius: 10px;
            padding: 10px;
        }

        .form-label {
            font-weight: bold;
            color: #555;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-primary,
        .btn-secondary {
            width: 100%;
        }

        .btn-primary {
            margin-top: 10px;
        }

        .btn-secondary {
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="judul">Tambah Buku Tamu</h1>
        <form action="<?= base_url('proses_add_tamu') ?>" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Berkunjung</label>
                <input type="date" class="form-control" id="tgl_berkunjung" name="tgl_berkunjung" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No. Telepon</label>
                <input type="number" class="form-control" id="no_telepon" name="no_telepon" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Keperluan</label>
                <input type="text" class="form-control" id="keperluan" name="keperluan" placeholder="">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>