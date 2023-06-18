<div class="sidebar" id="sidebar">
    <ul class="menu">
        <li class="active"><a href="dashboard">Dashboard</a></li>
        <li><a href="admin">Admin</a></li>
        <li><a href="anggota">Anggota</a></li>
        <li><a href="buku">Buku</a></li>
        <li><a href="kategori">Kategori</a></li>
        <li><a href="peminjaman">Peminjaman</a></li>
        <li><a href="pengembalian">Pengembalian</a></li>
    </ul>
</div>

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

<script>
    // Mendapatkan semua elemen menu
    const menuItems = document.querySelectorAll('.menu li');

    // Fungsi untuk mengubah status menu aktif
    function setActiveMenu(menuItem) {
        // Menghapus kelas "active" dari semua elemen menu
        menuItems.forEach(item => item.classList.remove('active'));

        // Menambahkan kelas "active" ke elemen menu yang dipilih
        menuItem.classList.add('active');
    }

    // Fungsi untuk memuat konten menggunakan AJAX
    function loadContent(url) {
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById('content').innerHTML = xhr.responseText;
            }
        };
        xhr.open('GET', url, true);
        xhr.send();
    }

    // Event listener untuk setiap elemen menu
    menuItems.forEach(menuItem => {
        menuItem.addEventListener('click', function(e) {
            e.preventDefault();

            // Mengubah status menu aktif
            setActiveMenu(this);

            // Mengambil URL dari atribut href
            const url = this.firstChild.getAttribute('href');

            // Memuat konten menggunakan AJAX
            loadContent(url);
        });
    });
</script>