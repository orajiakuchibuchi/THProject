@php
    $alert = $message = null;
@endphp

@if (request()->session()->has('success'))
    @php
        $alert = 'success';
        $message = request()->session()->pull('success');
    @endphp
@elseif (request()->session()->has('error'))
    @php
        $alert = 'danger';
        $message = request()->session()->pull('error');
    @endphp
@elseif (request()->session()->has('info'))
    @php
        $alert = 'info';
        $message = request()->session()->pull('info');
    @endphp
@endif

@if(!is_null($alert) && !is_null($message))
    <div class="alert alert-{{ $alert }} alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>{!! $message !!}</p>
    </div>
@endif

@if(count($errors))
    
    <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <ul>    
    @foreach($errors->all() as $error)
    
          <li>{{$error}}</li>
    @endforeach
    </ul>
    
    </div>
@endif 