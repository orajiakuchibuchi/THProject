@extends('sayuncle.layouts.app')
@section('hide-header-content','hide')

@section('content')
@php
$array = array(array('metaname' => 'color', 'metavalue' => 'blue'),
                array('metaname' => 'size', 'metavalue' => 'big'));
@endphp
<section class="p_120" id="threestep">

    <div class="container">
        @include('components.alert')
        <div class="main_title">
            <h2 class="neon">Proceed With The Payment </h2>
        </div>
        <div class="row">
            
            <div class="offset-lg-4 col-lg-4" >
                <div class="block-2 red">
                    <span class="wrap-icon">
                    <span class="icon-money"><i class="fa fa-money"></i></span>
                    </span>
                    <h2>Early Bird Special (Pay ₦500)</h2>
                    <p>Follow the payment procedure and make the successfull payment to get the link to upload video </p>
                </div>
            </div>
        </div>
    </div>
    <br/> <br/>
    <div align="center">
        <form method="POST" action="{{ route('pay') }}" id="paymentForm">
        @csrf
        <input type="hidden" name="amount" value="500" /> <!-- Replace the value with your transaction amount -->
        <input type="hidden" name="payment_method" value="card" /> <!-- Can be card, account, both -->
        <input type="hidden" name="description" value="Sayuncle Contest Payment" /> 
        <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
        <input type="hidden" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
        <input type="hidden" name="email" value="{{$data['email']}}" /> <!-- Replace the value with your customer email -->
        <input type="hidden" name="firstname" value="{{$data['first_name']}}" /> <!-- Replace the value with your customer firstname -->
        <input type="hidden" name="lastname" value="{{$data['last_name']}}" /> <!-- Replace the value with your customer lastname -->
        <input type="hidden" name="metadata" value="{{ json_encode($array) }}" > <!-- Meta data that might be needed to be passed to the Rave Payment Gateway -->
        <input type="hidden" name="phonenumber" value="{{$data['mobile_no']}}" /> <!-- Replace the value with your customer phonenumber -->
        <input type="hidden" name="title" value="Sayuncle Contest" />  
        <input type="submit" class="btn btn-primary" value="Proceed to the Payment" />
        <br><br>
        <a href="{{ route('sayuncle.contestant.details',['contestant'=>$contestant_id,'signature'=>$contestant_token])}}">Back</a>
        </form>

    </div>
</section>
@endsection