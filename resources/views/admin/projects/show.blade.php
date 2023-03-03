@extends('layouts.admin')
@section('content')
<div class="card" style="width: 18rem;">
  <img src="{{ $project->cover_img }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$project->project_title}}</h5>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@endsection