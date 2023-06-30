<!DOCTYPE html>
<html>

<head>
    <title>Edit Peminjaman Buku</title>
</head>

<body>
    <h1>Edit Peminjaman Buku</h1>

    <form method="POST" action="/loans/update">
        <input type="hidden" name="loan_id" value="<?= $loan['id']; ?>">

        <label for="member_id">Anggota:</label>
        <select name="member_id" id="member_id">
            <?php foreach ($members as $member) : ?>
                <option value="<?= $member['id']; ?>" <?= ($member['id'] == $loan['member_id']) ? 'selected' : ''; ?>>
                    <?= $member['name']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <br><br>

        <label for="book_id">Buku:</label>
        <select name="book_id" id="book_id">
            <?php foreach ($books as $book) : ?>
                <option value="<?= $book['id']; ?>" <?= ($book['id'] == $loan['book_id']) ? 'selected' : ''; ?>>
                    <?= $book['title']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <br><br>

        <label for="loan_date">Tanggal Pinjam:</label>
        <input type="date" name="loan_date" id="loan_date" value="<?= $loan['loan_date']; ?>">

        <br><br>

        <label for="return_date">Tanggal Kembali:</label>
        <input type="date" name="return_date" id="return_date" value="<?= $loan['return_date']; ?>">

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