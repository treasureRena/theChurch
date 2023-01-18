<!-- HEADER STICKY TOP -->
<header class="header js-stick" style="background-color:#270a70; box-shadow: inset 0 -1px 0px #270a70">
    <div class="container">
        <!-- YOUR LOGO HERE -->
        <div class="inner-header">
            <a class="inner-brand" href="{{url("/")}}">
                <img class="brand-light" src="/church/logo2.png" width="200" alt="">
                <img class="brand-dark" src="/church/logo2.png" width="200" alt="">
            </a>
        </div>

        <!-- OPEN MOBILE MENU -->
        <div class="main-nav-toggle">
            <div class="nav-icon-toggle" data-toggle="collapse" data-target="#custom-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
        </div>

        <!-- WIDGETS MENU -->
        <div class="inner-header pull-right" >
            <div class="menu-extras clearfix" style="    box-shadow: -1px 0 0 #270a70" >

                <!-- SHOP CART -->
                <!--<div class="menu-item">
                    <div class="extras-cart">
                        <a href="#" id="open-cart">
                            <i class="icon-basket icons"></i>
                            <span class="cart-badge">2</span>
                        </a>
                    </div>
                </div>-->
                <!-- END SHOP CART -->

                <!-- SEARCH -->
                <div class="menu-item hidden-xxs">
                    <div class="extras-search">
                        <!-- <a id="modal-search" href="#"><i class="icon-magnifier icons" style="color: #ffffff"></i></a> -->
                        <form action="#" class="header-search-form">
                            <div class="search-form-inner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="header-search-form-clouse">
                                                <a href="#" class="form-close-btn">✕</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" placeholder="Type &amp; hit enter">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END SEARCH -->

            </div>
        </div>

        <!-- MAIN MENU -->
        <nav id="custom-collapse" class="main-nav collapse clearfix" style="background-color:#270a70;">
            <ul class="inner-nav pull-right">

                <!-- HOME -->
                <li >
                    <a href="{{url("/")}}">Home</a>

                </li>
                <!-- END HOME -->

                <!-- PAGES -->
                <li class="has-submenu">
                    <a href="#">About Us</a>
                    <ul class="submenu">
                        <li><a href="{{route("about")}}">About Us</a></li>
                        <!--<li><a href="#">Service Times</a></li>-->
                    </ul>

                </li>

                <!-- END PAGES -->
                <!-- PORTFOLIO -->
                <li >
                    <a href="#">Watch Service</a>
                </li>
                <!-- END PORTFOLIO -->

                <!-- PORTFOLIO -->
                <!-- <li >
                    <a href="events.php">Events</a>
                </li> -->

                <!--					<li >-->
                <!--						<a href="events.html">Events</a>-->
                <!--					</li>-->
                <!-- END PORTFOLIO -->

                <!-- FEATURES -->
                <li class="has-submenu">
                    <a href="#">Ministries</a>
                    <ul class="submenu">
                        <li><a href="{{route("teens")}}">Teen's Church</a></li>
                        <li><a href="{{route("children")}}">Children's Church</a></li>
{{--                        <li><a href="{{route("careGroup")}}">Join a Care Group</a></li>--}}

                        <li><a href="{{route("foundationSchool")}}">Foundation School</a></li>
                        <li><a href="{{route("waterBap")}}">Water Baptism</a></li>
                        <li><a href="{{route("wedding")}}">Weddings & Counselling</a></li>
                        <li><a href="{{route("babyDedication")}}">Baby Dedications</a></li>
                    </ul>

                </li>
                <!-- END FEATURES -->





                <!-- BLOG -->
                <!-- <li>
                    <a href="partnership.php">Partner with Us</a>

                </li> -->
                <!-- END BLOG -->



                <!-- SHOP -->
                <li >
                    <a href="{{route("contact")}}">contact Us</a>

                </li>
                <!-- END SHOP -->



                <!-- DIVIDER -->
                <li><a>&nbsp;</a></li>

                <!--<li><a href="start.html">All Demos</a></li>-->

            </ul>
        </nav>

    </div>

</header>

<!-- HEADER STICKY TOP -->
<style type="text/css">
    .btn.btn-base.btn-link {
        background: transparent;
        border: 0;
        padding: 0;
        color: #270a70;
    }

    .divider-line:after {
        display: block;
        background: #270a70;
        content: " ";
        margin: 20px auto 20px 0;
        opacity: 0.6;
        height: 2px;
        width: 50px;
    }
    .box-icon .icon-box-icon, .box-icon-left .icon-box-icon, .box-icon-right .icon-box-icon{
        color: #270a70;
    }
    .bottom-line:after {
        border-bottom: solid 2px #270a70;
    }

</style>
