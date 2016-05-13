@extends("base")
<!--  slider  -->

@section("content")
<div class="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/assets/images/slider/1.png" alt="slider 1">
                <div class="carousel-caption">
                    <div class="">
                        <h3>lsmfgvlkrlkmeds</h3>
                        <p>
                            kmfdmrklfldskfv
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/assets/images/slider/2.png" alt="slider 2">
                <div class="carousel-caption">
                    Building conglomerates form ground up
                </div>
            </div>
            <div class="item">
                <img src="/assets/images/slider/2.png" alt="slider 2">
                <div class="carousel-caption">
                    Building conglomerates form ground up
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!--  end slider -->

<div class="flip">
    <div class="container">
        <div class="row">
            <div class="col-md-4 well ">
                <h4>Informative</h4>
                <img src="/assets/images/icon/coperate.png" alt="" />
                <p>
                    . Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            </div>
            <div class="col-md-4 ">
                <h4>Informative</h4>
                <img src="/assets/images/icon/in.png" alt="" />
                <p>
                    reprehenderit in voluptate velit
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                </p>
            </div>
            <div class="col-md-4 well">
                <h4>Informative</h4>
                <img src="/assets/images/icon/coperate.png" alt="" />
                <p>
                    . Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in

                </p>
            </div>
        </div>
    </div>
</div>
<!--  end of flip -->
<!--  history -->
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Our History</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end of history-->

@endsection