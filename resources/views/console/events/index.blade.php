@extends('layouts.app')

@section('style')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
@endsection
@section('content')

    <div class="content-wrap has-shadow bg-white u-margin-b-40">

        @include('components.alert')

        <div class="box">
            <div class="box-header">
              <h4 class="box-title"> Events</h4>
              <a class=" pull-right" href="{{route('console.event.create')}}">
                <i class="fa fa-plus"></i> Add
              </a>
              <div class="clearfix"></div>
            </div>
		    <div class="box-body">
		        <div class="table-content table-responsive user-table">
		            <table class="table table-bordered item-center">
		                <thead>
		                <tr>
		                    <th scope="col">Id</th>
		                    <th scope="col">Name</th>
		                    <th scope="col">Description</th>
		                    <th scope="col">Date</th>
		                    <th scope="col">Actions</th>

		                </tr>
		                </thead>
		                <tbody>
		                @isset($events)
		                    @foreach($events as $event)
		                        <tr>
		                            <td>{{ $event->id }}</td>
		                            <td>{{ $event->name }}</td>
		                            <td>{{ $event->description }}</td>
		                            <td>{{ $event->date->format('F d-Y') }}</td>
		                            <td>
		                            	<a href="{{route('console.event.edit',$event->id)}}"> 
		                          			<i class="fa fa-pencil"> Edit</i>
		                        		</a>
		                        		&nbsp;&nbsp;
		                        		<a href="{{route('console.event.delete',$event->id)}}" class="delete-event"> 
		                          			<i class="fa fa-trash"> Delete</i>
		                        		</a>
		                        	</td>
		                        </tr>
		                    @endforeach
		                @endisset
		                </tbody>
		            </table>
		            <div class="pull-right">
                      {{ $events->links() }}
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
<script type="text/javascript">
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
</script>
@endsection
