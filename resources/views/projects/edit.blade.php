@extends('layouts.app')

@section('content')
    <app-header></app-header>
    <div class="text-center">
        <edit-project project-id={{ $projectId }}></edit-project>        
    </div>
@endsection
