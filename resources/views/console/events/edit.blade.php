@extends('layouts.app')

@section('content')

    <div class="content-wrap has-shadow bg-white u-margin-b-40">

        @include('components.alert')
        <div class="row">
    		<div class="col-md-10 offset-md-1">
		        <div class="box box-info">
		        	<div class="box-header with-border">
		          		<h4 class="box-title">Create Event</h4>
		        	</div>
		        	<!-- /.box-header -->
			            <!-- form start -->
					<form class="form-horizontal" action="{{route('console.event.update',$event->id)}}" method="post" enctype= "multipart/form-data">
						@csrf
						<input type="hidden" name="user_id" value="{{auth()->id()}}">
						<div class="box-body col-sm-12">
							<div class="form-group">
								<label for="name" class=" control-label">
									Name
								</label>

								<div class="col-sm-12">
									<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$event->name}}">
								</div>
							</div>
							<div class="form-group">
								<label for="description" class="control-label">
									Description
								</label>

								<div class="col-sm-12">
									<textarea class="form-control" name="description" id="description" placeholder="Description" cols="5" >{{$event->description}}</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="description" class="control-label">
									Event Date
								</label>

								<div class="col-sm-12">
									<input type="date" class="form-control" name="date" id="date" value="{{$event->date != null ? $event->date->format('yy-m-d') : ''}}">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-primary pull-right ml-2">Update</button>
									<a href="{{route('console.events')}}" class="btn btn-outline-primary pull-right">Cancel</a>
								</div>
								<div class="clearfix"></div>
							</div>

						</div>
						<!-- /.box-body -->
					</form>
		     	</div>
		     </div>
		 </div>
    </div>
@endsection
