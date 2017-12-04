<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Personas
        <small>Nuevo Ingreso</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Personas</a></li>
        <li class="active">Nuevo</li>
    </ol>
</section>
<div class="container">
    <div class="row">
        <div class="col-xs-11">
            <?php echo $__env->make('alerts.requests', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Persona<br>
                Los campos con (<strong>*</strong>) son obligatorios</div>

                <div class="panel-body">
                    <?php echo Form::open(['route' => ['personas.store'], 'method' => 'post']); ?>

    
                         <?php echo $__env->make('admin.personas.partials.create-fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <a class="btn btn-danger pull-right btn-flat" href="<?php echo e(url('admin/personas')); ?>"><i class="fa fa-times"></i> Cancelar</a>
                      </div>
                    <?php echo Form::close(); ?> 
                        <!-- /.form-group -->
                </div>
            </div>
                
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>