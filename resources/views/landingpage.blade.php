@extends('lp_template.main')

@section('title')
LANDING PAGE
@stop

@section('content')
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">			
				<div class="slider"><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				        <div class="carousel-inner" role="listbox">
				          <!-- Slide One - Set the background image for this slide in the line below -->
				          <div class="carousel-item active" style="background-image: url('{{asset('photography-cl')}}/img/slider1.jpg')">
				            <div class="carousel-caption d-md-block">
				              <h2 class="text-uppercase">Wildlife Photography</h2>
				              <p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore  et dolore magna aliqua.	
				              </p>
				            </div>
				          </div>
				          <!-- Slide Two - Set the background image for this slide in the line below -->
				          <div class="carousel-item" style="background-image: url('{{asset('photography-cl')}}/img/slider2.jpg')">
				            <div class="carousel-caption d-md-block">
				              <h2 class="text-uppercase">Wildlife Photography</h2>
				              <p>T
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore  et dolore magna aliqua.	
				              </p>
				            </div>
				          </div>
				          <!-- Slide Three - Set the background image for this slide in the line below -->
				          <div class="carousel-item" style="background-image: url('{{asset('photography-cl')}}/img/slider3.jpg')">
				            <div class="carousel-caption d-md-block">
				              <h2 class="text-uppercase">Wildlife Photography</h2>
				              <p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore  et dolore magna aliqua.	
				              </p>
				            </div>
				          </div>
				        </div>
				        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				          <span class="sr-only">Previous</span>
				        </a>
				        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				          <span class="carousel-control-next-icon" aria-hidden="true"></span>
				          <span class="sr-only">Next</span>
				        </a>
				      </div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start About Area -->
			<section class="About-area section-gap" id="about">
				<div class="container">
					<div class="row d-flex align-items-center">
						<div class="col-lg-6 about-left">
							<img class="img-fluid" src="{{asset('photography-cl')}}/img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 about-right">
							<h1>
								We Believe that <br>
								Interior beautifies the
							</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that.
							</p>
							<button class="submit-btn primary-btn mt-20 text-uppercase ">Hire me now<span class="lnr lnr-arrow-right"></span></button>
						</div>
					</div>
				</div>	
			</section>
			<!-- End About Area -->

			<!-- Start gallery Area -->
			<section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text">
							<h1 class="text-white">My Recent Photos</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="gal">
						<a href="{{asset('photography-cl')}}/img/p1.jpg"><img src="{{asset('photography-cl')}}/img/p1.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p2.jpg"><img src="{{asset('photography-cl')}}/img/p2.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p3.jpg"><img src="{{asset('photography-cl')}}/img/p3.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p4.jpg"><img src="{{asset('photography-cl')}}/img/p4.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p5.jpg"><img src="{{asset('photography-cl')}}/img/p5.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p6.jpg"><img src="{{asset('photography-cl')}}/img/p6.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p7.jpg"><img src="{{asset('photography-cl')}}/img/p7.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p8.jpg"><img src="{{asset('photography-cl')}}/img/p8.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p9.jpg"><img src="{{asset('photography-cl')}}/img/p9.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p10.jpg"><img src="{{asset('photography-cl')}}/img/p10.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p11.jpg"><img src="{{asset('photography-cl')}}/img/p11.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p12.jpg"><img src="{{asset('photography-cl')}}/img/p12.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p13.jpg"><img src="{{asset('photography-cl')}}/img/p13.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p14.jpg"><img src="{{asset('photography-cl')}}/img/p14.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p15.jpg"><img src="{{asset('photography-cl')}}/img/p15.jpg" alt=""></a>
						<a href="{{asset('photography-cl')}}/img/p16.jpg"><img src="{{asset('photography-cl')}}/img/p16.jpg" alt=""></a>
										
					</div>
				</div>
			</section>

			<!-- Start callto Area -->
			<section class="callto-area pt-50 pb-50">
				<div class="container">
					<div class="row">
						 <div class="col-lg-9 callto-left">
						 	<h1 class="text-uppercase">Not sure about my charge?</h1>
						 </div>
						 <div class="col-lg-3 callto-right">
						 	<a href="#" class="btn-white btn text-uppercase">Donate Now</a>
						 </div>
					</div>
				</div>	
			</section>
			<!-- End callto Area -->

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="services">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text">
							<h1>Our Recent Blogs</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row">	
						<div class="single-blog col-lg-4 col-md-4">

							<img class="f-img img-fluid mx-auto" src="{{asset('photography-cl')}}/img/b1.jpg" alt="">
							<h4>
								<a href="#">Portable Fashion for young women</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
								 commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="{{asset('photography-cl')}}/img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
						</div>
						<div class="single-blog col-lg-4 col-md-4">
							<img class="f-img img-fluid mx-auto" src="{{asset('photography-cl')}}/img/b2.jpg" alt="">
							<h4>
								<a href="#">Summer ware are coming</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea.
 								commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="{{asset('photography-cl')}}/img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
						</div>
						<div class="single-blog col-lg-4 col-md-4">
							<img class="f-img img-fluid mx-auto" src="{{asset('photography-cl')}}/img/b3.jpg" alt="">
							<h4>
								<a href="#">Summer ware are coming</a>
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="{{asset('photography-cl')}}/img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end blog Area -->	

			<!-- Start contact Area -->
			<section class="contact-area" id="contact">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-5 col-md-12 contact-left no-padding">
							<img class="img-fluid" src="{{asset('photography-cl')}}/img/contact-img.jpg" alt="">
						</div>
						<div class="col-lg-7 col-md-12 contact-right no-padding">
							<h1>Send me Message</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.
							</p>
							<form class="booking-form" id="myForm" action="contact.php">
								 	<div class="row">
								 		<div class="col-lg-12 d-flex flex-column">
							 				<input name="name" placeholder="Your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'" class="form-control mt-20" required="" type="text" required>
								 		</div>
							 			<div class="col-lg-12 d-flex flex-column">
											<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required="" type="email">
										</div>									
										<div class="col-lg-12 flex-column">
											<textarea class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										</div>
										
										<div class="col-lg-12 d-flex justify-content-end send-btn">
											<button class="submit-btn primary-btn mt-20 text-uppercase ">confirm booking<span class="lnr lnr-arrow-right"></span></button>
										</div>

										<div class="alert-msg"></div>		
									</div>
					  		</form>
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End contact Area -->
@stop