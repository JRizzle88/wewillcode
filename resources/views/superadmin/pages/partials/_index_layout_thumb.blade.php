@if($p->layout == 'default')
<img class="layout-thumb tooltipped" data-position="top" data-delay="10" data-tooltip="Default" src="{{ asset('img/layout-default.svg') }}" />
@endif

@if($p->layout == 'full-width')
<img class="layout-thumb tooltipped" data-position="top" data-delay="10" data-tooltip="Full Width" src="{{ asset('img/layout-full-width.svg') }}" />
@endif

@if($p->layout == 'left-sidebar')
<img class="layout-thumb tooltipped" data-position="top" data-delay="10" data-tooltip="Left Sidebar" src="{{ asset('img/layout-left-sidebar.svg') }}" />
@endif

@if($p->layout == 'right-sidebar')
<img class="layout-thumb tooltipped" data-position="top" data-delay="10" data-tooltip="Right Sidebar" src="{{ asset('img/layout-right-sidebar.svg') }}" />
@endif