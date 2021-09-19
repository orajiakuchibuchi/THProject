@extends('layouts.app')

@section('content')

    <div class="user-page login">
        <form class="inner" method="post" action="{{ route('login') }}">
            @csrf
            <div class="top">
                <p>{{ config('app.name') }}</p>
            </div>

            @include('components.alert')

            <div class="form-set">
                <div class="f-row u-margin-b-15">
                    <input class="input" type="text" placeholder="Email" name="email" value="{{ old('emails') }}">
                    @include('shared.validation', ['name' => 'emails'])
                </div>
            </div>
            <div class="f-row">
                <input class="input" type="password" placeholder="Password" name="password">
                @include('shared.validation', ['name' => 'password'])
            </div>

            <!--      <div class="f-row">
                     <a href="forget-pass.html">Glomt losenord</a>
                 </div> -->

            <div class="f-submit u-margin-t-15">
                <button type="submit">Login</button>
            </div>


        </form>
    </div>

@endsection
