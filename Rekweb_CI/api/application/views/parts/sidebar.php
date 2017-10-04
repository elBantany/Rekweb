<div class="sidebar" data-color="green" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo">
        <a href="<?= site_url('buku'); ?>" class="simple-text">
            BooKooKoo
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="<?= site_url('buku'); ?>">
                    <i class="material-icons">dashboard</i>
                    <p>Buku</p>
                </a>
            </li>
            <li>
                <a href="<?= site_url('buku/add'); ?>">
                    <i class="fa fa-plus"></i>
                    <p>Tambah Data Buku</p>
                </a>
            </li>
            <li>
                <a href="<?= site_url('kategori'); ?>">
                    <i class="material-icons">dashboard</i>
                    <p>Kategori Buku</p>
                </a>
            </li>
            <li>
                <a href="<?= site_url('bukategoriku/add'); ?>">
                    <i class="fa fa-plus"></i>
                    <p>Tambah Kategori Buku</p>
                </a>
            </li>
        </ul>
    </div>
</div>