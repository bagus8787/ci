<!-- Sidebar -->
<ul class="sidebar navbar-nav">
<!--
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Products</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products/new') ?>">New Product</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">List Product</a>
        </div>
    </li>
-->
    <li class="nav-item <?php echo $this->uri->segment(2) == 'master_pekerjaan' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/master_pekerjaan') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Master Pekerjaan</span></a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'acpns' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/acpns') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>ACPNS</span></a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'agamas' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/agamas') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Agama</span></a>
    </li>

     <li class="nav-item <?php echo $this->uri->segment(2) == 'pegawai' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/pegawai') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Pegawai</span></a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'alkab' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/alkab') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Alkab</span></a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'alkodes' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/alkodes') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Alkodes</span></a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'alkokab' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/alkokab') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Alkokab</span></a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'alkokec' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/alkokec') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Alkokec</span></a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'bkartu' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/bkartu') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Bkartu</span></a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'dikfung' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/dikfung') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Dikfung</span></a>
    </li>


    <li class="nav-item <?php echo $this->uri->segment(2) == 'dikstr' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/dikstr') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Dikstr</span></a>
    </li>


    <li class="nav-item <?php echo $this->uri->segment(2) == 'dipilih' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/dipilih') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Dipilih</span></a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'dukpej' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/dukpej') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Dukpej</span></a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'dukpns' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/dukpns') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Dukpns</span></a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'eselon' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/eselon') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Eselon</span></a>
    </li>
    
</ul>