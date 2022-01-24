<html lang="en" class="desktop mbr-site-loaded"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css/css.css" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATSWA Registration Form</title>
    <link rel="shortcut icon" href="images/logo.fw-155x133.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_1.css">
  <link rel="stylesheet" href="css/mbr-additional.css" type="text/css">
  <style>
.validationerror {color: #FF0000;}
</style>
</head>

<body><section id="top-1" class="engine"><a href="https://mobirise.info">Mobirise</a> Mobirise v4.3.0</section>
    <div class="container-fluid">
        <div class="row">
             <!-- Main Content -->
            <div class="col-md-12 p-3 main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 order-md-1">
                            <div class="row text-center">
                                <div class="col-md-3 mb-4">
                                  <img src="images/treasurehall.jpg" class="animated fadeInUp">
                                </div>
                                <div class="col-md-6">
                            <h3 class="mb-3 font-weight-bold text-center animated fadeInUp">ATSWA REGISTRATION FORM</h3>
                             </div>
                                <div class="col-md-3">
                                <div class="mbr-section-btn" buttons="0"> <a class="btn btn-primary-outline display-4 animated fadeInUp" href="http://treasurehall.net"><strong>Home</strong></a></div>
                                </div>
                            </div>
                        <form class="needs-validation" method="POST" id="form" enctype="multipart/form-data">
                            <div class="mb-5"></div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                            <label for="asterisk" class="font-weight-bold text-muted mr-3 text-primary animated fadeInUp">All fields marked with an asterisk (<span class="validationerror">*</span>) are mandatory. </label>
                                    </div>
                                </div>
                                <div class="row d-flex">
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="studylocation" class="font-weight-bold text-muted mr-3 animated fadeInUp"><span class="validationerror">*</span> PREFERRED STUDY LOCATION</label>
                                        <input type="radio" name="studylocation" class="studylocation animated fadeInUp" value="Lagos" required> LAGOS
                                        <input type="radio" name="studylocation" class="studylocation animated fadeInUp" value="Owerri" required> OWERRI
                                        <div class="invalid-feedback">
                                           Please choose your Study location.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="trainingmethod" class="font-weight-bold text-muted mr-3 animated fadeInUp"><span class="validationerror">*</span> PREFERRED TRAINING TYPE</label>
                                        <input type="radio" name="trainingmethod" class="trainingmethod animated fadeInUp" value="Physical Class" required> PHYSICAL
                                        <input type="radio" name="trainingmethod" class="trainingmethod animated fadeInUp" value="Online Class" required> VIRTUAL
                                        <div class="invalid-feedback">
                                           Please choose your Study location.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control animated fadeInUp" id="firstname" name="firstname" placeholder="FIRST NAME" autocomplete="off" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div><span class="validationerror">*</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control animated fadeInUp" id="lastname" placeholder="LAST NAME" autocomplete="off" required>
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div><span class="validationerror">*</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control animated fadeInUp" id="regnumber" placeholder="ATSWA REGISTRATION NUMBER" autocomplete="off">
                                        <span></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="nyscgmcode" class="form-control animated fadeInUp" id="nyscgmcode" placeholder="NYSC GM/CODE" autocomplete="off">
                                        <span></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="options" class="font-weight-bold text-muted mr-3 animated fadeInUp"><span class="validationerror">*</span> OPTIONS:</label>
                                        <input type="radio" name="options" class="options animated fadeInUp" value="Weekday" required> WEEKDAY
                                        <input type="radio" name="options" class="options animated fadeInUp" value="Weekend" required> WEEKEND
                                        <div class="invalid-feedback">
                                            Option is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="date" class="date font-weight-bold text-muted mr-3 animated fadeInUp"><span class="validationerror">*</span> DATE</label>
                                        <input class="date animated fadeInUp" type="date" id="date" value="Date" required min="2021-12-26">
                                        <span></span>
                                        <div class="invalid-feedback">
                                            Date is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="gender" class="font-weight-bold text-muted mr-3 animated fadeInUp"><span class="validationerror">*</span> GENDER</label>
                                        <input type="radio" name="gender" class="gender animated fadeInUp" value="Male" required> MALE
                                        <input type="radio" name="gender" class="gender animated fadeInUp" value="Female" required> FEMALE
                                        <div class="invalid-feedback">
                                           Gender is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="status" class="font-weight-bold text-muted mr-3 animated fadeInUp"><span class="validationerror">*</span> MARITAL STATUS</label>
                                        <input type="radio" name="status" class="status animated fadeInUp" value="Single" required> Single
                                        <input type="radio" name="status" class="status animated fadeInUp" value="Married" required> Married
                                        <div class="invalid-feedback">
                                            Status is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control animated fadeInUp" id="phonenumber" placeholder="WHATSAPP NUMBER" autocomplete="off" required>
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div><span class="validationerror">*</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control animated fadeInUp" id="phonenumber2" placeholder="OTHER NUMBER" autocomplete="off">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control animated fadeInUp" id="sponsor" placeholder="SPONSOR" autocomplete="off" requied>
                                    <span class="validationerror">*</span>
                                    <div class="invalid-feedback">
                                        Sponsor is needed.
                                    </div>
                                </div>
                                    
                                <div class="mb-3">
                                    <input type="text" name="recommendation" data-toggle="popover" data-trigger="focus" title="Put Friend Name and phone number here" data-content="Put Friends Name and phone number" class="form-control animated fadeInUp" id="recommendation" placeholder="Recommend a friend/acquaintance (Name and phone number)" autocomplete="off">
                                    <span class="text-primary">
                                        Recommendation attracts benefit if the recommended person register and pay for a course.
                                    </span>
                                </div>
                                
                                
                                <php $(function () { $('[data-toggle="popover" ]').popover() }) ?>
                                
                                
                                <div class="mb-3">
                                    <input type="text" name="referral" data-toggle="popover" data-trigger="focus" title="Put Friend Name and phone number here" data-content="Put Friends Name and phone number" class="form-control animated fadeInUp" id="referral" placeholder="Introduce a friend/acquaintance (Name and phone number)" autocomplete="off">
                                    <span class="text-primary">
                                        Only friend name and phone number that is needed.
                                    </span>
                                </div>
                                
                                <div class="mb-3">
                                    <input type="text" class="form-control animated fadeInUp" id="employer" placeholder="EMPLOYER" autocomplete="off" required>
                                    <span class="validationerror">*</span><span class="text-primary">&nbsp;If unemployed, kindly indicate.</span>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Valid employer name is required.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control animated fadeInUp" id="homeaddress" placeholder="ADDRESS" autocomplete="off" required>
                                    <div class="invalid-feedback">
                                        Please enter your home address.
                                    </div><span class="validationerror">*</span>
                                </div>

                                <div class="mb-3">
                                    <input type="email" class="form-control animated fadeInUp" id="email" placeholder="EMAIL" autocomplete="off" required>
                                    <div class="invalid-feedback">
                                        Valid email address required.
                                    </div><span class="validationerror">*</span>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control animated fadeInUp" id="qualifications" placeholder="QUALIFICATION(S)" autocomplete="off">
                                </div>
                                
                                <h5 class="mt-5 font-weight-bold animated fadeInUp" style="text-decoration: underline">COURSES REGISTERED</h5>
                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">ATSWA I</h6>
                                <div class="row" id="atswa-i-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="atswai course animated fadeInUp" name="economics" id="economics" value="economics">
                                        <label for="economics" class="mr-3 animated fadeInUp">ECONOMICS</label> <span id="economicsPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="atswai course animated fadeInUp" name="business" id="business" value="business">
                                        <label for="business" class="mr-3 animated fadeInUp">BUSINESS LAW</label> <span id="businessPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="atswai course animated fadeInUp" name="basic_accounting" id="basicAccounting" value="basicAccounting">
                                        <label for="basic accounting" class="mr-3 animated fadeInUp">BASIC ACCOUNTING</label> <span id="basicAccountingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="atswai course animated fadeInUp" name="communicating_skills" id="communicatingSkills" value="communicatingSkills">
                                        <label for="communicating skills" class="mr-3 animated fadeInUp">COMMUNICATING SKILLS</label> <span id="communicatingSkillsPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">ATSWA II</h6>
                                <div class="row" id="atswa-ii-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="atswaii course animated fadeInUp" name="financial_accounting" id="financialAccounting" value="financialAccounting">
                                        <label for="financial accounting" class="mr-3 animated fadeInUp">FINANCIAL ACCOUNTING</label> <span id="financialAccountingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="atswaii course animated fadeInUp" name="information_technology" id="informationTechnology" value="informationTechnology">
                                        <label for="information technology" class="mr-3 animated fadeInUp">INFORMATION TECHNOLOGY</label> <span id="informationTechnologyPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="atswaii course animated fadeInUp" name="public_sector" id="publicSectorAcc" value="publicSectorAcc">
                                        <label for="public sector accounting" class="mr-3 animated fadeInUp">PUBLIC SECTOR ACCOUNTING</label> <span id="publicSectorAccPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="atswaii course animated fadeInUp" name="quantitative_analysis" id="quantitativeAnalysis" value="quantitativeAnalysis">
                                        <label for="quantitative analysis" class="mr-3 animated fadeInUp">QUANTITATIVE ANALYSIS</label> <span id="quantitativeAnalysisPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">ATSWA III</h6>
                                <div class="row" id="atswa-iii-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="atswaiii course animated fadeInUp" name="management" id="management" value="management">
                                        <label for="management" class="mr-3 animated fadeInUp">MANAGEMENT</label> <span id="managementPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="atswaiii course animated fadeInUp" name="costing" id="costing" value="costing">
                                        <label for="costing" class="mr-3 animated fadeInUp">COSTING</label> <span id="costingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="atswaiii course animated fadeInUp" name="tax" id="tax" value="tax">
                                        <label for="tax" class="mr-3 animated fadeInUp">TAX</label> <span id="taxPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="atswaiii course animated fadeInUp" name="principles_auditing" id="principlesAuditing" value="principlesAuditing">
                                        <label for="principles of auditing" class="mr-3 animated fadeInUp">PRINCIPLES OF AUDITING</label> <span id="principlesAuditingPrice"> </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3 courses-selected">
                                       <h6>ATSWA I</h6>
                                       <p class="font-weight-bold animated fadeInUp">Number of papers: <span class="atswaicount" id="atswa-i-papers">0</span></p>
                                       <h6>AMOUNT (₦)</h6>
                                       <p class="font-weight-bold atswaiamount animated fadeInUp" id="atswa-i-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>ATSWA II</h6>
                                        <p class="font-weight-bold animated fadeInUp">Number of papers:<span class="atswaiicount" id="atswa-ii-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold atswaiiamount animated fadeInUp" id="atswa-ii-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>ATSWA III</h6>
                                        <p class="font-weight-bold animated fadeInUp">Number of papers:<span class="atswaiiicount" id="atswa-iii-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold atswaiiiamount animated fadeInUp" id="atswa-iii-amount">0</p>
                                    </div>
                                    <div class="col-md-3 mb-3 courses-selected" id="ican-total-amount-selected">
                                        <h6>TOTAL AMOUNT (₦)</h6>
                                        <p class="font-weight-bold totalamount animated fadeInUp" id="atswa-total-amount">0</p>
                                        <p class="font-weight-bold animated fadeInUp">Number of papers: <span class="totalcount" id="atswa-total-papers">0</span>  </p>
                                    </div>
                                </div>

                                <h6 class="mt-5 font-weight-bold text-center" style="text-decoration: underline">HOW YOU GOT TO KNOW ABOUT THIS TRAINING</h6>

                                <div class="row py-3">
                                     <div class="col-md-12 mb-3"><span class="validationerror">*</span>
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow animated fadeInUp" value="Flyer" required> FLYER
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow animated fadeInUp" value="Website"> WEBSITE
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow animated fadeInUp" value="Instagram"> INSTAGRAM
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow animated fadeInUp" value="Facebook"> FACEBOOK
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow animated fadeInUp" value="Twitter"> TWITTER
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow animated fadeInUp" value="Newspaper"> NEWSPAPER
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow animated fadeInUp" value="SMS"> SMS/EMAIL
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow animated fadeInUp" value="NYSC"> NYSC VENUE
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow animated fadeInUp" value="Friend"> A FRIEND
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow animated fadeInUp" value="Signage"> SIGNAGE
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow animated fadeInUp" value="Other"> OTHER<br>
                                        <div class="invalid-feedback">
                                           Please select one of the options.
                                        </div>
                                    </div>    
                                </div>

                                <div class="form-inline">
                                    <div class="form-check">
                                        <input class="form-check-input terms animated fadeInUp" type="checkbox" value id="validCheck3" required>
                                        <label class="form-check-label animated fadeInUp" for="validCheck3"><span class="validationerror">*</span>
                                            <strong>I have read and agreed to the</strong><a href="storage/termsandconditions2022.pdf" target="_blank" class="pl-1 pr-2 animated fadeInUp"> terms and conditions</a>
                                        </label>
                                        <div id="alert" class="error"></div>
                                    </div>
                                </div><br>
                    
                                <button class="btn btn-lg btn-block btn-outline-primary font-weight-bold animated fadeInUp" style="width: 250px;" id="register">SUBMIT</button>
                            
                            </php>
                        </form></div>
                    </div>
                </div> <!-- Main Content -->
            </div>
        </div>
        
        <div id="scrollToTop" class="scrollToTop mbr-arrow-up" style><a style="text-align: center;"><i class="mbri-down mbr-iconfont"></i>↓</a></div>
        
        
        
        


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
        <!--<script src="https://treasurehall.net/assets/js/TG/atswa.js"></script>-->
        <!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>-->
        <script src="js/script_1.js"></script>
        <script src="js/script.js"></script>
        <script src="../../js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="../../js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js"></script>
        
        <script>
        
        
        
        // atswa paper prices
let atswaIPrices = {
    atswaIPricesOnePaper: '₦17500 (₦14500 + ₦3000 admin fee)',
    atswaIPricesTwoPapers: '₦21500 (₦18500 + ₦3000 admin fee)',
    atswaIPricesThreePapers: '₦25500 (₦22500 + ₦3000 admin fee)',
    atswaIPricesFourPapers: '₦30000 (₦27000 + ₦3000 admin fee)'
}

let atswaIIPrices = {
    atswaIIPricesOnePaper: '₦17000 (₦14000 + ₦3000 admin fee)',
    atswaIIPricesTwoPapers: '₦19500 (₦16500 + ₦3000 admin fee)',
    atswaIIPricesThreePapers: '₦24500 (₦21500 + ₦3000 admin fee)',
    atswaIIPricesFourPapers: '₦32500 (₦29500 + ₦3000 admin fee)'
}

let atswaIIIPrices = {
    atswaIIIPricesOnePaper: '₦18500 (₦15500 + ₦3000 admin fee)',
    atswaIIIPricesTwoPapers: '₦23500 (₦20500 + ₦3000 admin fee)',
    atswaIIIPricesThreePapers: '₦28500 (₦25500 + ₦3000 admin fee)',
    atswaIIIPricesFourPapers: '₦35500 (₦32500 + ₦3000 admin fee)'
}


$(document).ready(function () {

    // get atswa i number of papers
    let atswaICount = 0;
    $('#atswa-i-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            atswaICount++;
            $('#atswa-i-papers').html(atswaICount);
        }
        if ($(this).prop('checked') != 1) {
            atswaICount--;
            $('#atswa-i-papers').html(atswaICount);
        }
        getAtswaTotalPapers();
        getAtswaITotalAmount(atswaICount);
        displayAtswaTotalPrice();
        return atswaICount;
    })


    // get atswa ii number of papers
    let atswaIICount = 0;
    $('#atswa-ii-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            atswaIICount++;
            $('#atswa-ii-papers').html(atswaIICount);
        }
        if ($(this).prop('checked') != 1) {
            atswaIICount--;
            $('#atswa-ii-papers').html(atswaIICount);
        }
        getAtswaTotalPapers();
        getAtswaIITotalAmount(atswaIICount);
        displayAtswaTotalPrice();
        return atswaIICount;
    })


    // get atswa iii number of papers
    let atswaIIICount = 0;
    $('#atswa-iii-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            atswaIIICount++;
            $('#atswa-iii-papers').html(atswaIIICount);
        }
        if ($(this).prop('checked') != 1) {
            atswaIIICount--;
            $('#atswa-iii-papers').html(atswaIIICount);
        }
        getAtswaTotalPapers();
        getAtswaIIITotalAmount(atswaIIICount);
        displayAtswaTotalPrice();
        return atswaIIICount;
    })

    // get atswa total number of papers
    let atswaTotalPapers = $('#atswa-total-papers');
    function getAtswaTotalPapers() {
        let atswaI = parseInt($('#atswa-i-papers').text());
        let atswaII = parseInt($('#atswa-ii-papers').text());
        let atswaIII = parseInt($('#atswa-iii-papers').text());
        atswaTotalPapers.text(atswaI + atswaII + atswaIII);
    }


    /****************************************************************************/
    // get amount of atswaI papers
    let atswaITotalAmount = 0;
    function getAtswaITotalAmount(totalNumberOfAtswaIPapers) {
        let { atswaIPricesOnePaper, atswaIPricesTwoPapers, atswaIPricesThreePapers, atswaIPricesFourPapers } = atswaIPrices;
        switch (totalNumberOfAtswaIPapers) {
            case 1:
                atswaITotalAmount = atswaIPricesOnePaper;
                console.log(`the amount for one atswaI paper is ${atswaITotalAmount}`);
                $('#atswa-i-amount').html(`${atswaITotalAmount}`.slice(1));
                // return atswaITotalAmount;
                break;
            case 2:
                atswaITotalAmount = atswaIPricesTwoPapers;
                console.log(`the amount for two atswaI papers are ${atswaITotalAmount}`);
                $('#atswa-i-amount').html(`${atswaITotalAmount}`.slice(1));
                // return atswaITotalAmount;
                break;
            case 3:
                atswaITotalAmount = atswaIPricesThreePapers;
                console.log(`the amount for three atswaI papers are ${atswaITotalAmount}`);
                $('#atswa-i-amount').html(`${atswaITotalAmount}`.slice(1));
                // return atswaITotalAmount;
                break;
            case 4:
                atswaITotalAmount = atswaIPricesFourPapers;
                console.log(`the amount for four atswaI papers are ${atswaITotalAmount}`);
                $('#atswa-i-amount').html(`${atswaITotalAmount}`.slice(1));
                // return atswaITotalAmount;
                break;
            default:
                atswaITotalAmount = 0;
                console.log(`no course selected hence amount for atswaI papers are ${atswaITotalAmount}`);
                $('#atswa-i-amount').html(0);
                // return atswaITotalAmount;
                break;
        }
        // return atswaITotalAmount;
    }


    /****************************************************************************/
    // get amount of atswaII papers
    let atswaIITotalAmount = 0;
    function getAtswaIITotalAmount(totalNumberOfAtswaIIPapers) {
        let { atswaIIPricesOnePaper, atswaIIPricesTwoPapers, atswaIIPricesThreePapers, atswaIIPricesFourPapers } = atswaIIPrices;
        switch (totalNumberOfAtswaIIPapers) {
            case 1:
                atswaIITotalAmount = atswaIIPricesOnePaper;
                console.log(`the amount for one atswaII paper is ${atswaIITotalAmount}`);
                $('#atswa-ii-amount').html(`${atswaIITotalAmount}`.slice(1));
                // return atswaIITotalAmount;
                break;
            case 2:
                atswaIITotalAmount = atswaIIPricesTwoPapers;
                console.log(`the amount for two atswaII papers are ${atswaIITotalAmount}`);
                $('#atswa-ii-amount').html(`${atswaIITotalAmount}`.slice(1));
                // return atswaIITotalAmount;
                break;
            case 3:
                atswaIITotalAmount = atswaIIPricesThreePapers;
                console.log(`the amount for three atswaII papers are ${atswaIITotalAmount}`);
                $('#atswa-ii-amount').html(`${atswaIITotalAmount}`.slice(1));
                // return atswaIITotalAmount;
                break;
            case 4:
                atswaIITotalAmount = atswaIIPricesFourPapers;
                console.log(`the amount for four atswaII papers are ${atswaIITotalAmount}`);
                $('#atswa-ii-amount').html(`${atswaIITotalAmount}`.slice(1));
                // return atswaIITotalAmount;
                break;
            default:
                atswaIITotalAmount = 0;
                console.log(`no course selected hence amount for atswaII papers are ${atswaIITotalAmount}`);
                $('#atswa-ii-amount').html(0);
                // return atswaIITotalAmount;
                break;
        }
        // return atswaITotalAmount;
    }


    /****************************************************************************/
    // get amount of atswaIII papers
    let atswaIIITotalAmount = 0;
    function getAtswaIIITotalAmount(totalNumberOfAtswaIIIPapers) {
        let { atswaIIIPricesOnePaper, atswaIIIPricesTwoPapers, atswaIIIPricesThreePapers, atswaIIIPricesFourPapers } = atswaIIIPrices;
        switch (totalNumberOfAtswaIIIPapers) {
            case 1:
                atswaIIITotalAmount = atswaIIIPricesOnePaper;
                console.log(`the amount for one atswaIII paper is ${atswaIIITotalAmount}`);
                $('#atswa-iii-amount').html(`${atswaIIITotalAmount}`.slice(1));
                // return atswaIIITotalAmount;
                break;
            case 2:
                atswaIIITotalAmount = atswaIIIPricesTwoPapers;
                console.log(`the amount for two atswaIII papers are ${atswaIIITotalAmount}`);
                $('#atswa-iii-amount').html(`${atswaIIITotalAmount}`.slice(1));
                // return atswaIIITotalAmount;
                break;
            case 3:
                atswaIIITotalAmount = atswaIIIPricesThreePapers;
                console.log(`the amount for three atswaIII papers are ${atswaIIITotalAmount}`);
                $('#atswa-iii-amount').html(`${atswaIIITotalAmount}`.slice(1));
                // return atswaIIITotalAmount;
                break;
            case 4:
                atswaIIITotalAmount = atswaIIIPricesFourPapers;
                console.log(`the amount for four atswaIII papers are ${atswaIIITotalAmount}`);
                $('#atswa-iii-amount').html(`${atswaIIITotalAmount}`.slice(1));
                // return atswaIIITotalAmount;
                break;
            default:
                atswaIIITotalAmount = 0;
                console.log(`no course selected hence amount for atswaIII papers are ${atswaIIITotalAmount}`);
                $('#atswa-iii-amount').html(0);
                // return atswaIIITotalAmount;
                break;
        }
        return atswaITotalAmount;
    }


    // get atswa total amount
    let atswaTotalAmount = $('#atswa-total-amount');
    function displayAtswaTotalPrice() {
        let finalAtswaIPrice = parseInt($('#atswa-i-amount').text());
        let finalAtswaIIPrice = parseInt($('#atswa-ii-amount').text());
        let finalAtswaIIIPrice = parseInt($('#atswa-iii-amount').text());
        atswaTotalAmount.text(finalAtswaIPrice + finalAtswaIIPrice + finalAtswaIIIPrice);
        console.log(finalAtswaIPrice + finalAtswaIIPrice + finalAtswaIIIPrice);
    }

})


function getISODate(){
var d = new Date();
return d.getFullYear() + '-' + 
      ('0' + (d.getMonth()+1)).slice(-2) + '-' +
      ('0' + d.getDate()).slice(-2);
}
window.onload = function() {
document.getElementById('date').setAttribute('min',getISODate());
}
        
        
        
               
         $(document).ready(function () {
    let firstname_state = 0;

    $("#firstname").on("blur", function () {
        let firstname = $("#firstname").val();
        if (firstname == "") {
            firstname_state = "";
            return;
        }
        $.ajax({
            type: "post",
            data: {
                firstname_check: 1,
                firstname: firstname
            },
            success: function (response) {
                if (response == "new") {    
                    firstname_state = 1;
                    $("#firstname").parent().addClass("form_success");
                    $("#firstname").siblings("span").text("welcome! new student");
                } else if (response == "returning") {
                    regnumber_state = 1;
                    $("#firstname").parent().addClass("form_success");
                    $("#firstname").siblings("span").text("welcome back! returning student");
                }
            }
        });
    });

    $("#register").click(function (e) {
        e.preventDefault();
        let studylocation = $("[name=studylocation]:checked").val();
        let trainingmethod = $("[name=trainingmethod]:checked").val();
        let firstname = $("#firstname").val();
        let lastname = $("#lastname").val();
        let regnumber = $("#regnumber").val();
        let nyscgmcode = $("#nyscgmcode").val();
        let options = $("[name=options]:checked").val();
        let date = $("#date").val();
        let gender = $("[name=gender]:checked").val();
        let status = $("[name=status]:checked").val();
        let phonenumber = $("#phonenumber").val();
        let phonenumber2 = $("#phonenumber2").val();
        let sponsor = $("#sponsor").val();
        let recommendation = $("#recommendation").val();
        let referral = $("#referral").val();
        let employer = $("#employer").val();
        let homeaddress = $("#homeaddress").val();
        let email = $("#email").val();
        let qualifications = $("#qualifications").val();
        let atswai = [];
            $(".atswai").each(function () {
                if ($(this).is(":checked")) {
                    atswai.push($(this).val());
                }
            });
            atswai = atswai.toString();
        let atswaii = [];
            $(".atswaii").each(function () {
                if ($(this).is(":checked")) {
                    atswaii.push($(this).val());
                }
            });
            atswaii = atswaii.toString();
        let atswaiii = [];
            $(".atswaiii").each(function () {
                if ($(this).is(":checked")) {
                    atswaiii.push($(this).val());
                }
            });
            atswaiii = atswaiii.toString();
        let atswaicount = $(".atswaicount").text();
        let atswaiicount = $(".atswaiicount").text();
        let atswaiiicount = $(".atswaiiicount").text();
        let totalcount = $(".totalcount").text();
        let atswaiamount = $(".atswaiamount").text();
        let atswaiiamount = $(".atswaiiamount").text();
        let atswaiiiamount = $(".atswaiiiamount").text();
        let totalamount = $(".totalamount").text();
        let howdidyouknow = $("[name=howdidyouknow]:checked").val();
        

        if (!($(".studylocation").is(":checked"))) {
            $("#alert").addClass("alert").text("Please choose your study location first before submitting");
        }
        else if  (!($(".trainingmethod").is(":checked"))){
            $("#alert").addClass("alert").text("Please choose your preferred training method");
        }
        else if  (firstname == ""){
            $("#alert").addClass("alert").text("Please the firstname field is still empty");
        }
        else if  (lastname == ""){
            $("#alert").addClass("alert").text("Please the lastname field is still empty");
        }
        else if  (!($(".options").is(":checked"))){
            $("#alert").addClass("alert").text("Please the options field is still empty");
        }
        else if  (date == ""){
            $("#alert").addClass("alert").text("Please the date field is empty");
        }
        else if  (!($(".gender").is(":checked"))){
            $("#alert").addClass("alert").text("Please gender field is still empty");
        }
        else if  (!($(".status").is(":checked"))){
            $("#alert").addClass("alert").text("Please let us know your status");
        }
        else if  (phonenumber == ""){
            $("#alert").addClass("alert").text("Please the whatsapp number field is empty");
        }
        else if  (sponsor == ""){
            $("#alert").addClass("alert").text("Please sponsor field is still empty");
        }
        else if  (employer == ""){
            $("#alert").addClass("alert").text("Please the employer field is empty");
        }
        else if  (homeaddress == ""){
            $("#alert").addClass("alert").text("Please the address field is empty");
        }
        else if  (email == ""){
            $("#alert").addClass("alert").text("Please the email field is empty");
        }
        else if  (!($(".course").is(":checked"))){
            $("#alert").addClass("alert").text("You must select at least one of the courses before submitting");
        }
        else if  (!($(".howdidyouknow").is(":checked"))){
            $("#alert").addClass("alert").text("Please indicate how you got to know about this training");
        }
        else if ($(".terms").prop("checked") != 1) {
            $("#alert").addClass("alert").text("Please accept  the terms and conditions first");
        } else {
            // proceed with form submission
            
            $.ajax({
                type: "post",
                data: {
                    save: 1,
                    studylocation: studylocation,
                    trainingmethod: trainingmethod,
                    firstname: firstname,
                    lastname: lastname,
                    regnumber: regnumber,
                    nyscgmcode: nyscgmcode,
                    options: options,
                    date: date,
                    gender: gender,
                    status: status,
                    phonenumber: phonenumber,
                    phonenumber2: phonenumber2,
                    sponsor: sponsor,
                    recommendation: recommendation,
                    referral: referral,
                    employer: employer,
                    homeaddress: homeaddress,
                    email: email,
                    qualifications: qualifications,
                    atswai: atswai,
                    atswaii: atswaii,
                    atswaiii: atswaiii,
                    atswaicount: atswaicount,
                    atswaiicount: atswaiicount,
                    atswaiiicount: atswaiiicount,
                    totalcount: totalcount,
                    atswaiamount: atswaiamount,
                    atswaiiamount: atswaiiamount,
                    atswaiiiamount: atswaiiiamount,
                    totalamount: totalamount,
                    howdidyouknow: howdidyouknow,
                },
                success: function (response) {
                    //location = "http://www.treasurehall.net/index.php/forms/atswainvoice?email="+email+"&type=atswainvoice";
                    location = "https://www.treasurehall.net/index.php/arch/uploadAT?email="+email+"&message='Your form has been submitted Succesfully. Please choose a JPG, PNG or JPEG of your Passport with the dimension of 77X77 or smaller and the size that is within 1KB to 128KB to be uploaded, and we will generate your Invoice.'";
                    //location.reload();
                    // window.location.reload(true);
                    
                }
            });
        }
    });
});
        </script>
        
        

</div></body></html>