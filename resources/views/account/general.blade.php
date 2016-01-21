@extends('layout.account')

@section('content')

<div class="wwc-panel">
    <div class="wwc-panel-title"><i class="material-icons">person_pin</i> General</div>
    <div class="wwc-panel-body">
        <p>Email: {{ $user->email }}</p>
        <p>Display: {{ $user->display_name }}</p>
        <p>Name: {{ $user->first_name }} {{ $user->last_name }}</p>
        <p>Points: {{ $user->points }}</p>
    </div>
</div>
@endsection
