@extends('../sayUncle.layouts.app')

@section('head-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js" integrity="sha512-7oYXeK0OxTFxndh0erL8FsjGvrl2VMDor6fVqzlLGfwOQQqTbYsGPv4ZZ15QHfSk80doyaM0ZJdvkyDcVO7KFA==" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('../sayUncle/css/cropper.min.css') }}">
<style>
    .img-container img {
      max-width: 100%;
    }
    #avatar{
        display: none;
    }
    
  </style>
  

@endsection

@section('content')



<section id= "video_mt">
    
    <div id="background">
    </div>
<div class="container-fluid">
                    <div class="col-md-11 col-12" id="center_button">
                         <button class="btn btn-primary btn-lg btn-rounded scrollLink "  href="#register" >Enter Now!</button>
                    </div>
                </div>
</section>

 <!--   <section class="sectionPT sectionPB counter_section mt-4" style="background-image: url('/public/img/bg.jpg');">
        <div class="container">
            <div class="col_center col-md-12">
                <h2 class="section_title2 section_title color_white mt-5">LAUNCHING IN...</h2>
                <div id="simple_timer"></div>
            </div>
        </div>
    </section>-->
    
<section class="sectionPT sectionPB join_section" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="content">
                    <h2 class="section_heading"> So, why become a relative on <span>SayUncle?</span></h2>
                    <p class="text1"><i class="fa fa-asterisk" aria-hidden="true" style="color:#94CA52"></i> Chance to win money and prizes</p>
                    <p class="text1"><i class="fa fa-gift" aria-hidden="true" style="color:#94CA52"></i> 1st Prize  - ₦100k</p>
                    <p class="text1"><i class="fa fa-gift" aria-hidden="true" style="color:#94CA52"></i> 2nd Prize - ₦75k</p>
                    <p class="text1"><i class="fa fa-gift" aria-hidden="true" style="color:#94CA52"></i> 3rd Prize - ₦50k</p>
                    <p class="text1"><i class="fa fa-gift" aria-hidden="true" style="color:#94CA52"></i> And other prizes</p>
                    <p class="text1"><i class="fa fa-asterisk" aria-hidden="true" style="color:#94CA52"></i> Gain a following or increase your current following </p>
                </div>
            </div>
            <div class="col-md-6 boxVcenter">
                <!-- <div class="img_area">
                    <img alt="" src="{{ asset('../sayUncle/images/join.png')}}">
                    </div> >-->
                <div class="myVideo" id="my_video" data-video="{{ asset('../sayUncle/images/cartoon.mp4')}}"
                    data-poster="{{ asset('../sayUncle/images/cartoon.jpg')}}" data-type='video/mp4'  preload="none"></div>
            </div>
        </div>
    </div>
</section>

<!--================ Prizes Area =================-->

<div id="landing_page_coveritem2">
</div>

<!-- <section class="impress_area p_120">
    <div class="container">
        <div class="impress_inner text-center">
           
        </div>
    </div>
</section> -->
<!--================ Prizes Area =================-->
<section class="p_120" id="threestep">
    <div class="container">
        <div class="main_title">
            <h2 class="neon">Want to be a relative? </h2>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="block-2 red">
                    <span class="wrap-icon">
                    <span class="icon-pencil"><i class="fa fa-pencil-square-o"></i></span>
                    </span>
                    <h2>Register</h2>
                    <p>So, the first step is to get your details so we know who you are. Don’t worry, your information is safe with us and won’t be shared. </p>
                </div>
            </div>
            <div class="col-lg-3" >
                <div class="block-2 yellow">
                    <span class="wrap-icon">
                    <span class="icon-money"><i class="fa fa-money"></i></span>
                    </span>
                    <h2>Early Bird Special (Pay ₦500)</h2>
                    <p>Early to bed early to rise… early registrants will have a discounted fee for processing their application so they can get a Say Uncle number and submit their audition video. This price is only for a limited time so hurry.  </p>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="block-2 teal">
                    <span class="wrap-icon">
                    <span class="icon-video-camera"><i class="fa fa-money"></i></span>
                    </span>
                    <h2>Late to the Party (Pay ₦1000)</h2>
                    <p>Ok, so you missed the Early Bird Special, just pay a little bit more and get into Uncle’s house today. Time is running out.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="block-2 last">
                    <span class="wrap-icon">
                    <span class="icon-video-camera"><i class="fa fa-video-camera"></i></span>
                    </span>
                    <h2>Upload Your Audition Video </h2>
                    <p>Ok, so you’ve completed your registration, made payment, and received your Say Uncle’s unique number; now you can make your audition video! Good luck and make it look great! </p>
                </div>
            </div>
        </div>
    </div>
    <br/> <br/>
    <div align="center"><button class="btn-primary btn rounded-btn thirdFont font800 home_getStarted scrollLink " href="#register">Register Now</button></div>
</section>
<!--================ 3 steps Area =================-->
<!--================ Registration Area =================-->

 @include('sayuncle.includes.register-section')
<!--================ Registration Area =================-->
<!--   <section class="sectionPT sectionPB sectionBg3 why_section">
    <div class="container-fluid posRelative">
        <img alt="" class="shape1" src="{{ asset('../sayUncle/images/shape1.png')}}">
        <div class="col-md-8 col_center">
            <h2 class="section_heading">Why <span>vicomma</span> is for you </h2>
        </div>
    
        <div class="row">
            <div class="col-md-4 dFlex">
                <div class="single_why">
                    <img alt="" class="icon" src="{{ asset('../sayUncle/images/search_icon2.png')}}">
                    <h6 class="title">Hire a Creative</h6>
                    <p class="text">So, on vicomma you can find influencers and creatives who will create a cool
                        piece of content for you to sell or promote your product, merch, service, or brand; they
                        can also promote it on their platform, if you ask nicely.</p>
                </div>
            </div>
            <div class="col-md-4 dFlex">
                <div class="single_why">
                    <img alt="" class="icon" src="{{ asset('../sayUncle/images/money_icon2.png')}}">
                    <h6 class="title">Earn money Creating</h6>
                    <p class="text">We are in the age of creators so make it work for you if you haven’t
                        already; find vendors and merchants that need you to push them forward; it will pay off.
                    </p>
                </div>
            </div>
            <div class="col-md-4 dFlex">
                <div class="single_why">
                    <img alt="" class="icon" src="{{ asset('../sayUncle/images/watch_icon2.png')}}">
                    <h6 class="title">Watch & Buy</h6>
                    <p class="text">The greatest thing in life is freedom, with vicomma you can enjoy the
                        freedom of ALL types of content and also get a piece of this content by buying what you
                        see easily, log in and enjoy the view.</p>
                </div>
            </div>
        </div>
    </div>
    </section>-->
<section class="sectionPT step_section " id="whatissayuncle">
    <div class="container-fluid">
        <div class="col-md-8 col_center">
            <h2 class="section_heading mb1">So, how do I become one of <span>Say Uncle’s relatives?</span></h2>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 padding">
                <div class="img_area">
                    <img alt="" class="border_right step1_img" src="{{ asset('../sayUncle/images/step1.png')}}" height="50%;">
                </div>
            </div>
            <div class="col-md-6 padding boxVcenter">
                <div class="step_info">
                    <p class="stepText">Step 1</p>
                    <p class="stepTitle">Register Your Application.</p>
                    <p class="stepContent">Simply click on the Register now button below and follow the steps to a ‘T’. Make sure you don’t skip any steps and provide all mandatory information. Then move on to the next step. .</p>
                    <button class="btn btn-primary rounded-btn scrollLink" href="#register">Register Now</button>
                </div>
            </div>
            <div class="col-md-6 padding boxVcenter">
                <div class="step_info">
                    <p class="stepText">Step 2</p>
                    <p class="stepTitle">Make Your Payment</p>
                    <!-- <p class="stepContent mb-0">Choose which option suits you best for now; remember you can
                        always upgrade to a different option. Whether you need to hire a creative to promote
                        your stuff, or <span class="colorSnd"> you’re looking to </span> get hired as a
                        creative;<span class="colorSnd"> Your </span> account will be free for now but you can
                        <span class="colorSnd"> always upgrade to</span> a different</p> -->
                    <!-- <button class="btn btn-primary rounded-btn">Signup Now</button> -->
                    <p class="stepContent mb-0">Nothing is free but you can’t beat this price for a change to win BIG! After completing your registration, simply make your payment. This will allow us to generate a unique number which is the key to getting closer to becoming a relative in the SayUncle contest. Remember there is a cutoff date for the Early Bird Special price so Register now. </p>
                </div>
            </div>
            <div class="col-md-6 padding">
                <div class="img_area">
                    <img alt="" class="border_right step2_img" src="{{ asset('../sayUncle/images/step2.png')}}">
                </div>
            </div>
            <div class="col-md-6 padding">
                <div class="img_area">
                    <img alt="" class="border_left step3_img" src="{{ asset('../sayUncle/images/step3.png')}}">
                </div>
            </div>
            <div class="col-md-6 padding boxVcenter" >
                <div class="step_info">
                    <p class="stepText">Step 3</p>
                    <p class="stepTitle">Receive Your Unique SayUncle ID</p>
                    <p class="stepContent mb-0">Once we successfully receive your payment, you will be sent email notification of successful payment. In addition, you will also receive a unique SayUncle ID, if all goes well with your registration and payment processes. If you would like to keep notification of your application process, simply click ( button ) CHECK STATUS button to find out where you are in the process.  </p>
                   <!-- <button class="btn btn-primary rounded-btn" data-toggle="modal" data-target="#checkStatus">Check Status</button> -->
                </div>
            </div>
            <div class="col-md-6 padding boxVcenter" >
                <div class="step_info">
                    <p class="stepText">Step 4</p>
                    <p class="stepTitle">Make or upload your audition video</p>
                    <p class="stepContent mb-0"> Again, you will be sent email notification of successful payment. In addition, you will also receive a unique SayUncle ID, if all goes well with your registration and payment processes. This unique ID is the key for you to be enabled to create and upload your audition video. There will be instructions in the email of how to do this. Now you’re one step closer to becoming a relative in the SayUncle contest!
                    </p>
                    <!-- <button class="btn-primary btn-primary rounded-btn">Signup Now</button> -->
                </div>
            </div>
            <div class="col-md-6 padding" >
                <div class="img_area">
                    <img alt="" class="border_right step4_img" src="{{ asset('../sayUncle/images/step4.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>






<section class="sectionPB11 sectionPT11 action_section">
    <div class="container-fluid">
        <div class="col-md-6 col_center">
            <h2 class="section_heading"><span>Say Uncle</span> <br> some future relatives</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="single_join ">
                    <video  preload="none" height="350" width="300" controls poster="{{ asset('../sayUncle/images/one.png')}}"  style="object-fit: inherit;">
                        <source src="{{ asset('../sayUncle/images/one.mp4')}}" type="video/mp4">
                    </video>
                    <p class="action_title">Emmanuela D.</p>
                    <p class="text1">Future SayUncle Relative # 1 </p>
                </div>
                
                <div class="single_join">
                    <video preload="none"  height="350" width="300" controls poster="{{ asset('../sayUncle/images/two.jpg')}}"  style="object-fit: inherit;">
                        <source src="{{ asset('../sayUncle/images/two.mp4')}}" type="video/mp4">
                    </video>
                    <p class="action_title">Ola V.</p>
                    <p class="text1">Future SayUncle Relative # 2 </p>
                </div>
            
            
            </div>
            <div class="col-md-6">
                <div class="single_join">
                    <div class="img_area">
                        <img alt="" src="{{ asset('../sayUncle/images/middle_logo.png')}}">
                    </div>
                   

                </div>
             </div>
            <div class="col-md-3">
                <div class="single_join">
                    <video  preload="none"   height="350" width="300" controls poster="{{ asset('../sayUncle/images/three.png')}}"  style="object-fit: inherit;">
                        <source src="{{ asset('../sayUncle/images/three.mp4')}}" type="video/mp4">
                    </video>
                    <p class="action_title">Joan C.</p>
                    <p class="text1">Future SayUncle Relative # 3 </p>
                </div>
                <div class="single_join">
                    <video preload="none"  height="350" width="300" controls poster="{{ asset('../sayUncle/images/four.png')}}" style="object-fit: inherit;">
                        <source src="{{ asset('../sayUncle/images/four.mp4')}}" type="video/mp4">
                    </video>
                    <p class="action_title">Mabel E.</p>
                    <p class="text1">Future SayUncle Relative # 4 </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="col-md-12 col_center">
            <h4 class="section_heading1">Complete all of your task, be yourself, and of course try not to get eliminated!</h4>
            <h4 class="section_heading1">Part of a <img src="{{ asset('../sayUncle/images/flogo.png')}}">company. G.I.G</h4>
            <button  class="btn-primary btn rounded-btn thirdFont font800 home_getStarted scrollLink" href="#register">Register Now</button>
            <br>
        </div>
    </div>
</section>
<br/>

    <!-- Modal -->
    <div class="modal fade" id="howItWorksModal" tabindex="-1" role="dialog" aria-labelledby="howItWorksModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="howItWorksModalLabel" style="text-align: center; width: 100%;"><i class="fa fa-hand-o-right" aria-hidden="true"></i>
Terms and Conditions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body main_content">
                    <p><strong>1. Definitions and introduction</strong></p>
                    <p><b>(1.1)</b> In this Agreement the following words and phrases shall have the following meanings (and, where applicable, the singular shall include the plural):</p>
                    <ul class="about_content_modal fa-ul">
                        <li><p><b>Competition</b> mean any competition or promotion on the radio station or website; “employee” shall include employees, freelancers, contractors and volunteers;</p></li>
                        <li><p><b>Entrant</b> means any person who enters a Competition; “Family Member” means a spouse, partner, close blood relation or spouse of a close blood relation; </p></li>
                        <li><p><b>The Dotweinc Ventures Limited ( or DVL )</b> means registered company in Nigeria, whose company number is RC995198, and located at (old location) 14 Amaraolu Street, Ikeja Lagos Nigeria (new location)  5 Omotayo Street , Ikorodu Lagos Nigeria.</p></li>
                        <li><p>The words include and including shall not be interpreted as limiting the generality of any preceding words;</p></li>
                        <li><p><b>Intellectual Property Rights</b> means any trade marks, copyright, moral rights,performer’s rights, confidential information, trade secrets and all or any other intellectual or industrial property rights, both registered and unregistered anywhere in the world, including any renewals and extensions and including any such rights discovered or invented after the date of this Agreement; </p></li>
                        <li><p><b>Participant</b> means any person who is selected by us to participate in a competition;</p></li>
						<li><p><b>Prize</b> means any prize or gift offered or awarded in a Competition;</p></li>
						<li><p><b>Specific Rules</b> means the specific rules, entry instructions and any other specific details or terms relating to the particular Competition or Prize published on this website or on any other website or in any other media which features the competition;</p></li>
						<li><p><b>Terms</b> means these Competition Terms and Conditions together with any Specific Rules;</p></li>
						<li><p><b>"We”, “Us” and “Our"</b> means DVL/Maxflix Entertainment including any successors in title and assigns;</p></li>
						<li><p><b>You</b> means an Entrant or Participant in or winner of (as the case may be) a Competition.</p></li>
                    </ul>
                    <p><b>(1.2)</b> All of our Competitions will be subject to</p>
					<p><b>(I)</b> These Competition Terms and Conditions and</p>
					<p><b>(II)</b> The Specific Rules and you will be bound by these Terms when</p>
					<p>you enter or participate in any Competition or accept any Prize. If these competition terms and conditions differ or conflict with any Specific Rules, then the Specific Rules will prevail.</p>
					<p><b>(1.3)</b> We may add to, amend or vary these Competition Terms and Conditions from time to time, at our discretion </p>
					<p><b>(1.4)</b> You agree to co-operate with and comply with all reasonable requests made by us in connection with any Competition and its broadcast.</p>
				 <p><strong>2. Eligibility and Entry Criteria</strong></p>
					<p><b>(2.1)</b> In order to make a valid entry into a Competition you must enter as an individual using your legal name and make only one entry per Competition, unless the Specific Rules allow you to make multiple entries. You may only enter a competition if you are a resident of the Nigeria.</p>
					<p><b>(2.2)</b> The Specific Rules will state if there are any age restrictions relating to the competition.</p>
					<p><b>(2.3)</b> Unless otherwise stated in the Specific Rules, you may not enter a competition if you are an employee, or Family Member of an employee, of (i) DVL/Maxflix Entertainment or (ii) any Competition sponsor or Prize giver or if you are directly or indirectly connected with the Competition.</p>
					<p><b>(2.4)</b> So that we can ensure the fairness of our competitions, we reserve the right to prevent you, at our absolute discretion, from entering any of our competitions for a period of six months if you have either (i) won a Prize valued at 100,000 or greater or (ii) won more than one Prize during the previous six months. If we choose to exercise this right, we will notify you in writing.</p>
					<p><b>(2.5)</b> You may not enter a Competition if you have been given the answer(s) or any other relevant information in relation to the Competition, either directly or indirectly, by any employee of DVL/Maxflix Entertainment, Competition sponsor or Prize giver.</p>
					<p><b>(2.6)</b> No multiple, bulk, automated, machine assisted, third party, syndicate or other group entries will be accepted.  We shall disqualify any entries which, in our reasonable opinion, appear to have used any of these entry methods including multiple entries from the same IP address or telephone number, unless the Specific Rules state that multiple entries are permitted.</p>
					<p><b>(2.7)</b> Candidates in any General, Mayoral or any other national or local Election will be ineligible, during the period of such Election, to enter any Competition until after the conclusion of such Election.</p>
					<p><b>(2.8)</b> We may ask you to provide us with proof of your eligibility to enter a Competition and we reserve the right, in our sole discretion, to decide whether or not eligibility criteria have been met.  Breach of any of the criteria contained in this Clause 2 may result in your disqualification from a Competition and/or the withdrawal of a Prize.</p>
				<p><strong>3. Entering a Competition</strong></p>
					<p><b>(3.1)</b> Entries by text message must be sent to the applicable shortcode for a fee of one thousand naira (1000,00) which is not refundable as advertised on-air or online. Please be aware that shortcodes may change from Competition to Competition. You may need to check with your service provider for details of phone network compatibility. You will pay any text messaging charges via your service provider. </p>
					<p><b>(3.2)</b> Please take care to follow the exact on-air or online Competition entry instructions. We cannot guarantee Competition entry for mis-spelt entries;</p>
					<p><b>(3.3)</b> A text message or a telephone call will normally cost the standard rate for
						your service provider, please check with your service provider for more details.The cost of text messages and telephone calls via different service providers may
						vary.</p>
											<p><b>(3.4)</b> If you are using a telephone which is not paid for by you, please ask for
						the permission of the bill payer before entering the Competition.</p>
											<p><b>(3.5)</b> If you fail to answer your telephone when we phone you or you become
						disconnected for any reason before or during the Competition, we reserve the
						right to select another Entrant to participate in the Competition.
						</p>
											<p><b>(3.6)</b> For Competitions involving online voting only one vote for each valid
						email address will be accepted and we reserve the right to disqualify any Entrant
						making, or attempting to make, multiple votes.
						</p>
											<p><b>(3.7)</b> For each on-air Competition all timings including the closing time are as
						broadcast on the Station&#39;s FM broadcast frequency. If you are listening via an IP
						enabled device such as a smartphone or tablet, please remember that the stream
						can be slightly behind the FM broadcast due to differences in network speeds
						and/or the advertising we serve to listeners on IP enabled devices. If a
						Competition requires you to enter by a deadline dependent on an item in the
						broadcast (e.g. by the end of a song) we cannot take into account any delay from
						listening via an IP enabled device and the deadline will be as on the FM
						broadcast, so please take this into account when entering a Competition.</p>
				<p><strong>4. Prizes</strong></p>
					<p><b>(4.1)</b> If you win a prize, unless otherwise stated in the Specific Rules, we will
notify you within 28 days of the end date of the Competition and you will then

have 28 days within which to claim the Prize.  If you fail to claim the Prize within
the time-limit, or fail to comply with any other instructions or time-limits notified
to you, you will forfeit your right to the Prize and your claim will be invalid.
</p>
					<p><b>(4.2)</b> We reserve the right, at our absolute discretion, to request certain evidence
relating to your Competition entry including proof of identity, age and address.
 Please ensure you have given us your correct address so that we can send your
Prize to you.  We may request that you provide an in-studio recording to compare
to your on-air win as proof of your vocal identity.
</p>
					<p><b>(4.3)</b> We may carry out an interview with you either by telephone or in person
and we may record the interview;
</p>
					<p><b>(4.4)</b> All Prizes are non-transferable and may not be given, assigned or sold to
another person.
</p>
					<p><b>(4.5)</b> Prizes cannot be exchanged for cash or other alternatives except by us in
accordance with clause 10.1.
</p>
					<p><b>(4.6)</b> You will not be entitled to receive a Prize which, for any reason, you would
be prohibited by law from purchasing, using or owning.
</p>
					<p><b>(4.7)</b> Unless otherwise stated in the Specific Rules, you may not win more than
one Prize per Competition and we reserve the right to withhold or reclaim any
second or subsequent Prize.
</p>
					<p><b>(4.8)</b> Where the Prize contains ticket(s) to an event, you will be bound by and
must comply with the event promoter’s terms and conditions together with those
set out on the ticket and the rules and regulations of the venue.
</p>
					
				<p><strong>5. Additional terms relating specifically to Holiday Prizes</strong></p>
					<p><b>(5.1)</b> Holiday Prizes are subject to availability and must be taken in accordance
with the dates, destinations, carriers and number of passengers specified by us.
</p>
					<p><b>(5.2)</b> When entering a Competition offering a holiday Prize with international
travel you must hold a valid passport with at least 6 months’ further duration and
which contains no visa restrictions on your ability to travel to the relevant
destination.  Passport control and in-country authorities reserve the right to
refuse entry. If you are refused passage and or entry/exit to or from the country
being visited, any additional costs and losses incurred will be your sole
responsibility.
</p>
					<p><b>(5.3)</b> Holiday Prizes are not available to persons under the age of 18 unless
otherwise stated in the Specific Rules.  Children under 18 years of age cannot
travel and this competition is for adult aged 18 or over.
</p>
					<p><b>(5.4)</b> All holidays must be taken within 6 months of the date of the Competition
(unless otherwise stated in the Specific Rules).
</p>
					<p><b>(5.5)</b> The Specific Rules will provide details of any travel insurance policy
offered as part of the holiday Prize.  Where no insurance is offered, you are
responsible for obtaining adequate travel insurance.
</p>
					<p><b>(5.6)</b> You must comply with the terms and conditions, including health and
safety requirements, of the Prize provider, the airline and other carriers and
venues involved in the Competition or the Prize including all health and safety
guidelines and instructions and all applicable legal and regulatory requirements.
</p>
					<p><b>(5.7)</b> You may not commit us to any contract, expense or cost without our prior
written consent.  You must have sufficient financial resources to meet any
financial commitment which you may incur in connection with the Prize beyond
those included in the Prize itself (including transfers to and from the airport,
meals and drinks).
</p>
					<p><b>(5.8)</b> We accept no liability for any changes in the details, including dates and
times, of any flights, other transport, airport details, accommodation or other
aspects of the Prize. 
</p>
					<p><b>(5.9)</b> We accept no liability for any changes in the details, including dates and
times, of any flights, other transport, airport details, accommodation or other
aspects of the Prize. 
</p>

<p><strong>6. Additional terms relating specifically to Holiday Prizes</strong></p>
					<p><b>(6.1)</b>	Your entry or participation in a Competition and/or Prize is at your own
risk and your health and safety is your own responsibility.  If the Competition or
Prize requires you to undertake any physical activity please ensure, before
entering the Competition, that you (i) are in good health and (ii) have no
underlying medical condition and are taking no medication that could adversely
affect you.
</p>
					<p><b>(6.2)</b>	Please ensure that you notify us immediately if you become ill or become
aware of any other relevant medical or health and safety information which could
affect your participation in a Competition and/or Prize.  You must comply with all
safety requests made by us or our representatives.
</p>
					<p><b>(6.3)</b>	We reserve the right to disqualify you from the Competition and/or Prize
(without liability or compensation) if you (in our opinion, which shall be final)
conduct yourself in a way which exposes you or others to any medical, security,
safety or other risk whatsoever (including being intoxicated or abusive in any
way).
</P>			
<p><strong>7. Confidentiality and Publicity</strong></p>
					<p><b>(7.1)</b>	You agree to keep confidential any information which you know or
reasonably ought to know is confidential and relates to us, our business or the
Competition or Prize.
</p>
					<p><b>(7.2)</b>	You agree to participate, at our request, in publicity (including interviews)
and you agree that we own all Intellectual Property Rights in, and may use at our
absolute discretion, such publicity/interviews.  We may refer to your association
with the Competition and/or the Prize in all publicity, marketing and materials. 
</p>
					<p><b>(7.3)</b>	You agree that you shall not publicise your involvement in the Competition
or the fact that you have won a Prize (including giving interviews) except as set
out in clause 7.2 or with our prior written consent.
</p>
					<p><b>(7.4)</b>	We may publish winners’ names and post towns and make them available
to third parties upon their request which may be made by sending a self-
addressed stamped envelope to our address up to 1 month after the closing date
for the relevant Competition.
</p>
				
<p><strong>8. Intellectual Property Rights</strong></p>
					<p><b>(8.1)</b>	By entering a Competition or submitting a video, image, audio file or any
other materials in relation to a Competition or Prize (the “Products”) you: (i)
confirm the grant by you to us of a worldwide, perpetual, royalty free licence in
the Intellectual Property Rights in the Products or Competition entry, (ii) waive
any moral rights and like rights you have in relation to the Products or
Competition entry so that we shall be entitled to use the Products or Competition
entry in any and all media at no cost to us and (iii) warrant to us that the Products
or Competition entry:
</p>
					 <ul class="about_content_modal fa-ul">
						<li><p><b>8.1.1</b> are personal and related specifically to you;</p></li>
						<li><p><b>8.1.2</b> are owned and controlled by you and that you have the right, power and
authority to grant the rights set out in these Terms;
</p></li>
						<li><p><b>8.1.3</b> will not infringe the Intellectual Property Rights, privacy or any other rights
of any third party;
</p></li>
						<li><p><b>8.1.4</b> will not contain anything which is untrue, defamatory, obscene, indecent,
harassing or threatening;
</p></li>
						<li><p><b>8.1.5</b> do not violate any applicable law or regulation (including any laws
regarding anti-discrimination or false advertising);
</p></li>
						<li><p><b>8.1.6</b> are not obscene or pornographic;</p></li>
						<li><p><b>8.1.7</b> do not, to the best of your knowledge, contain any viruses or other
computer programming routines that are intended to damage, detrimentally
interfere with, surreptitiously intercept or expropriate any system, data or
personal information;
</p></li>
						<li><p><b>8.1.8</b> are free from any encumbrances such that we may use the Products in
accordance with and in the manner set out in these Terms.
</p></li>
						
                    </ul>
					
					<p><b>(8.2)</b>	For the avoidance of doubt, all rights relating to the Competition (including
the name, title and format of the Competition) will vest exclusively in DVL/Maxflix Entertainment for our own use (in our absolute discretion).
</p>
					<p><b>(8.3)</b>	Unless otherwise stated, Competition entries will not be returned to you.</p>
					<p><b>(8.3)</b>	Any personal data submitted by you will be used solely in accordance with
current Nigeria data protection legislation and our privacy policy.
</p>					
<p><strong>9. Disqualification</strong></p>
					<p><b>(9.1)</b>	We reserve the right (without accepting any liability or giving you any
compensation) to disqualify you from a Competition and/or withhold or withdraw
a Prize (or seek compensation from you therefor) if (in our opinion, which shall be
final):
</p>
<ul class="about_content_modal fa-ul">
						<li><p><b>9.1.1</b> you are in breach of the Terms or any of your obligations, representations
and/or warranties under this Agreement;
</p></li>
						<li><p><b>9.1.2</b> your conduct is inappropriate or contrary to the spirit or intention of the
Terms or of the Competition;
</p></li>
						<li><p><b>9.1.3</b> you have committed or undertaken any fraud, dishonesty, deceit,
misconduct or similar action including providing any false or incorrect
information;</p></li>	
<li><p><b>9.1.4</b> your act(s) or omission(s) might have an adverse effect on the
Competition
</p></li>
<li><p><b>9.1.5</b> it is in our best interests to do so.</p></li>					
                    </ul>
					<p><b>(9.2)</b>	Entries that are incomplete, indecipherable, corrupt, late or otherwise not
in accordance with entry instructions will not be accepted.
</p>
					<p><b>(9.3)</b>	In the event of your disqualification from the Competition/Prize:</p>
					<ul class="about_content_modal fa-ul">
						<li><p><b>9.3.1</b> We reserve the right to select another Entrant to take part in the
Competition/receive the Prize; and
</p></li>
						<li><p><b>9.3.2</b> You may be required to pay any costs incurred.</p></li>					
                    </ul>
<p><strong>10. Cancellation of the Competition</strong></p>
					<p><b>10.1</b> We shall be entitled, in our reasonable discretion, to cancel, delay and/or
recommence a Competition with immediate effect by on-air or online
announcement without any liability to you. If we cancel a Competition after you
have claimed a Prize, we will use our reasonable endeavours to offer you an
alternative Prize.  If we offer you an alternative Prize but you do not accept it, you
shall have no claim against us.
</p>			
<p><b>10.2</b>We may cancel a Competition if we believe we have good reason to do so,
including if:</p>
<ul class="about_content_modal fa-ul">
<li><p><b>10.2.1</b> a broadcasting, publishing, production, distribution or printing error of any
kind occurs (whether on-air, online or otherwise);
 </p></li>
<li><p><b>10.2.2</b> there have been any errors in the preparation for, or the conduct of, the
Competition materially affecting the result of the Competition, the number of
Prize claims or the value of the Prize claims.
</p></li>					
</ul>
<p><strong>11. Exclusion of liability/indemnity</strong></p>
<p><b>11.1</b> Nothing in the Terms excludes our liability for:</p>
<ul class="about_content_modal fa-ul">
<li><p><b>11.1.1</b> death or personal injury arising out of our negligence or the negligence of
our employees;</p></li>
<li><p><b>11.1.2</b> fraud or fraudulent misrepresentation by us or our employees; or
</p></li>
<li><p><b>11.3.3</b> any other liability that cannot be excluded or limited by law.
</p></li>				
</ul>
<p><b>11.2</b> Without prejudice to the provisions of Clause 11.1, we exclude all liability
whatsoever for any costs, expenses, losses, damages, liabilities, injury or
disappointment (other than any costs and expenses specifically provided for in
the Competition and/or Prize) including any loss of profit, business, contracts,
revenues or anticipated savings and whether special, direct, indirect or
consequential suffered by you howsoever arising in connection with the
Competition and/or Prize.
</p>
<p><b>11.3</b> Without prejudice to the provisions of Clause 11.1 and subject to the
provisions of Clause 11.2, we shall have no liability whatsoever:
</p>
<ul class="about_content_modal fa-ul">
<li><p><b>11.3.1</b> in respect of Competitions operated by third parties and featured on air or
on our website.  The relevant third party will be responsible for the fulfilment of
the Competition.  We accept no responsibility for the acts or omissions of such
third parties;
</p></li>
<li><p><b>11.3.2</b> in the event of postal, telephone, text message or online entries delayed or
not received by us as a result of network incompatibility, technical faults or for
any other reason;
</p></li>
<li><p><b>11.3.3</b> for any person not being able to enter a Competition for any reason,
including system failure, error, the application through which online entries are
made being down, hacks on the system or personal computer issues;
</p></li>
<li><p><b>11.3.4</b> for any losses suffered by you in submitting data to any of our websites;
</p></li>	
<li><p><b>11.3.5</b> for any mistakes in the source material utilised by our question compilers;
</p></li>	
<li><p><b>11.3.6</b> for any person not being able to enter a Competition for any reason,
including system failure, error, the application through which online entries are
made being down, hacks on the system or personal computer issues;
</p></li>				
</ul>
<p><b>11.4</b> The decision of our judges are final and conclusive in all circumstances
and no correspondence will be entered into.
</p>
<p><b>11.5</b> You agree to indemnify us and our employees against all costs, losses,
damages, expenses and liabilities (including for loss of reputation and goodwill
and professional advisor’s fees) suffered by us arising as a result of a breach by
you of your obligations under the Terms or in any way in connection with your
failure to follow our reasonable instructions with regard to your entry into the
Competition or taking of any Prize.</p>
<p><strong>12. Force Majeure</strong></p>
<p><b>12.1</b> We shall not be liable to perform any of our obligations under the
Competition or in respect of the Prizes where we are unable to do so as a result
of unforeseen circumstances or circumstances beyond our reasonable control
and whilst we may (but shall not be obliged to) endeavour to provide an
alternative Prize of equal value, we shall not be liable to compensate you in such
circumstances.</p>
<p><strong>13. General</strong></p>
<p><b>13.1</b> You agree you will not by any act or omission do anything, which might
bring DVL/Maxflix Entertainment into disrepute or affect the reputation of the
Competition.
</p>
<p><b>13.2</b> The Terms shall be governed and construed in accordance with the laws
of Nigeria and you and we submit to the exclusive jurisdiction of Nigeria Courts.
</p>
<p><b>13.3</b>The terms represent the entire agreement between you and us relating to
the Competition and/or the Prize and supersede any prior representations,
agreements, negotiations or understandings (whether oral or in writing). No
variation of the Terms is effective unless approved by an authorised
representative of DVL/Maxflix Entertainment in writing.
</p>
<p><b>13.4</b>Except as specifically set out herein, all conditions, warranties and
representations expressed or implied by law are excluded.
</p>
<p><b>13.5</b>The invalidity, illegality, or unenforceability of the whole or any part of the
Terms does not affect or impair the continuation in force of the remainder of the
Terms.
</p>
<p><b>13.6</b>The failure to exercise or delay in exercising a right or remedy provided
hereunder or by law does not constitute a waiver of the right or remedy or waiver
of other rights or remedies.
</p>
<p><b>13.7</b> This Agreement does not create any right or benefit enforceable by any
person not a party to it (within the meaning of the Contracts (Rights of Third
Parties)
</p>

<!--Vendors-->
<!--Create a Vendor Station-->
<!--Add merchandise images-->
<!--Get matched to creatives who generate content & promote it-->
<!--Increase your sales-->
<!--Creatives-->
<!--Discover tons of Vendors who will pay for your content & influence-->
<!--Create content and promote it-->
<!--Get paid-->
<!--Everyone else-->
<!--Watch and buy what you see in the content all on 1 platform-->
<!--Or join the wave-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    
     <!-- Modal -->
    <div class="modal fade" id="video_submission" tabindex="-1" role="dialog" aria-labelledby="video_submission" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="video_submission" style="text-align: center; width: 100%;"><i class="fa fa-hand-o-right" aria-hidden="true"></i>
Online Video Submission Agreement </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body main_content">
                     <p>This Online Video Submission Agreement (“Agreement”) shall confirm certain of your rights and responsibilities.</p>
					<p>By uploading any data or information, or posting or submitting any content to any or all of MF/DVL platforms for, (“User Content”), you certify, represent and acknowledge that you wholly own the User Content or have the sole and exclusive right to permit Maxflix Entertainment & DV Limited Entertainment, Inc. and its parents, members, managers, directors, shareholders, partners, representatives, subsidiaries, affiliates, sponsors, successors, assigns, heirs and licensees (collectively, “MF/DVL”) to use, edit, publish and otherwise exploit your User Content and your name in connection with your User Content without any obligation or liability to you or any other party whatsoever. You shall be solely responsible for your User Content and the consequences of submitting and publishing your User Content.</p>
					<p>When you provide us with your User Content, you give MF/DVL a non-exclusive, worldwide, perpetual, irrevocable, royalty-free, sublicensable and transferable (through multiple tiers) right and license to exercise any and all copyright, trademark, publicity and database rights that you have in the User Content in any and all formats or media now known or hereafter devised in the future. You further hereby grant to MF/DVL the non-exclusive, irrevocable and unconditional right and license to describe, relate, broadcast, exhibit, transmit, publish, use, monetize, distribute and/or exploit your User Content in any such manner as MF/DVL shall elect, in whole or in part, on the internet, in print and electronic form, in merchandising, publicity and advertising, or in any other media now known or hereafter created or devised throughout the universe in perpetuity. For the avoidance of doubt, this shall include, without limitation, the right to submit and license (and sublicense) your User Content to third-parties including, but not limited to, television broadcast networks, cable stations, pay, pay-per-view, satellite or free television networks, television syndicators, home video distributors, podcast/mobisode distributors, or any other third-party distributor (“Third Parties”) for the further exploitation of your User Content in any format or media, including the development of a possible television and/or other audiovisual production. You agree MF/DVL and the Third Parties shall have the right to edit, change, add to, take from, rearrange, vary, embellish, alter, modify, revise, duplicate, translate, reformat and/or reprocess your User Content in any manner MF/DVL or the Third Parties may in their sole discretion determine and to use it as MF/DVL  or the Third Parties in their sole discretion may determine and to make derivative works of the same, in whole or in part, without notifying you and without obligation to you. You waive any right to inspect or approve the final display or other exploitation of your User Content now or in the future, whether that use is known to you or unknown, and you waive any right to royalties or any other compensation arising from or related to the use of your User Content.</p>
					<p>You shall be solely responsible for your own User Content and the consequences of posting or publishing the same. In connection with your User Content, you affirm, represent, and/or warrant that: (i) you are over 18 years of age, or are an emancipated minor, or possess legal parental or guardian consent and that you have the right and ability to enter into this Agreement and agree to the terms stated herein; (ii) you own or have the necessary licenses, rights, consents, and permissions to use and authorize MF/DVL to use all patent, trademark, trade secret, copyright or other proprietary rights in and to any and all User Content to enable inclusion and use of the User Content in the manner contemplated by MF/DVL and these terms of use, without the consent of any third parties; (iii) you have not exclusively granted or assigned or otherwise transferred the rights in and to your User Content to any third parties; (iv) there are no claims, litigation, or other proceedings pending or threatened which could in any way impair, limit or diminish the rights in and to the User Content granted here under; (v) if any minors appear in the User Content, I am the mother, father or duly appointed guardian of such minors or have the irrevocable permission of the parents or duly appointed guardian(s) of such minor(s) to grant the rights in and to the User Content set forth herein; (vi) you are granting the rights in and to the User Content granted here under with the knowledge and understanding that MF/DVL or the Third Parties may incur substantial expense in reliance thereon; and (vii) uploading or posting User Content shall constitute my signature and acceptance of this Agreement and these terms and have the same effect as if you had signed such an Agreement containing these terms and, upon request, you agree to sign a non-electronic version of this Agreement containing these terms and, until such time, a printed version of this Agreement shall be admissible in judicial, administrative or arbitration proceedings based upon or relating to this Agreement and these terms to the same extent and subject to the same terms and conditions as other business documents and records originally generated and maintained in printed form.</p>
					<p>MF/DVL does not endorse any User Content or any opinion, recommendation, or advice expressed therein, and MF/DVL expressly disclaims any and all liability in connection with User Content. You understand and acknowledge that MF/DVL does not guarantee any confidentiality with respect to any of your User Content. MF/DVL does not permit copyright infringing activities and infringement of intellectual property rights on any of its websites, and MF/DVL will remove all User Content if properly notified that such User Content infringes on another’s intellectual property rights. MF/DVL reserves the right to remove User Content in its sole discretion and without prior notice to you, and without any refund or other compensation.</p>
					<p>In no event shall MF/DVL, its officers, directors, employees, or agents, be liable to you for any direct, indirect, incidental, special, punitive, or consequential damages whatsoever resulting from any (i) errors, mistakes, or inaccuracies of user content, (ii) personal injury or property damage of any nature whatsoever resulting from your submission of user content to MF/DVL, (iii) any unauthorized access to or use of any and all of your personal information and/or financial information, and/or (iv) any errors or omissions in any user content or for any loss or damage of any kind incurred as a result of any user content, whether based on warranty, contract, tort, or any other legal theory, and whether or not you are advised or aware of the possibility of such damages. The foregoing limitation of liability shall apply to the fullest extent permitted by law in your applicable jurisdiction. You specifically acknowledge that MF/DVL shall not be liable for user content or the defamatory, offensive, or illegal conduct of any third party, and that the risk of harm or damage from the foregoing rests entirely with you.</p>
					<p>To the extent permitted by applicable law, you agree to defend, indemnify and hold harmless MF/DVL, its parent corporation, officers, directors, employees and agents, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney’s fees) arising from: (i) your use of and access to MF/DVL; (ii) your violation of any term of this Agreement; (iii) your violation of any third party right, including without limitation any copyright, property, or privacy right; or (iv) any claim that your User Content caused damage to a third party. This defense and indemnification obligation will survive your use of MF/DV.</p>
<!--                   
            
<!--                    Vendors-->
<!--Create a Vendor Station-->
<!--Add merchandise images-->
<!--Get matched to creatives who generate content & promote it-->
<!--Increase your sales-->
<!--Creatives-->
<!--Discover tons of Vendors who will pay for your content & influence-->
<!--Create content and promote it-->
<!--Get paid-->
<!--Everyone else-->
<!--Watch and buy what you see in the content all on 1 platform-->
<!--Or join the wave-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    
    
    
     <!-- Modal -->
    <div class="modal fade" id="mustreadinfo" tabindex="-1" role="dialog" aria-labelledby="mustreadinfo" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mustreadinfo" style="text-align: center; width: 100%;"><i class="fa fa-hand-o-right" aria-hidden="true"></i>
Must Read Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body main_content">
                    <strong><i class="fa fa-asterisk main_heading" aria-hidden="true"></i>Must Read Information</strong>
                    <ul class="about_content_modal fa-ul">
                        <li><i class="fa fa-hand-o-right hand_color"></i>
                        
                        Competition Terms and Conditions
1.         Definitions and introduction
1.1       In this Agreement the following words and phrases shall have the
following meanings (and, where applicable, the singular shall include the plural):
“Competition” means any competition or promotion on the radio station or website; “employee” shall include employees, freelancers, contractors and volunteers;
“Entrant” means any person who enters a Competition; “Family Member” means a spouse, partner, close blood relation or spouse of a close blood relation; 
The Dotweinc Ventures Limited ( or DVL ) means registered company in Nigeria, whose company number is RC995198, and located at (old location) 14 Amaraolu Street, Ikeja Lagos Nigeria (new location)  5 Omotayo Street , Ikorodu Lagos Nigeria.
the words include and including shall not be interpreted as limiting the
generality of any preceding words;
“Intellectual Property Rights” means any trade marks, copyright, moral rights,
performer’s rights, confidential information, trade secrets and all or any other
intellectual or industrial property rights, both registered and unregistered
anywhere in the world, including any renewals and extensions and including any
such rights discovered or invented after the date of this Agreement;
“Participant” means any person who is selected by us to participate in a
Competition;
“Prize” means any prize or gift offered or awarded in a Competition;
“Specific Rules” means the specific rules, entry instructions and any other
specific details or terms relating to the particular Competition or Prize published
on this website or on any other website or in any other media which features the
Competition;
“Terms” means these Competition Terms and Conditions together with any
Specific Rules;
“we”, “us” and “our” means DVL/Maxflix Entertainment including any successors
in title and assigns;
“you” means an Entrant or Participant in or winner of (as the case may be) a
Competition.
1.2       All of our Competitions will be subject to (i) these Competition Terms and
Conditions and (ii) the Specific Rules and you will be bound by these Terms when

you enter or participate in any Competition or accept any Prize.  If these
Competition Terms and Conditions differ or conflict with any Specific Rules, then
the Specific Rules will prevail.
1.3       We may add to, amend or vary these Competition Terms and Conditions
from time to time, at our discretion.
1.4       You agree to co-operate with and comply with all reasonable requests
made by us in connection with any Competition and its broadcast.
 
2.         Eligibility and Entry Criteria
2.1       In order to make a valid entry into a Competition you must enter as an
individual using your legal name and make only one entry per Competition,
unless the Specific Rules allow you to make multiple entries.  You may only enter
a competition if you are a resident of the Nigeria.
2.2       The Specific Rules will state if there are any age restrictions relating to the
Competition.
2.3       Unless otherwise stated in the Specific Rules, you may not enter a
Competition if you are an employee, or Family Member of an employee, of (i) DVL/Maxflix Entertainment or (ii) any Competition sponsor or Prize giver or if you are
directly or indirectly connected with the Competition.
2.4       So that we can ensure the fairness of our competitions, we reserve the
right to prevent you, at our absolute discretion, from entering any of our
Competitions for a period of six months if you have either (i) won a Prize valued
at 100,000 or greater or (ii) won more than one Prize during the previous six
months.  If we choose to exercise this right, we will notify you in writing.
2.5       You may not enter a Competition if you have been given the answer(s) or
any other relevant information in relation to the Competition, either directly or
indirectly, by any employee of DVL/Maxflix Entertainment, Competition sponsor or
Prize giver.
2.6       No multiple, bulk, automated, machine assisted, third party, syndicate or
other group entries will be accepted.  We shall disqualify any entries which, in our
reasonable opinion, appear to have used any of these entry methods including
multiple entries from the same IP address or telephone number, unless the
Specific Rules state that multiple entries are permitted.
2.7       Candidates in any General, Mayoral or any other national or local Election
will be ineligible, during the period of such Election, to enter any Competition
until after the conclusion of such Election.
2.8       We may ask you to provide us with proof of your eligibility to enter a
Competition and we reserve the right, in our sole discretion, to decide whether or

not eligibility criteria have been met.  Breach of any of the criteria contained in
this Clause 2 may result in your disqualification from a Competition and/or the
withdrawal of a Prize.
 
3.         Entering a Competition
3.1       Entries by text message must be sent to the applicable shortcode for a fee
of one thousand naira (1000,00) which is not refundable as advertised on-air or
online. Please be aware that shortcodes may change from Competition to
Competition.  You may need to check with your service provider for details of
phone network compatibility.  You will pay any text messaging charges via your
service provider.
3.2       Please take care to follow the exact on-air or online Competition entry
instructions.  We cannot guarantee Competition entry for mis-spelt entries;
3.3       A text message or a telephone call will normally cost the standard rate for
your service provider, please check with your service provider for more details.
The cost of text messages and telephone calls via different service providers may
vary.
3.4          If you are using a telephone which is not paid for by you, please ask for
the permission of the bill payer before entering the Competition.
3.5          If you fail to answer your telephone when we phone you or you become
disconnected for any reason before or during the Competition, we reserve the
right to select another Entrant to participate in the Competition.
3.6          For Competitions involving online voting only one vote for each valid
email address will be accepted and we reserve the right to disqualify any Entrant
making, or attempting to make, multiple votes.
3.7          For each on-air Competition all timings including the closing time are as
broadcast on the Station&#39;s FM broadcast frequency. If you are listening via an IP
enabled device such as a smartphone or tablet, please remember that the stream
can be slightly behind the FM broadcast due to differences in network speeds
and/or the advertising we serve to listeners on IP enabled devices. If a
Competition requires you to enter by a deadline dependent on an item in the
broadcast (e.g. by the end of a song) we cannot take into account any delay from
listening via an IP enabled device and the deadline will be as on the FM
broadcast, so please take this into account when entering a Competition.
 
4.         Prizes
4.1       If you win a prize, unless otherwise stated in the Specific Rules, we will
notify you within 28 days of the end date of the Competition and you will then

have 28 days within which to claim the Prize.  If you fail to claim the Prize within
the time-limit, or fail to comply with any other instructions or time-limits notified
to you, you will forfeit your right to the Prize and your claim will be invalid.
4.2      We reserve the right, at our absolute discretion, to request certain evidence
relating to your Competition entry including proof of identity, age and address.
 Please ensure you have given us your correct address so that we can send your
Prize to you.  We may request that you provide an in-studio recording to compare
to your on-air win as proof of your vocal identity. 
4.3       We may carry out an interview with you either by telephone or in person
and we may record the interview;
4.4       All Prizes are non-transferable and may not be given, assigned or sold to
another person.
4.5       Prizes cannot be exchanged for cash or other alternatives except by us in
accordance with clause 10.1.
4.6       You will not be entitled to receive a Prize which, for any reason, you would
be prohibited by law from purchasing, using or owning.
4.7       Unless otherwise stated in the Specific Rules, you may not win more than
one Prize per Competition and we reserve the right to withhold or reclaim any
second or subsequent Prize.
4.8       Where the Prize contains ticket(s) to an event, you will be bound by and
must comply with the event promoter’s terms and conditions together with those
set out on the ticket and the rules and regulations of the venue.
4.9       No fee is payable to you in respect of your involvement in the Competition.
 
5.         Additional terms relating specifically to Holiday Prizes
5.1       Holiday Prizes are subject to availability and must be taken in accordance
with the dates, destinations, carriers and number of passengers specified by us.
5.2       When entering a Competition offering a holiday Prize with international
travel you must hold a valid passport with at least 6 months’ further duration and
which contains no visa restrictions on your ability to travel to the relevant
destination.  Passport control and in-country authorities reserve the right to
refuse entry. If you are refused passage and or entry/exit to or from the country
being visited, any additional costs and losses incurred will be your sole
responsibility.
5.3       Holiday Prizes are not available to persons under the age of 18 unless
otherwise stated in the Specific Rules.  Children under 18 years of age cannot
travel and this competition is for adult aged 18 or over.

5.4       All holidays must be taken within 6 months of the date of the Competition
(unless otherwise stated in the Specific Rules).  
5.5       The Specific Rules will provide details of any travel insurance policy
offered as part of the holiday Prize.  Where no insurance is offered, you are
responsible for obtaining adequate travel insurance.
5.6       You must comply with the terms and conditions, including health and
safety requirements, of the Prize provider, the airline and other carriers and
venues involved in the Competition or the Prize including all health and safety
guidelines and instructions and all applicable legal and regulatory requirements.
5.7       You may not commit us to any contract, expense or cost without our prior
written consent.  You must have sufficient financial resources to meet any
financial commitment which you may incur in connection with the Prize beyond
those included in the Prize itself (including transfers to and from the airport,
meals and drinks).
5.8       We accept no liability for any changes in the details, including dates and
times, of any flights, other transport, airport details, accommodation or other
aspects of the Prize. 
5.9       You will be responsible for any inoculation and other health or visa
requirements for your destination.    
 
6.         Health and Safety
6.1       Your entry or participation in a Competition and/or Prize is at your own
risk and your health and safety is your own responsibility.  If the Competition or
Prize requires you to undertake any physical activity please ensure, before
entering the Competition, that you (i) are in good health and (ii) have no
underlying medical condition and are taking no medication that could adversely
affect you.
6.2       Please ensure that you notify us immediately if you become ill or become
aware of any other relevant medical or health and safety information which could
affect your participation in a Competition and/or Prize.  You must comply with all
safety requests made by us or our representatives.
6.3       We reserve the right to disqualify you from the Competition and/or Prize
(without liability or compensation) if you (in our opinion, which shall be final)
conduct yourself in a way which exposes you or others to any medical, security,
safety or other risk whatsoever (including being intoxicated or abusive in any
way).
 
7.         Confidentiality and Publicity

7.1       You agree to keep confidential any information which you know or
reasonably ought to know is confidential and relates to us, our business or the
Competition or Prize.
7.2       You agree to participate, at our request, in publicity (including interviews)
and you agree that we own all Intellectual Property Rights in, and may use at our
absolute discretion, such publicity/interviews.  We may refer to your association
with the Competition and/or the Prize in all publicity, marketing and materials. 
7.3       You agree that you shall not publicise your involvement in the Competition
or the fact that you have won a Prize (including giving interviews) except as set
out in clause 7.2 or with our prior written consent.
7.4       We may publish winners’ names and post towns and make them available
to third parties upon their request which may be made by sending a self-
addressed stamped envelope to our address up to 1 month after the closing date
for the relevant Competition.
 
8.         Intellectual Property Rights
8.1       By entering a Competition or submitting a video, image, audio file or any
other materials in relation to a Competition or Prize (the “Products”) you: (i)
confirm the grant by you to us of a worldwide, perpetual, royalty free licence in
the Intellectual Property Rights in the Products or Competition entry, (ii) waive
any moral rights and like rights you have in relation to the Products or
Competition entry so that we shall be entitled to use the Products or Competition
entry in any and all media at no cost to us and (iii) warrant to us that the Products
or Competition entry:
8.1.1    are personal and related specifically to you;
8.1.2    are owned and controlled by you and that you have the right, power and
authority to grant the rights set out in these Terms;
8.1.3    will not infringe the Intellectual Property Rights, privacy or any other rights
of any third party;
8.1.4    will not contain anything which is untrue, defamatory, obscene, indecent,
harassing or threatening;
8.1.5    do not violate any applicable law or regulation (including any laws
regarding anti-discrimination or false advertising);
8.1.6    are not obscene or pornographic;
8.1.7    do not, to the best of your knowledge, contain any viruses or other
computer programming routines that are intended to damage, detrimentally

interfere with, surreptitiously intercept or expropriate any system, data or
personal information;
8.1.8    are free from any encumbrances such that we may use the Products in
accordance with and in the manner set out in these Terms.
8.2       For the avoidance of doubt, all rights relating to the Competition (including
the name, title and format of the Competition) will vest exclusively in DVL/Maxflix Entertainment for our own use (in our absolute discretion).
8.3       Unless otherwise stated, Competition entries will not be returned to you.
8.4       Any personal data submitted by you will be used solely in accordance with
current Nigeria data protection legislation and our privacy policy.
 
9.         Disqualification
9.1       We reserve the right (without accepting any liability or giving you any
compensation) to disqualify you from a Competition and/or withhold or withdraw
a Prize (or seek compensation from you therefor) if (in our opinion, which shall be
final):
9.1.1    you are in breach of the Terms or any of your obligations, representations
and/or warranties under this Agreement;
9.1.2    your conduct is inappropriate or contrary to the spirit or intention of the
Terms or of the Competition;
9.1.3 you have committed or undertaken any fraud, dishonesty, deceit,
misconduct or similar action including providing any false or incorrect
information;
9.1.4    your act(s) or omission(s) might have an adverse effect on the
Competition
9.1.5    it is in our best interests to do so.
9.2       Entries that are incomplete, indecipherable, corrupt, late or otherwise not
in accordance with entry instructions will not be accepted.
9.3       In the event of your disqualification from the Competition/Prize:
9.3.1    we reserve the right to select another Entrant to take part in the
Competition/receive the Prize; and
9.3.2    you may be required to pay any costs incurred.
 

10.       Cancellation of the Competition
10.1     We shall be entitled, in our reasonable discretion, to cancel, delay and/or
recommence a Competition with immediate effect by on-air or online
announcement without any liability to you. If we cancel a Competition after you
have claimed a Prize, we will use our reasonable endeavours to offer you an
alternative Prize.  If we offer you an alternative Prize but you do not accept it, you
shall have no claim against us.
10.2     We may cancel a Competition if we believe we have good reason to do so,
including if:
10.2.1 a broadcasting, publishing, production, distribution or printing error of any
kind occurs (whether on-air, online or otherwise);
10.2.2 there have been any errors in the preparation for, or the conduct of, the
Competition materially affecting the result of the Competition, the number of
Prize claims or the value of the Prize claims.
 
11.       Exclusion of liability/indemnity
11.1     Nothing in the Terms excludes our liability for:
11.1.1 death or personal injury arising out of our negligence or the negligence of
our employees;
11.1.2 fraud or fraudulent misrepresentation by us or our employees; or
11.1.3 any other liability that cannot be excluded or limited by law.
11.2     Without prejudice to the provisions of Clause 11.1, we exclude all liability
whatsoever for any costs, expenses, losses, damages, liabilities, injury or
disappointment (other than any costs and expenses specifically provided for in
the Competition and/or Prize) including any loss of profit, business, contracts,
revenues or anticipated savings and whether special, direct, indirect or
consequential suffered by you howsoever arising in connection with the
Competition and/or Prize.
11.3     Without prejudice to the provisions of Clause 11.1 and subject to the
provisions of Clause 11.2, we shall have no liability whatsoever:
11.3.1 in respect of Competitions operated by third parties and featured on air or
on our website.  The relevant third party will be responsible for the fulfilment of
the Competition.  We accept no responsibility for the acts or omissions of such
third parties;

11.3.2 in the event of postal, telephone, text message or online entries delayed or
not received by us as a result of network incompatibility, technical faults or for
any other reason;
11.3.3 for any person not being able to enter a Competition for any reason,
including system failure, error, the application through which online entries are
made being down, hacks on the system or personal computer issues;
11.3.4 for any losses suffered by you in submitting data to any of our websites;
11.3.5 for any mistakes in the source material utilised by our question compilers;
11.3.6 for Prizes which are lost, delayed or damaged in the post or otherwise not
received by you.
11.4     The decision of our judges are final and conclusive in all circumstances
and no correspondence will be entered into.
11.5     You agree to indemnify us and our employees against all costs, losses,
damages, expenses and liabilities (including for loss of reputation and goodwill
and professional advisor’s fees) suffered by us arising as a result of a breach by
you of your obligations under the Terms or in any way in connection with your
failure to follow our reasonable instructions with regard to your entry into the
Competition or taking of any Prize.
 
12.       Force Majeure
12.1     We shall not be liable to perform any of our obligations under the
Competition or in respect of the Prizes where we are unable to do so as a result
of unforeseen circumstances or circumstances beyond our reasonable control
and whilst we may (but shall not be obliged to) endeavour to provide an
alternative Prize of equal value, we shall not be liable to compensate you in such
circumstances.
 
13.       General
13.1     You agree you will not by any act or omission do anything, which might
bring DVL/Maxflix Entertainment into disrepute or affect the reputation of the
Competition.
13.2     The Terms shall be governed and construed in accordance with the laws
of Nigeria and you and we submit to the exclusive jurisdiction of Nigeria Courts.
13.3     The terms represent the entire agreement between you and us relating to
the Competition and/or the Prize and supersede any prior representations,
agreements, negotiations or understandings (whether oral or in writing).  No

variation of the Terms is effective unless approved by an authorised
representative of DVL/Maxflix Entertainment in writing.
13.4     Except as specifically set out herein, all conditions, warranties and
representations expressed or implied by law are excluded.
13.5     The invalidity, illegality, or unenforceability of the whole or any part of the
Terms does not affect or impair the continuation in force of the remainder of the
Terms.
13.6     The failure to exercise or delay in exercising a right or remedy provided
hereunder or by law does not constitute a waiver of the right or remedy or waiver
of other rights or remedies.
13.7     This Agreement does not create any right or benefit enforceable by any
person not a party to it (within the meaning of the Contracts (Rights of Third
Parties)

                        
                        
                        
                        </li>
                    </ul>
                    
            
<!--                    Vendors-->
<!--Create a Vendor Station-->
<!--Add merchandise images-->
<!--Get matched to creatives who generate content & promote it-->
<!--Increase your sales-->
<!--Creatives-->
<!--Discover tons of Vendors who will pay for your content & influence-->
<!--Create content and promote it-->
<!--Get paid-->
<!--Everyone else-->
<!--Watch and buy what you see in the content all on 1 platform-->
<!--Or join the wave-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal --> 
    
    
    
    
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="howItWorksModalLabel" style="text-align: center; width: 100%;"><i class="fa fa-question-circle" aria-hidden="true"></i>
Disclaimer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <div class="modal-body">
          <p>Your instagram username was successfully captuired. Kindly note, you will be automatically disqualified for falsifying any information and not refunded any funds sent towards the contest.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
  <div class="modal fade" id="checkStatus" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
           <form action="{{route('sayuncle.check.status')}}" method="post">
            @csrf
               <div class="modal-header">
                    <h4 class="modal-title" id="howItWorksModalLabel" style="text-align: center; width: 100%;"><i class="fa fa-check" aria-hidden="true"></i>
Check Status</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <div class="modal-body">
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Get Link</button>
        </div>
       </form> 
      </div>
      
    </div>
  </div>
  
  
  <span class="chatting">
<a class="chat float" href="#" id="menu-share">
<i class="fa fa-comments my-float"></i>
</a>
<ul>
<li><a class="whatsapp" title="Whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=09135353364">
<i class="fa fa-phone my-float"></i>
</a></li>
<li><a class="live" title="tawkto" target="_blank" href="https://tawk.to/chat/5fa888438e1c140c2abc066d/default">
<i class="fa fa-commenting my-float"></i>
</a></li>
</ul>
</span>  
  
  
  
  
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('../sayUncle/js/cropper.min.js') }}"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            $('.owl-carousel.testimonial_carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>

    <script type="text/javascript">
                $(document).ready(function () {
// window.addEventListener('DOMContentLoaded', function () {
    let input = document.getElementById('profile_image_input');
    let preview = document.getElementById('pic-preview');
    let $modal = $('#modal');
    let cropper;
    
    input.addEventListener('change', function (e) {
        let files = e.target.files;
        let done = function (url) {
            input.value = '';
            image.src = url;
            $modal.modal('show');
        };
        let reader;
        let file;
        let url;

        if (files && files.length > 0) {
            file = files[0];
            if (file.type.split('/')[0] == 'image') {
                if (URL) {
                    done(URL.createObjectURL(file));
                }
                else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
            else {
                
            }
        }
    });

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
          autoCropArea: 0.5,
          ready: function () {
            //Should set crop box data first here
            // cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
          }
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    $('body').on('click','#crop' ,function () {
    // document.getElementById('crop').addEventListener('click', function () {
        let initialAvatarURL;
        let canvas;

        $modal.modal('hide');

        if (cropper) {
            canvas = cropper.getCroppedCanvas({maxWidth:250,maxHeight:250});
            canvas.toBlob(function (blob) {



                preview.src = canvas.toDataURL();
                var base64ImageContent = canvas.toDataURL().replace(/^data:image\/(png|jpg);base64,/, "");
                // print_r(base64ImageContent);
                // console.log(base64ImageContent);
                // $("#avatar").val(canvas.toDataURL());
                $("#avatar").val(base64ImageContent);
                $("#upload-div").hide();
                $("#cropped-img-div").show();


            });
        }
    });
});




        $(document).ready(function () {
            $('body').on('click','.next', function(){
                var step = $(this).attr('data-next-step')
                switch(step) {
                  case '1':
                    
                    showStep1();
                    break;
                  case '2':
                    check = validateStep(1);
                    if(check){
                      showStep2();  
                    }
                    
                    break;
                  case '3':
                    check = validateStep(2);
                    if(check){
                      showStep3();  
                    }
                    break;
                  
                }
            });

            $('body').on('click','.prev', function(){
                var step = $(this).attr('data-prev-step')
                switch(step) {
                  case '1':
                    showStep1();
                    break;
                  case '2':
                    showStep2();
                    break;
                  case '3':
                    showStep3();
                    break;
                  
                }
            });

            $('body').on('change','input[type=radio][name=nationality]', function(){
                if (this.value == 'nigerian') {
                    $("#cities-div").removeClass('hide');
                    $("#state").addClass('required');
                    
                    $("#country-div").addClass('hide'); 
                    $("#country").removeClass('required');

                }
                else if (this.value == 'non-nigerian') {
                    $("#cities-div").addClass('hide');
                    $("#state").removeClass('required');

                    $("#country-div").removeClass('hide');
                    $("#country").addClass('required');
                    
                }
            });
            $('body').on('focusout','#ig_handle', function(){
              if($(this).val() != ''){
                   $('.loading').show();
                $("#ig_followers").val(getInstaFollowers( $(this).val() ) );  
              } 
            });

            $('body').on('click','.submit-btn', function(){
                check = validateStep(3);
                if(check){
                  $('.loading').show();
                  $('#register_form').submit();

                }
            });
            
            $('body').on('focusout','#mobile_no', function(){
              if($(this).val() != ''){
                  $('.loading').show();
                  var check = validatePhoneNo($(this).val());
                if(check.status == 0){
                    $("#error_mobile_no").text('Invalid Nigarian Number Format');
                }else{
                    $("#error_mobile_no").text('');
                }
              } 
            });
        });


        function showStep1(){
            
            $("#login_details").removeClass('fade');
            $("#login_details").addClass('active');
            $("#list_login_details").addClass('active_tab');
            $("#list_login_details").removeClass('inactive_tab');

            $("#personal_details").removeClass('active');
            $("#personal_details").addClass('fade');
            $("#list_personal_details").addClass('inactive_tab');
            $("#list_personal_details").removeClass('active_tab');

            $("#contact_details").removeClass('active');
            $("#contact_details").addClass('fade');
            $("#list_contact_details").addClass('inactive_tab');
            $("#list_contact_details").removeClass('active_tab');
        }

        function showStep2(){
            
            $("#personal_details").removeClass('fade');
            $("#personal_details").addClass('active');
            $("#list_personal_details").addClass('active_tab');
            $("#list_personal_details").removeClass('inactive_tab');

            $("#login_details").removeClass('active');
            $("#login_details").addClass('fade');
            $("#list_login_details").addClass('inactive_tab');
            $("#list_login_details").removeClass('active_tab');

            $("#contact_details").removeClass('active');
            $("#contact_details").addClass('fade');
            $("#list_contact_details").addClass('inactive_tab');
            $("#list_contact_details").removeClass('active_tab');

        }

        function showStep3(){
          
            $("#contact_details").removeClass('fade');
            $("#contact_details").addClass('active');
            $("#list_contact_details").addClass('active_tab');
            $("#list_contact_details").removeClass('inactive_tab');
            
            $("#personal_details").removeClass('active');
            $("#personal_details").addClass('fade');
            $("#list_personal_details").addClass('inactive_tab');
            $("#list_personal_details").removeClass('active_tab');
  
            $("#login_details").removeClass('active');
            $("#login_details").addClass('fade');
            $("#list_login_details").addClass('inactive_tab');
            $("#list_login_details").removeClass('active_tab');

            $("#check-name").text( $("#first_name").val() +" " +$("#last_name").val() );
            $("#check-email").text( $("#email").val() );
            $("#check-phone").text( $("#mobile_no").val() );

        }

        function getErrorMsg(type)
        {
          var err_msg = ''
          switch(type) {
            case 'email':
              err_msg = 'Invalid Email';
              break;
            case 'select-one':
              err_msg = 'Select any option';
              break;
            case 'select-multiple':
              err_msg = 'Select atleast one option';
              break;
            case 'radio':
              err_msg = 'Select any option';
              break;
            case 'checkbox':
              err_msg = 'Agree to Terms And Condition';
              break;
            default:
              err_msg = 'This field is required';
              break;
          }
          return err_msg;
        }

      function validateStep(step){
        $(".loading").show();
        isValid = 1;
        inputs = $(".step"+step).find(".required");
        for(var i=0; i < inputs.length; i++){
          if(inputs[i].type == 'select-one' || inputs[i].type == 'select-multiple' ){
            var id = inputs[i].name;
            if (inputs[i].value == ''){
              $("#error_"+id).text(getErrorMsg(inputs[i].type));
              isValid = false;  
            }else{
              $("#error_"+id).text('');
            }
          }else{
            var id = inputs[i].name;
            if (!inputs[i].validity.valid){
              $("#error_"+id).text(getErrorMsg(inputs[i].type));
              isValid = false;  
            }else{
               if(id == 'mobile_no'){
                    check = validatePhoneNo(inputs[i].value);
                    if (check.status == 0){
                      $("#error_"+id).text('Invalid Nigarian Number Format');
                      isValid = false;  
                    }else{
                      $("#error_"+id).text('');
                    }
                }else if(id == 'email'){
                    check = validateEmail(inputs[i].value);
                    if (check.status == 0){
                      $("#error_"+id).text(check.msg);
                      isValid = false;  
                    }else{
                      $("#error_"+id).text('');
                    }
                }else{
                    $("#error_"+id).text('');
                }
            }
          }
        }
        setTimeout(function(){ 
             $(".loading").hide();
            
        }, 1000);    
        return isValid;  
      }
        function validatePhoneNo(no){
        var status = 1;
        var msg = '';
        // $('.loading').show();
        // $.ajaxSetup({
        
        // });
        $.ajax({
          url: "{{route('sayuncle.validate.field')}}",
          headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
          type: "POST",
          data: {phone_no:no},
          async: false,
          complete: function(){
               
            setTimeout(function(){ 
                
                 $(".loading").hide();
                
            }, 1000);    
            },
          success: function(res){
            status = 1;
          },
          error: function(err){
            if(err.status === 422){
                status = 0;
                msg = err.responseJSON.phone_no; 
            }
          },
        });
        return {'status' : status, 'msg': msg}; 
      }
      
      function validateEmail(email){
        var status = 1;
        var msg = '';
        // $('.loading').show();
        // $.ajaxSetup({
        
        // });
        $.ajax({
          url: "{{route('sayuncle.validate.field')}}",
          headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
          type: "POST",
          data: {email:email},
          async: false,
          complete: function(){
               
            setTimeout(function(){ 
                
                 $(".loading").hide();
                
            }, 1000);    
            },
          success: function(res){
            status = 1;
          },
          error: function(err){
              console.log(err)
            if(err.status === 422){
                status = 0;
                msg = err.responseJSON.email; 
            }
          },
        });
        return {'status' : status, 'msg': msg}; 
      }
      function getInstaFollowers(ig_handler){
        var followers = 0;
        // $('.loading').show();
        // const url = {{ env('APP_URL') }};
        $.ajax({
          url: "https://www.instagram.com/" + ig_handler + "/",
          type: "GET",
          async: false,
          complete: function(res){
            // alert("Completed");
            // alert(JSON.stringify(res, 4, null));
            setTimeout(function(){ 
                 $(".loading").hide();
                $('#myModal').modal('show');
            }, 2000);    
            },
        //   success: function(res){
        //       var shared_data = res.match(/window\._sharedData = ([\s\S]*?});/m),
        //           additional_data = res.match(/window\.__additionalDataLoaded\(('[\s\S]*?',)([\s\S]*?})\);/),
        //           parsed_data = {};

        //       if(additional_data && additional_data[2]){
        //           try{
        //               parsed_data["additional_data"] = JSON.parse(additional_data[2]);
        //               if(parsed_data["additional_data"]["graphql"]["user"] && parsed_data["additional_data"]["graphql"]["user"]["id"]){
        //                 var user = parsed_data["additional_data"]["graphql"]["user"];
        //                 followers = user.edge_followed_by.count;
        //               }
        //           } catch(e) {
        //           }
        //       }

        //       if(shared_data && shared_data[1]){
        //         try{
        //             parsed_data["shared_data"] = JSON.parse(shared_data[1]);
                  
        //             var entry_data = parsed_data["shared_data"]["entry_data"];
        //             if(entry_data["ProfilePage"] && entry_data["ProfilePage"][0]["graphql"]["user"]){
        //               var user = entry_data["ProfilePage"][0]["graphql"]["user"]
        //               followers = user.edge_followed_by.count;
              
        //             } else if(entry_data["LoginAndSignupPage"]){
        //             } else {
        //             }
        //         } catch(e) {
        //           console.log(e);
        //         }
        //       }
              
          },
          error: function(err){
            if(err.status === 404){
            } else {
            }
            

          },
        });
        return followers; 
      }

    //   function validatePhoneNo(no){
        
    //     var pattern =/^234[0-9]{7}/;
        
    //     return pattern.test(no);  // returns a boolean
     
    //   }
    </script>
       <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alertSuccessmsg(msg);
    }
 </script>

@endsection

