@extends('sayuncle.layouts.app')
@section('hide-header-content','hide')
@section('content')

<section class="p_120" >
    <div class="content-wrap has-shadow bg-white u-margin-b-40">
           <div class="container">
               <br />
                @include('components.alert')
                <div class="box ">
	            <div class="box-header with-border">
	              <h4 class="box-title"> Details</h4>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	                <div class="row">
            
                        <div class="col-sm-offset-2 col-xs-offset-2 col-lg-4 co-md-6 col-sm-8 col-xs-8 " >
                        	<a  target="_blank" href="{{ url($contestant->image_path)}}">
                        	 <img src="{{ url($contestant->image_path)}}" class="img-thumbnail" class="image-responsive" width="250" height="250"> 
                        	</a>
                        </div>
                    </div>
                    <br>
	            	<div class="row">
						<div class="col-lg-6">

							<strong><i class="fa fa-user"></i> First Name</strong>
							<p class="text-muted">
							{{$contestant->first_name}}
							</p>
							<hr>

							<strong><i class="fa fa-user"></i> Last Name</strong>
							<p class="text-muted">
							{{$contestant->last_name}}
							</p>
							<hr>

							<strong><i class="fa fa-birthday-cake"></i> Age</strong>
							<p class="text-muted">
								{{$contestant->age}}
							</p>
							<hr>

							<strong><i class="fa fa-male"></i> / <i class="fa fa-female"></i> Gender</strong>
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
							<strong>
								<i class="fa fa-thumbs-up"></i> Number Of Votes
							</strong>
							<p class="text-muted">
								
								{{ $contestant->votes()->count() }}
							</p>
							<hr>
			              
				        </div>
				    </div>
				</div>		
        	</div>
            <div class="box-header">
              <h4 class="box-title"> Videos</h4>
              <div class="clearfix"></div>
            </div>
            <div class="box-body">
                <a href="{{route('sayuncle.payment',['contestant'=>$contestant_id,'signature'=>$contestant_token])}}" class="btn btn-secondary pull-right"><i class="fa fa-plus"></i> Add Video</a>
                <span class="clearfix"></span>
                <br>
                <div class="table-content table-responsive user-table">
                    <table class="table table-bordered item-center">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col"> Video Name </th>
                            <th scope="col"> Video Description </th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Video Status</th>
                            <th scope="col">Video link</th>
                            <th scope="col">Created ON</th>
                            <th scope="col">Actions</th>
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
                                            Payed 
                                            <span class="badge {{( isset($video->payment) &&  $video->payment->is_verified == 1 ) ? 'badge-success':'badge-danger'}} "> 
                                             {{ (isset($video->payment) && $video->payment->is_verified == 1) ? 'Verified':'Not-Verified' }} 
                                            </span>
                                        @else
                                            Pending
                                        @endif 
                                    </td>
                                    <td> {{$video->status == null ? 'Not Uploaded':'Uploaded'}} </td>
                                    <td>
                                        @if($video->file_path != null) 
                                        <a  target="_blank" href="{{ url('storage/app/'.$video->file_path)}}"> {{$video->file_name}} </a> 
                                        @endif
                                    </td>
                                    <td> {{$video->created_at->format('y-m-d')}} </td>
                                    <td>  
                                        @if($video->status == null && $video->is_completed == 0 )
                                            <a href="{{route('sayuncle.video.upload.form',['contestant'=>$contestant_id,'signature'=>$contestant_token,'video_id'=>$video->id])}}"> Upload Video </a>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right">
                    </div>

                </div>
            </div>
        </div> 
    </div>
    
</section>
@endsection