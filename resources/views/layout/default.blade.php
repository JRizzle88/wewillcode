<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        @if(isset($post->seo_title) && !empty($post->seo_title) )
            <title>{{ isset($post->seo_title) ? $post->seo_title : 'Wewill Code Studios'}}</title>
            <meta name="keywords" content="{{ isset($post->seo_keywords) ? $post->seo_keywords : ''}}">
            <meta name="description" content="{{ isset($post->seo_description) ? $post->seo_description : ''}}">
        @endif
        
        @if(isset($page->seo_title) && !empty($page->seo_title) )
            <title>{{ isset($page->seo_title) ? $page->seo_title : 'Wewill Code Studios'}}</title>
            <meta name="keywords" content="{{ isset($post->seo_keywords) ? $post->seo_keywords : ''}}">
            <meta name="description" content="{{ isset($post->seo_description) ? $post->seo_description : ''}}">
        @endif
        
        <!-- Stylesheets -->     
        <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('/css/reset.css') }}" rel='stylesheet' type='text/css'> 
        <link href="{{ asset('/css/wwc.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/wwc-grid.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/signin.css') }}" rel="stylesheet">
        
    </head>
    <body id="app" class="default-layout">
        <!--<pre>
            Session: {{\Session::token() }}<br>
            CSRF Token: {{ csrf_token() }}   
        </pre>-->
        <header>
            @include('partials.header')
        </header>
        
        <main>
            <div class="row center">
                <div class="col-span-6">
                <div class="flash-messages">            
                        <!-- Informational Flash Messages -->
                        @if (Session::has('message'))
                            <div class="card flash blue lighten-1">
                                <div class="card-content white-text">
                                    <p>{{ Session::get('message') }}</p>
                                </div>
                            </div>
                        @endif
                        <!-- Error Flash Messages -->
                        @if ($errors->any())
                            <div class="card flash red lighten-1">
                                <div class="card-content white-text">
                                    @foreach ( $errors->all() as $error )
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                </div>
                </div>
            </div>
            
            @yield('content')
            
        </main>
        <footer>
            @include('partials.footer')
        </footer>
        <footer id="scripts">
            <!-- Scripts -->
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="{{ asset('/js/slider.js') }}"></script>
            <script src="{{ asset('/js/frontend.js') }}"></script>
            
        </footer>
    </body>
</html>