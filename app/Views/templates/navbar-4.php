<nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="<?= base_url(); ?>../index.html">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="<?= base_url(); ?>../assets/img/icons/logo.png" alt="G-Finishing" width="27" />
                    <p class="logo-text ms-2 d-none d-sm-block">G-Finishing</p>
                </div>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-0 me-2 uil-chart-pie"></span>Beranda</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li><a class="dropdown-item" href="<?= base_url(); ?>../index.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                        </a></li>
                    <li><a class="dropdown-item" href="<?= base_url(); ?>../dashboard/project-management.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                        </a></li>
                    <li><a class="dropdown-item" href="<?= base_url(); ?>../dashboard/crm.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                        </a></li>
                    <li><a class="dropdown-item" href="<?= base_url(); ?>../apps/social/feed.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                        </a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <span class="uil fs-0 me-2 uil-files-landscapes-alt"></span>E-Resep
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <span class="uil fs-0 me-2 uil-layers"></span>Inventori
                </a>
                <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                    <div class="border-0 scrollbar" style="max-height: 60vh;">
                        <div class="px-3 pt-4 pb-3 img-dropdown">
                            <div class="row gx-4 gy-5">
                                <div class="col-12 col-sm-6 col-md-6">
                                    <div class="dropdown-item-group">
                                        <span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Manajemen Stok</h6>
                                    </div>
                                    <a class="dropdown-link" href="#">Opname</a>
                                    <a class="dropdown-link" href="#">Stok Awal</a>
                                    <a class="dropdown-link" href="#">Transfer</a>
                                    <a class="dropdown-link" href="#">Alur</a>
                                    <a class="dropdown-link" href="#">Penyesuaian</a>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6">
                                    <div class="dropdown-item-group">
                                        <span class="me-2" data-feather="shopping-cart" style="stroke-width:2;"></span>
                                        <h6 class="dropdown-item-title">Order</h6>
                                    </div>
                                    <a class="dropdown-link" href="#">Jadwal Produksi</a>
                                    <a class="dropdown-link" href="#">Pembuatan (MTO)</a>
                                    <a class="dropdown-link" href="#">Pemakaian</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <span class="uil fs-0 me-2 uil-folder"></span>Master
                </a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li>
                        <a class="dropdown-item" href="<?= site_url('master/item#desain'); ?>">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bookmark"></span>Item</div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?= site_url('master/umum'); ?>">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="settings"></span>Umum</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                    <img class="rounded-circle " src="<?= base_url(); ?>../assets/img/team/40x40/57.webp" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                    <div class="card-body p-0">
                        <div class="text-center pt-4 pb-3">
                            <div class="avatar avatar-xl ">
                                <img class="rounded-circle " src="<?= base_url(); ?>../assets/img/team/72x72/57.webp" alt="" />
                            </div>
                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                        </div>
                        <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                        <ul class="nav d-flex flex-column mb-2 pb-1">
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                        </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                        <ul class="nav d-flex flex-column my-3">
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                        </ul>
                        <hr />
                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>