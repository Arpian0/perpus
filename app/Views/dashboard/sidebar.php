<style>
    .sidebar {
        width: 250px;
        background-color: #C71585;
        padding: 2%;
        border-radius: 5px;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 2%;
    }

    .sidebar li {
        text-align: center;
        margin-bottom: 1%;
    }

    .sidebar a {
        display: block;
        text-decoration: none;
        color: #000000;
        font-size: 30px;
        margin-bottom: 2vw;
        background-color: #ddd;
        border-radius: 5px;
    }

    /* Styling saat tautan (link) aktif */
    .sidebar a.active {
        background-color: #555;
        color: #fff;
    }

    /* Styling saat tautan (link) dihover */
    .sidebar a:hover {
        background-color: #888;
        color: #fff;
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
        <li><a href="dashboard">Dashboard</a></li>
        <li><a href="admin">Admin</a></li>
        <li><a href="anggota">Anggota</a></li>
        <li><a href="buku">Buku</a></li>
        <li><a href="kategori">Kategori</a></li>
        <li><a href="peminjaman">Peminjaman</a></li>
        <li><a href="pengembalian">Pengembalian</a></li>
    </ul>
</div>