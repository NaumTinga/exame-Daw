

<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content_header'); ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Actualizar Pacientes</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
            <li class="breadcrumb-item active">Pacientes</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="card card-secondary" style="width: 100%;">
		<div class="card-header">
		</div>
		<div class="card-body" style="padding: 20px;">
			<?php echo Form::model($paciente, ['method'=>'PATCH','action'=>['App\Http\Controllers\PacienteController@update', $paciente->id],'id'=>'form', 'files'=>true]); ?>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
						<div class="card-header p-2">
						</div><!-- /.card-header -->
						<div class="card-body">

								<div class="form-group row">
									<?php echo Form::label('nome','Nome:',['class'=>'col-sm-3 col-form-label']); ?>

									<div class="col-sm-9">
										<?php echo Form::text('nome',null,['class'=>'form-control' . ( $errors->has('nome') ? ' is-invalid' : '' )]); ?>

										<?php if($errors->has('nome')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('nome')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="form-group row">
									<?php echo Form::label('apelido','Apelido:',['class'=>'col-sm-3 col-form-label ']); ?>

									<div class="col-sm-9">
										<?php echo Form::text('apelido',null,['class'=>'form-control'. ( $errors->has('apelido') ? ' is-invalid' : '' ),'size'=>9]); ?>

										<?php if($errors->has('apelido')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('apelido')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="form-group row">
									<?php echo Form::label('dataNascimento','Data de Nascimento:' ,['class'=>'col-sm-3 col-form-label']); ?>

									<div class="col-sm-9">
										<?php echo Form::date('dataNascimento', null, [ 'class' => 'form-control ' . ( $errors->has('dataNascimento') ? ' is-invalid' : '' )]); ?>

										<?php if($errors->has('dataNascimento')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('dataNascimento')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>
										
								<div class="form-group row">
									<?php echo Form::label('sintomas','Sintomas:',['class'=>'col-sm-3 col-form-label']); ?>

									<div class="col-sm-9">
										<?php echo Form::textarea('sintomas',null,['class'=>'form-control' . ( $errors->has('sintomas') ? ' is-invalid' : '' ),'rows'=>3]); ?>	
										<?php if($errors->has('sintomas')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('sintomas')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>
                                <div class="form-group row">
									<?php echo Form::label('postoMedico','Posto Medico:',['class'=>'col-sm-3 col-form-label ']); ?>

									<div class="col-sm-9">
										<?php echo Form::text('postoMedico',null,['class'=>'form-control'. ( $errors->has('postoMedico') ? ' is-invalid' : '' ),'size'=>9]); ?>

										<?php if($errors->has('postoMedico')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('postoMedico')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-9 offset-3">
										<?php echo Form::submit('Actualizar',['class'=>'btn btn-primary']); ?>

									</div>
								</div>
						</div>
						</div><!-- /.card-body -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->
			<?php echo Form::close(); ?>

		</div>
	</div>
</div>
<!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mystuff\Naum\Laravel\Misau-WebApp\resources\views/admin/pacientes/edit.blade.php ENDPATH**/ ?>