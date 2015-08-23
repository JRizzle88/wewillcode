<h5>General Information</h5>
<div class="row">
  <div class="col s12 m6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, array('class' => 'form-control input-sm', 'placeholder' => 'Page Name')) !!}
  </div>
  <div class="col s12 m6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, array('class' => 'form-control input-sm', 'placeholder' => 'Page Slug / URL')) !!}
  </div>
  <div class="col s12">
    <div class="ww-editor-actions">
      <a id="ww-html-mode" class="btn btn-small tooltipped" data-position="top" data-delay="20" data-tooltip="Code"><i class="material-icons">code</i></a>
      <a id="ww-preview-mode" class="btn btn-small tooltipped" data-position="top" data-delay="20" data-tooltip="Preview"><i class="material-icons">visibility</i></a>
    </div>
    <div id="ww-ace-editor"></div>
    <!--<input type="hidden" id="content" name="content" value="" />-->
    <!--{!! Form::label('content', 'Content:') !!}-->
    {!! Form::hidden('content', null, array('id' => 'ww-ace-editor-value', 'class' => '', 'placeholder' => 'Page Content. HTML Tags are valid. Structure how you would like.')) !!}
  </div>
</div>


<div class="row layout-options">
  <div class="col s12 m6 l6">
    <h5>Layout and Options</h5>
    <label>
      {!! Form::radio('layout', 'default') !!}
      <!--<input type="radio" name="layout" value="default" />-->
      <img src="{{ asset('/img/layout-default.svg')}}" />
    </label>
    
    <label>
      {!! Form::radio('layout', 'full-width') !!}
      <!--<input type="radio" name="layout" value="full-width"/>-->
      <img src="{{ asset('/img/layout-full-width.svg')}}" />
    </label>
    
    <label>
      {!! Form::radio('layout', 'left-sidebar') !!}
      <!--<input type="radio" name="layout" value="left-sidebar" />-->
      <img src="{{ asset('/img/layout-left-sidebar.svg')}}" />
    </label>
    
    <label>
      {!! Form::radio('layout', 'right-sidebar') !!}
      <!--<input type="radio" name="layout" value="right-sidebar" />-->
      <img src="{{ asset('/img/layout-right-sidebar.svg')}}" />
    </label>
    
    
    <!--{!! Form::select('layout', array('default' => 'Default', 'full-width' => 'Full Width', 'right-sidebar' => 'Right Sidebar', 'left-sidebar' => 'Left Sidebar'), null, array('class' => 'form-control input-sm')) !!}-->
  </div>
  <div class="col s12 m6 l6">
    <div id="left-sidebar" class="layout-selection">
       <h5>Left Sidebar</h5>
    </div>
    <div id="right-sidebar" class="layout-selection">
       <h5>Right Sidebar</h5>
    </div>
  </div>
</div>

<h5>Search Engine Optimization</h5>
<div class="row">
  <div class="col s12 m6">
    {!! Form::label('seo_title', 'Title:') !!}
    {!! Form::text('seo_title', null, array('class' => 'form-control input-sm', 'placeholder' => 'SEO Title')) !!}
  </div>
  <div class="col s12 m6">
    {!! Form::label('seo_keywords', 'Keywords:') !!}
    {!! Form::text('seo_keywords', null, array('class' => 'form-control input-sm', 'placeholder' => 'SEO Keywords. Ex. one, two, three')) !!}
  </div>
  <div class="col s12">
    {!! Form::label('seo_description', 'Description:') !!}
    {!! Form::textarea('seo_description', null, array('class' => 'materialize-textarea', 'size' => 'x3', 'placeholder' => 'SEO Description')) !!}
  </div>
</div>

    <p>
      <div class="input-field">
        {!! Form::select('draft', array('0' => 'Published', '1' => 'Draft'), null, array('class' => 'form-control input-sm')) !!}
      </div>
    </p>



<p>{!! Form::submit($submit_text, ['class'=>'btn btn-success green']) !!}</p>

