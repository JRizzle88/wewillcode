@extends('layout.account')

@section('content')

<div class="wwc-panel">
    <div class="wwc-panel-title">Ideas</div>
    <div class="wwc-panel-body">
        @if(!$ideas->count())
            <p>Submit your first idea!</p>
            <p><a href="{{ url('account/ideas/process')}}" class="btn wwc-green-bg"> Let's Get Started</a></p>
        @else
            <div class="ideas">
                <ul class="collection">
                @foreach($ideas as $i)
                    <li class="collection-item single-idea-listing">
                        <div><span class="idea-name">{{ $i->name }}</span>
                            <a href="#!" class="secondary-content">
                                <i class="material-icons">view_module</i>
                            </a>
                        </div>
                        <div class="card-panel blue lighten-5 z-depth-0 single-idea-listing-data" style="display:none">
                            <!--<p>{{ $i->description_short }}</p>
                            <p>{{ $i->description_long_1 }}</p>
                            <p>{{ $i->description_long_2 }}</p>-->
                            <p>{{ $i->ideaDetails->funding_goal }}</p>
                            <p>{{ $i->ideaDetails->date_start }}</p>
                            <p>{{ $i->ideaDetails->date_end }}</p>
                        </div>
                    </li>
                @endforeach
                </ul>
            </div>
            <a href="{{ url('account/ideas/process')}}" class="btn wwc-green-bg"> Let's Get Started</a>
        @endif
    </div>
</div>

@endsection
