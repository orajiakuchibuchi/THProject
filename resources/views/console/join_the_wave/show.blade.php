@extends('layouts.app')

@section('content')

    <div class="content-wrap has-shadow bg-white u-margin-b-40">

        @include('components.alert')

        <h4 class="u-margin-b-20">{{ ucfirst($role ?? null) }}</h4>
        <form id="sign-up-form">
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email Address</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext">{{ $wave->email }}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">Full Name</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext">{{ $wave->name }}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="is_creative" class="col-sm-4 col-form-label">I consider myself a</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext">{{ $wave->is_creative }}</p>
                </div>
            </div>
            <div class="form-group row">
                <label for="is_creative" class="col-sm-4 col-form-label">If you chose influencer, please select the number of followers you have</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext">{{ $wave->number_of_followers }}</p>
                </div>
            </div>
            <!--<div class="form-group row">-->
            <!--    <label for="is_creative" class="col-sm-4 col-form-label">If you chose influencer, will you be able to make video content and include vendor products in your videos?</label>-->
            <!--    <div class="col-sm-8">-->
            <!--        <p class="form-control-plaintext">{{ $wave->video_content }}</p>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="form-group row">-->
            <!--    <label for="is_creative" class="col-sm-4 col-form-label">If you chose vendor/merchant or BOTH(vendor/influencer), please select the type of item (s) that best describes what you intend to sell on Maxflix</label>-->
            <!--    <div class="col-sm-8">-->
            <!--        <p class="form-control-plaintext">{{ $wave->intend_to_sell }}</p>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="form-group row">
                <label for="is_creative" class="col-sm-4 col-form-label">If you chose vendor/merchant or BOTH(vendor/influencer), can you provide images of your products and possibly videos for your products?</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext">{{ $wave->images_and_videos }}</p>
                </div>
            </div>
            <!--<div class="form-group row">-->
            <!--    <label for="is_creative" class="col-sm-4 col-form-label">What method would you prefer us to reach you for a follow-up regarding your vetting status?</label>-->
            <!--    <div class="col-sm-8">-->
            <!--        <p class="form-control-plaintext">{{ $wave->reaching_method }}</p>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="form-group row">-->
            <!--    <label for="is_creative" class="col-sm-4 col-form-label">Do you understand how to post content and add products to those videos on Maxflix?</label>-->
            <!--    <div class="col-sm-8">-->
            <!--        <p class="form-control-plaintext">{{ $wave->how_to_post_content }}</p>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="form-group row">-->
            <!--    <label for="feedback" class="col-sm-4 col-form-label">Feedback</label>-->
            <!--    <div class="col-sm-8">-->
            <!--        <p class="form-control-plaintext">{{ $wave->feedback }}</p>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="form-group row">
                <label for="suggestion_recommendation" class="col-sm-4 col-form-label">Is there any thing you would like to ask, suggest, or recommend?</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext">{{ $wave->suggestion_recommendation }}</p>
                </div>
            </div>
        </form>

    </div>

@endsection
