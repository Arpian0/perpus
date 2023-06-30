<!DOCTYPE html>
<html>

<head>
    <title>Daftar Peminjaman Buku</title>
</head>

<body>
    <h1>Daftar Peminjaman Buku</h1>

    <a href="/loans/create">Tambah Peminjaman Baru</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Anggota</th>
                <th>Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($loans as $loan) : ?>
                <tr>
                    <td><?= $loan['id']; ?></td>
                    <td><?= $loan['member_id']; ?></td>
                    <td><?= $loan['book_id']; ?></td>
                    <td><?= $loan['loan_date']; ?></td>
                    <td><?= $loan['return_date']; ?></td>
                    <td>
                        <a href="/loans/edit/<?= $loan['id']; ?>">Edit</a>
                        <form method="POST" action="/loans/delete/<?= $loan['id']; ?>" style="display:inline;">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus peminjaman ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>