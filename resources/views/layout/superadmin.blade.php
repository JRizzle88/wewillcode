<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Wewill Code Studios</title>
        
        <!-- Stylesheets -->
        <link href="{{ asset('/css/materialize.min.css') }}" rel="stylesheet" media="screen,projection">       
        <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        
        <!-- markItUp!
        <link href="{{ asset('markitup/skins/markitup/style.css') }}" rel="stylesheet" type="text/css"  />
        <link href="{{ asset('markitup/sets/html/style.css') }}" rel="stylesheet" type="text/css"  /> -->
        
        <link href="{{ asset('/css/app.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('/css/dashboard.css') }}" type="text/css" rel="stylesheet">
        
    </head>
    <body>
        <header>
            @include('superadmin.partials.dashboard-header')
        </header>
        <main>
            <div class="container">
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
            @yield('content')
             
        </main>
        </div>
        <!--<footer>
            @include('partials.footer')
        </footer>-->
        <footer id="scripts">
        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!-- <script src="{{ asset('markitup/jquery.markitup.js') }}"></script>
        <script src="{{ asset('markitup/sets/html/set.js') }}"></script> -->
        <script src="{{ asset('/ace-editor/src-noconflict/ace.js') }}" type="text/javascript" charset="utf-8"></script>
        <script src="{{ asset('/js/materialize.min.js') }}"></script>
        <script src="{{ asset('/js/customjs.js') }}"></script>
        
           
        <script language="javascript">
            $(document).ready(function(){
                // old markItUp editor
                //$('#page-html-editor').markItUp(myHtmlSettings);
                //$('#post-html-editor').markItUp(myHtmlSettings);
                
                
                
                // workaround to increase performance and prevent ace-editor running on pages not needed.
                // only fires the editor if on posts or page create/edit forms
                var postEditor = document.getElementsByClassName('superadmin-edit-posts');
                var pageEditor = document.getElementsByClassName('superadmin-edit-pages');
                if (postEditor.length || pageEditor.length) {
                    //console.log('editor exists');
                // ace editor for posts create / edit
                var editor = ace.edit("ww-ace-editor");
                    editor.setTheme("ace/theme/textmate");
                    editor.getSession().setMode("ace/mode/html");
                    editor.$blockScrolling = Infinity;
                    
                var v = document.getElementById('ww-ace-editor-value').value;
                    editor.setValue(v, 1);
                            
                    editor.getSession().on("change", function() {
                        var contents = editor.getSession().getValue();
                        console.log('editor changed');
                        document.getElementById('ww-ace-editor-value').value = contents;
                        //input.val(contentValue);
                    });  
                    
                }   
            });
        </script>
        </footer>
    </body>
</html>