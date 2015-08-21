@extends('layout.superadmin')

@section('content')
<div class="superadmin-filemanager">
	<div class="container">
		<div class="card grey lighten-5">
			<div class="card-content">
                <!--<span class="card-title">File Manager</h5>-->
                <div class="row">
                    <div class="col s12">
                        <form action="{{route('addentry', [])}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="file-field input-field">
                                <input class="file-path validate" type="text" placeholder="File Path" />
                                <div class="">
                                    <span></span>
                                    <input type="file" name="filefield" />
                                </div>
                                <button class="btn btn-small blue darken-2" type="submit">Upload</button>
                            </div>  
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        @if ( !$entries->count() )
                            You have no Files uploaded.
                        @else
                            <div class="row">
                                @foreach($entries as $entry)
                                <div class="col s3">
                                    <div class="card">                                     
                                        @if ($entry->mime == 'text/plain')
                                            <p><i class="fa fa-file-text-o"></i></p>
                                            <p><small>{{$entry->original_filename}}</small></p>
                                        @else
                                            <img href="{{route('getentry', $entry->filename)}}" target="_blank" src="{{route('getentry', $entry->filename)}}" class="responsive-img" />
                                            <div class="card-actions">
                                                <a class="btn btn-xsmall red left"><i class="material-icons">delete</i></a>
                                                <a href="{{route('getentry', $entry->filename)}}" target="_blank" class="btn btn-xsmall blue right"><i class="material-icons">visibility</i></a>
                                                <a class="btn btn-xsmall blue right"><i class="material-icons">link</i></a>
                                            </div>
                                        @endif  
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
      	</div>
    </div>
</div>
@endsection        
        <!--<div class="tab-content">
            
            <div role="tabpanel" class="tab-pane fade in active" id="gridview">
                <ul class="fileentry thumbnails no-padding">
                    @foreach($entries as $entry)
                        <div class="thumbnail col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <a class="file-container" data-toggle="modal" data-target="#lightbox">
                                @if ($entry->mime == 'text/plain')
                                    <p><i class="fa fa-file-text-o"></i></p>
                                    <p><small>{{$entry->original_filename}}</small></p>
                                @elseif ($entry->mime == 'image/jpeg' || $entry->mime == 'image/png')                           
                                    <img src="{{route('getentry', $entry->filename)}}" alt="{{$entry->original_filename}}" class="img-responsive" />
                                @endif
                            </a>
                            <div class="caption">
                                <div class="btn-group btn-group-justified">
                                   <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#lightbox"><i class="fa fa-external-link"></i><br><small>View</small></a> 
                                   <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#file-info"><i class="fa fa-gear"></i><br><small>Info</small></a>
                                   <a class="btn btn-sm btn-primary" href="{{route('getentry', $entry->filename)}}"><i class="fa fa-copy"></i><br><small>Url</small></a> 
                                   <a class="btn btn-sm btn-primary" href="{{route('getentry', $entry->filename)}}"><i class="fa fa-eye"></i><br><small>Raw</small></a>
                                   <a class="btn btn-sm btn-primary" href=""><i class="fa fa-times"></i><br><small>Trash</small></a>
                                </div>
                            </div>         
                        </div>
                    @endforeach
                </ul>
                <div class="clearfix"></div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="listview">
                <table class="file-manager-table table table-hover">
                    <thead>
                        <tr>
                            <th>Thumbnail</th>
                            <th>Original File Name</th>
                            <th>Url</th>
                            <th>Mime Type</th>
                            <th>Uploaded</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($entries as $entry)
                        <tr>
                            <td>
                                @if ($entry->mime == 'text/plain')
                                    <p><i class="fa fa-file-text-o fa-2x"></i>
                                    <small>{{$entry->original_filename}}</small></p>
                                @elseif ($entry->mime == 'image/jpeg' || $entry->mime == 'image/png')                           
                                    <img class="list-view-image img-thumbnail" src="{{route('getentry', $entry->filename)}}" alt="{{$entry->original_filename}}" />
                                @endif
                            </td>
                            <td>{{ $entry->original_filename }}</td>
                            <td><a href="{{ route('getentry', $entry->filename) }}">{{ route('getentry', $entry->filename) }}</a></td>
                            <td>{{ $entry->mime }}</td>
                            <td>{{ $entry->created_at }}
                            <td></td>
                        </tr>
                     @endforeach
                     </tbody>
                 </table>
            </div>-->

    
        	