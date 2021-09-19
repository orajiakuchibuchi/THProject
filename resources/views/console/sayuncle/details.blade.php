@extends('layouts.app')

@section('style')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
@endsection
@section('content')

    <div class="content-wrap has-shadow bg-white u-margin-b-40">

        @include('components.alert')
		<div class="box">
            <div class="box ">
	            <div class="box-header with-border">
	              <h2 class="box-title box-primary ">Contestant Details</h2>
	            </div>

	            <div class="box-header with-border">
	              <h4 class="box-title"> About</h4>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	                <div class="row">
                        <div class="col-lg-6" >
                        	<a  target="_blank" href="{{ url('storage/app/'.$contestant->image_path)}}">
                        	 <img src="{{ url('storage/app/'.$contestant->image_path)}}" class="img-thumbnail"> 
                        	</a>
                        </div>
                    </div>
                    <br>
	            	<div class="row">
						<div class="col-lg-6">

							<strong>First Name</strong>
							<p class="text-muted">
							{{$contestant->first_name}}
							</p>
							<hr>

							<strong>Last Name</strong>
							<p class="text-muted">
							{{$contestant->last_name}}
							</p>
							<hr>

							<strong>Age</strong>
							<p class="text-muted">
								{{$contestant->age}}
							</p>
							<hr>

							<strong>Gender</strong>
							<p class="text-muted">
								{{ ucfirst($contestant->gender) }}
							</p>
							<hr> 
			            </div>
		          		<div class="col-lg-6">
							<strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
							<p class="text-muted">
							{{$contestant->email}}
							</p>
							<hr>

							<strong>
								<i class="fa fa-phone margin-r-5"></i> Contact No.
							</strong>
							<p class="text-muted">
							{{ $contestant->mobile_no }}
							</p>
							<hr>

							<strong>
								<i class="fa fa-map-marker margin-r-5"></i> Address
							</strong>
							<p class="text-muted">
								{{ ucfirst($contestant->state) }} 
								{{ ucfirst($contestant->country) }}
							</p>
							<hr>
			              
				        </div>
				    </div>
				</div>		
        	</div>
        	<div class="box box-primary">
	            <div class="box-header with-border">
	              <h4 class="box-title"> Social Information</h4>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	            	<div class="row">
						<div class="col-lg-6">
							<strong>I Am</strong>

							<p class="text-muted">
								{{ ucfirst($contestant->i_am) }} 
							</p>

							<hr>

							
							<strong><i class="fa fa-instagram margin-r-5"></i> IG Handler</strong>

							<p class="text-muted">
								{{ $contestant->ig_handle }} 
							</p>
							<hr>
							<strong>Help Available in Making Videos</strong>
							<p class="text-muted">
								{{ $contestant->help_available == 1 ? 'Yes': 'No' }}
							</p>
							<hr>

							<strong>Consider MySelf</strong>
							<p class="text-muted">
								{!! config('custom.consider_myself.'.$contestant->consider_myself) !!} 
							</p>
							<hr>
							
						</div>
						<div class="col-lg-6">
							<strong>Hear </strong>
							<p class="text-muted">
								{{ $contestant->hear_of }}
							</p>
							<hr>
							<strong><i class="fa fa-instagram margin-r-5"></i> IG Followers</strong>
							<p class="text-muted">
								{{ $contestant->ig_followers }} 
							</p>
							<hr>
							<strong>Particate In Future Contests</strong>
							<p class="text-muted">
								{{ $contestant->future_contest == 1 ? 'Yes': 'No' }}
							</p>
							<hr>
							<strong> Number Of Votes</strong>
							<p class="text-muted">
								{{ $contestant->votes()->count() }}
							</p>
							<hr>
						</div>
					</div>
				</div>
			</div>

        </div>
        


        <div class="box">
            <div class="box-header">
              <h4 class="box-title"> Videos</h4>
              <div class="clearfix"></div>
            </div>
		    <div class="box-body">
		        <div class="table-content table-responsive user-table">
		            <table class="table table-bordered item-center">
		                <thead>
		                <tr>
                            <th scope="col"> Id </th>
                            <th scope="col"> Video Name </th>
                            <th scope="col"> Video Description </th>
                            <th scope="col"> Payment Status </th>
                            <th scope="col"> Video Status </th>
                            <th scope="col"> Video link </th>
                            <th scope="col"> Created ON </th>
                            <th scope="col"> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($videos as $video)
                                <tr>
                                    <td> {{$video->id}} </td>
                                    <td> {{$video->name}} </td>
                                    <td> {{$video->description}} </td>
                                    <td>
                                    @if($video->payment_status == 1)
                                    	Payed ( {{$video->payment->amount ?? '0'}} {{$video->payment->currency ?? 'NGN'}})
                                    	
                                        <span class="badge {{( isset($video->payment) &&  $video->payment->is_verified == 1 ) ? 'badge-success':'badge-danger'}} "> 
                                         {{ (isset($video->payment) && $video->payment->is_verified == 1) ? 'Verified':'Not-Verified' }} 
                                        </span>
                                    @else
                                    	Pending
                                    @endif 
                                    <td> {{$video->status == null ? 'Not Uploaded': ucfirst($video->status) }} </td>
                                    <td> 
                                    	@if($video->file_path != null) 
                                        <a  target="_blank" href="{{ url('storage/app/'.$video->file_path)}}">{{$video->file_name}} </a> 
                                        @endif
                                    </td>
                                    <td> {{$video->created_at->format('y-m-d')}} </td>
                                    <td> 
                                    	@if($video->status == 'uploaded')
                                    	<a href="{{route('console.sayuncle.update.video',[$video->sayuncle_contestant_id,$video->id])}}" class="update-video"> 
		                          			<i class="fa fa-tick"> Mark As Approved</i>
		                        		</a>
		                        		@endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
		            </table>
		            <div class="pull-right">
                      {{ $videos->links() }}
                    </div>

		        </div>
		    </div>
		</div>
    </div>
    
    <form action="" method="post" id="update-video-form">
      @csrf
    </form>
@endsection

@section('script')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script type="text/javascript">
	$('body').on('click','.update-video',function(event){
	    event.preventDefault();
	    href = $(this).attr('href');
	    $.confirm({
	      title: 'Are You Sure!',
	      content: 'You want to mark this video as approved',
	      type: 'blue',
	      typeAnimated: true,
	      buttons: {
	          confirm: {
	              text: 'Confirm',
	              btnClass: 'btn-blue',
	              action: function(){
	                 
	                  $("#update-video-form").attr('action',href)
	                  $("#update-video-form").submit();
	              }
	          },
	          close: function () {
	          }
	      }
	    });
  	});
</script>
@endsection
