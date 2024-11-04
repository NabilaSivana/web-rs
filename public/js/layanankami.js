$(document).ready(function () {
    // Ketika tombol ditekan
    $(".nav-button").click(function () {
        // Log untuk memastikan klik terdeteksi
        console.log("Button clicked:", $(this).data("target"));

        // Hapus kelas 'active-btn' dari semua tombol dan tambahkan ke tombol yang diklik
        $(".nav-button").removeClass("active-btn");
        $(this).addClass("active-btn");

        // Sembunyikan semua konten dan tampilkan konten yang sesuai
        var target = $(this).data("target");
        $(".section-content").removeClass("active-content");
        $("#" + target).addClass("active-content");

        // Log untuk memeriksa apakah konten yang benar ditampilkan
        console.log("Content displayed:", target);
    });
});
// JavaScript for interactive elements (optional)

// Example: Toggle information on click
const infoButtons = document.querySelectorAll(".info i");

infoButtons.forEach((button) => {
    button.addEventListener("click", () => {
        const infoText = button.nextElementSibling;
        infoText.classList.toggle("hidden");
    });
});
$(document).ready(function () {
    $(".content-btn").click(function () {
        var contentId = $(this).data("content");

        // Sembunyikan semua konten
        $(".content").hide();

        // Tampilkan konten yang sesuai
        $("#" + contentId).show();
    });

    // Tampilkan konten pertama secara default
    $("#content1").show();
});
