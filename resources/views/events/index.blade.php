@extends('layouts.app')

@section('content')
<section class="sectionPT sectionPB">

   <div class="container">
       
        <div class="row alignCenter">
                
            <div class="col-md-8 col_center">
                <h1 class="section_title heading textUpper sndColor lg_gap">Contest & Events</h1>
            </div>
            
            <div class="col-md-12">
                    
                <div id='calendar'></div>
                  
            </div>
        </div>
    </div>
 </section>
@endsection

@section('script')
 <script>
     events = @json($events);
 </script>
 <script src="{{ asset('js/calendar_popup.js') }}"></script>
    
@endsection