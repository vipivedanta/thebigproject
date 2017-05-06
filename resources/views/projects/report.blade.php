@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-md-12">
<a class="btn btn-primary pull-right" href="{{ url('projects/create') }}"><i class="glyphicon glyphicon-plus"></i>&nbsp;New Project</a>
</div>
</div>

<div class="clearfix"></div>

<div class="row">

	@foreach($projects as $project)
	  <div class="col-sm-4 col-md-4">
	    <div class="thumbnail">
	      {{ HTML::image('icons/project.png') }}
	      <div class="caption">
	        <h3 class="text text-center">{{ $project->name }}</h3>
	        <p class="text text-center">{{ $project->description }}</p>
	        <p class="text text-center"><a href="#" class="btn btn-default" role="button">View</a> 
	        <a href="#" class="btn btn-default" role="button">Analytics</a></p>
	      </div>
	    </div>
	  </div>
	@endforeach

</div>

@endsection