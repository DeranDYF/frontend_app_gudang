<aside class="left-sidebar">
    <div>
        <nav class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link <?= $menu == 'barang' ? 'active' : ''; ?>"
                        href="<?= base_url('barang') ?>" aria-expanded="false">
                        <span class="rounded-3">
                            <i class="ti ti-archive"></i>
                        </span>
                        <span class="hide-menu">Barang</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link <?= $menu == 'masuk' ? 'active' : ''; ?>"
                        href="<?= base_url('form-masuk') ?>" aria-expanded="false">
                        <span class="rounded-3">
                            <i class="ti ti-file-text"></i>
                        </span>
                        <span class="hide-menu">Form Masuk</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link <?= $menu == 'keluar' ? 'active' : ''; ?>"
                        href="<?= base_url('form-keluar') ?>" aria-expanded="false">
                        <span class="rounded-3">
                            <i class="ti ti-file-text"></i>
                        </span>
                        <span class="hide-menu">Form Keluar</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link <?= $menu == 'pengambilan' ? 'active' : ''; ?>"
                        href="<?= base_url('pengambilan') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-notebook"></i>
                        </span>
                        <span class="hide-menu">Pengambilan</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>