<?php get_header();?>	 
	<section>
			<div class="home-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<div class="profile-area row">
								<div class="col-xs-12 col-md-3">
									<a><img class="img-rounded" src="<?php the_field('profile_image')?>" alt="profile"></a>
								</div>
								<div class="col-xs-12 col-md-9">
									<div class="row">
										<div class="col-xs-12 col-md-10 profile-title">
											<h1> <?php the_title();?> </h1>
										</div>
										<div class="col-sm-2"></div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-md-6">
											<div class="profile-address">
												<p>
													 <span><br /></span><span><?php the_title();?><br /></span><span><i class="fas fa-map-marker-alt text-danger"></i> <?php the_field('city')?>, <?php the_field('zip_code')?></span>
												</p>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<a class="btn btn-danger btn-lg btn-block btn-bg1" href="<?php the_field('write_review_link')?>" title="Write a review for  04 Dental">
												Write a Review
											</a>
										</div>
									</div>
									<div class="profile-contact-btn">
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<a class="btn btn-danger btn-lg btn-block btn-bg2" href="<?php the_field('send_massage_link')?>" title="Write a review for  04 Dental">
												Send Message
											</a>
											</div>
											<div class="col-xs-12 col-md-6">
												<a class="btn btn-danger btn-lg btn-block btn-bg3" href="#"  id="one" title="Write a review for  04 Dental">
													<i class="fa fa-phone rotate"></i> Show Phone Number
												</a>
												<a class="btn btn-warning btn-bg3 btn-lg" id="two"   style="display:none">
												<i class="fa fa-phone rotate"></i> <?php the_field('phone_number')?>
												</a>
												
											</div>
										</div>
									</div>
								</div>	
							</div>
							<div class="profile-connection">
									<div class="row">
										<div  class="col-xs-12 col-sm-12">
											<span class="h3">
												<i class="fas fa-comments"></i>
											</span>
											<b>MAKE A CONNECTION</b> 
											<span class="text"> <?php the_title();?> 
											is accepting messages: </span>
											<a class="inline-block" href="<?php the_field('send_massage_link')?>">
												Send Message
											</a>
										</div>
									</div>
								</div>
							
							<div class="address-area">
								<h1>Contact Information</h1>
								<div class="company-name">
									<div class="row">
										<div  class="col-xs-12 col-sm-6">	
											<h3>Company Name </h3>
									
										</div>
										<div  class="col-xs-12 col-sm-6">	
											<h4><?php the_field('company_name')?></h4>
										</div>
									</div>
								</div>
								<div class="company-website">
									<div class="row">
										<div  class="col-xs-12 col-sm-6">	
											<h3>Visit Website </h3>
									
										</div>
										<div  class="col-xs-12 col-sm-6">	
											<h4><?php the_field('visit_website')?></h4>
										</div>
									</div>
								</div>
								<div class="company-phone">
									<div class="row">
										<div  class="col-xs-12 col-sm-6">	
											<h3>Phone Number </h3>
									
										</div>
										<div  class="col-xs-12 col-sm-6">	
											<a class="btn btn-danger btn-bg3" id="three" >
												<i class="fa fa-phone rotate"></i> Show Phone Number
											</a>
											<a class="btn btn-danger btn-bg3 btn-bg4" id="four" style="display:none">
                                            <?php the_field('phone_number')?>
											</a>
										</div>
									</div>
								</div>
								<div class="company-location">
									<div class="row">
										<div  class="col-xs-12 col-sm-6">	
											<h3>Location </h3>
									
										</div>
										<div  class="col-xs-12 col-sm-6">	
											<h4>
												<span><?php the_field('location')?></span>
											</h4>
										</div>
									</div>
								</div>
								<hr>
								<div class="more-about">
									<h2>More About <?php the_title();?></h2>
									<p><?php the_content();?></p>
								</div>
							</div>
						</div>
                        <div class="col-lg-3 margin-top">
							<div class="contact-form">
								<h2>Send Message</h2>
								<hr>
								<form class="form-group">
									<input type="text" placeholder="Enter Name" class="form-control form0"> 
									<input type="email" placeholder="Enter Email" class="form-control form0">
									<input type="text" placeholder="Enter Phone" class="form-control form0">
									<select name="lead_preferred_day" autocomplete="off" class="form-control control-group select0">
										<option value="">Preferred Reply Day</option>
										<option value="As soon as possible">As soon as possible</option>
											<option value="Sunday">Sunday</option>
											<option value="Monday">Monday</option>
											<option value="Tuesday">Tuesday</option>
											<option value="Wednesday">Wednesday</option>
											<option value="Thursday">Thursday</option>
											<option value="Friday">Friday</option>
											<option value="Saturday">Saturday</option>
									</select>
									<select name="lead_preferred_time" autocomplete="off" class="form-control control-group select0">
										<option value="">Preferred Reply Time</option>
										<option value="As soon as possible">As soon as possible</option>
											<option value="12:00 am">12:00 am</option>
											<option value="1:00 am">1:00 am</option>
											<option value="2:00 am">2:00 am</option>
											<option value="3:00 am">3:00 am</option>
											<option value="4:00 am">4:00 am</option>
											<option value="5:00 am">5:00 am</option>
											<option value="6:00 am">6:00 am</option>
											<option value="7:00 am">7:00 am</option>
											<option value="8:00 am">8:00 am</option>
											<option value="9:00 am">9:00 am</option>
											<option value="10:00 am">10:00 am</option>
											<option value="11:00 am">11:00 am</option>
											<option value="12:00 pm">12:00 pm</option>
											<option value="1:00 pm">1:00 pm</option>
											<option value="2:00 pm">2:00 pm</option>
											<option value="3:00  pm">3:00  pm</option>
											<option value="4:00 pm">4:00 pm</option>
											<option value="5:00 pm">5:00 pm</option>
											<option value="6:00 pm">6:00 pm</option>
											<option value="7:00 pm">7:00 pm</option>
											<option value="8:00 pm">8:00 pm</option>
											<option value="9:00 pm">9:00 pm</option>
											<option value="10:00 pm">10:00 pm</option>
											<option value="11:00 pm">11:00 pm</option>
												
									</select>
									<input type="text" placeholder="Zip Code/Post Code" class="form-control form0">
									<textarea placeholder="Write a message here" class="form-control form0" rows="4"></textarea>
									<div class="form-btn"><button class="btn btn-danger btn-lg btn1">Submit</button></div>
								</form>
							</div>
							<div class="icon-area">
								<h3>
									<i class="fas fa-share-square"></i>Share This Page
								</h3>
								<hr>
								<ul class="icon-list row text-center">
									<div class="col-xs-12 col-sm-4 mt">
										<a><li><i class="fab fa-facebook-f"></i>Share</li></a>
									</div>
									<div class="col-xs-12 col-sm-4 mt">
										<a><li><i class="fab fa-twitter"></i>Tweet</li></a>
									</div>
									<div class="col-xs-12 col-sm-4 mt">
										<a><li><i class="fab fa-linkedin-in"></i>Share</li></a>
									</div>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
					</div>
				</div>
			</div>
		</section>
    <script>
        document.getElementById("one").onclick = function() { 
            document.getElementById("one").style.display = "none"; 
            document.getElementById("two").style.display = "block";
            document.getElementById("three").style.display = "none";
            document.getElementById("four").style.display = "block";
   
         }
         document.getElementById("three").onclick = function() { 
            document.getElementById("three").style.display = "none"; 
            document.getElementById("four").style.display = "block";
            document.getElementById("one").style.display = "none";
            document.getElementById("two").style.display = "block";
   
         }
    </script>
    <?php get_footer();?>
