<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from jobpress.icookcode.net/dev/job-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2017 10:14:37 GMT -->
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>JobPress HTML template</title>

		<!-- CSS -->
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Ionicons -->
		<link href="fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.css" rel="stylesheet">
		<!-- Animate.css -->
		<link href="css/animate.min.css" rel="stylesheet">
		<!--Magnific Popup -->
		<link href="css/magnific-popup.css" rel="stylesheet">
		<!--Tagsinput CSS -->
		<link href="css/tagsinput.css" rel="stylesheet">		
		<!-- Style.css -->
		<link href="css/style.css" rel="stylesheet">

	</head>
	<body>

		<!-- Header -->
		<header class="header">
			<div class="container-fluid clearfix">
				<div class="header-inner has-form flex space-between items-center">
					<div class="left flex items-center no-column no-wrap">
						<div class="logo"><a href="index.html"><img src="images/logo.png" alt="JobPress" class="img-responsive"></a></div>
						<div class="job-search-form form-header">						
							<form class="form-inline flex no-column no-wrap">
								<div class="form-group">
									<div class="form-group-inner">
										<input type="text" class="form-control" id="input-field-1" placeholder="Keywords">
										<i class="ion-ios-briefcase-outline"></i>
									</div> <!-- end .form-group-inner -->
								</div> <!-- end .form-group-inner -->
								<div class="form-group">
									<div class="form-group-inner">
										<input type="text" class="form-control" id="input-field-2" placeholder="location">
										<i class="ion-ios-location-outline"></i>
									</div> <!-- end .form-group-inner -->
								</div> <!-- end .form-group -->
								<button type="submit" class="button"><i class="ion-ios-search-strong"></i></button>
							</form>
						</div> <!-- end .job-search-form -->
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation">
							<nav class="main-nav">
								<ul class="list-unstyled">
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li class="menu-item-has-children">
										<a href="candidates-listing.html">Candidates</a>
										<ul>
											<li><a href="candidates-listing.html">Browse Candidates</a></li>
											<li><a href="companies-listing.html">Browse Companies</a></li>
											<li><a href="jobs-listing.html">Jobs Listing</a></li>
											<li><a href="job-details.html">Job Details</a></li>
											<li><a href="categories.html">Job Categories</a></li>
											<li><a href="post-resume-form.html">Post a Resume</a></li>
											<li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
										</ul>									
									</li>
									<li class="menu-item-has-children">
										<a href="companies-listing.html">Companies</a>
										<ul>
											<li><a href="companies-listing.html">Browse Companies</a></li>
											<li><a href="post-job-form.html">Post a job</a></li>
											<li><a href="employer-dashboard.html">Employer Dashboard</a></li>
										</ul>
									</li>								
									<li class="menu-item-has-children">
										<a href="blog-standard.html">Blog</a>
										<ul>
											<li><a href="blog-standard.html">Blog Standard</a></li>
											<li><a href="blog-grid-full-width.html">Blog Grid Full Width</a></li>
											<li><a href="blog-masonry-full-width.html">Blog Masonry Full Width</a></li>
											<li><a href="blog-list.html">Blog List</a></li>
											<li><a href="blog-single-fullwidth-image.html">Blog Single Image</a></li>
											<li><a href="blog-single-fullwidth-video.html">Blog Single Video</a></li>
											<li><a href="blog-single-with-sidebar.html">Blog Single Sidebar</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="#0">Pages</a>
										<ul>
											<li><a href="help.html">Help Tabs</a></li>
											<li><a href="contact-us-full-width.html">Contact Us</a></li>
											<li><a href="pricing-plans.html">Pricing plans</a></li>
										</ul>
									</li>
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="button-group-merged flex no-column">
							<a href="post-job-form.html" class="button">Post a Job</a>
							<a href="#register" class="button" data-toggle="modal" data-target=".bs-modal-sm">Sign Up</a>
						</div> <!-- end .button-group-merged -->
					</div> <!-- end .right -->
				</div> <!-- end .header-inner -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->
		
		<!-- Responsive Menu -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->
		
		<!-- Login/Signup Popup -->
	    <div class="modal fade bs-modal-sm" aria-hidden="true" aria-labelledby="myTabContent"  id="login-signup-popup" role="dialog" tabindex="-1">
	        <div class="modal-dialog modal-sm login-signup-modal">
	            <div class="modal-content">
	                <div class="popup-tabs">
	                    <ul class="nav nav-tabs" id="myTab">
	                        <li class=""><a data-toggle="tab" href="#login">login</a></li>
	                        <li class="active"><a data-toggle="tab" href="#register">Register</a></li>
	                    </ul>
	                </div> <!-- end .popup-tabs -->
	                <div class="modal-body">
	                    <div class="tab-content" id="myTabContent">
	                        <div class="tab-pane fade active in" id="login">
	                            <form class="login-form">

									<div class="form-group">
									    <label for="InputEmail1">Your Email *</label>
									    <input type="email" class="form-control" id="InputEmail1" placeholder="Enter your email">
									</div>

									<div class="form-group">
									    <label for="InputPassword1">Password *</label>
									    <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
									</div>

									<div class="checkbox flex space-between">
										<div>
											<input id="sigin-checkbox" type="checkbox">
											<label for="sigin-checkbox">Remember me</label>
										</div>
									    <a href="#0">Lost password?</a>
									</div> <!-- end .checkbox -->

									<button type="button" class="button" data-dismiss="modal">Login</button>
									
									<p class="text-center divider-text small"><span>or login using</span></p>
									
									<div class="social-buttons">
										<ul class="list-unstyled flex space-between">
											<li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
											<li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
											<li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
										</ul>
									</div> <!-- end .social-buttons -->

	                            </form> <!-- end .login-form -->
	                        </div> <!-- end login-tab-content -->

	                        <div class="tab-pane fade" id="register">
	                            <form class="signup-form">
									<div class="form-group">
									    <label for="InputEmail1">Your Email *</label>
									    <input type="email" class="form-control" id="InputEmail2" placeholder="Enter your email">
									</div>

									<div class="form-group">
									    <label for="InputPassword1">Password *</label>
									    <input type="password" class="form-control" id="InputPassword2" placeholder="Password">
									</div>

									<div class="form-group">
									    <label for="InputPassword2">Confirm Password *</label>
									    <input type="password" class="form-control" id="InputPassword3" placeholder="Password">
									</div>

									<div class="form-group">
									    <label for="select1">Register as:</label>
									    <div class="select-wrapper">
									        <select class="form-control" id="select1">
										        <option>Candidate</option>
										        <option>Company</option>
										    </select>
									    </div> <!-- end .select-wrapper -->								    
									</div>

									<div class="checkbox">
										<input id="signup-checkbox" type="checkbox">
										<label for="signup-checkbox">I agree with the Terms of Use</label>
									</div> <!-- end .checkbox -->

									<button type="button" class="button" data-dismiss="modal">Sign Up</button>
									
									<p class="text-center divider-text small"><span>or login using</span></p>
									
									<div class="social-buttons">
										<ul class="list-unstyled flex space-between">
											<li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
											<li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
											<li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
										</ul>
									</div> <!-- end .social-buttons -->

	                            </form> <!-- end .signup-form -->
	                        </div> <!-- end signup-tab-content -->
	                    </div> <!-- end .mytabcontent -->
	                </div> <!-- end .modal-body -->
	            </div> <!-- end .modal-content -->
	        </div> <!-- end .modal-dialog -->
	    </div> <!-- end .modal -->

		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container-fluid">
					<p class="breadcrumb-menu">
						<a href="index.html"><i class="ion-ios-home"></i></a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0">Job listing - list view</a>
					</p> <!-- end .breabdcrumb-menu -->
					<h2 class="breadcrumb-title flex items-center">Front-end developer needed
						<button type="button" class="button full-time button-sm">Full time</button>
					</h2>
				</div> <!-- end .container-fluid -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Job Listings Section -->
		<div class="section jobs-details-section">
			<div class="container-fluid">
				<div class="jobs-details-wrapper flex no-wrap">

					<div class="left-side">

						<div class="statistics-widget-wrapper jobs-widget">
							<h6>Overall statistics</h6>
							<div class="statistics-widget flex no-column no-wrap">
								<div class="left-side-inner">
									<h2 class="dark">683,207</h2>
									<h5>Created Resumes</h5>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<button type="button" class="button button-sm grey">+583 this week</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .statisstics-widget -->

							<div class="statistics-widget flex no-column no-wrap">
								<div class="left-side-inner">
										<h2 class="dark">129, 245</h2>
										<h5>Posted Jobs</h5>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<button type="button" class="button button-sm grey">+364 this week</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .statisstics-widget -->

						</div> <!-- end .statistics-widget-wrapper -->

						<div class="divider"></div>

						<div class="featured-jobs-widget-wrapper jobs-widget">
							<h6>Featured Jobs</h6>
							<div class="featured-jobs-widget">

								<div class="featured-job flex items-center no-column no-wrap">
									<div class="left-side-inner">
										<img src="images/company-logo16.jpg" alt="company-logo" class="img-responsive">
									</div> <!-- end .left-side -->
									<div class="right-side-inner">
										<h5 class="dark">Fullstack web developer needed</h5>
										<h5>Caap inc.</h5>
									</div> <!-- end .right-side -->
								</div> <!-- end .featured-job -->

								<div class="featured-job flex items-center no-column no-wrap">
									<div class="left-side-inner">
										<img src="images/company-logo15.jpg" alt="company-logo" class="img-responsive">
									</div> <!-- end .left-side -->
									<div class="right-side-inner">
										<h5 class="dark">Fullstack web developer needed</h5>
										<h5>Caap inc.</h5>
									</div> <!-- end .right-side -->
								</div> <!-- end .featured-job -->

								<div class="featured-job flex items-center no-column no-wrap">
									<div class="left-side-inner">
										<img src="images/company-logo17.jpg" alt="company-logo" class="img-responsive">
									</div> <!-- end .left-side -->
									<div class="right-side-inner">
										<h5 class="dark">Fullstack web developer needed</h5>
										<h5>Caap inc.</h5>
									</div> <!-- end .right-side -->
								</div> <!-- end .featured-job -->

							</div> <!-- end .featured-jobs-widget -->

						</div> <!-- end .featured-jobs-widget-wrapper -->

						<div class="divider"></div>

						<div class="latest-updates-widget-wrapper jobs-widget">
							<h6>Latest updates</h6>
							<div class="latest-update flex no-column no-wrap">
								<div class="left-side-inner">
									<img src="images/avatar11.jpg" alt="avatar" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<h5><span>James Patel</span>has got a job!</h5>
									<h5><span>Web Designer</span>for Banana Inc. in<a href="#0">Art/Design</a></h5>
								</div> <!-- end .right-side -->
							</div> <!-- end .latest-update -->

							<div class="latest-update flex no-column no-wrap">
								<div class="left-side-inner">
									<img src="images/avatar12.jpg" alt="avatar" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<h5><span>Alice Phillips</span>has got a job!</h5>
									<h5><span>Web Designer</span>for Banana Inc. in<a href="#0">Art/Design</a></h5>
								</div> <!-- end .right-side -->
							</div> <!-- end .latest-update -->

							<div class="latest-update flex no-column no-wrap">
								<div class="left-side-inner">
									<img src="images/company-logo11.jpg" alt="company-logo" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<h5><span>Evotweet</span>has got a job!</h5>
									<h5><a href="#0">Front-end developer</a>needed in<a href="#0">Technologies</a></h5>
								</div> <!-- end .right-side -->
							</div> <!-- end .latest-update -->

							<div class="latest-update flex no-column no-wrap">
								<div class="left-side-inner">
									<img src="images/avatar13.jpg" alt="avatar" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<h5><span>Wayne Welch</span>has got a job!</h5>
									<h5><span>Software Engineer</span>for Apple Inc. in<a href="#0">Technologies</a></h5>
								</div> <!-- end .right-side -->
							</div> <!-- end .latest-update -->

							<div class="latest-update flex no-column no-wrap">
								<div class="left-side-inner">
									<img src="images/company-logo12.jpg" alt="company-logo" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<h5><span>Prymb Creative Studio</span>has got a job!</h5>
									<h5><a href="#0">We're looking for an Art Director</a>in<a href="#0">Tecnologies</a></h5>
								</div> <!-- end .right-side -->
							</div> <!-- end .latest-update -->

						</div> <!-- end .latest-updates-widget-wrapper -->

					</div> <!-- end .left-side -->

					<div class="right-side-wrapper">
						<div class="right-side-top">
							<h6><span><i class="ion-ios-arrow-left"></i></span>Back to <a href="#0">Technologies</a></h6>
							<div class="right-side-top-inner flex no-wrap">
							
								<div class="job-post-wrapper">
									<div class="job-post-top flex no-column no-wrap">
										<div class="job-post-top-left">
											<img src="images/company-logo-big01.jpg" alt="company-logo" class="img-responsive">
										</div> <!-- end .left-side-inner -->
										<div class="job-post-top-right">
											<h4 class="dark">Front-end developer needed</h4>
											<h5>Banana inc.</h5>
											<div class="job-post-meta flex items-center no-column no-wrap">
												<div class="bookmarked-job-meta flex items-center no-wrap no-column">
													<h6 class="bookmarked-job-category">Technologies</h6>
						        					<h6 class="candidate-location">Park Ave,<span>NYC, USA</span></h6>
													<h6 class="hourly-rate">$60<span>/Hour</span></h6>
						        				</div>
					        					<h6 class="full-time">Full Time</h6>
											</div> <!-- end .job-post-meta -->
										</div> <!-- end .right-side-inner -->
									</div> <!-- end .job-post-top -->

									<div class="divider"></div>

									<div class="job-post-bottom">
										<h4 class="dark">Job Description</h4>
										<p>Etiam quis interdum felis, at pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet. Nulla imperdiet at mauris ut posuere.<br><br>Nullam tempor, ipsum eget egestas viverra, velit augue fringilla arcu, et sollicitudin enim eros nec est. Suspendisse volutpat velit non porttitor placerat. Mauris porttitor aliquam bibendum. Nam at ultrices justo. Mauris eget urna magna.</p><br>	

										<h4 class="dark">Challenges &amp; Benifits</h4>
										<p>Etiam quis interdum felis, at pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet. Nulla imperdiet at mauris ut posuere.</p><br>

										<ul class="job-post-nested-list list-unstyled">
											<li class="flex no-column no-wrap"><span><i class="ion-ios-checkmark"></i></span>Donec accumsan auctor iaculis. Nullam non tortor massa. Proin ligula leo, hendrerit quis tincidunt a, sodales eget ligula. Aenean et est tristique, dictum lorem vel, porttitor urna.</li>
											<li class="flex no-column no-wrap"><span><i class="ion-ios-checkmark"></i></span>Suspendisse gravida elementum lacus, a malesuada tortor sollicitudin ut. Donec pharetra metus lectus, ut eleifend eros sollicitudin et. Ut at lobortis dolor, eget commodo tortor. Curabitur bibendum consequat neque a tincidunt. In in euismod quam. Proin in egestas eros. Cum sociis natoque penatibus et magnis dis parturient montes.</li>
											<li class="flex no-column no-wrap"><span><i class="ion-ios-checkmark"></i></span>Etiam cursus metus arcu, ut pellentesque eros dictum vitae. Vivamus purus ex, dapibus ut eleifend in, hendrerit non nibh. Donec ornare molestie vehicula. Duis feugiat iaculis convallis.</li>
										</ul> <!-- end .job-post-nested-list -->

										<br>
										
										<h4 class="dark">Requirements</h4>
										<p>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. Etiam a laoreet justo, laoreet blandit arcu. Vestibulum lacinia, lacus vitae dignissim tempor, mi tellus imperdiet dolor, quis consectetur tortor magna id enim.<br><br>Vestibulum ac vestibulum dui. Vivamus finibus vel mauris ut vehicula. Nullam a magna porttitor, dictum risus nec, faucibus sapien. Curabitur porttitor in est at viverra. Sed dictum felis lorem.</p>

										<br>
										
										<div class="divider"></div>

										<div class="job-post-share flex space-between items-center no-wrap">
											<div class="job-post-share-left flex items-center no-wrap">
												<h6>Share this job:</h6>
												<ul class="social-share flex no-wrap no-column list-unstyled">
													<li><a href="#0" class="button button-sm facebook-btn"><span><i class="ion-social-facebook"></i></span>Facebook</a></li>
													<li><a href="#0" class="button button-sm twitter-btn"><span><i class="ion-social-twitter"></i></span>Twitter</a></li>
													<li><a href="#0" class="button button-sm g-plus-btn"><span><i class="ion-social-googleplus"></i></span>Google plus</a></li>
												</ul> <!-- end .social-share -->
											</div> <!-- end .job-post-share-left -->
											<div class="job-post-share-right flex items-center no-column no-wrap">
												<h6>Bookmark this job</h6>
												<i class="ion-ios-heart wishlist-icon"></i>
											</div> <!-- end .job-post-share-right -->
											
										</div> <!-- end .job-post-share -->

									</div> <!-- end .job-post-bottom -->

								</div> <!-- end .left-side-inner -->

								<div class="right-side-inner">
									<div id="map" class="map on-job-details-page"></div>
									<div class="job-post-company-info">
										<h5 class="dark">Banana inc.</h5>
										<ul class="list-unstyled">
											<li class="flex no-column no-wrap"><i class="ion-ios-location"></i>56/23 Park Ave, Manhattan NYC 10001, USA</li>
											<li class="flex no-column no-wrap"><i class="ion-ios-telephone"></i><a href="tel:(+01)-212-342-6789">(+01)-212-342-6789</a></li>
											<li class="flex no-column no-wrap"><i class="ion-email"></i><a href="mailto:hr@banana.inc">hr@banana.inc</a></li>
											<li class="flex no-column no-wrap"><i class="ion-earth"></i><a href="#0">https://banana.inc</a></li>
										</ul>
									</div> <!-- end .job-post-company-info -->

									<div class="apply-for-job">
										<p class="divider-text text-center"><span>Apply for this job</span></p>
										<div class="apply-btn-group flex space-center items-center no-column no-wrap">
											<button type="button" class="button facebook-btn">Via Facebook</button>
											<button type="button" class="button linkedln-btn">Via Linkedln</button>
										</div> <!-- end .apply-btn-group -->
									</div> <!-- end .apply-for-job -->

									<div class="system-login text-center">
										<h6>Or login using our system</h6>
										<button type="submit" class="button">Submit your resume</button>
									</div> <!-- end .system-login -->

								</div> <!-- end .right-side-inner -->

							</div> <!-- end .left-side-top -->

							<div class="right-side-bottom-wrapper">
							
						        <div class="bookmarked-jobs-list-wrapper on-listing-page on-job-detals-page">
									<h3>Similar jobs from<span>Banana inc.</span></h3>
						        	<div class="bookmarked-job-wrapper">
						        		<div class="bookmarked-job flex no-wrap no-column ">
							        		<div class="job-company-icon">
							        			<img src="images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
							        		</div> <!-- end .job-icon -->
							        		<div class="bookmarked-job-info">
							        			<h4 class="dark flex no-column">We're looking for a designer<a href="#0" class="button full-time">full time</a></h4>
							        			<h5>Banana inc.</h5>
							        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
							        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
							        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
								        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
							        						<li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
							        						<li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
							        						<li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
							        					</ul> <!-- end .candidates-avatar -->
														<h6 class="bookmarked-job-category">Art/Design</h6>
							        					<h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
														<h6 class="hourly-rate">$45<span>/Hour</span></h6>
							        				</div> <!-- end .bookmarked-job-meta -->
							        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
							        					<i class="ion-ios-heart wishlist-icon"></i>
							        					<a href="#0" class="button">more detail</a>
							        				</div> <!-- end .right-side-bookmarked-job-meta -->
							        			</div> <!-- end .bookmarked-job-info-bottom -->
							        		</div> <!-- end .bookmarked-job-info -->
						        		</div> <!-- end .bookmarked-job -->
						        	</div> <!-- end .bookmarked-job-wrapper --> 

						        	<div class="bookmarked-job-wrapper">
						        		<div class="bookmarked-job flex no-wrap no-column ">
							        		<div class="job-company-icon">
							        			<img src="images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
							        		</div> <!-- end .job-icon -->
							        		<div class="bookmarked-job-info">
							        			<h4 class="dark flex no-column">We need a web designer<a href="#0" class="button part-time">Part time</a></h4>
							        			<h5>Banana inc.</h5>
							        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
							        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
							        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
								        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
							        						<li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
							        						<li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
							        						<li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
							        					</ul> <!-- end .candidates-avatar -->
														<h6 class="bookmarked-job-category">Art/Design</h6>
							        					<h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
														<h6 class="hourly-rate">$45<span>/Hour</span></h6>
							        				</div> <!-- end .bookmarked-job-meta -->
							        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
							        					<i class="ion-ios-heart wishlist-icon"></i>
							        					<a href="#0" class="button">more detail</a>
							        				</div> <!-- end .right-side-bookmarked-job-meta -->
							        			</div> <!-- end .bookmarked-job-info-bottom -->
							        		</div> <!-- end .bookmarked-job-info -->
						        		</div> <!-- end .bookmarked-job -->
						        	</div> <!-- end .bookmarked-job-wrapper -->	
					        	</div> <!-- end .bookmarked-jobs-list-wrapper -->
							</div> <!-- end .right-side-bottom-wrapper -->
							</div> <!-- end .right-side-top-inner -->
						</div> <!-- end .right-side-top -->
					</div> <!-- end .right-side-wrapper -->
				</div> <!-- end .jobs-details-wrapper -->
			</div> <!-- end .container-fluid -->
		</div> <!-- end .section -->


		<!-- Footer -->
		<div class="section footer transparent" style="background-image: url('images/background03.jpg');">
			<div class="container">
				<div class="top flex space-between items-center">
					<img src="images/footer-logo.png" alt="footer-logo" class="img-responsive">
					<ul class="list-unstyled footer-menu flex">
						<li><a href="#0">Home</a></li>
						<li><a href="#0">About</a></li>
						<li><a href="#0">Browse Jobs</a></li>
						<li><a href="#0">Browse candidates</a></li>
						<li><a href="#0">Contact</a></li>
					</ul> <!-- end .footer-menu -->				
				</div> <!-- end .top -->
				<div class="footer-widgets flex no-column space-between">					
					<div class="widget">
						<h6>About</h6>
						<ul class="list-unstyled">
							<li><a href="#0">Company</a></li>
							<li><a href="#0">Our Partners</a></li>
							<li><a href="#0">Blog</a></li>
							<li><a href="#0">FAQ</a></li>
							<li><a href="#0">Pricing</a></li>
							<li><a href="#0">Help Center</a></li>
							<li><a href="#0">Team</a></li>
							<li><a href="#0">Contact Us</a></li>
						</ul>
					</div> <!-- end .widget -->
					<div class="widget">
						<h6>For candidates</h6>
						<ul class="list-unstyled">
							<li><a href="#0">Browse Jobs</a></li>
							<li><a href="#0">Browse categories</a></li>
							<li><a href="#0">Submit Resume</a></li>
							<li><a href="#0">Candidate Dashboard</a></li>
							<li><a href="#0">Job Alerts</a></li>
							<li><a href="#0">My Bookmarks</a></li>
						</ul>
					</div> <!-- end .widget -->
					<div class="widget">
						<h6>For companies</h6>
						<ul class="list-unstyled">
							<li><a href="#0">Browse Candidates</a></li>
							<li><a href="#0">Company Dashboard</a></li>
							<li><a href="#0">Add A Job</a></li>
							<li><a href="#0">Packages</a></li>
						</ul>
					</div> <!-- end .widget -->
					<div class="widget">
						<h6>Follow us</h6>
						<ul class="list-unstyled social-icons flex no-column">
							<li><a href="#0"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#0"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#0"><i class="ion-social-youtube"></i></a></li>
							<li><a href="#0"><i class="ion-social-instagram"></i></a></li>
							<li><a href="#0"><i class="ion-social-linkedin"></i></a></li>
						</ul>				
						<h6>Subscribe Us</h6>
						<p>Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleifend tempor vitae augue.</p>
	                    <form class="form-inline subscribe-form flex no-column no-wrap items-center" role="subscribe">
	                        <div class="form-group">
	                        	<input type="text" class="form-control" placeholder="Your email">
	                        </div> <!-- end .form-group -->
	                        <button type="submit" class="button"><i class="ion-ios-arrow-thin-right"></i></button>
	                  	</form>
					</div> <!-- end .widget -->
				</div> <!-- end .footer-widgets -->
				<div class="bottom flex space-between items-center">
					<p class="copyright-text small">&copy; 2017 <a href="#0">JobPress</a>. All Rights Reserved. Designed by <a href="#0">LeoStudo</a>.</p>
					<ul class="list-unstyled copyright-menu flex no-column">
						<li><a href="#0">Privacy policy</a></li>
						<li><a href="#0">Terms of service</a></li>
						<li><a href="#0">Conditions</a></li>
					</ul> <!-- end .copyright-menu -->
				</div> <!-- end .bottom -->
			</div> <!-- end .container -->
		</div> <!-- end .footer -->


		<!-- Scripts -->
		<!-- jQuery -->		
		<script src="js/jquery-3.1.1.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Wow.js -->
		<script src="js/wow.min.js"></script>
		<!-- Typehead.js -->
		<script src="js/typehead.js"></script>
		<!-- Tagsinput.js -->
		<script src="js/tagsinput.js"></script>
		<!-- Bootstrap Select -->
		<script src="js/bootstrap-select.js"></script>		
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- CountTo -->
		<script src="js/jquery.countTo.js"></script>
		<!-- Isotope -->
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<!-- Magnific-Popup -->
		<script src="js/jquery.magnific-popup.js"></script>
		<!-- Scripts.js -->
		<script src="js/scripts.js"></script>

	</body>

<!-- Mirrored from jobpress.icookcode.net/dev/job-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2017 10:14:37 GMT -->
</html>