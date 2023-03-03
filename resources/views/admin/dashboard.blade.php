@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="es_title es_red mt-5">
        {{ __('Dashboard') }} <a href="{{route('admin.projects.create') }}"> <button type="button" class="btn es_button btn-sm">Add new</button> </a>
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <!-- <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> -->

        </div>
    </div>
</div>
@endsection
