<div class="form-group<?php echo e($errors->has('nombres') ? ' has-error' : ''); ?>">
	<?php echo Form::label('nombres','* Nombres'); ?>

	<?php echo Form::text('nombres',null,['class' => 'form-control','required' => 'required','placeholder' => 'Ej: Martin José', 'title' => 'Ingrese el/los Nombre(s) del Paciente', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase()', 'style'=>$errors->has('nombres') ? 'border-color: red; border: 1px solid red;': '']); ?>

</div>

<div class="form-group<?php echo e($errors->has('apellidos') ? ' has-error' : ''); ?>">
	<?php echo Form::label('apellidos','* Apellidos'); ?>

	<?php echo Form::text('apellidos',null,['class' => 'form-control','required' => 'required','placeholder' => 'Ej: Campos Ribas', 'title' => 'Ingrese el/los Apellido(s) del Paciente', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase()', 'style'=>$errors->has('apellidos') ? 'border-color: red; border: 1px solid red;': '']); ?>

</div>

<div class="form-group<?php echo e($errors->has('cedula') ? ' has-error' : ''); ?>">
	<?php echo Form::label('cedula','* Cédula'); ?>

	
	<select class="form-control select2" style="width: 70px;" name="nacionalidad" id="nacionalidad" title="Seleccione la nacionalidad del paciente" >
		<option value="V">V</option>
		<option value="E">E</option>
	</select>
	<?php echo Form::text('cedula', null, ['class' => 'form-control','placeholder' => 'Ej: 1234567','required' => 'required', 'title' => 'Ingrese la cédula del paciente sin separación por punto(.) o espacios','maxlength' => '8', 'style'=>$errors->has('cedula') ? 'border-color: red; border: 1px solid red;': '']); ?>

</div>
