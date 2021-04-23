

<?php $__env->startSection('title', 'Medicine'); ?>

<?php $__env->startSection('content_header'); ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Adicionar Utilizadores</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
            <li class="breadcrumb-item active">Utilizadores</li>
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
			<?php echo Form::open(['method'=>'POST','action'=>['App\Http\Controllers\UsuarioController@store'],'id'=>'form','files'=>true]); ?>

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
									<?php echo Form::label('name','Nome:',['class'=>'col-sm-3 col-form-label']); ?>

									<div class="col-sm-9">
										<?php echo Form::text('name',null,['class'=>'form-control' . ( $errors->has('name') ? ' is-invalid' : '' )]); ?>

										<?php if($errors->has('name')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('name')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="form-group row">
									<?php echo Form::label('email','E-mail:',['class'=>'col-sm-3 col-form-label']); ?>

									<div class="col-sm-9">
										<?php echo Form::email('email',null,['class'=>'form-control'. ( $errors->has('email') ? ' is-invalid' : '' )]); ?>

										<?php if($errors->has('email')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('email')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="form-group row">
									<?php echo Form::label('password','Palavra-passe:',['class'=>'col-sm-3 col-form-label']); ?>

									<div class="col-sm-9">
										<?php echo Form::password('password',['class'=>'form-control' . ( $errors->has('password') ? ' is-invalid' : '' )]); ?>

										<?php if($errors->has('password')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('password')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>

								<div class="form-group row d-none">
									<?php echo Form::label('is_active','Estado:',['class'=>'col-sm-3 col-form-label']); ?>

									<div class="col-sm-9">
										<?php echo Form::select('is_active',array(0=>'Inactivo',1=>'Activo'),null,['class'=>'form-control custom-select']); ?>

										<?php if($errors->has('is_active')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('is_active')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="form-group row">
									<?php echo Form::label('role_id','Função:',['class'=>'col-sm-3 col-form-label']); ?>

									<div class="col-sm-9">
										<?php echo Form::select('role_id',$roles,null,['class'=>'form-control custom-select']); ?>

										<?php if($errors->has('role_id')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('role_id')); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="form-group row">
									<?php echo Form::label('description','Descrição:',['class'=>'col-sm-3 col-form-label']); ?>

									<div class="col-sm-9">
										<?php echo Form::textarea('description',null,['class'=>'form-control' . ( $errors->has('description') ? ' is-invalid' : '' ),'rows'=>3]); ?>	
										<small>Breve descrição sobre o utilizador.</small>
										<?php if($errors->has('description')): ?>
											<div class="invalid-feedback">
												<strong><?php echo e($errors->first('description')); ?></strong>
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mystuff\Naum\Laravel\Misau-WebApp\resources\views/admin/usuarios/create.blade.php ENDPATH**/ ?>