<!-- Overlay mobile: klik di luar sidebar untuk menutup -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>


<!-- =========================
     MAIN CONTENT
========================= -->
<div class="main-content">

    <!-- TOPBAR -->
    <div class="topbar">

        <div class="d-flex align-items-center gap-3">

            <button class="btn btn-light d-md-none" id="sidebarToggle" type="button" onclick="toggleSidebar()"
                aria-label="Buka atau tutup menu">
                <i class="bi bi-list" id="sidebarToggleIcon"></i>
            </button>

            <div class="topbar-title">
                Dashboard
            </div>

        </div>

        <div class="d-flex align-items-center gap-3">

            <!-- Dark Mode -->
            <button class="btn btn-light" id="themeButton" onclick="toggleTheme()">

                <i class="bi bi-moon-fill" id="themeIcon"></i>

                <span class="d-none d-sm-inline" id="themeText">
                    Mode Gelap
                </span>

            </button>

            <!-- User -->
            <div class="d-none d-md-flex align-items-center gap-2">

                <i class="bi bi-person-circle fs-4"></i>

                <div>
                    <small class="text-muted">Login sebagai</small>
                    <div class="fw-semibold">Administrator</div>
                </div>

            </div>

        </div>

    </div>