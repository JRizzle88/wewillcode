@extends('layout.account')

@section('content')

<div class="wwc-panel">
    <div class="wwc-panel-title">Ideas</div>
    <div class="wwc-panel-body">
        @if( !$ideas->count())
            <p>Submit your first idea!</p>
            <p><a href="{{ url('account/ideas/process')}}" class="btn wwc-green-bg"> Let's Get Started</a></p>
        @else
            <div class="single-idea">
                @foreach($ideas as $i)
                    <div class="single-idea-listing">
                        <span class="idea-id">{{ $i->id }}</span>
                        <span class="idea-name">{{ $i->name }}</span>
                        <span class="idea-actions">
                            <a href=""><i class="fa fa-eye"></i></a>
                            <a href=""><i class="fa fa-edit"></i></a>
                            <a href=""><i class="fa fa-envelope"></i></a>
                        </span>
                    </div>
                    <div class="single-idea-listing-data" style="display:none">
                        <p>{{ $i->description_short }}</p>
                        <p>{{ $i->description_long_1 }}</p>
                        <p>{{ $i->description_long_2 }}</p>
                        <p>{{ $i->ideaDetails->funding_goal }}</p>
                        <p>{{ $i->ideaDetails->date_start }}</p>
                        <p>{{ $i->ideaDetails->date_end }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>

@endsection
