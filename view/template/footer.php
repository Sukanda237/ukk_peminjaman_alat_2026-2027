<!-- =========================
     JAVASCRIPT
========================= -->

<script>
    // =========================
    // DARK MODE
    // =========================

    function toggleTheme() {

        document.body.classList.toggle("dark-mode");

        const icon = document.getElementById("themeIcon");
        const text = document.getElementById("themeText");

        if (document.body.classList.contains("dark-mode")) {

            icon.classList.remove("bi-moon-fill");
            icon.classList.add("bi-sun-fill");

            text.textContent = "Mode Terang";

            localStorage.setItem("theme", "dark");

        } else {

            icon.classList.remove("bi-sun-fill");
            icon.classList.add("bi-moon-fill");

            text.textContent = "Mode Gelap";

            localStorage.setItem("theme", "light");

        }

    }


    // =========================
    // SIMPAN TEMA
    // =========================

    window.onload = function () {

        const theme = localStorage.getItem("theme");

        if (theme === "dark") {

            document.body.classList.add("dark-mode");

            document.getElementById("themeIcon")
                .classList.remove("bi-moon-fill");

            document.getElementById("themeIcon")
                .classList.add("bi-sun-fill");

            document.getElementById("themeText")
                .textContent = "Mode Terang";

        }

    };


    // =========================
    // SIDEBAR MOBILE
    // =========================

    function toggleSidebar() {

        const sidebar = document.getElementById("sidebar");
        const overlay = document.getElementById("sidebarOverlay");
        const icon = document.getElementById("sidebarToggleIcon");

        sidebar.classList.toggle("show");
        overlay.classList.toggle("show");

        if (sidebar.classList.contains("show")) {
            icon.classList.remove("bi-list");
            icon.classList.add("bi-x-lg");
        } else {
            icon.classList.remove("bi-x-lg");
            icon.classList.add("bi-list");
        }
    }

    function closeSidebar() {

        const sidebar = document.getElementById("sidebar");
        const overlay = document.getElementById("sidebarOverlay");
        const icon = document.getElementById("sidebarToggleIcon");

        sidebar.classList.remove("show");
        overlay.classList.remove("show");

        icon.classList.remove("bi-x-lg");
        icon.classList.add("bi-list");
    }

    // Tutup sidebar setelah memilih menu pada perangkat mobile.
    document.querySelectorAll(".sidebar a").forEach(function (link) {
        link.addEventListener("click", function () {
            if (window.innerWidth <= 768) {
                closeSidebar();
            }
        });
    });

    // Jika ukuran layar berubah dari mobile ke desktop,
    // pastikan overlay tidak tertinggal.
    window.addEventListener("resize", function () {
        if (window.innerWidth > 768) {
            closeSidebar();
        }
    });
</script>

</body>

</html>