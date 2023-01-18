@include("includes.header")
<body>

	<!-- PRELOADER -->
{{--	<div class="page-loader">--}}
{{--		<div class="loader">Loading...</div>--}}
{{--	</div>--}}
	<!-- END PRELOADER -->

    @include("includes.nav")


	<!-- WRAPPER -->
	<div class="wrapper">

			<!-- PAGE TITLE -->
		<section class="module " style="background-image: url('/assets2/images/others/contact.jpg'); "  >
			<div class="container">

				<div class="row">
					<div class="col-sm-12 text-center">

						<h1 class="montserrat text-uppercase m-b-10" style="color: #fff; letter-spacing: 7px;">Contact Us</h1>
						<p class="lead" style="color: #fff; font-size: 15px; text-transform: uppercase;">we give lives a meaning, and we build a happier world with the love of Christ.</p>
						<!--<ol class="breadcrumb text-xs">
							<li><a href="#">Home</a></li>
							<li><a href="#">Features</a></li>
							<li class="active">Page Title Large</li>
						</ol>-->
					</div>
				</div>

			</div>
		</section>
<!-- END PAGE TITLE -->

		<!-- CONTACT -->
		<section class="module">
			<div class="container">

				<div class="row row-sm-height">


					<div class="col-sm-12 col-sm-height col-sm-middle">

						<h2 class="montserrat text-uppercase animated slideInRight">Let's hear from you</h2>
                        @include("includes.alert")
						<!-- <p>The dismal man readily complied; a circle was again formed round the table, and harmony once more prevailed. Some lingering irritability appeared to find a resting-place in Mr. Winkle's bosom.</p> -->

						<form  method="post" action="{{route("uploadRequest")}}">
                            @csrf
							<div class="row">

								<div class="col-md-12 form-group">
									<label class="sr-only">Full Name</label>
									<input type="text" class="form-control input-lg" name="name" placeholder="Full Name" value="" required="">
									<p class="help-block text-danger"></p>
								</div>



								<div class="col-md-12 form-group">
									<label class="sr-only">E-mail Address</label>
									<input type="email" class="form-control input-lg" name="email" placeholder="E-mail Address" value="" >
									<p class="help-block text-danger"></p>
								</div>

								<div class="col-md-12 form-group">
									<label class="sr-only">Phone Number</label>
									<input type="text" class="form-control input-lg" name="phone" placeholder="Phone Number" value="" required="">
									<p class="help-block text-danger"></p>
								</div>

								<div class="col-md-12 form-group">
									<textarea class="form-control input-lg" rows="7" name="msg" placeholder="Message*" required=""></textarea>
									<p class="help-block text-danger"></p>
								</div>

								<div class="col-md-12">
									<button type="submit" class="btn btn-lg btn-round bg-flickr" style="color: #fff;">Send Email</button>
								</div>

							</div><!-- .row -->
						</form>
						<!-- Ajax response -->
						<div id="contact-response" class="ajax-response"></div>

					</div>

				</div><!-- .row -->

			</div>
		</section>
		<!-- END CONTACT -->

		<!-- INFO -->
		<!-- END INFO -->

		<!-- FOOTER -->
			<!-- FOOTER -->
        @include("includes.footer")

	</div>
	<!-- /WRAPPER -->


	<!-- JAVASCRIPT FILES -->

    @include("includes.scripts")


</body>

</html>
