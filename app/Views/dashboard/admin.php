<style>
    .content {
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


<div class="content" id="content">
    <h2>Admin</h2>
    <p>Ini adalah halaman dashboard perpustakaan.</p>
    <ul>
        <li id="menu-dashboard"><a href="anggota">Anggota</a></li>
        <li id="menu-profile"><a href="buku">Buku</a></li>
        <li id="menu-settings"><a href="kategori">Kategori</a></li>
    </ul>

    <script src="/app/java/menu.js"></script>
</div>