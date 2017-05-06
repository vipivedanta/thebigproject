@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
    <div class="col-md-3">
    <ul class="list-group">
        <li class="list-group-item active">Work space</li>
          <li class="list-group-item">{{ HTML::link('/projects','Projects') }}</li>
          <li class="list-group-item">{{ HTML::link('/analytics','Analytics') }}</li>
          <li class="list-group-item">{{ HTML::link('/commits','Commits') }}</li>
        </ul>    
    </div>

    <div class="col-md-12"></div>

    </div>
</div>
@endsection
