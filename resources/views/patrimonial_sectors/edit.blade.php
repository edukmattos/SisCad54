@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
  		<li class="breadcrumb-item">Administração</li>
  		<li class="breadcrumb-item">Ativos</li>
  		<li class="breadcrumb-item"><a href="{!! route('patrimonial_sectors') !!}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> <b>Setores</b></a></li>
  		<li class="breadcrumb-item"><b>Alteração</b></li>
	</ol>

	{!! Form::model($patrimonial_sector, ['route' => ['patrimonial_sectors.update', $patrimonial_sector->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('patrimonial_sectors.form')

	{!! Form::close() !!}
	    
@endsection