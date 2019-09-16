<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="#" class="active"><i class="fa fa-map"></i> <span>Dashboard</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fa fa-home"></i> <span>Data Master</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="<?= base_url('mess/index') ?>" class="">Mess</a></li>
                            <li><a href="<?= base_url('kamar/index') ?>" class="">Kamar</a></li>
                            <li><a href="<?= base_url('karyawan/index') ?>" class="">Karyawan</a></li>
                            <li><a href="<?= base_url('pengawas/index') ?>" class="">Pengawas</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="<?= base_url('penyewaan/index') ?>" class=""><i class="lnr lnr-pencil"></i> <span>Penyewaan</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->