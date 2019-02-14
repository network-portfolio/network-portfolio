@extends('layouts.app')

@section('content')
    <script>
        let ACTIVE_USER_NICKNAME = "{{ Auth::user()->nickname }}";
    </script>
    <app-header></app-header>
    <div class="text-center">
        <create-project></create-project>
    </div>
@endsection
