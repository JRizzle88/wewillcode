@extends('layout.default')

@section('content')

{{-- @include('ideas.partials._filter') --}}

<div class="wwc-ideas">
    <div class="">
        <div class="row">
            @if(!$ideas->count())
                There are no Ideas posted at this time. Please check back soon.
            @else
                @foreach($ideas as $i)
                    <div class="col s12 m6 l3">
                        <div class="card wwc-single-idea z-depth-0">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="//placehold.it/440x250" />

                            </div>
                            <div class="card-content">
                                <span class="card-title">{{ $i->name }}</span>
                                <p class="blue-grey-text lighten-4">{{ $i->description_short }}</p>
                                <!--<div class="chip">Starting: {{ $i->ideaDetails->date_start }}</div>-->
                            </div>
                            <div class="card-action wwc-single-idea-actions">
                                <div class="chip left">$0</div>
                                <div class="chip right">${{ $i->ideaDetails->funding_goal }}</div>
                                <div class="progress">
                                    <div class="determinate" style="width: 50%"></div>
                                </div>
                                <!--<a href="" class="btn wwc-green-bg">Read More</a>
                                <a href="" class="btn wwc-green-bg">Support</a>-->
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col s12 m6 l3">
                    <div class="card wwc-single-idea">
                        <div class="card-image">
                            <img src="//placehold.it/440x250" />
                            <span class="card-title">Promotable</span>
                        </div>
                        <div class="card-content">
                            <a href="" class="btn wwc-green-bg">Submit an Idea Today!</a>
                        </div>
                        <!--<div class="card-action">
                            <a href="" class="btn wwc-green-bg"></a>
                        </div>-->
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
