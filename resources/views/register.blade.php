@include("includes.header")

<body>

	<!-- PRELOADER -->
<!--	<div class="page-loader">-->
<!--		<div class="loader">Loading...</div>-->
<!--	</div>-->
	<!-- END PRELOADER -->

    @include("includes.nav")

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

	</style>	<!-- HEADER -->

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- PAGE TITLE -->
		<!--
		<section class="module-sm bg-white-dark">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 text-center">

						<h3 class="montserrat text-uppercase m-b-10">Registration</h3>
						<ol class="breadcrumb text-xs">
							<li><a href="#">Home</a></li>
							<li><a href="#">Pages</a></li>
							<li class="active">Registration</li>
						</ol>

					</div>
				</div>

			</div>
		</section>
		-->
		<!-- END PAGE TITLE -->

		<!-- LOGIN -->
		<section class="module" style="padding-top: 60px; padding-bottom: 90px;">
			<div class="container">

				<div class="row">
					<div class="col-sm-4 col-sm-offset-4">

						<h4 class="text-center m-b-30">Create Your Free Account</h4>

                        @include("includes.alert")

						<form class="form-signup"  method="post" action="{{route("registerPost")}}">
                            @csrf
							<div class="form-group">
								<label class="sr-only">Full Name</label>
								<input name="name" id="fullname" type="text" class="form-control input-lg" placeholder="Full Name" autofocus required>
							</div>

							<div class="form-group">
								<label class="sr-only">Email</label>
								<input name="email" id="email" type="email" class="form-control input-lg" placeholder="Email" required>
							</div>

							<div class="col-md-12 form-group">
								<button class="btn btn-block btn-round btn-base">Sign Up</button>
							</div>

							<div class="col-sm-12 m-t-30 text-center">
								<!-- <p>By creating an account, you agree to our <a href="#">terms</a> and <a href="#">privacy policy</a>.</p> -->
								<p>Already have an account? <a href="#">Sign in!</a></p>
							</div>

{{--							<div id="helplines">--}}
{{--								<h5 style="text-align: center; color: #270a70;">--}}
{{--									<strong>Help-lines: <br/>--}}
{{--										+2348171266311  <br/>--}}
{{--										+2348029092316  <br/>--}}
{{--									</strong>--}}
{{--								</h5>--}}
{{--							</div>--}}

							<!-- <div id="moreoptions">

								<h5 style="text-align: center;">
									<a href="register.php" target="_self">Register</a> || <a href="login.php" target="_self">Sign In</a>
								</h5>
							</div>

							<div class="m-t-30 text-center">
								<p>Your First Time? <a href="register.php">Sign up!</a></p>
								<p><a href="register.php">Forgot Password?</a></p>
							</div>

							-->

						</form>

					</div>
				</div><!-- .row -->

			</div>
		</section>
		<!-- END LOGIN -->

    @include("includes.footer")

		<!-- END FOOTER -->	<!-- END SHOP CART -->
    </div>
	<!-- JAVASCRIPT FILES -->

    @include("includes.scripts")


</body>

</html>
