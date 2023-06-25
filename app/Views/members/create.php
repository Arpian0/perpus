<!DOCTYPE html>
<html>

<head>
    <title>Tambah Anggota</title>
</head>

<body>
    <h1>Tambah Anggota</h1>

    <form method="post" action="<?php echo base_url('members/store'); ?>">
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name">

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">

        <button type="submit">Simpan</button>
    </form>
</body>

</html>