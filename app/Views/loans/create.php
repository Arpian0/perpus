<!DOCTYPE html>
<html>

<head>
    <title>Tambah Peminjaman Buku</title>
</head>

<body>
    <h1>Tambah Peminjaman Buku</h1>

    <form method="POST" action="/loans/store">
        <label for="member_id">Anggota:</label>
        <select name="member_id" id="member_id">
            <?php foreach ($members as $member) : ?>
                <option value="<?= $member['id']; ?>"><?= $member['name']; ?></option>
            <?php endforeach; ?>
        </select>

        <br><br>

        <label for="book_id">Buku:</label>
        <select name="book_id" id="book_id">
            <?php foreach ($books as $book) : ?>
                <option value="<?= $book['id']; ?>"><?= $book['title']; ?></option>
            <?php endforeach; ?>
        </select>

        <br><br>

        <label for="loan_date">Tanggal Pinjam:</label>
        <input type="date" name="loan_date" id="loan_date">

        <br><br>

        <label for="return_date">Tanggal Kembali:</label>
        <input type="date" name="return_date" id="return_date">

        <br><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Belum Kembali">Belum Kembali</option>
            <option value="Sudah Kembali">Sudah Kembali</option>
        </select><br>

        <br><br>

        <label for="denda">Denda:</label>
        <input type="text" name="denda" id="denda">

        <br><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>