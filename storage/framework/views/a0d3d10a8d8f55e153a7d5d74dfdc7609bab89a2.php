

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('vendor/fontawesome-free/css/all.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content_header'); ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Medicos</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
        <li class="breadcrumb-item active">Medicos</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="card card-secondary" style="width: 100%;">
		<div class="card-header">
		</div>
		<div class="container-fluid" style="padding: 20px;">
		<div class="text-center">
			<?php if(Session::has('success')): ?>
				<div class="alert alert-success">
					<?php echo e(session('success')); ?> 
				</div>
			<?php endif; ?>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Todos Medicos</h3>
					</div>
					<div class="card-body  table-responsive">
					<table id="table" class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Nome</th>
								<th>Apelido</th>
								<th>Data Nascimento</th>
								<th>Especialidade</th>
								<th>Posto Medico</th>
								<th>Acção</th>
							</tr>
						</thead>
						<tbody>
							<?php if($medicos): ?>
								<?php $__currentLoopData = $medicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($medico->id); ?></td>
										<td><?php echo e($medico->nome); ?></td>
										<td><?php echo e($medico->apelido); ?></td>
										<td><?php echo e($medico->dataNascimento); ?></td>
										<td><?php echo e($medico->especialidade); ?></td>
										<td><?php echo e($medico->postoMedico); ?></td>
										<td class="text-left py-0 align-middle">
											<?php echo Form::open(['method'=>'DELETE','action'=>['App\Http\Controllers\MedicoController@destroy',$medico->id]]); ?>

											<div class="btn-group btn-group-sm">
												<a href="<?php echo e(route('medicos.edit',$medico->id)); ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
												<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
											</div>
										<?php echo Form::close(); ?>

										</td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mystuff\Naum\Laravel\Misau-WebApp\resources\views/admin/medicos/index.blade.php ENDPATH**/ ?>