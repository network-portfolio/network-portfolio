@extends('layouts.app')

@section('content')
    <app-header></app-header>
    <div class="text-center">
        <edit-project></edit-project>
        <a href="/projects">
            <button class="mt-2 bg-primary1 hover:bg-primary3 text-white font-bold py-1 px-4 rounded m-2">Back</button>
        </a>        
    </div>
@endsection
