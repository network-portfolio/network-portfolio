@extends('layouts.app')

@section('content')
    <app-header></app-header>
    <div class="text-center">
        Start your portfolio today!
        <a href="login/github">
            <button class="mt-2 bg-primary1 hover:bg-primary3 text-white font-bold py-1 px-4 rounded m-2">Register with github</button>
        </a>
    </div>
@endsection