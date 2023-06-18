// Mendapatkan elemen menu
const menuDashboard = document.getElementById("menu-dashboard");
const menuProfile = document.getElementById("menu-profile");
const menuSettings = document.getElementById("menu-settings");

// Mendapatkan URL halaman saat ini
const currentUrl = window.location.pathname;

// Menandai elemen menu yang sesuai dengan URL saat ini sebagai aktif
if (currentUrl === "/dashboard") {
  menuDashboard.classList.add("active");
} else if (currentUrl === "/profile") {
  menuProfile.classList.add("active");
} else if (currentUrl === "/settings") {
  menuSettings.classList.add("active");
}
