<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Menampilkan Gambar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>

<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Upload Gambar </h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <!-- Success Upload -->
            <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('berhasil'); ?>
                </div>
            <?php } ?>

            <?php
            $errors = $validation->getErrors();
            if (!empty($errors)) {
                echo $validation->listErrors('list');
            }
            ?>
            <?= form_open_multipart(base_url('proses')); ?>
            <div class="row">
                <div class="col-md-4">
                    <label>Judul</label>
                    <div class="form-group">
                        <input type="text" name="judul" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <label>File</label>
                    <div class="form-group">
                        <input type="file" name="file_upload" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <label>Aksi</label>
                    <div class="form-group">
                        <?= form_submit('Send', 'Simpan') ?>
                    </div>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($gambar as $row) : ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['judul']; ?></td>
                        <td><img src="<?= base_url('assets/images/' . $row['gambar']); ?>" width="200"></td>\
                        <td>
                            <form action="<?= base_url('upload/delete/' . $row['id']); ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>