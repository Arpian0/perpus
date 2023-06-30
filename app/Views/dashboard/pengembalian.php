<style>
    #containter .content {
        display: flex;
        flex-direction: row;
        max-width: 100%;
        padding: 0 2%;
        margin: 0 auto;
        box-sizing: border-box;
    }

    h2 {
        font-size: 2vw;
        text-align: center;
    }

    p {
        font-size: 2vw;
        text-align: justify;
    }

    @media (max-width: 768px) {
        h2 {
            font-size: 4vw;
        }

        p {
            font-size: 3vw;
        }
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    button {
        padding: 6px 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>

<?php include('header.php'); ?>

<div class="container">
    <div class="sidebar" id="sidebar">
        <?php include('sidebar.php'); ?>
    </div>
    <div class="content" id="content">
        <h2>Pengembalian</h2>
        <p>Ini adalah halaman pengembalian perpustakaan.</p>
        <h1>Daftar Pengembalian Buku</h1>

        <a href="/loans/create">Tambah Pengembalian Baru</a>

        <table>
            <thead>
                <tr>
                    <th>ID Pengembalian</th>
                    <th>ID Anggota</th>
                    <th>ID Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Denda</th>
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
                        <td><?= $loan['status']; ?></td>
                        <td><?= $loan['denda']; ?></td>
                        <td>
                            <a href="/loans/edit/<?= $loan['id']; ?>">Edit</a>
                            <form method="POST" action="/loans/delete/<?= $loan['id']; ?>" style="display:inline;">
                                <input type="submit" value="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus peminjaman ini?')">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('footer.php'); ?>