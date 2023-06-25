<style>
    .sidebar {
        width: 20%;
        background-color: #f1f1f1;
        padding: 10px;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 2%;
    }

    .sidebar li {
        margin-bottom: 1%;
    }

    .sidebar a {
        display: block;
        text-decoration: none;
        color: #333;
        font-size: 2vw;
        white-space: nowrap;
        margin-bottom: 2vw;
    }

    @media (max-width: 768px) {
        .sidebar {
            width: 100%;
        }

        .sidebar ul {
            padding: 2%;
        }

        .sidebar li {
            margin-bottom: 2%;
        }
    }
</style>

<div class="sidebar" id="sidebar">
    <ul>
        <li><a href="body">Dashboard</a></li>
        <li><a href="admin">Admin</a></li>
        <li><a href="anggota">Anggota</a></li>
        <li><a href="buku">Buku</a></li>
        <li><a href="kategori">Kategori</a></li>
        <li><a href="peminjaman">Peminjaman</a></li>
        <li><a href="pengembalian">Pengembalian</a></li>
    </ul>
</div>