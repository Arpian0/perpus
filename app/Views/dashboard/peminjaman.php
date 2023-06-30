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
        <h2>Peminjaman</h2>
        <p>Ini adalah halaman peminjaman perpustakaan.</p>
        <form action="<?= base_url('/borrows/create') ?>">
            <button>Pinjam Buku</button>

            <table>
                <thead>
                    <tr>
                        <th>ID Peminjaman</th>
                        <th>Nama Peminjam</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($borrows as $borrow) : ?>
                        <tr>
                            <td><?= $borrow['book_id'] ?></td>
                            <td><?= $borrow['user_name'] ?></td>
                            <td><?= $borrow['borrow_date'] ?></td>
                            <td><?= $borrow['return_date'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>