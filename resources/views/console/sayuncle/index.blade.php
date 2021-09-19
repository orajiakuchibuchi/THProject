@extends('layouts.app')

@section('style')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
@endsection
@section('content')

    <div class="content-wrap has-shadow bg-white u-margin-b-40">

        @include('components.alert')

        <div class="box">
            <div class="box-header">
              <h4 class="box-title"> Contestants</h4>
              <div class="clearfix"></div>
            </div>
		    <div class="box-body">
		        <div class="table-content table-responsive user-table">
		            <table class="table table-bordered item-center">
		                <thead>
		                <tr>
		                    <th scope="col">Id</th>
		                    <th scope="col">First Name</th>
		                    <th scope="col">Last Name</th>
		                    <th scope="col">email</th>
		                    <th scope="col">Mobile No</th>
		                    <th scope="col">Nationality</th>
		                    <th scope="col">Number of Videos</th>
		                    <th scope="col">Number of Votes</th>
		                    <th scope="col">Registered On</th>
		                    <th scope="col">Actions</th>

		                </tr>
		                </thead>
		                <tbody>
		                @isset($contestants)
		                    @foreach($contestants as $contestant)
		                        <tr>
		                            <td>{{ $contestant->id }}</td>
		                            <td>{{ $contestant->first_name }}</td>
		                            <td>{{ $contestant->last_name }}</td>
		                            <td>{{ $contestant->email }}</td>

		                            <td>{{ $contestant->mobile_no }}</td>
		                            <td>{{ lcfirst($contestant->nationality) }}</td>
		                            <td>{{ $contestant->videos()->count() }}</td>
		                            <td>{{ $contestant->votes()->count() }}</td>
		                            <td>{{ $contestant->created_at->format('F d-Y') }}</td>

		                            <td>
		                            	<a href="{{route('console.sayuncle.contestant.show',$contestant->id)}}"> 
		                          			<i class="fa fa-eye"> View</i>
		                        		</a>
		                        		<!-- &nbsp;&nbsp;
		                        		<a href="" class="delete-contestant"> 
		                          			<i class="fa fa-trash"> Delete</i>
		                        		</a> -->
		                        	</td>
		                        </tr>
		                    @endforeach
		                @endisset
		                </tbody>
		            </table>
		            <div class="pull-right">
                      {{ $contestants->links() }}
                    </div>

		        </div>
		    </div>
		</div>
    </div>
    <form action="" method="post" id="delete-event-form">
      @csrf
    </form>
@endsection

@section('script')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- <script type="text/javascript">
	$('body').on('click','.delete-event',function(event){
	    event.preventDefault();
	    href = $(this).attr('href');
	    $.confirm({
	      title: 'Are You Sure!',
	      content: 'You Want to Delete This Event ',
	      type: 'blue',
	      typeAnimated: true,
	      buttons: {
	          confirm: {
	              text: 'Confirm',
	              btnClass: 'btn-blue',
	              action: function(){
	                 
	                  $("#delete-event-form").attr('action',href)
	                  $("#delete-event-form").submit();
	              }
	          },
	          close: function () {
	          }
	      }
	    });
  	});
</script> -->
@endsection
