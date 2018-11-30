@extends('layouts.app')

@section('body')
    <app-header></app-header>
    <div class="bg-cover h-screen" v-bind:style="{ backgroundImage: 'url(https://images.unsplash.com/photo-1489710437720-ebb67ec84dd2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2fe1fcbff362a3ba7a8eed548f81430b&auto=format&fit=crop&w=1650&q=80&gravity=north)' }">
        <div class="flex justify-center items-center h-full">
            <a href="/projects">
                <button class="bg-primary1 p-2 rounded hover:bg-primary3 text-white font-bold mr-2 p-2 px-4 text-xl">browse projects</button>
            </a>
            <button class="bg-transparent hover:bg-primary1 text-white font-semibold hover:text-white py-2 px-4 border border-primary1 hover:border-transparent rounded">add your own</button>
        </div>
    </div>
@endsection
