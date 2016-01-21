@extends('layout.account')

@section('content')
<div class="wwc-panel">
    <div class="wwc-panel-title"><i class="material-icons">person_pin</i> Profile</div>
    <div class="wwc-panel-body">
        <p>Company Name: {{ $user->user_information->company_name }}</p>
        <p>Address: {{ $user->user_information->address_1 }}</p>
        <p>Address 2: {{ $user->user_information->address_2 }}</p>
        <p>City: {{ $user->user_information->city }}</p>
        <p>State: {{ $user->user_information->state }}</p>
        <p>Country: {{ $user->user_information->country }}</p>
        <p>Phone: {{ $user->user_information->phone }}</p>
        <p>Phone Secondary: {{ $user->user_information->phone_secondary }}</p>
    </div>
</div>

<div class="wwc-panel">
    <div class="wwc-panel-title"><i class="material-icons">person_pin</i> Socials</div>
    <div class="wwc-panel-body">
        <p>LinkedIn: {{ $user->user_information->linkedin }}</p>
        <p>Twitter: {{ $user->user_information->twitter }}</p>
        <p>Instagram: {{ $user->user_information->instagram }}</p>
        <p>Facebook: {{ $user->user_information->facebook }}</p>
        <p>Google +: {{ $user->user_information->googleplus }}</p>
    </div>
</div>
@endsection
