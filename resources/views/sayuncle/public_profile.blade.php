@extends('sayuncle.layouts.app')
@section('hide-header-content','hide')
@section('style')
<style>
    .modal {
        z-index: 999999;
    }
</style>
@endsection
@section('content')

<section class="p_120" id="threestep">

    <div class="container">
        <br />
      @include('components.alert')
        <div class="main_title">
            <h2 class="neon">{{$contestant->username}} </h2>
        </div>
        <div class="row">
            
            <div class="offset-lg-4 col-lg-4 text-center" >
            	<a  target="_blank" href="{{ url('storage/app/'.$contestant->image_path)}}">
            	 <img src="{{ url('storage/app/'.$contestant->image_path)}}" class="img-thumbnail"> 
            	</a>
            </div>
        </div>
        <br/>
        <div class="row">
            
            <div class="offset-lg-4 col-lg-4 text-center" >
            <i class="fa fa-thumbs-up"></i>	Total Votes: {{ $contestant->votes()->count() }}
            </div>
        </div>
    </div>
    <br/> <br/>
    <div align="center">
       
        <input type="button" class="btn btn-primary" value="Vote For Me"  data-toggle="modal" data-target="#vote"/>
       
    </div>
    <div class="modal fade" id="vote" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
           <form action="{{route('sayuncle.contestant.vote.email',$contestant->id)}}" method="post">
            @csrf
               <div class="modal-header">
                    <h4 class="modal-title" id="howItWorksModalLabel" style="text-align: center; width: 100%;"> Vote For {{$contestant->username}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <div class="modal-body">
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email">
                <span id="error_email" class="text-danger "></span>
              </div>
        </div>
        <div class="modal-body">
              <div class="form-group">
                <label for="contact_no">Mobile #: <small class="text-danger">(optional)</small></label>
                <input type="text" class="form-control" id="mobile_no" name="mobile_no">
                <span id="error_mobile_no" class="text-danger "></span>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="voteFormBtn">Vote For Me</button>
        </div>
       </form> 
      </div>
      
    </div>
  </div>
</section>
@endsection

@section('script')

<script type="text/javascript">

    $('body').on('click','#voteFormBtn', function(){
        $('.loading').show();
        var data = { email: $("#email").val(), mobile_no: $("#mobile_no").val(), }
        $.ajax({
          url: "{{route('sayuncle.contestant.vote.email',$contestant->id)}}",
          headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
          type: "POST",
          data: data,
          complete: function(){
               
            setTimeout(function(){ 
                 $(".loading").hide();
            }, 1000);    
            },
          success: function(res){
            if(res.status == 200){
                alertSuccess(res.msg,"Success","{{ route('sayuncle.contestant.profile',$contestant->contestant_id)}}");
                
            }
          },
          error: function(err){
            if(err.status === 422){
                if( err.responseJSON.mobile_no != undefined){
                    $("#error_mobile_no").text(err.responseJSON.mobile_no);
                }
                if( err.responseJSON.email != undefined){
                    $("#error_email").text(err.responseJSON.email);
                    
                } 
            }
          },
        });
    });   
</script>

@endsection

