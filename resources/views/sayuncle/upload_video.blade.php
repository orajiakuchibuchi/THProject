@extends('sayuncle.layouts.app')
@section('hide-header-content','hide')
@section('content')
<section class="p_120" >
    <div class="content-wrap has-shadow bg-white u-margin-b-40">
          <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h4 class="box-title">Upload Video</h4>
                    </div>
                    <!-- /.box-header -->
                        <!-- form start -->
                    <form class="form-horizontal" action="{{route('sayuncle.video.upload',['contestant'=>$contestant_id,'signature'=>$contestant_token])}}" method="post" enctype= "multipart/form-data">
                        @csrf
                        <input type="hidden" name="contestant_id" value="{{$contestant_id}}">
                        <input type="hidden" name="video_id" value="{{$video->id}}">
                        
                        <div class="box-body col-sm-12">
                            <div class="form-group">
                                <label for="name" class=" control-label">
                                    Name
                                </label>

                                <div class="col-sm-12">
                                   <input type="text" name="name" class="form-control"  value="{{$contestant->username}}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label" >
                                    Say Uncle Relative ID
                                </label>

                                <div class="col-sm-12">
                                    <input type="text" name="description" class="form-control" value="{{$contestant->contestant_id}}" readonly  >
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="file" class="control-label">
                                    Upload File
                                </label>

                                <div class="col-sm-12" style="display: inline-flex;">
                                    @if(Agent::isDesktop())
                                        <input type="file" class="form-control"  accept="video/*" name="file" id="file" />
                                    @else
                                    <div id="camera" style="width: 50%; height: 75px; background-color: white; background-image: url('https://vicomma.com/public/sayUncle/images/camera.png');background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                                    
                                    <div id="file-upload" style="width: 50%; height: 75px; background-color: white; background-image: url('https://vicomma.com/public/sayUncle/images/file-upload.png');background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                                    
                                    <input type="file" style="display:none" class="form-control" accept="video/*" id="file" capture="camera" name="file" style="height:75px" />
            
                                    @endif
                                    <span id="selected-file-name"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right ml-2">Create</button>
                                    <a href="{{ route('sayuncle.contestant.details',['contestant'=>$contestant_id,'signature'=>$contestant_token])}}" class="btn btn-outline-primary pull-right">Cancel</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="progress-bar-div">
                                <div class="progress progress-sm active">
                                    <div id="progress-bar" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only"><span id="progress-bar-text">0</span>% Complete</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </form>
                </div>
             </div>
         </div>
    </div>
</section>
@endsection

@section('script')
<script src="{{ asset('sayUncle/js/jquery.form.js') }}"></script>
<script type="text/javascript">
 
    function validate(formData, jqForm, options) {
        var form = jqForm[0];
        if (!form.file.value) {
            alert('File not found');
            return false;
        }
    }

    function resetLoader() {
        var bar = $('#progress-bar');
        var percent = $('#progress-bar-text');
        $('#progress-bar-div').hide();
        bar.width(0);
        percent.html('');
    }
 
    $("body").on('change','#video-file',function(event){
        var fileName = event.target.files[0].name;
        $("#selected-file-name").html("Selected File: "+fileName);
        
    });
    
    $("body").on('click','#camera',function(event){
        $("#file").attr('capture','camera');
        $("#file").click();
    });
    
    $("body").on('click','#file-upload',function(event){
        $("#file").removeAttr('capture');
        $("#file").click();
    });

    (function() {
 
        var bar = $('#progress-bar');
        var percent = $('#progress-bar-text');
        
        $('form').ajaxForm({
            // beforeSubmit: validate,
            beforeSend: function() {
                $('.loading').show();
                $('#progress-bar-div').show();
                var percentVal = '0';
                bar.width(percentVal)
                percent.html(percentVal);
                
            },
            uploadProgress: function(event, position, total, percentComplete) {
                var percentVal = percentComplete + '%';
                console.log(percentComplete);
                bar.width(percentVal)
                percent.html(percentVal);
                console.log('in uploadProgress');
            },
            success: function(response) {
               
               try {
                    if(response.status == 200){
                        alertSuccess(response.msg,"Success","{{ route('sayuncle.contestant.details',['contestant'=>$contestant_id,'signature'=>$contestant_token])}}");
                        
                    }else{
                        resetLoader();
                        alertError(response.msg);
                        $('.loading').hide();
                    }
                }
                catch(err) {
                    resetLoader();
                    alertError("Network Error! Please try Again");
                    $('.loading').hide();
                }
                
            },
            complete: function(xhr) {
               $('.loading').hide();
            },
            error: function(xhr) {
                resetLoader();
                try {
                    response = JSON.parse(xhr.responseText); 
                    errors = response.errors;
                    err_str = "<ul>";
                    for (var key in errors) {
                        if(key == 'file' && errors[key][0] == 'The file failed to upload.'){
                            err_str += "<li>"+ " Network Issue! Please try Again </li>";
                        }else{
                            err_str += "<li>"+ errors[key][0] +"</li>"; 
                        }
                    }
                    err_str += "</ul>";
                }
                catch(err) {
                    err_str ="Network Error! Please try Again";
                    
                }
                
                alertError(err_str);
                $('.loading').hide();
            }
        });
     
    })();
</script>
@endsection