@extends('adminlte::page')

@section('title')

@section('content_header')
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
@stop

@section('content')
<div class="row">
	<div class="card card-secondary" style="width: 100%;">
		<div class="card-header">
		</div>
		<div class="card-body" style="padding: 20px;">
			{!! Form::open(['method'=>'POST','action'=>['App\Http\Controllers\ConsultaController@store'],'id'=>'form','files'=>true]) !!}
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
									{!! Form::label('paciente_id','Paciente:',['class'=>'col-sm-3 col-form-label']) !!}
									<div class="col-sm-9">
										{!! Form::select('paciente_id',$pacientes,null,['class'=>'form-control custom-select']) !!}
										@if($errors->has('paciente_id'))
											<div class="invalid-feedback">
												<strong>{{ $errors->first('paciente_id') }}</strong>
											</div>
										@endif
									</div>
								</div>
								<div class="form-group row">
									{!! Form::label('medico_id','Medico:',['class'=>'col-sm-3 col-form-label ']) !!}
									<div class="col-sm-9">
										{!! Form::select('medico_id',$medicos,null,['class'=>'form-control custom-select']) !!}
										@if($errors->has('medico_id'))
											<div class="invalid-feedback">
												<strong>{{ $errors->first('medico_id') }}</strong>
											</div>
										@endif
									</div>
								</div>
								<div class="form-group row">
									{!! Form::label('dataConsulta','Data de Consulta:' ,['class'=>'col-sm-3 col-form-label'])  !!}
									<div class="col-sm-9">
										{!! Form::date('dataConsulta', null, [ 'class' => 'form-control ' . ( $errors->has('dataConsulta') ? ' is-invalid' : '' )]) !!}
										@if($errors->has('dataConsulta'))
											<div class="invalid-feedback">
												<strong>{{ $errors->first('dataConsulta') }}</strong>
											</div>
										@endif
									</div>
								</div>
										
		
                        
								<div class="form-group row">
									<div class="col-md-9 offset-3">
										{!! Form::submit('Adicionar',['class'=>'btn btn-primary']) !!}
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
			{!! Form::close() !!}
		</div>
	</div>
</div>
<!-- /.row -->
@stop