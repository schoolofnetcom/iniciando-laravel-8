@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>listagem de usuarios</h2>
            <ul>
                @foreach($usuarios as $user)
                <li>{{ $user->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
