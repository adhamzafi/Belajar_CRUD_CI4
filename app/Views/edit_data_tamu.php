<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .container {
            margin: 50px;
        }

        .judul {
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            background-color: black;
            color: white;
            border-radius: 10px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="judul">Edit Buku Tamu</h1>
        <form action="<?= base_url('proses_edit_tamu') ?>" method="POST">
            <input type="hidden" class="form-control" id="id_tamu" name="id_tamu" value="<?= $data_tamu->id ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Berkunjung</label>
                <input type="text" class="form-control" id="tgl_berkunjung" name="tgl_berkunjung" value="<?= $data_tamu->tgl_berkunjung ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" value="<?= $data_tamu->nama_tamu ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No. Telepon</label>
                <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $data_tamu->no_telepon ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data_tamu->alamat ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Keperluan</label>
                <input type="text" class="form-control" id="keperluan" name="keperluan" value="<?= $data_tamu->keperluan ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>