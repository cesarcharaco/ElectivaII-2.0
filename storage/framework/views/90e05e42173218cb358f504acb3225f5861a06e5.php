<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Escritorio
        <small>Panel de Control</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Escritorio</li>
    </ol>
</section>
<div class="container">
    <div class="row">
        <div class="col-xs-11">
            <div class="panel panel-default">
                <div class="panel-heading">Escritorio</div>

                <div class="panel-body">
                    Bienvenido al Proyecto Ejemplo de Electiva II
                </div>
            </div>
        </div>
    </div>
</div>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>