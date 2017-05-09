@extends('layouts.app')

@section('content')

<div class="row">
<div class="container">

<div class="col-md-6">

@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif

{!! Form::open(array('method' => 'PUT', 'route' => ['projects.update',$project->id] )) !!}

{{ csrf_field() }}

<div class="form-group">
	<label>Project Name</label>
	{!! Form::text('name',$project->name,['class' => 'form-control']) !!}
	@if($errors->has('name'))<span class="help-block text-danger">{{ $errors->first('name') }}</span>@endif
</div>

<div class="form-group">
	<label>Description</label>
	{!! Form::textarea('description',$project->description,['class' => 'form-control','rows' => 5]) !!}
	@if($errors->has('description'))<span class="help-block text-danger">{{ $errors->first('description') }}</span>@endif
</div>

<div class="form-group">
<input type="submit" value="Save" class="btn btn-success pull-right" />
</div>

{!! Form::close() !!}


</div>

</div>
</div>

@endsection