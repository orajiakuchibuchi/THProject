<section id="register" class="p_120 reg_area" >
   <div class="container box">
@include('components.alert')
      <br />
        
      <h2 align="center">Register Here</h2>
      <br />
      <form method="post" id="register_form" action="{{route('sayuncle.register')}}">
          @csrf
              <input type="submit" value='submit'>
         <ul class="nav nav-tabs">
            <li class="nav-item">
               <a class="nav-link active_tab" style="border:1px solid #8124c9" id="list_login_details">Personal</a>
            </li>
            <li class="nav-item">
               <a class="nav-link inactive_tab" id="list_personal_details" style="border:1px solid #8124c9">Additional Info</a>
            </li>
            <li class="nav-item">
               <a class="nav-link inactive_tab" id="list_contact_details" style="border:1px solid #8124c9">Survey</a>
            </li>
         </ul>
         <div class="tab-content" style="margin-top:16px;">
            <div class="tab-pane active step1" id="login_details">
               <div class="panel panel-default">
                  <div class="panel-heading">Please cross-check your information</div>
                  <div class="panel-body">
                     <div class="row">
                        <div class="form-group col-6">
                           <input type="text" name="first_name" id="first_name" class="form-control required" placeholder="First Name" required="required" />
                           <span id="error_first_name" class="text-danger "></span>
                        </div>
                        <div class="form-group col-6">
                           <input type="text" name="last_name" id="last_name" class="form-control required" placeholder="Last Name" required="required"/>
                           <span id="error_last_name" class="text-danger "></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-6">
                           <input type="email" name="email" id="email" class="form-control required" placeholder="Email Address" required="required"/>
                           <span id="error_email" class="text-danger "></span>
                        </div>
                        <div class="form-group col-6">
                           <input type="text" name="mobile_no" id="mobile_no" class="form-control required" placeholder="Phone Number" required="required"/>
                           <span id="error_mobile_no" class="text-danger "></span>
                        </div>
                        <div class="form-group col-6 enigicu">
                           <label class="sr-only" for="phone">Alternate Phone</label>
                           <input class="form-control" type="text" id="altmobile_no" name="altmobile_no" placeholder="Alternate Phone number*">
                           <input class="form-control" type="text" id="altver" name="altver" placeholder="Alternative" >
                           <span id="error_altmobile_no" class="text-danger "></span>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="form-group col-6">
                           <label>Gender</label><br/>
                           <label class="radio-inline">
                           <input type="radio" name="gender" value="male" class="required" required> Male
                           </label>
                           <label class="radio-inline">
                           <input type="radio" name="gender" value="female" > Female
                           </label><br/>
                           <span id="error_gender" class="text-danger "></span>
                        </div>
                        <div class="form-group col-6">
                           <label>Age</label><br/>
                           <label class="radio-inline">
                           <input type="radio" name="age" value="18-25" class="required" required> 18-25
                           </label>
                           <label class="radio-inline">
                           <input type="radio" name="age" value="26-33" > 16-33
                           </label>
                           <label class="radio-inline">
                           <input type="radio" name="age" value="34-41"  > 34-41
                           </label><br/>
                           <span id="error_age" class="text-danger "></span>
                        </div>
                     </div>
                     <div align="center">
                        <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg next" data-next-step ="2"  >Next</button>
                     </div>
                     <br />
                  </div>
               </div>
            </div>
            <div class="tab-pane step2" id="personal_details">
               <div class="panel panel-default">
                  <div class="panel-heading">Additional Details</div>
                  <div class="panel-body">
                     <div class="row">
                    
                    <div class="col-md-12"> <p style="color:red; font-size:14px;text-align:center;"><b>Note : </b>Have no Instagram handle; don’t worry… please enter <b>I Have No IG Account</b> in the place of Instagram Username.</p></div>
                         
                         
                        <div class="form-group col-6">
                           <label>I am a:</label><br/>
                           <select name="i_am" id="i_am" class="form-control required" onfocus='this.size=6;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required >
                              <optgroup style="max-height: 65px;" label="">
                                 <option value="">- Select -</option>
                                 <option value="student">Student</option>
                                 <option value="employee">Employee</option>
                                 <option value="employer">Employer</option>
                                 <option value="entreprenuer">Entrepreneur</option>
                              </optgroup>
                           </select>
                           <span id="error_i_am" class="text-danger "></span>
                           <br/>
                        </div>
                        <div class="form-group col-6">
                           <label>I consider myself a:</label><br/>
                           <select name="consider_myself" id="consider_myself" class="form-control required" onfocus='this.size=6;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required="true">
                              <optgroup style="max-height: 65px;" label="">
                                 <option value="">- Select -</option>
                                 <option value="vendor">Vendor of products/services</option>
                                 <option value="influencer">Influencer</option>
                                 <option value="content_provider">Content Provider ( I make videos ) </option>
                                 <option value="all">All of the above</option>
                                 <option value="none">None of the above</option>
                              </optgroup>
                           </select>
                           <span id="error_consider_myself" class="text-danger "></span>
                           <br/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-6">
                           <label>My Instagram @ (handle) is</label><br/>
                           <input type="text" id='ig_handle'  name='ig_handle' class="form-control required" placeholder="Enter your Instagram Username" required />
                            <span id="error_ig_handle" class="text-danger "></span>
                           <br/>
                        </div>
                        <div class="form-group col-6">
                           <label>Your Followers on Instagram</label><br/>
                           <input type="text" class="form-control" id="ig_followers" name="ig_followers" placeholder="Number of Followers" readonly/>
                           <br/>
                        </div>
                      </div>
                       <div class="row">
                        <div class="form-group col-6">
                           <label>Nationality</label><br/>
                           <label class="radio-inline">
                           <input type="radio" name="nationality" value="nigerian" class="required" required> Nigerian
                           </label>
                           <label class="radio-inline">
                           <input type="radio" name="nationality" value="non-nigerian" > Non-Nigerian
                           </label><br/>
                           <span id="error_nationality" class="text-danger"></span><br>
                        </div>
                        <div class="form-group col-6 hide" id='cities-div'>
                           <label>Where do you live in Nigeria?</label>
                           <select name="state" id="state" class="form-control " onfocus='this.size=10;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required>
                              <optgroup style="max-height: 65px;" label="">
                                 <option value="">- Select -</option>
                                 @foreach(nigeriaCities() as $key =>$value)
                                 <option value="{{$key}}">{{$value}}</option>
                                 @endforeach
                              </optgroup>
                           </select>
                           <span id="error_state" class="text-danger"></span><br>
                        </div>
                        <div class="form-group col-6 hide" id='country-div'>
                           <label>Select Your Country</label><br/>
                              <select id="country" name="country" class="form-control " onfocus='this.size=10;' onblur='this.size=1;' onchange='this.size=1; this.blur();'required>
                                 <option value="">- Select -</option>
                                 @foreach(countries() as $key =>$value)
                                 <option value="{{$key}}">{{$value}}</option>
                                 @endforeach
                              </select>
                              <span id="error_country" class="text-danger"></span> <br>
                        </div>
                     </div>
                     <div class="row">

                        <div class="form-group col-6">
                           <label>Upload Image</label><br/>
                            @if(Agent::isDesktop())
                              <input type="file" class="form-control " accept="image/*"  id="profile_image_input" >
                            @else
                              <input type="file" name="avatar" class="form-control " accept="image/*" capture="camera" id="profile_image_input" required>
                            @endif
                            <div class="form-group profile_image_div">
                                 <input type="text" id="avatar" name="avatar"  required="required" class="required">
                            </div>
                           <span id="error_avatar" class="text-danger"></span>
                        </div>
                        
                         <div class="form-group col-6">
                           <div class="cropped-img" id="cropped-img-div">
                                <img src="" id="pic-preview">
                            </div>
                        </div>

                     </div>
                     <br />
                     <div align="center">
                     <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg prev" data-prev-step ="1">Previous</button>
                     <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg next" data-next-step ="3">Next</button>
                     </div>
                     <br />
                  </div>
               </div>
            </div>
            <div class="tab-pane step3 fade" id="contact_details">
              <div class="panel panel-default">
                <div class="panel-heading">Quick Survey</div>
                <div class="panel-body">
                  <div class="form-group">
                    <label>How did you learn about the Say Uncle contest ?</label><br/>
                    <label class="radio-inline">
                     <input type="radio" name="hear_of" value="Internet" class="required" required> Internet
                    </label>
                    <label class="radio-inline">
                     <input type="radio" name="hear_of" value="Google"> Google
                    </label>
                    <label class="radio-inline">
                     <input type="radio" name="hear_of" value="Another Site"> Another Site
                    </label>
                    <label class="radio-inline">
                     <input type="radio" name="hear_of" value="A friend or family"> A friend or family
                    </label>
                    <label class="radio-inline">
                     <input type="radio" name="hear_of" value="Random search"> Random search
                    </label> <br/>
                    <span id="error_hear_of" class="text-danger"></span>
                  </div>
                  <div class="form-group">
                    <label>Would you like to be involved in other SayUncle challenges, contest, shows, promotions, challenges, etc.? </label><br/>
                    <label class="radio-inline">
                    <input type="radio" name="future_contest" value="1" class="required" required> Yes
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="future_contest" value="0"> No
                    </label> <br/>
                    <span id="error_future_contest" class="text-danger"></span>
                  </div>
                  <div class="form-group">
                    <label>Do you have friends, family members, or others who you can help join your movement?</label><br/>
                    <label class="radio-inline">
                    <input type="radio" name="help_available" value="1" class="required" required> Yes
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="help_available" value="0"> No
                    </label>
                    <br/>
                    <span id="error_help_available" class="text-danger"></span>
                  </div>
                  <div class="form-group">
                    <label class="text-danger">Please, confirm these before submitting</label> <br/>
                    <strong>Full Name</strong>: <i id="check-name"></i> <br/>
                    <strong>Email</strong>: <i id="check-email"></i>  <br/>
                    <strong>Phone Number</strong>: <i id="check-phone"></i><br/>
                  </div>
                  <br/>
                  <p>
                     <input type="checkbox" name="terms" value="terms" required class="required"> 
                     By submitting this form, you are agreeing to our 
                     <a href="javascript:void(0)" data-toggle="modal" data-target="#howItWorksModal">Terms and Conditions</a> 
                     <br>
                    <span id="error_terms" class="text-danger"></span>

                  </p>
                  <br/>
                  <div align="center">
                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                    <input type="hidden" name="action" value="empire_captcha">
                    <button type="button"  name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg prev" data-prev-step ="2">Previous</button>
                    <button type="button" name="btn_survey" id="btn_survey" class="btn btn-register btn-lg submit-btn">Submit</button>
                  </div>
                  <br />
                </div>
              </div>
            </div>
         </div>
      </form>
   </div>
</section>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Crop the image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container" style="max-height: 500px">
                        <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Save</button>
                </div>
            </div>
        </div>
    </div>