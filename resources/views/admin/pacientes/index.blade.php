@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css') }}">
@stop

@section('title')

@section('content_header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Pacientes</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
        <li class="breadcrumb-item active">Pacientes</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@stop

@section('content')
<div class="row">
	<div class="card card-secondary" style="width: 100%;">
		<div class="card-header">
		</div>
		<div class="container-fluid" style="padding: 20px;">
		<div class="text-center">
			@if(Session::has('success'))
				<div class="alert alert-success">
					{{session('success')}} 
				</div>
			@endif
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Todos Pacientes</h3>
					</div>
					<div class="card-body  table-responsive">
					<table id="table" class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Nome</th>
								<th>Apelido</th>
								<th>Data Nascimento</th>
								<th>Sintomas</th>
								<th>Posto Medico</th>
								<th>Acção</th>
							</tr>
						</thead>
						<tbody>
							@if($pacientes)
								@foreach($pacientes as $paciente)
									<tr>
										<td>{{$paciente->id}}</td>
										<td>{{$paciente->nome}}</td>
										<td>{{$paciente->apelido}}</td>
										<td>{{$paciente->dataNascimento}}</td>
										<td>{{$paciente->sintomas}}</td>
										<td>{{$paciente->postoMedico}}</td>
										<td class="text-left py-0 align-middle">
											{!! Form::open(['method'=>'DELETE','action'=>['App\Http\Controllers\PacienteController@destroy',$paciente->id]]) !!}
											<div class="btn-group btn-group-sm">
												<a href="{{route('pacientes.edit',$paciente->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
												<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
											</div>
										{!! Form::close() !!}
										</td>
									</tr>
								@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- /.row -->
@stop