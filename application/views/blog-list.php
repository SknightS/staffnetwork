<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from jobpress.icookcode.net/dev/blog-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2017 10:14:50 GMT -->
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
			<div class="container clearfix">
				<div class="header-inner flex space-between items-center">
					<div class="left">
						<div class="logo"><a href="index.html"><img src="images/logo.png" alt="JobPress" class="img-responsive"></a></div>	
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
				<div class="container">
					<p class="breadcrumb-menu">
						<a href="index.html"><i class="ion-ios-home"></i></a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0">Blog</a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#0">Blog List</a>
					</p> <!-- end .breabdcrumb-menu -->
					<h2 class="breadcrumb-title">Blog List</h2>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Blog Section -->
		<div class="section blog-list-section">
			<div class="inner">
				<div class="container">

					<div class="blog-posts-wrapper flex space-between no-wrap">
						<div class="blog-left-side">

							<div class="blog-list flex no-wrap">
								<div class="left-side">
									<img src="images/blog-post-img-xs01.jpg" alt="blog-post-featured-img" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side">
									<h2 class="dark">Let's explore 5 cool new features in JobPress theme</h2>
									<div class="news-meta flex no-column">
										<h6><a href="#0" class="news-author">Nancy watson</a></h6>
										<h6 class="publish-date">20.02.2017</h6>
										<h6><a href="#0" class="comment-count">5 comments</a></h6>
									</div> <!-- end .news-meta -->
									<p>Fusce fermentum ipsum mauris, rutrum ultrices ligula sodales et. Maecenas pellentesque aliquet arcu, vel elementum magna facilisis vitae. Nam in cursus lorem. Donec ac tellus nisl. Sed volutpat quis orci nec placerat. Fusce ex magna, congue sed vulputate rhoncus, laoreet nec sapien.</p>
									<button type="button" class="button">Read More</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .blog-list -->

							<div class="blog-list flex no-wrap">
								<div class="left-side">
									<img src="images/blog-post-img-xs02.jpg" alt="blog-post-featured-img" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side">
									<h2 class="dark">Employer branding: Get behind the wheel!</h2>
									<div class="news-meta flex no-column">
										<h6><a href="#0" class="news-author">Nancy watson</a></h6>
										<h6 class="publish-date">20.02.2017</h6>
										<h6><a href="#0" class="comment-count">5 comments</a></h6>
									</div> <!-- end .news-meta -->
									<p>Fusce fermentum ipsum mauris, rutrum ultrices ligula sodales et. Maecenas pellentesque aliquet arcu, vel elementum magna facilisis vitae. Nam in cursus lorem. Donec ac tellus nisl. Sed volutpat quis orci nec placerat. Fusce ex magna, congue sed vulputate rhoncus, laoreet nec sapien.</p>
									<button type="button" class="button">Read More</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .blog-list -->

							<div class="blog-list flex no-wrap">
								<div class="left-side">
									<img src="images/blog-post-img-xs03.jpg" alt="blog-post-featured-img" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side">
									<h2 class="dark">How to convince recruiters and get your dream job</h2>
									<div class="news-meta flex no-column">
										<h6><a href="#0" class="news-author">Nancy watson</a></h6>
										<h6 class="publish-date">20.02.2017</h6>
										<h6><a href="#0" class="comment-count">5 comments</a></h6>
									</div> <!-- end .news-meta -->
									<p>Fusce fermentum ipsum mauris, rutrum ultrices ligula sodales et. Maecenas pellentesque aliquet arcu, vel elementum magna facilisis vitae. Nam in cursus lorem. Donec ac tellus nisl. Sed volutpat quis orci nec placerat. Fusce ex magna, congue sed vulputate rhoncus, laoreet nec sapien.</p>
									<button type="button" class="button">Read More</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .blog-list -->

							<div class="blog-list flex no-wrap">
								<div class="left-side">
									<img src="images/blog-post-img-xs04.jpg" alt="blog-post-featured-img" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side">
									<h2 class="dark">Is your employee benefits package competitive enough</h2>
									<div class="news-meta flex no-column">
										<h6><a href="#0" class="news-author">Nancy watson</a></h6>
										<h6 class="publish-date">20.02.2017</h6>
										<h6><a href="#0" class="comment-count">5 comments</a></h6>
									</div> <!-- end .news-meta -->
									<p>Fusce fermentum ipsum mauris, rutrum ultrices ligula sodales et. Maecenas pellentesque aliquet arcu, vel elementum magna facilisis vitae. Nam in cursus lorem. Donec ac tellus nisl. Sed volutpat quis orci nec placerat. Fusce ex magna, congue sed vulputate rhoncus, laoreet nec sapien.</p>
									<button type="button" class="button">Read More</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .blog-list -->

							<div class="blog-list flex no-wrap">
								<div class="left-side">
									<img src="images/blog-post-img-xs05.jpg" alt="blog-post-featured-img" class="img-responsive">
								</div> <!-- end .left-side -->
								<div class="right-side">
									<h2 class="dark">The secret to pitching for new business</h2>
									<div class="news-meta flex no-column">
										<h6><a href="#0" class="news-author">Nancy watson</a></h6>
										<h6 class="publish-date">20.02.2017</h6>
										<h6><a href="#0" class="comment-count">5 comments</a></h6>
									</div> <!-- end .news-meta -->
									<p>Fusce fermentum ipsum mauris, rutrum ultrices ligula sodales et. Maecenas pellentesque aliquet arcu, vel elementum magna facilisis vitae. Nam in cursus lorem. Donec ac tellus nisl. Sed volutpat quis orci nec placerat. Fusce ex magna, congue sed vulputate rhoncus, laoreet nec sapien.</p>
									<button type="button" class="button">Read More</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .blog-list -->								

							<div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">
								<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
								<ul class="list-unstyled flex no-column items-center">
									<li><a href="#0">1</a></li>
									<li><a href="#0">2</a></li>
									<li><a href="#0">3</a></li>
									<li><a href="#0">4</a></li>
									<li><a href="#0">5</a></li>									
								</ul>
								<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
							</div> <!-- end .jobpress-custom-pager -->

						</div> <!-- end .blog-list-wrapper -->

						<div class="blog-sidebar">
							
							<div class="search-widget blog-widget">
								<h6>Search this site</h6>
				                <div class="input-group search-form">
				                    <input type="text" class="form-control"  placeholder="Enter your keyword" >
				                    <button type="submit"><span><i class="ion-ios-search"></i></span></button>
	                			</div>
							</div> <!-- end .search-widget -->

							<div class="recent-posts-widget blog-widget">
								<h6>Recent Posts</h6>

								<div class="recent-post flex items-center no-column no-wrap">
									<img src="images/recent-post01.jpg" alt="recent-post-img" class="img-responsive">
									<h4><a href="#0">Tips to write an impressive resume online for beginner</a></h4>
								</div> <!-- end .recent-post -->

								<div class="recent-post flex items-center no-column no-wrap">
									<img src="images/recent-post02.jpg" alt="recent-post-img" class="img-responsive">
									<h4><a href="#0">The secret to pitching for new business</a></h4>
								</div> <!-- end .recent-post -->

								<div class="recent-post flex items-center no-column no-wrap">
									<img src="images/recent-post03.jpg" alt="recent-post-img" class="img-responsive">
									<h4><a href="#0">7 things you should never say to your boss</a></h4>
								</div> <!-- end .recent-post -->

							</div> <!-- end .recent-posts-widget -->
							
							<div class="blog-category-widget blog-widget">
								<h6>Categories</h6>
								<ul class="blog-categories list-unstyled">
									<li><a href="#0">Announcement</a></li>
									<li><a href="#0">Indeed events</a></li>
									<li><a href="#0">Tips &amp; Tricks</a></li>
									<li><a href="#0">Experiences</a></li>
									<li><a href="#0">Case Studies</a></li>
									<li><a href="#0">Labor Market News</a></li>
									<li><a href="#0">HR Best practices</a></li>
								</ul>
							</div> <!-- end .blog-category-widget -->

							<div class="blog-tags-widget blog-widget">
								<h6>Tags</h6>
								<ul class="blog-tags flex no-column list-unstyled">
									<li><a href="#0" class="button button-xs grey">Jobpress</a></li>
									<li><a href="#0" class="button button-xs grey">Recruiter</a></li>
									<li><a href="#0" class="button button-xs grey">Interview</a></li>
									<li><a href="#0" class="button button-xs grey">Employee</a></li>
									<li><a href="#0" class="button button-xs grey">Labor</a></li>
									<li><a href="#0" class="button button-xs grey">HR</a></li>
									<li><a href="#0" class="button button-xs grey">Freelancer</a></li>
									<li><a href="#0" class="button button-xs grey">Slaray</a></li>
									<li><a href="#0" class="button button-xs grey">Employer</a></li>
								</ul>
							</div> <!-- end .blog-tags-widget -->

							<div class="blog-archives-widget blog-widget">
								<h6>Arhives</h6>
								<ul class="blog-archives list-unstyled">
									<li><a href="#">October 2016<span>28 posts</span></a></li>
									<li><a href="#">September 2016<span>35 posts</span></a></li>
									<li><a href="#">August 2016<span>19 posts</span></a></li>
									<li><a href="#">July 2016<span>23 posts</span></a></li>
									<li><a href="#">June 2016<span>29 posts</span></a></li>
									<li><a href="#">May 2016<span>16 posts</span></a></li>
									<li><a href="#">April<span>14 posts</span></a></li>
								</ul>
							</div> <!-- end .blog-archives-widget -->

						</div> <!-- end .blog-sidebar -->
					</div> <!-- end .blog-posts-wrapper -->

				</div> <!-- end .container -->
			</div> <!-- end .inner -->
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

<!-- Mirrored from jobpress.icookcode.net/dev/blog-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2017 10:14:54 GMT -->
</html>