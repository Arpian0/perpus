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
</style>

<?php include('header.php'); ?>

<div class="container">
    <div class="sidebar" id="sidebar">
        <?php include('sidebar.php'); ?>
    </div>
    <div class="content" id="content">
        <h2>Pengembalian</h2>
        <p>Ini adalah halaman pengembalian perpustakaan.</p>
        <a href="/borrows/create">Borrow Book</a>

        <table>
            <thead>
                <tr>
                    <th>Book</th>
                    <th>User Name</th>
                    <th>Borrow Date</th>
                    <th>Return Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($borrows as $borrow) : ?>
                    <tr>
                        <td><?= $borrow['book_id'] ?></td>
                        <td><?= $borrow['user_name'] ?></td>
                        <td><?= $borrow['borrow_date'] ?></td>
                        <td><?= $borrow['return_date'] ?></td>
                        <td>
                            <a href="/borrows/returnBook/<?= $borrow['id'] ?>">Return</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('footer.php'); ?>