

    <!-- END nav -->
    @extends('master')
    @section('content')
    <style>
ul li{
    list-style-type: none;

}
body{
	margin:0;
	padding:0;
}
/* .container{
	width:90%
	margin:10px auto;
} */
.portfolio-menu{
	text-align:center;
}
.portfolio-menu ul li{
	display:inline-block;
	margin:0;
	list-style:none;
	padding:10px 15px;
	cursor:pointer;
	-webkit-transition:all 05s ease;
	-moz-transition:all 05s ease;
	-ms-transition:all 05s ease;
	-o-transition:all 05s ease;
	transition:all .5s ease;
}

.portfolio-item{
	/*width:100%;*/
}
.portfolio-item .item{
	/*width:303px;*/
	float:left;
	margin-bottom:10px;
}


.cen li{
    text-align: center;
}


a:hover .pad {
    position: absolute;
   bottom: 80px;
   left: 0;
   margin-left: 110px;
    -webkit-text-stroke-width: 2px;
background-color:gray;
border-radius: 73px;
color:black;
text-shadow: 0 0 3px #FF0000;
}




/*boostrap card*/
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
  background-color: #fafafa;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

@keyframes ripple{
  0%{
    transform: scale(0.8);
  }

  50%{
    transform: scale(1.2);
  }

  100%{
    transform: scale(0.8);
  }
}


@media only screen and (max-width: 600px) {


    .sa
    {
        margin-top:30px!important;
        margin-left: 8px!important;

    }

    .mtitle
    {
        margin-left:-5px!important;

    }

    .text h4{

        margin-top:-2px!important;
    }


}

</style>

    <section class="home-slider owl-carousel">
      <!--<div class="slider-item" style="background-image:url(images/bg_1.jpg);">-->
      <!--  <div class=" " style=" ">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Kids Are The Best <span>Explorers In The World</span></h1>
            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>

          </div>
        </div>
        </div>
      </div>-->

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Play Is The New Learn</h1>
            <p><a href="#contact_form" class="btn btn-info px-4 py-3 mt-3" style="color:white;"><b>Admission Open</b></a></p>
            <p style="color:white">Playgroup | Preschool | KG | Day Care Upto 8pm  |  Activity Center</p>
        </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Sparkle Smart Box</h3>
               <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <!--  <p>playgroup</p>-->
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Sparkle App</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
               <!-- <p>preschool</p>-->
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Daily Worksheets</h3>
             <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

                <!--<p>Kg</p>-->
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Montessori</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <!-- <p>daycare upto 8pm </p>-->
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>
<br>
<section class="ftco-section">

        <div class="row justify-content-center mb-2 pb-2">
  <div class="col-md-8 text-center heading-section ftco-animate">
    <h2 class="mb-4" style="animation: ripple 15s infinite; padding-bottom:!important; margin-bottom:0px!important; color:#1eaaf1">About Us</h2>

  </div>
</div>



                <div class="aboutus-section py-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aboutus">
                                    {{-- <h2 class="aboutus-title">About Us</h2> --}}
                                    <p class="aboutus-text">Learning is a process of acquiring new or modifying existing knowledge, behaviors, skills, values or preferences. This is a lifelong process.</p>
                                    <p class="aboutus-text">A child starts learning from the womb. The experiences a child goes through till the age of 5, plays a crucial role that impacts his / her future. The type of learning that is dominant in each child may vary.

                                    </p>
                                    {{-- <a class="aboutus-more" href="#">read more</a> --}}
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aboutus-banner">
                                    <img src="{{ url('images/board.jpg') }}" alt="" class="img-fluid img-responsive">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="feature">
                                    <div class="feature-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="feature-content">
                                                {{-- <h4>Work with heart</h4> --}}
                                                <p>We provide safe and joyful environment for our children to explore. Because, learning is understood not only as a cognitive experience, but also as one that derives from the emotional, personal, social, cultural and preconceptual.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="feature-content">
                                                {{-- <h4>Reliable services</h4> --}}
                                                <p>Sparkle kidss provides the best start and the right foundation for your child, by imparting a broad range of knowledge and skills.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="glyphicon glyphicon-cog icon"></span>
                                            </div>
                                            <div class="feature-content">
                                                {{-- <h4>Great support</h4> --}}
                                                <p>Sparkle kidss ensures our children’s holistic development and readiness for their next level of learning through the 7 star curriculum.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



       <!--    <div class="col-md-6 course d-lg-flex ftco-animate" style="-moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
            -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            padding: 10px;
            background: white; margin-right:0px; border-right:3px solid rgba(0, 0, 0, .1);">
                <div class="img" style="background-image: url(images/course-3.jpg);"></div>
                <div class="text bg-light p-4">
                    {{-- <h3><a href="#">Music Lesson</a></h3>
                    <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
                    <p>We provide safe and joyful environment for our children to explore. Because, learning is understood not only as a cognitive experience, but also as one that derives from the emotional, personal, social, cultural and preconceptual.</p>
                </div>
            </div>
            <div class="col-md-6 course d-lg-flex ftco-animate" style="-moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
            -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            padding: 10px;
            background: white;">
                <div class="img" style="background-image: url(images/course-4.jpg);"></div>
                <div class="text bg-light p-4">
                    {{-- <h3><a href="#">Sports Lesson</a></h3>
                    <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
                    <p>Sparkle kidss provides the best start and the right foundation for your child, by imparting a broad range of knowledge and skills.</p>
                    <p>Sparkle kidss ensures our children’s holistic development and readiness for their next level of learning through the 7 star curriculum.</p>
                </div>
            </div>-->
            <!--<div class="col-sm-6 course d-lg-flex ftco-animate" style="-moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
             -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            padding: 10px;
            background: white; border-right:3px solid rgba(0, 0, 0, .1);">
                <div class="img" style="background-image: url(images/course-1.jpg);"></div>
                <div class="text bg-light p-4">
                    {{-- <h3><a href="#">Arts Lesson</a></h3>
                    <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
                    <p class="p-2">Learning is a process of acquiring new or modifying existing knowledge, behaviors, skills, values or preferences. This is a lifelong process.</p>
                    <p>We provide safe and joyful environment for our children to explore. Because, learning is understood not only as a cognitive experience, but also as one that derives from the emotional, personal, social, cultural and preconceptual.</p>
                </div>
        </div>
            <div class="col-sm-6 course d-lg-flex ftco-animate" style="-moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
            -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
           box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
           padding: 10px;
           background: white; border-right:3px solid rgba(0, 0, 0, .1);">
                 <div class="img" style="background-image: url(images/course-2.jpg); border:0px solid orange; box-shadow:"></div>
                 <div class="text bg-light p-4">
                     {{-- <h3><a href="#">Language Lesson</a></h3>
                     <p class="subheading"><span>Class time:</span> 9:00am - 10am</p> --}}
                     <p>A child starts learning from the womb. The experiences a child goes through till the age of 5, plays a crucial role that impacts his / her future. The type of learning that is dominant in each child may vary.</p>
                     <p>Sparkle kidss provides the best start and the right foundation for your child, by imparting a broad range of knowledge and skills.</p>
                     <p>Sparkle kidss ensures our children’s holistic development and readiness for their next level of learning through the 7 star curriculum.</p>

                 </div>

        </div>-->




        </div>
    </div>
</section>







		<section class="ftco-section ftco-no-pt ftc-no-pb">

			<div class="container">
				<div class="row bg-white p-3">

                    <div class="col-md-8" style="border:0px solid #1EAAF1; padding:0px;">
                        <div class="card py-0"  style="width:100%;">
                            <div class="card-header bg-primary p-2 text-center" style="color:white;font-weight:bold;font-size:20px">
                                7 Star Curriculum
                            </div>
                            <div class="card-body bg-white py-0">

                                <div class="row p-2" style="">
                                    <p class="text-center bg-white offset-2 mtitle">Holistic development through 7 star curriculum</p>
                                       <div class="col-lg-6" style="padding-top:30px;">
                                           <div class="services-2 d-flex">
                                               <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><img src="images/Connecting_with_nature_3.png" width="35px"></div>
                                               <div class="text">
                                                   <h4>Connecting With <br>Nature</h4>
                                               <!--	<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-6"  style="padding-top:30px;">
                                           <div class="services-2 d-flex">
                                               <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><img src="images/Individual_Potential.png" width="35px"></div>
                                               <div class="text">
                                                   <h4>Foster Individual <br>Potential</h4>
                                               <!--	<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-6">
                                           <div class="services-2 d-flex">
                                               <div class="icon mt-0 mr-3 d-flex justify-content-center align-items-center"><img src="images/Emotional.png" width="35px"></div>
                                               <div class="text">
                                                   <h4>Social &amp; Emotional <br>Development </h4>
                                                   <!--<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-6">
                                           <div class="services-2 d-flex">
                                               <div class="icon mt-0 mr-3 d-flex justify-content-center align-items-center"><img src="images/Awareness.png" width="35px"></div>
                                               <div class="text">
                                                   <h4>Personal <br>Awareness</h4>
                                                   <!--<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-6">
                                           <div class="services-2 d-flex">
                                               <div class="icon mt-0 mr-3 d-flex justify-content-center align-items-center"><img src="images/Cognitive.png" width="35px"></div>
                                               <div class="text">
                                                   <h4>Cognitive <br>Development</h4>
                                                   <!--<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-6">
                                           <div class="services-2 d-flex">
                                               <div class="icon mt-0 mr-3 d-flex justify-content-center align-items-center"><img src="images/Language.png" width="35px"></div>
                                               <div class="text">
                                                   <h4>Speech &amp; Language<br> Development</h4>
                                                   <!--<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-lg-6 my-0 pt-1">
                                           <div class="services-2 d-flex py-0">
                                               <div class="icon mt-0 mr-3 d-flex justify-content-center align-items-center"><img src="images/Sandplay.png" width="35px"></div>
                                               <div class="text"  style="padding-bottom:0px;">
                                                   <h4>Gross &amp; Fine <br>Motor Development</h4>
                                                   <!--<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                               </div>
                                           </div>
                                       </div>


                              {{-- <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="#!" class="btn btn-primary">Go somewhere</a> --}}

                          </div>
                        </div>
                    </div>
                </div>

                          <div class="col-md-3 sa" style="border:0px solid #1EAAF1; padding:0px; margin-left:30px;">
                            <div class="card" style="width:100%;">
                                <div class="card-header bg-primary text-center p-2" style="color:white;font-weight:bold;font-size:20px">
                                    Sparkle Advantages
                                </div>
                                <div class="card-body bg-white">

                                  <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-book text-primary mx-1" style="font-size:25px;vertical-align:middle; margin-right:20px;"></i><span style="margin-left:25px;font-size:15px;">7 Star Curriculum</span></li>
                                    <li class="list-group-item"><i class="fas fa-chalkboard-teacher text-primary mx-1" style="font-size:30px;vertical-align:middle;"></i><span style="margin-left:12px;font-size:15px;">Well Trained Teachers</span></li>
                                    <li class="list-group-item"><i class="fas fa-pray text-primary mx-1" style="font-size:30px;vertical-align:middle;"></i><span style="margin-left:23px;font-size:15px;"> Story Yoga</span></li>
                                    <li class="list-group-item"><i class="fas fa-users text-primary mx-1" style="font-size:30px;vertical-align:middle;"></i><span style="margin-left:16px;font-size:15px;">Parent App</span></li>
                                    <li class="list-group-item"><i class="fas fa-swimmer text-primary mx-1" style="font-size:30px;vertical-align:middle;"></i><span style="margin-left:17px;font-size:15px;">Splashpool & Sandplay</span></li>
                                    <li class="list-group-item"><i class="fas fa-box text-primary mx-1" style="font-size:30px;vertical-align:middle;"></i> <span style="margin-left:20px;font-size:15px;">Smart Box</span></li>
                                    <li class="list-group-item"><i class="fas fa-tasks text-primary mx-1" style="font-size:30px;vertical-align:middle;"></i><span style="margin-left:25px;font-size:15px;">Daily Worksheet</span></li>
                                    <li class="list-group-item"><i class="fas fa-school text-primary mx-1" style="font-size:30px;vertical-align:middle;"></i> <span style="margin-left:16px;font-size:15px;">Montessori</span></li>
                                  </ul>
                                  {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#!" class="btn btn-primary">Go somewhere</a> --}}
                                </div>
                              </div>
                            </div>
          	{{-- <h2 class="mb-4 bg-info text-center" style="border-radius:30px; font-weight:bold; color:#fff;font-size:20px">7 Star Curriculum</h2> --}}
                        <!--<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>-->
                     <!--   <p class="text-center bg-white" style="margin-block-end: auto;"> Holistic development through 7 star curriculum</p>-->





                        </div>
            </div>
        </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-9 py-0">
                <div class="card py-0" style="width:100%;">
                    <div class="card-header">
                      Featured
                    </div>
                    <div class="card-body py-0">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#!" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

            </div>

            <div class="col-lg-3">
                <div class="card" style="width:100%;">
                    <div class="card-header">
                      Featured
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#!" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

            </div>

        </div>

    </div> --}}
		</section>

	<!--	<section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h2>Teaching Your Child Some Good Manners</h2>
						<p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					</div>
					<div class="col-md-3 d-flex align-items-center">
						<p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Take a Course</a></p>
					</div>
				</div>
			</div>
		</section>


		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Certified</span> Teachers</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/teacher-1.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Bianca Wilson</h3>
								<span class="position mb-2">Teacher</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/teacher-2.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Mitch Parker</h3>
								<span class="position mb-2">English Teacher</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/teacher-3.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Stella Smith</h3>
								<span class="position mb-2">Art Teacher</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/teacher-4.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Monshe Henderson</h3>
								<span class="position mb-2">Science Teacher</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Our</span> Courses</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/course-1.jpg);"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Arts Lesson</a></h3>
							<p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/course-2.jpg);"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Language Lesson</a></h3>
							<p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/course-3.jpg);"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Music Lesson</a></h3>
							<p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
						</div>
					</div>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(images/course-4.jpg);"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Sports Lesson</a></h3>
							<p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
            <h2 class="mb-4"><span>20 Years of</span> Experience</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Certified Teachers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="351">0</strong>
		                <span>Successful Kids</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="564">0</strong>
		                <span>Happy Parents</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Awards Won</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>What Parents</span> Says About Us</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-3.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-4.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <div id="contact_form"></div>
    <div  style="padding-top:40px"></div>
    <div class="text-center heading-section ftco-animate"  >
        <h2 class="mb-4 text-center text-primary">Contact Form</h2>

      </div>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">

    	<div class="container">

    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5 bg-primary">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	            <h2 class="mb-4">Please Enter Your Details</h2>
	           <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
	          </div>
	          <form action="#" class="appointment-form ftco-animate">
                <div class="form-group ml-md-4">
                    <input type="text" class="form-control" placeholder=" Name">
                </div>
                <div class="form-group ml-md-4">
                    <input type="text" class="form-control" placeholder="E-Mail">
                </div>

	    			<!--	<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder=" Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="E-Mail">
		    				</div>
	    				</div>-->
	    			<!--	<div class="d-md-flex">
	    					<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                      	<option value="">Select Your Course</option>
                        <option value="">Art Lesson</option>
                        <option value="">Language Lesson</option>
                        <option value="">Music Lesson</option>
                        <option value="">Sports</option>
                        <option value="">Other Services</option>
                      </select>
                    </div>
		              </div>
		    				</div>
	    					<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone">
		    				</div>
                        </div>-->
                        <div class="form-group  ml-md-4">
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group  ml-md-4">
                  <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                </div>

	    				   <div class="form-group ml-md-4">
		              <input type="submit" value="Submit" class="btn btn-success py-3 px-4">
		            </div>
	    			</form>
                </div>
               <!-- <div class="col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7098.94326104394!2d78.0430654485247!3d27.172909818538997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1385710909804" width="600" height="450" frameborder="0" style="border:0"></iframe>
                    <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497511.1146356065!2d79.92880799953032!3d13.04804380118091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1585555432621!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>

                            </div>-->
        </div>

        </div>

    </section>

   <!-- <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Our</span> Pricing</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
    		<div class="row">
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Basic</h3>
	        			<p><span class="price">$24.50</span> <span class="per">/ 5mos</span></p>
	        		</div>
	        		<div class="img" style="background-image: url(images/bg_1.jpg);"></div>
	        		<div class="px-4">
	        			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Take A Course</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Standard</h3>
	        			<p><span class="price">$34.50</span> <span class="per">/ 5mos</span></p>
	        		</div>
	        		<div class="img" style="background-image: url(images/bg_2.jpg);"></div>
        			<div class="px-4">
	        			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-secondary px-4 py-3">Take A Course</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light active pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Premium</h3>
	        			<p><span class="price">$54.50</span> <span class="per">/ 5mos</span></p>
	        		</div>
	        		<div class="img" style="background-image: url(images/bg_3.jpg);"></div>
        			<div class="px-4">
	        			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-tertiary px-4 py-3">Take A Course</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Platinum</h3>
	        			<p><span class="price">$89.50</span> <span class="per">/ 5mos</span></p>
	        		</div>
	        		<div class="img" style="background-image: url(images/bg_5.jpg);"></div>
        			<div class="px-4">
	        			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-quarternary px-4 py-3">Take A Course</a></p>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Recent</span> Blog</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_1.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_2.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_3.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">January</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
			</div>
        </section>-->
        <br><br>
<!--<section>
    <div class=" heading-section ftco-animate">
        <h2 class="mb-4 text-center  text-primary">Gallery</h2>

      </div>
    <div class="container">-->

        <!--<div class="portfolio-menu mt-2 mb-4">
           <ul>
              <li class="btn btn-outline-dark active" data-filter="*">All</li>
              <li class="btn btn-outline-dark" data-filter=".gts">Childran</li>
              <li class="btn btn-outline-dark" data-filter=".lap">Course</li>
              <li class="btn btn-outline-dark text" data-filter=".selfie">Teachers</li>
           </ul>
        </div>-->
      <!--  <div class="portfolio-item row">
           <div class="item gts col-lg-3 col-md-4 col-6 col-sm ">

           <a href="{{ url('gallery')}}" class="fancylight" data-fancybox-group="light">
              <img class="img-fluid" src="images/image_6.jpg" alt="">

              <div class="pad">Course</div>
              </a>
           </div>
           <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
              <a href="{{ url('gallery')}}" class="fancylight" data-fancybox-group="light">
              <img class="img-fluid" src="images/image_1.jpg" alt="">
              <div class="pad">Childran</div>
              </a>
           </div>
           <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
              <a href="{{ url('gallery')}}" class="fancylight " data-fancybox-group="light">
              <img class="img-fluid" src="images/image_2.jpg" alt="">
              <div class="pad">Sports</div>

              </a>
           </div>
           <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
              <a href="{{ url('gallery')}}" class="fancylight " data-fancybox-group="light">
              <img class="img-fluid" src="images/image_3.jpg" alt="">
              <div class="pad">Teacher</div>
              </a>
           </div>-->
         <!--  <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/image_4.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/image_4.jpg" alt="">
              </a>
           </div>
           <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/image_5.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/image_5.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/course-1.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/course-1.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/course-2.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/course-2.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/course-3.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/course-3.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/course-4.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/course-4.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/course-5.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/course-5.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/course-6.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/course-6.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/teacher-1.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/teacher-1.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/teacher-2.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/teacher-2.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/teacher-3.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/teacher-3.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/teacher-4.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/teacher-4.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/teacher-5.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/teacher-5.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/teacher-6.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/teacher-6.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/teacher-7.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/teacher-7.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="images/teacher-8.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="images/teacher-8.jpg" alt="">
              </a>
           </div>-->
          <!-- <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/laptop-wooden-table_53876-20635.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/laptop-wooden-table_53876-20635.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/business-woman-working-laptop_1388-67.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/business-woman-working-laptop_1388-67.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-psd/group-people-holding-laptop-mockup-charity_23-2148069565.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-psd/group-people-holding-laptop-mockup-charity_23-2148069565.jpg" alt="">
              </a>
           </div>
           <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/portrait-young-cheerful-woman-headphones-sitting-stairs_1262-17488.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/portrait-young-cheerful-woman-headphones-sitting-stairs_1262-17488.jpg" alt="">
              </a>
           </div>
           <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/celebration-concept-close-up-portrait-happy-young-beautiful-african-woman-black-t-shirt-smiling-with-colorful-party-balloon-yellow-pastel-studio-background_1258-934.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/celebration-concept-close-up-portrait-happy-young-beautiful-african-woman-black-t-shirt-smiling-with-colorful-party-balloon-yellow-pastel-studio-background_1258-934.jpg" alt="">
              </a>
           </div>
           <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/pretty-woman-showing-arm-muscles_23-2148056021.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/pretty-woman-showing-arm-muscles_23-2148056021.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/blank-colorful-adhesive-notes-against-wooden-wall-with-office-stationeries-laptop_23-2148052717.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/blank-colorful-adhesive-notes-against-wooden-wall-with-office-stationeries-laptop_23-2148052717.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/happy-woman-having-video-call-using-laptop-office_23-2148056211.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/happy-woman-having-video-call-using-laptop-office_23-2148056211.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-psd/laptop-mockup-table-with-plants_23-2147955548.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-psd/laptop-mockup-table-with-plants_23-2147955548.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/blank-colorful-adhesive-notes-against-wooden-wall-with-office-stationeries-laptop_23-2148052717.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/blank-colorful-adhesive-notes-against-wooden-wall-with-office-stationeries-laptop_23-2148052717.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-psd/woman-using-laptop-smartphone_53876-76350.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-psd/woman-using-laptop-smartphone_53876-76350.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/young-couple-taking-selfie-mobile-phone-against-blue-background_23-2148056292.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/young-couple-taking-selfie-mobile-phone-against-blue-background_23-2148056292.jpg" alt="">
              </a>
           </div>
           <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/close-up-blonde-woman-sitting-sofa-using-laptop-with-blank-white-screen_23-2148028738.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/close-up-blonde-woman-sitting-sofa-using-laptop-with-blank-white-screen_23-2148028738.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/group-happy-friends-taking-selfie-cellphone_23-2147859575.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/group-happy-friends-taking-selfie-cellphone_23-2147859575.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/joyful-pretty-girl-with-curly-hair-takes-selfie-mobile-phone_8353-6635.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/joyful-pretty-girl-with-curly-hair-takes-selfie-mobile-phone_8353-6635.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/multiracial-group-young-people-taking-selfie_1139-1032.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/multiracial-group-young-people-taking-selfie_1139-1032.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/female-friends-sitting-car-hood-taking-self-portrait_23-2147855623.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/female-friends-sitting-car-hood-taking-self-portrait_23-2147855623.jpg" alt="">
              </a>
           </div>
           <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
              <a href="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" class="fancylight popup-btn" data-fancybox-group="light">
              <img class="img-fluid" src="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" alt="">
              </a>
           </div>-->
      <!--  </div>
     </div>

</section>-->
<!--gallery-->
<section>
    <div class=" heading-section ftco-animate">
        <h2 class="mb-4 text-center ptitle" >Gallery</h2>

      </div>
    <div class="container">

        <div class="portfolio-item row">


           {{-- /*resize image using css code* --}}

           {{-- style="object-fit:contain;width:100%;height:auto;"  --}}
           @foreach($albums as $album)
           {{-- @dd($albums) --}}
           {{ app()->call('App\Http\Controllers\AlbumController@imageresize',['src'=>$album->cover_picture])}}
        <a href="{{ url('albums/'.$album->id) }}" class="album">
            <div class="item gts col-lg-3 col-md-3 col-6 col-sm" style="border:3px solid #1EAAF1; padding:0px; margin-top:15px;">

                <div style="text-align:center;" class="bg-primary text-white p-2"><b>{{ $album->album_name }}</b></div>
                <a href="http://restschool.hridham.com/storage/cover_pictures/{{ $album->cover_picture }}" class="fancylight" data-fancybox-group="light" style="margin-left:25px;">
                <img class="img-fluid" src="{{ url('storage/cover_pictures/'.$album->cover_picture) }}" alt="">
                </a>
                {{-- <address> --}}
              {{-- @if(!is_null($album->album_description)) --}}

                    <p class="bg-primary text-white p-2">{{ $album->album_description }}</p>

                {{-- </address> --}}
                </div>
            {{-- @endif --}}
            </a>
            @endforeach


        </div>

        <div class="row justify-content-center">
            <div class="pagination">
                {{ $albums->links() }}
             </div>

        </div>
     </div>

</section>
<br>




	<!--	<section class="ftco-gallery">
    	<div class="container-wrap">
            <div class=" heading-section ftco-animate">
                <h2 class="mb-4 text-center" >Gallery</h2>

              </div>
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
                    <a href="{{ url('gallery')}}" class="gallery   d-flex align-items-center" style="background-image: url(images/course-1.jpg);">

                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                           	<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="{{ url('gallery')}}" class="gallery  d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="{{ url('gallery')}}" class="gallery  d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="{{ url('gallery')}}" class="gallery  d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>-->
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4" style="color:#1eaaf1;"<span>Recent</span> Testimonials</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
      </div>
    </div>
            <div class="row">
      <div class="col-md-6 col-lg-4 ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_1.jpg');">
                            <div class="meta-date text-center p-2">
              <span class="day">03</span>
              <span class="mos">April</span>
              <span class="yr">2020</span>
            </div>
          </a>
          <div class="text bg-white p-4">
            <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center mt-4">


            <p class="mb-0"><a href="{{ url('testimonial')}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
            <p class="mb-0 offset-2"><a href="{{ url('test_children')}}" class="btn btn-primary">Know More <span class="ion-ios-arrow-round-forward"></span></a></p>
        </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/teacher-2.jpg');">
                            <div class="meta-date text-center p-2">
                                <span class="day">03</span>
                                <span class="mos">April</span>
                                <span class="yr">2020</span>
            </div>
          </a>
          <div class="text bg-white p-4">
            <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center mt-4">


                <p class="mb-0"><a href="{{ url('testimonial')}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                <p class="mb-0 offset-2"><a href="{{('test_teacher')}}" class="btn btn-primary">Know More <span class="ion-ios-arrow-round-forward"></span></a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_4.jpg');">
                            <div class="meta-date text-center p-2">
              <span class="day">03</span>
              <span class="mos">April</span>
              <span class="yr">2020</span>
            </div>
          </a>
          <div class="text bg-white p-4">
            <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center mt-4">


                <p class="mb-0"><a href="{{ url('testimonial')}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                <p class="mb-0  offset-2"><a href="{{ url('test_sports')}}" class="btn btn-primary">Know More <span class="ion-ios-arrow-round-forward"></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
        </div>
    </section>



<!--<section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4">Testimonial</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
      </div>
    </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/teacher-1.jpg);border-radius:50%;"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Bianca Wilson</h3>
                            <span class="position mb-2">Teacher</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
              </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/teacher-2.jpg);border-radius:50%;"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Mitch Parker</h3>
                            <span class="position mb-2">English Teacher</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
              </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/teacher-3.jpg);border-radius:50%;"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Stella Smith</h3>
                            <span class="position mb-2">Art Teacher</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
              </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(images/teacher-4.jpg);border-radius:50%;"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Monshe Henderson</h3>
                            <span class="position mb-2">Science Teacher</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
              </div>
                        </div>
                    </div>-->
                  <!--  <button type="button" class="btn btn-primary"><a href="{{ url('/')}}"  style="color:white">Read More</a></button>-->
                  <!--  <button type="text" style="text-align:center;baground:color:red;"><a href="{{ url('/')}}">Read More</a></button>-->
              <!--  </div>
                </div>

            </div>

    </section>-->




  <!-- loader -->

@endsection

