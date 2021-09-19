@extends('layouts.app')

@section('content')

    <div class="content-wrap has-shadow bg-white u-margin-b-40">

        @include('components.alert')
        <div class="row">
    		<div class="col-md-10 offset-md-1">
		        <div class="box box-info">
		        	<div class="box-header with-border">
		          		<h4 class="box-title">Update Password</h4>
		        	</div>
		        	<!-- /.box-header -->
			            <!-- form start -->
					<form class="form-horizontal" action="{{route('console.updatePassword')}}" method="post" enctype= "multipart/form-data">
						@csrf
						<input type="hidden" name="user_id" value="{{auth()->id()}}">
						<div class="box-body col-sm-12">
						    <div class="form-group">
								<label for="name" class=" control-label">
									User
								</label>

								<div class="col-sm-12">
									<input type="test" class="form-control" name="" id="" value="{{auth()->user()->email }} ( {{auth()->user()->name}})">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class=" control-label">
									Old Password
								</label>

								<div class="col-sm-12">
									<input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old Password" value="">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class=" control-label">
									New Password
								</label>

								<div class="col-sm-12">
									<input type="password" class="form-control" name="password" id="password" placeholder="New Password" value="">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class=" control-label">
									Confirm Password
								</label>

								<div class="col-sm-12">
									<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm New Password" value="">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-primary pull-right ml-2">Update</button>
									<a href="{{route('console.index')}}" class="btn btn-outline-primary pull-right">Cancel</a>
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