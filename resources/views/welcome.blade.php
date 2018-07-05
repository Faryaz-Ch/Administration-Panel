<!doctype html>
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="icon" href="{{asset('frontend/ico/favicon1.ico')}}" type="image/png">
    <title>WINTEC TECHNICAL ADMIN</title>
    <meta content="Wintec" name="description">
    <meta content="Aritra Sengupta - Faryaz Rehmat" name="author">
    <meta content="Wintec" name="keywords">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


</head>

<body><section id="header">
 <nav class="navbar navbar-expand-sm navbar-light" style="background: #f4d200;">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Brand -->
<a class="navbar-brand" href="#"><img src="{{asset('frontend/img/wintec-logo.png')}}" alt="Welcome to Wintec"></a>

<!-- Links -->
<div class="collapse navbar-collapse justify-content-end" id="nav-content">   
<ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
      </li>
<li class="nav-item">
<a class="nav-link" href="{{route('admin.dashboard')}}">Technical Admin</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Business Admin Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Industry Partners</a>
</li>
</ul>

</nav>
</section>
<section id="message_container">
    <div class="container">
    </div>
</section><div class="content_wrapper">

    <section id="banner"><br />
       <center><img src="{{asset('frontend/img/bg/Capture.PNG')}}" alt="banner"></center> 
    </section><div class="container">
        <h1>Welcome to Wintec learning.</h1>
        <p>This is your all new teaching and learning environment, powered by Moodle. There are a number of exciting new features that will make your learning experience more engaging and which will also integrate more readily with your social media and the world you live in.</p>

        <p>Select your courses from the 'My Courses' menu to get started.</p>

        <p>If you have any problems please email Student Helpdesk or call them on 0800 587 500.</p>

        <p>If you are accessing Moodle from off campus it is recommended that you use Internet Explorer 9. If you do not have this browser, click here to download one of our other recommended browsers for free.</p>
    </div>

</div>
<section id="footer">
    <div id="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-6-pull col-md-3">
                    <h3 class="title">Contact Support</h3>
                    <p>Student Helpdesk <br> - Call: <a href="tel:+64800587500">0800 587 500</a>
                        <br> - Email: <a href="mailto:studenthelpdesk@wintec.ac.nz" class="">studenthelpdesk@wintec.ac.nz</a>
                    </p>
                </div>

                <div class="col-xs-12 col-sm-6 col-sm-6-push col-md-3">
                    <h3 class="title">Need Help?</h3>
                    <ul class="links">
                        <li><a href="#">Start User Tour</a></li>
                        <li><a href="https://www.wintec.ac.nz/student-resources/campus-maps" target="_blank">Guided Campus Tour</a></li>
                        <li><a href="https://wintec.zendesk.com/hc/en-us" target="_blank">Knowledge Base FAQs</a></li>
                    </ul>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-xs-12 col-sm-6 col-sm-6-pull col-md-3 footer_payment_option">
                    <h3 class="title">Help Center</h3>
                    <ul>
                        <li><a href="https://learning.wintec.ac.nz/course/view.php?id=3037" target="_blank">Academic Learning Resources</a></li>
                        <li><a href="https://learning.wintec.ac.nz/course/view.php?id=4002" target="_blank">Careers Service</a> </li>
                        <li><a href="https://www.wintec.ac.nz/student-resources/library" target="_blank">Library Resources Support</a></li>
                        <li><a href="https://www.wintec.ac.nz/student-resources/support-services/student-learning-services" target="_blank">Student Learning Services </a> </li>
                        <li><a href="https://www.wintec.ac.nz/student-resources/support-services/te-kete-konae" target="_blank">Te Kete Konae</a> </li>
                        <li><a href="https://www.wintec.ac.nz/student-resources/support-services/health-services" target="_blank">Student Health Centre</a> </li>
                    </ul>

                </div>

                <div class="col-xs-12 col-sm-6 col-sm-6-push col-md-3 footer_contact">
                    <h3 class="title">Staff Center</h3>
                    <ul>
                        <li><a href="#">Staff Intranet</a></li>
                        <li><a href="#">ITS Service Desk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div id="footer-bottom">
        <div class="container">
            <p class="copyright">Copyright @ 2017 All rights reserved</p>
        </div>
    </div>
    <div class="scroll_to_top_wrap" id="scroll_to_top">
        <i class="fa fa-chevron-up"> </i>
    </div>
</section>
</body>
</html>

