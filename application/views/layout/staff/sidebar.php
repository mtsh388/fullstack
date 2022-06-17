<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link <?= ($title === 'Dashboard') ? 'active' : '' ?>" aria-current="page" href="<?= base_url() ?>dashboard/staff">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($title === 'Donasi') ? 'active' : '' ?>" aria-current="page" href="<?= base_url() ?>donasi/staff">

                            Donasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($title === 'Donasi Program') ? 'active' : '' ?>" aria-current="page" href="<?= base_url() ?>donasi/program_staff">
                            Donasi Program
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($title === 'Donatur') ? 'active' : '' ?>" aria-current="page" href="<?= base_url() ?>donatur/staff">
                            Donatur
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($title === 'Calon Donatur') ? 'active' : '' ?>" aria-current="page" href="<?= base_url() ?>calon_donatur/staff">
                            Calon Donatur
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($title === 'Laporan Bulanan') ? 'active' : '' ?>" aria-current="page" href="<?= base_url() ?>laporan_telemarketing/">
                            Laporan Bulanan
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Akun</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link <?= ($title === 'My Profile') ? 'active' : '' ?>" aria-current="page" href="<?= base_url() ?>auth/profile/<?= $user['nama'] ?>">
                            My Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($title === 'Logout') ? 'active' : '' ?>" aria-current="page" href="<?= base_url() ?>auth/logout_staff">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>