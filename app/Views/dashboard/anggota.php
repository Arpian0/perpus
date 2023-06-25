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
        <h2>Anggota</h2>
        <p>Ini adalah halaman dashboard perpustakaan.</p>
        <form action="<?= base_url('members/create') ?>">
            <div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Waktu Pembuatan</th>
                    </tr>
                    <?php foreach ($members as $member) : ?>
                        <tr>
                            <td><?php echo $member['id']; ?></td>
                            <td><?php echo $member['name']; ?></td>
                            <td><?php echo $member['email']; ?></td>
                            <td><?php echo $member['created_at']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <button>Tambah Anggota</button>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>