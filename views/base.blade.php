<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mordern php</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"  />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/animate.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<!--main wrapper-->
<div class="main-wrapper">
    <!-- nav bar  -->
    <div class="header">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <div class="log pull-right">
                    <a href="login">Login</a> | <a href="register">Register</a>
                </div>
            </div>

        </nav>
    </div>
    <!-- end of nav bar -->

    @yield("content")

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>company</h5>
                    <ul>
                        <li>Our Story</li>
                        <li>Our Approach</li>
                        <li>Mision and Values</li>
                        <li>Careers</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>  Search</h5>
                    <ul>
                        <li>  Search</li>
                        <li>Managed Services</li>
                        <li>Intelligence</li>
                        <li>Privacy</li>
                        <li>Insight</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>  Corporate Contact Office</h4>
                    <p>
                        1 Oladipo Street, Dediolu.<br>Ikeja, Nigeria
                    </p>
                </div>
            </div>

        </div>

    </div>
    <!--end of footer -->
</div>
<!-- end of main wrapper-->
<script src="/assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
</script>
</body>
</html>
