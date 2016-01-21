@extends('layout.account')

@section('content')

<div class="wwc-panel">
    <!--<div class="wwc-panel-title">New Idea</div>-->
    <div class="">
        <!--<form id="create-idea-form" action="POST" url="ideas/process/save">-->
        {!! Form::model(new App\Idea, ['id' => 'create-idea-form', 'method' => 'POST', 'url' => ['account/ideas/process/save']]) !!}
            <ul id="idea-steps-progressbar">
        		<li class="active">Basic</li>
        		<li>Pitch</li>
                <li>Information</li>
                <li>Goal</li>
        	</ul>
            <fieldset>
                <label for="name">Name</label>
                <input class="wwc-form-field" type="text" name="name" placeholder="The title or name of your idea" />
                <input type="button" name="next" class="next btn wwc-green-bg" value="Next" />
            </fieldset>
            <fieldset>
                <label for="description_short">Short Description</label>
                <textarea class="wwc-form-field" name="description_short" placeholder="Briefly explain to us the idea"></textarea>
                <input type="button" name="previous" class="previous btn wwc-gray-bg" value="Previous" />
		        <input type="button" name="next" class="next btn wwc-green-bg" value="Next" />
            </fieldset>
            <fieldset>
                <label for="description_long_1">Long Description 1</label>
                <textarea class="wwc-form-field" name="description_long_1" placeholder="Briefly explain to us the idea"></textarea>
                <label for="description_long_2">Long Description 2</label>
                <span id="idea-desc-2-toggle"><i class="fa fa-plus"></i></span>
                <textarea style="display:none" class="wwc-form-field" name="description_long_2" placeholder="Briefly explain to us the idea"></textarea>
                <br>
                <input type="button" name="previous" class="previous btn wwc-gray-bg" value="Previous" />
		        <input type="button" name="next" class="next btn wwc-green-bg" value="Next" />
            </fieldset>
            <fieldset>
                <label for="description_short">Requested Funding</label>
                <input class="wwc-form-field" type="text" name="ideaDetails[funding_goal]" placeholder="How much do you request to get started?" />
                <label for="description_short">When do you want to start your idea campaign?</label>
                <input class="wwc-form-field" type="text" name="ideaDetails[date_start]" placeholder="DATETIME FIELD" />
                <label for="description_short">When do you want the campaign to end?</label>
                <input class="wwc-form-field" type="text" name="ideaDetails[date_end]" placeholder="DATETIME FIELD" />
                <br>
                <input type="button" name="previous" class="previous btn wwc-gray-bg" value="Previous" />
                <input type="submit" name="submit" class="submit wwc-green-bg" value="Submit" />
            </fieldset>
        {!! Form::close() !!}
    <!--</form>-->
    </div>
</div>

@endsection
