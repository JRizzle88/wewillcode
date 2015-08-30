@extends('layout.account')

@section('content')

                <div class="wwc-panel">
                  <div class="wwc-panel-title">Supporters</div>
                  <div class="wwc-panel-body">
                    @if( $ideaCount == 0 )
                      <p>Submit an Idea to gain supporters.</p>
                      <p><a href="{{ url('account/ideas') }}" class="btn wwc-green-bg">Get Started!</a></p>
                    @else
                      @if( !$ideaSupporters->count())
                        <p>There doesn't appear to be any supporters for your Idea yet.</p>
                        <p>Maybe there are a few things you can try listed below.</p>
                      @else
                        @foreach($ideaSupporters as $i)
                        
                        @endforeach
                      @endif
                    @endif
                    
                  </div>
                </div>
	   
@endsection