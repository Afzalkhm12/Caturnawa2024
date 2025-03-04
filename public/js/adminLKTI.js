// adminLKTI.js

let lastScrollTopHeader = 0; // Gunakan variabel yang berbeda untuk header
const header = document.getElementById('header');
const scrollThresholdHeader = 0; // Jarak scroll sebelum navbar berubah visibilitas

window.addEventListener('scroll', function() {
    let scrollTopHeader = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTopHeader > lastScrollTopHeader) {
        // Scrolling down
        header.classList.add('hidden');
    } else if (lastScrollTopHeader - scrollTopHeader >= scrollThresholdHeader) {
        // Scrolling up with a threshold
        header.classList.remove('hidden');
    }

    lastScrollTopHeader = scrollTopHeader <= 0 ? 0 : scrollTopHeader; // For Mobile or negative scrolling
});

// adminLKTI.js

// adminLKTI.js


let lastScrollTopSidelogo =0;
const sidelogo = document.getElementById('sidelogo'); // Mengambil elemen gambar sidebar
const scrollThresholdSidelogo = 0; // Jarak scroll sebelum sidebar berubah
window.addEventListener('scroll', function() {
    let scrollTopSidelogo = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTopSidelogo > lastScrollTopSidelogo) {
        // Scrolling down
        sidelogo.classList.add('hide'); 
    } else if (lastScrollTopSidelogo - scrollTopSidelogo >= scrollThresholdSidelogo) {
        // Scrolling up with a threshold
        sidelogo.classList.remove('hide');
    }

    lastScrollTopSidelogo = scrollTopSidelogo <= 0 ? 0 : scrollTopSidelogo; // For Mobile or negative scrolling
});



// Bagian baru yang ingin Anda tambahkan:
let lastScrollTopSidebar = 0;
const sidebar = document.getElementById('sidebar');
const scrollThresholdSidebar = 0; // Jarak scroll sebelum sidebar berubah

window.addEventListener('scroll', function() {
    let scrollTopSidebar = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTopSidebar > lastScrollTopSidebar) {
        // Scrolling down
        sidebar.classList.add('up');
    } else if (lastScrollTopSidebar - scrollTopSidebar >= scrollThresholdSidebar) {
        // Scrolling up with a threshold
        sidebar.classList.remove('up');
    }

    lastScrollTopSidebar = scrollTopSidebar <= 0 ? 0 : scrollTopSidebar; // For Mobile or negative scrolling
});



    // Event listener untuk tombol "Dashboard"
    document
        .getElementById("beranda")
        .addEventListener("click", function (event) {
            event.preventDefault();
            showContent("home");

            // Muat ulang konten beranda saat tombol Dashboard diklik
            $.ajax({
                url: "/admin/beranda",
                success: function (result) {
                    $("#home-container").html(
                        $(result).find("#home-content").html()
                    );
                },
                error: function () {
                    $("#home-container").html("Gagal memuat data.");
                },
            });
        });



        document
        .getElementById("penyisihanLKTI")
        .addEventListener("click", function (event) {
            event.preventDefault();

            // Sembunyikan semua konten
            const contents = document.querySelectorAll(
                ".main-content > section"
            );
            contents.forEach((content) => {
                content.style.display = "none";
            });

            // Tampilkan konten tabel
            document.getElementById("skor").style.display = "block";

            // Ambil data dari halaman lain menggunakan AJAX
            $.ajax({
                url: "/admin/penyisihanLKTI",
                success: function (result) {
                    $("#data-container").html(result);
                },
                error: function () {
                    $("#data-container").html("Gagal memuat data.");
                },
            });
        });


        
        document
        .getElementById("semifinalLKTI")
        .addEventListener("click", function (event) {
            event.preventDefault();

            // Sembunyikan semua konten
            const contents = document.querySelectorAll(
                ".main-content > section"
            );
            contents.forEach((content) => {
                content.style.display = "none";
            });

            // Tampilkan konten tabel
            document.getElementById("skor").style.display = "block";

            // Ambil data dari halaman lain menggunakan AJAX
            $.ajax({
                url: "/admin/semifinalLKTI",
                success: function (result) {
                    $("#data-container").html(result);
                },
                error: function () {
                    $("#data-container").html("Gagal memuat data.");
                },
            });
        });




        document
        .getElementById("finalLKTI")
        .addEventListener("click", function (event) {
            event.preventDefault();

            // Sembunyikan semua konten
            const contents = document.querySelectorAll(
                ".main-content > section"
            );
            contents.forEach((content) => {
                content.style.display = "none";
            });

            // Tampilkan konten tabel
            document.getElementById("skor").style.display = "block";

            // Ambil data dari halaman lain menggunakan AJAX
            $.ajax({
                url: "/admin/finalLKTI",
                success: function (result) {
                    $("#data-container").html(result);
                },
                error: function () {
                    $("#data-container").html("Gagal memuat data.");
                },
            });
        })
