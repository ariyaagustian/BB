<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <?php echo '<p class="welcome"><b> <text style="font-size:150%;">&#9786</text> <i>Welcome </i>' . $this->session->userdata('nama') . "!</b></p>"; ?>
            </li>
            <li>
                <a href="<?=base_url()?>User_controller/dash"><i class="fa fa-home fa-fw"></i> Dashboard</a>
            </li>
            <?php if($this->session->userdata('level') == 1): ?>
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> Administrator<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="<?=base_url('admin/user_list')?>"> &raquo; User List</a> </li>
                        <li> <a href="<?=base_url()?>">&raquo; Ranking List</a> </li>
                    </ul>
                </li>
            <?php endif; ?>
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i> Other Menu Sample<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="#">&raquo; Timeline</a> </li>
                    <li> <a href="#">&raquo; Komentar</a> </li>
                    <li> <a href="#">&raquo; Thread</a> </li>
                </ul>
            </li>


        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>
