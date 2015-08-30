@extends('layout.account')

@section('content')

                <div class="wwc-panel">
                  <div class="wwc-panel-title">Ideas</div>
                  <div class="wwc-panel-body">
                    @if( !$ideas->count())
                      <p>Submit your first idea!</p>
                      <p><a href="" class="btn wwc-green-bg"> Let's Get Started</a></p>
                    @else
                      @foreach($ideas as $i)
                      
                      @endforeach
                    @endif
                  </div>
                </div>
  
@endsection