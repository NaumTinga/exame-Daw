

<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content_header'); ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Adicionar Consulta</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
            <li class="breadcrumb-item active">Consultas</li>
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
			<?php echo Form::open(['method'=>'POST','action'=>['App\Http\Controllers\ConsultaController@store'],'id'=>'form','files'=>true]); ?>

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
									<?php echo Form::label('paciente_id','Paciente:',['class'=>'col-sm-3 col-form-label']); ?>

									<div class="col-sm-9">
										<?php echo Form::select('paciente_id',$pacientes,null,['class'=>'form-control custom-select']); ?>

										<?php if($errors->has('paciente_id')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('paciente_id')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="form-group row">
									<?php echo Form::label('medico_id','Medico:',['class'=>'col-sm-3 col-form-label ']); ?>

									<div class="col-sm-9">
										<?php echo Form::select('medico_id',$medicos,null,['class'=>'form-control custom-select']); ?>

										<?php if($errors->has('medico_id')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('medico_id')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="form-group row">
									<?php echo Form::label('dataConsulta','Data de Consulta:' ,['class'=>'col-sm-3 col-form-label']); ?>

									<div class="col-sm-9">
										<?php echo Form::date('dataConsulta', null, [ 'class' => 'form-control ' . ( $errors->has('dataConsulta') ? ' is-invalid' : '' )]); ?>

										<?php if($errors->has('dataConsulta')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('dataConsulta')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>
										
		
                        
								<div class="form-group row">
									<div class="col-md-9 offset-3">
										<?php echo Form::submit('Adicionar',['class'=>'btn btn-primary']); ?>

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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mystuff\Naum\Laravel\Misau-WebApp\resources\views/admin/consultas/create.blade.php ENDPATH**/ ?>