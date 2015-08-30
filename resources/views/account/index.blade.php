@extends('layout.account')

@section('content')

                <div class="wwc-panel">
                  <div class="wwc-panel-title">General Information</div>
                  <div class="wwc-panel-body">
                    <p><i class="material-icons">person_pin</i> {{Auth::user()->email}}</p>
                  </div>
                </div>
              
@endsection