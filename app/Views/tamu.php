<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            background-color: #343a40;
            color: white;
            border-radius: 10px;
            padding: 10px;
        }

        .table th {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .table td {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Buku Tamu</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal Berkunjung</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Telepon</th>
                    <th scope="col">Keperluan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_data_tamu as $tamu) : ?>
                    <tr>
                        <td><?= $tamu->tgl_berkunjung ?></td>
                        <td><?= $tamu->nama_tamu ?></td>
                        <td><?= $tamu->alamat ?></td>
                        <td><?= $tamu->no_telepon ?></td>
                        <td><?= $tamu->keperluan ?></td>
                        <td><a href="<?= base_url('edit_data_tamu') . '/' . $tamu->id ?>" class="btn btn-info btn-sm btn-warning">Edit</a>
                            <a href="<?= base_url('delete_data_tamu') . '/' . $tamu->id ?>" class="btn btn-info btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>
        <br>
        <a href="<?= base_url('add_data_tamu') ?>" class="btn btn-primary">+ Tambah Data Tamu</a>
        <a href="<?= base_url('logout') ?>" class="btn btn-secondary">Logout</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>