@extends('landing.layouts.app')

@section('content')
    <main class="content">
        <section class="col-md-12 col-xs-12 content__section4" id="register">
            <div>
                <h3 class="content__section4__header">Upload Your <span>Video</span>
                </h3>
                <div class="content__section4__buttons">
                    <button class="btn btn__active" id="content__section4__tab1" onclick="showFirstPage()">Video Upload</button>
                </div>
                <div class="content__section4__forms mt-4">
                    <div>
                        <form action="/upload/video/{{$uniqueId}}" id="sub-form"
                          enctype="multipart/form-data" method="POST">
                          @csrf
                            <div class="content__section4__forms__page1" id="page1">
                                <p class="mb-4">Video must be less than 10mb size</p>
                                @if (isset($uploaded))
                                    <h4 style="color: white;"><strong>{{$uploaded}}</strong></h4>
                                @else
                                <div class="form-row mb-3">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div style="position:relative;">
                                        @if (!isset($uploaded))
                                            <a class='btn btn-primary' href='javascript:;'>
                                              Choose Video...
                                              <input type="file" 
                                              style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' 
                                              name="video" size="40" accept="video/*"  
                                              onchange='$("#upload-file-info").html($(this).val());'>
                                          </a>
                                          &nbsp;
                                          <span class='label label-info' id="upload-file-info" style="color: white;"></span>
                                        @endif
                                </div>
                                  </div>
                              </div>
                              <div class="content__section4__forms__next text-center mt-5">
                                @if (isset($upload_success))
                                <h4 style="color: white;"><strong>{{$upload_success}}</strong></h4>
                                    {{-- <h5>{{$upload_success}}</h5> --}}
                                @endif
                                  <a class="btn" onclick="(function() { document.getElementById('sub-form').submit(); } () )">Upload</a>
                              </div>  
                                @endif
                            </div>
                        </form>
                        <div class="content__section4__forms__page4" id="page4">
                            <p class="mb-4">Registration Complete!</p>
                            <div class="mt-5">
                                <p style="font-size: 25px">
                                    Your payment has been received successfully! Thank you for registering, please check your email for your JustSayUncle ID and further instructions for becoming a relative! See you soon.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer" id="contact">
        <div>
            <div class="footer__main mt-5 row">
                <div class="col-md-5 col-xs-5">
                    <img src="{{ asset('../landing/images/image47.png') }}" alt="" width="230" class="mb-5">
                    <p>
                        Users: vicomma has combined the joy of watching videos with the convenience of buying what you see in those
                        videos. <br><br>
                        Vendors and Merchants: Register now and develop a direct connection with customers who need you. <br><br>
                        Creatives and Influencers: Register and discover a new avenue to reach more and earn more.
                    </p>
                </div>
                <div class="col-md-4 col-xs-4">
                    <h4 class="mt-3 mb-4"><strong>Must Read Information</strong></h4>
                    <p>
                        <a href="javascript:void(0)"
                           data-toggle="modal"
                           data-target="#video_submission" style="color: #fff">
                            <i class="fa fa-hand-o-right"
                               aria-hidden="true"
                               style="color:#fff"></i> Online Video Submission Agreement </a>
                        <br><br>
                        <a href="javascript:void(0)"
                           data-toggle="modal"
                           data-target="#howItWorksModal" style="color: #fff">
                            <i class="fa fa-hand-o-right"
                               aria-hidden="true"
                               style="color:#fff"></i> Terms & Conditions</a>
                    </p>
                </div>
                <div class="col-md-3 col-xs-3">
                    <h4 class="mt-3 mb-4"><strong>Contact Us</strong></h4>
                    <p>
                        reachSayUncle@vicomma.com
                        <br><br>
                        issues@vicomma.com
                    </p>
                </div>
            </div>
            <div style="display: flex;align-items: center;justify-content: space-between;">
                <a href="https://www.facebook.com/officialvicomma" target="_blank">
                    <img src="{{ asset('../landing/images/image48.png') }}" alt="" width="130">
                </a>
                <p class="text-white">Vicomma ©2021 All Rights Reserved.</p>
            </div>
        </div>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
    </footer>
@stop