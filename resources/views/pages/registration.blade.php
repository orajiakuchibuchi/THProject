        
<html lang="en" class="desktop mbr-site-loaded"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css/css.css" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} Registration Form</title>
    <link rel="shortcut icon" href="images/logo.fw-155x133.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_1.css">
  <link rel="stylesheet" href="css/mbr-additional.css" type="text/css">
<style>
    .validationerror {color: #FF0000;}



    /* Why Choosing Us */

    section.why-us {
        background-image: url(images/Treasurehall_Overlay1.jpeg);
        background-color: #172238;
        background-repeat: no-repeat;
        background-size: cover;
        padding-bottom: 100px;
    }

    #tabs {
    text-align: center;
    }
    #tabs ul {
    margin: 0;
    padding: 0;
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 0;
    -moz-column-gap: 0;
    column-gap: 0;
    }
    #tabs ul::after {
    clear: both;
    content: "";
    display: table;
    }
    #tabs ul li {
    display: block;
    font-weight: 400;
    font-size: 1.2em;
    letter-spacing: 1px;
    text-align: center;
    }
    #tabs ul li a {
    display: block;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    cursor: pointer;
    outline: 0;
    padding-bottom: 30px;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    position: relative;
    }
    #tabs ul li a:after {
        transition: all 0.3s;
        width: 10px;
        height: 10px;
        background-color: #fff;
        content: '';
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        bottom: 0;
    }
    #tabs ul li a:before {
        transition: all 0.3s;
        width: 25px;
        height: 25px;
        border: 2px solid transparent;
        background-color: transparent;
        content: '';
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        bottom: -5px;
    }
    #tabs ul li span {
    display: block;
    margin-bottom: 0.75em;
    }
    #tabs ul .ui-tabs-active {
    }
    #tabs ul .ui-tabs-active a {
    color: #f5a425;
    }
    #tabs ul .ui-tabs-active a:after {
    background-color: #f5a425;
    width: 15px;
    height: 15px;
    }
    #tabs ul .ui-tabs-active a:before {
    border-color: #f5a425;
    }
    #tabs h4 {
        margin-top: 60px;
        font-size: 32px;
        font-weight: 700;
        letter-spacing: 1px;
        color: #fff;
        margin-bottom: 30px;
    }

    #tabs p {
        color: #fff;
        font-size: 15px;
        line-height: 28px;
    }

    .tabs-content {
        margin-top: 60px;
        text-align: left;
    }

    @media screen and (max-width: 767px) {
    
    .tabs-content {
        text-align: center;
    }

    }

    .tabs-content img {
        width: 100%;
        overflow: hidden;
        padding-right: 45px;
    }

    @media screen and (max-width: 767px) {

    .tabs-content img {
        padding-right: 0px;
    }

    }


</style>
</head>

<body class="js"><section id="top-1" class="engine">
    <a href="https://mobirise.info">Mobirise</a> Mobirise v4.3.0</section>
    <div class="container-fluid">
        <div class="row">
            <!-- Main Content -->
            <div class="col-md-12 p-3 main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 order-md-1">
                            <div class="row text-center">
                                <div class="col-md-3 mb-4">
                                  <img src="images/ican-logo1-removebg-preview.png" class="animated fadeInUp">
                                </div>
                                <div class="col-md-6">
                                <h3 class="mb-3 font-weight-bold text-center animated fadeInUp">{{$title}} REGISTRATION FORM</h3>
                                </div>
                                <div class="col-md-3">
                                <div class="mbr-section-btn" buttons="0"> <a class="btn btn-primary-outline display-4 animated fadeInUp" href="http://treasurehall.net"><strong>Home</strong></a></div>
                                </div>
                            </div>
                             <form class="needs-validation" method="POST" id="form" name="form" action="pay" action enctype="multipart/form-data" novalidate>
                                @csrf
                                  <div class="mb-5"></div>
                                    <div class="row">
                                    <div class="col-md-12 mb-3">
                                            <label for="asterisk" class="font-weight-bold text-muted mr-3 text-primary animated fadeInUp"><strong>Note!</strong> All fields marked with an asterisk (<span class="validationerror">*</span>) are mandatory. </label>
                                    </div>
                                </div>
                                
                                 <div class="row">
                                    <input type="text" class="form-control animated fadeInUp" id="totalPrice"
                                    name="total" hidden>
                                    @foreach ($general as $key => $input)
                                        <div class="col-md-6 mb-3">
                                            <label>{{$input[2]}}</label>
                                            @if ($input[1] != 'select')
                                                <input type="{{$input[1]}}" class="form-control animated fadeInUp" id="{{$key}}"
                                                name="{{$key}}" placeholder="{{$input[2]}}" autocomplete="off" required>
                                            @else
                                                <select name="{{$key}}" id="{{$key}}" class="form-control animated fadeInUp" 
                                                onchange="updateSelect(event, '{{$input[2]}}')">
                                                    <option value="" selected>Select an option</option>
                                                    @foreach ($input[3] as $opt)
                                                        <option value="{{$opt}}">{{$opt}}</option>
                                                    @endforeach
                                                </select>
                                            @endif
                                            <div class="invalid-feedback">
                                                Valid {{$input[2]}} is required.
                                            </div><span class="validationerror">*</span>
                                        </div>
                                    @endforeach
                                </div>
               
                                <php $(function () { $('[data-toggle="popover" ]').popover() }) ?>
                                
                                <h5 class="mt-5 font-weight-bold animated fadeInUp" style="text-decoration: underline">COURSES REGISTERED</h5>
                                @foreach ($type as $key => $course)
                                    <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">{{$key}}</h6>
                                    <div class="row" id="ican-foundation-courses-selected">
                                        @foreach ($course[0] as $c)
                                            <div class="col-md-6 mb-3">
                                                <input type="checkbox" 
                                                onclick="updatePrice(event,'{{$c}}','{{$key}}', '{{ json_encode($course)}}')" class="foundations course animated fadeInUp" value="{{$c}}">
                                                <label class="mr-3 animated fadeInUp">{{$c}}</label> 
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                                
                                <div class="row">
                                    @foreach ($type as $key => $course)
                                        <div class="col-md-4 mb-3 courses-selected">
                                            <h6>{{ucfirst(trans($key))}}</h6>
                                            <p class="font-weight-bold animated fadeInUp">Number of papers: 
                                                <span class="foundationcount" id="{{$key}}-pappers">0</span> </p>
                                            <h6>AMOUNT (???)</h6>
                                            <p class="font-weight-bold foundationamount animated fadeInUp" 
                                            id="{{$key}}-amount">0</p>
                                        </div>
                                    @endforeach
                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>TOTAL</h6>
                                        <p class="font-weight-bold animated fadeInUp">Number of papers: 
                                            <span class="foundationcount" id="ican-foundation-papers">0</span> </p>
                                        <h6>AMOUNT (???)</h6>
                                        <p class="font-weight-bold foundationamount animated fadeInUp" 
                                        id="ican-foundation-amount">0</p>
                                    </div>
                                </div>

                                <input type="text" name="types" class="howdidyouknow animated fadeInUp" value="{{$title}}" hidden> 
                                <div class="form-inline">
                                    <div class="form-check">
                                        <input class="form-check-input terms animated fadeInUp" type="checkbox" value id="validCheck3" required>
                                        <label class="form-check-label animated fadeInUp" for="validCheck3"><span class="validationerror">*</span>
                                            <strong>I have read and agreed to the</strong><a href="storage/termsandconditions2022.pdf" target="_blank" class="pl-1 pr-2 animated fadeInUp"> terms and conditions</a>
                                        </label>
                                        <div id="alert" class="error"></div>
                                    </div>
                                </div><br>

                                <button class="btn btn-lg btn-block btn-outline-primary font-weight-bold animated fadeInUp" style="width: 400px;" name="register" type="register" value="Register" id="register">PAY WITH FLUTTERWAVE</button>
                            
                        </php></form></div>
                    </div>
                </div> <!-- Main Content -->
            </div>
        </div>
    </div>
    
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up" style><a style="text-align: center;"><i class="mbri-down mbr-iconfont"></i>???</a></div>
        
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
    let newStudent = 'New Students';
    let FOUNDATION = [];
    let SKILLS = [];
    let PROFESSIONAL = [];
    let TOTAL_AMOUNT = 0;
    function updatePrice(evt, value, type, list){
        console.log(evt)
        list = JSON.parse(list);
        let papperCount = document.getElementById(type+'-pappers');
        let priceCount = document.getElementById(type+'-amount');
        let oldPaperCount = parseInt(papperCount.textContent);
        let oldPriceCount = parseInt(priceCount.textContent);
        if(evt.target.checked){
            papperCount.innerText = oldPaperCount + 1;
            let total = 0;
            if(newStudent === 'Returning Students Foundation'){
                total = (oldPaperCount + 1) * (list.payment[newStudent][parseInt(papperCount.textContent)]);
            }else{
                total = (oldPaperCount + 1) * (list.payment[newStudent][parseInt(papperCount.textContent)]);   
            }
            let ttl = parseInt(total) + parseInt(list.payment['Admin Fee']);;
            priceCount.innerText = ttl;
            document.getElementById("totalPrice").innerText = ttl;
            document.getElementById("totalPrice").value = ttl;
            console.log(ttl);

        }else{
            if(oldPaperCount-1 > 0){
                papperCount.innerText = oldPaperCount - 1;
                let total = 0;
                if(newStudent === 'Returning Students Foundation'){
                    total = (oldPaperCount - 1) * (list.payment[newStudent][parseInt(papperCount.textContent)]);
                }else{
                    total = (oldPaperCount - 1) * (list.payment[newStudent][parseInt(papperCount.textContent)]);   
                }
                priceCount.innerText = parseInt(total) + parseInt(list.payment['Admin Fee']);
            }else{
                papperCount.innerText = 0;
                let total = 0;
                let ttl = parseInt(total);
                priceCount.innerText = parseInt(total);
                document.getElementById("totalPrice").innerText = ttl;
                document.getElementById("totalPrice").value = ttl;
                console.log(ttl);
            }
        }
        oldPaperCount = parseInt(papperCount.textContent);
    }       

    function updateSelect(evt, inp){
        const decision = evt.target.value;
        if(inp === 'Are you a returning student'){
            if(decision === 'Yes'){
                newStudent = 'Returning Students Foundation';
            }
        }
    }
</script>
<script>   
</body></html>