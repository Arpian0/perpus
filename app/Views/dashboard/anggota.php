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
        <h2>Anggota</h2>
        <p>Ini adalah halaman anggota perpustakaan.</p>
        <form action="<?= base_url('members/create') ?>">
            <div>
                <button style="margin: 2%;">Tambah Anggota</button>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Waktu Pembuatan</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($members as $member) : ?>
                        <tr>
                            <td><?php echo $member['id']; ?></td>
                            <td><?php echo $member['name']; ?></td>
                            <td><?php echo $member['email']; ?></td>
                            <td><?php echo $member['created_at']; ?></td>
                            <td class="content">
                                <form method="post" action="<?php echo base_url('members/delete/' . $member['id']); ?>">
                                    <button type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>