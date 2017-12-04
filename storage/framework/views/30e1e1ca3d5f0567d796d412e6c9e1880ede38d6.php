<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('logo-mini3.png')); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p></p>
                <a href="#"><i class="fa fa-circle text-success"></i>En Línea</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU DE NAVEGACIÓN</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Personas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo e(URL('admin/personas')); ?>"><i class="fa fa-circle-o"></i>Registros</a></li>
                    <li><a href="<?php echo e(URL('admin/personas/create')); ?>"><i class="fa fa-circle-o"></i>Nuevo</a></li>
                </ul>
            </li>
            
        </ul>
    </section>
<!-- /.sidebar -->
</aside>