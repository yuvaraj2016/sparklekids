

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



.services-2
{
    height:53px;

}

.services-2 .text h4{

    margin-top:6px!important;
    /* font-size:3px!important; */
    font-weight:bold;
}

.services-2 .icon{

    margin-top:-17px!important;
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

    .aboutus-section
    {
        margin-left:-15px!important;

    }

    .aboutus-section img
    {
        margin-left:-10px!important;

    }

    .aboutus-section .alert
    {
        margin-left:13px!important;
        margin-top:13px!important;

    }

    .ssc
    {
        margin-left:-2px!important;

    }

    .ssc .text h4{
        margin-top:11px!important;
    }

    .about-us-right
    {

        margin-top:25px;
    }

    .bannerinfo{

        margin-top:-25px!important;
    }

    .bannerinfo h1
    {
        font-size:20px!important;
        padding-top:16px!important;

    }

    .bannerinfo p
    {
        font-size:14px!important;

    }

    .bannerinfo a
    {
        font-size:14px!important;
        margin-top:5px!important;
        padding:10px!important;

    }

    .icon span
    {
        margin-left:-45px!important;

    }

    .sa .card-body
    {
        margin-left:-10px!important;

    }

    .sa .text h4{

        margin-top:9px!important;
    }

    .gallerysec img {

        margin-left:33px!important;
    }

    .ptitle
    {
        margin-top:15px!important;
        padding-bottom:0px!important;
    }

    .ssc .col-lg-6{

        margin-top:-20px!important;
    }

    .ssc .foster{

        margin-top:-40px!important;
    }

    .ssc .text
    {
        margin-top:-4px!important;

    }

    .sa .col-lg-6
    {
        margin-top:-20px!important;

    }
    .media .icon
    {
        margin-top:-50px!important;
    }

    .media .icon span
    {
        margin-left:-17px!important;
    }

    .meta-date span
    {
        padding-left:0px!important;

    }
}


/* animations */

.hvr-grow {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
}
.hvr-grow:hover, .hvr-grow:focus, .hvr-grow:active {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

.hvr-sweep-to-right .text:hover h4
{
    color:#fff!important;
    font-weight:bold;
}

.hvr-sweep-to-right {
  display: inline-block;
  vertical-align: top;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  padding:10px;
  margin-top:-20px;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.hvr-sweep-to-right:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  padding:10px;
  background: #2098D1;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-sweep-to-right:hover, .hvr-sweep-to-right:focus, .hvr-sweep-to-right:active {
  color: white!important;
  padding:10px;
}
.hvr-sweep-to-right:hover:before, .hvr-sweep-to-right:focus:before, .hvr-sweep-to-right:active:before {
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}


.hvr-underline-from-left {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  overflow: hidden;
}
.hvr-underline-from-left:before {
  content: "";
  position: absolute;
  z-index: -1;
  left: 0;
  right: 100%;
  bottom: 0;
  background: #2098D1;
  height: 4px;
  -webkit-transition-property: right;
  transition-property: right;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-underline-from-left:hover:before, .hvr-underline-from-left:focus:before, .hvr-underline-from-left:active:before {
  right: 0;
}



.hvr-float-shadow {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
}
.hvr-float-shadow:before {
  pointer-events: none;
  position: absolute;
  z-index: -1;
  content: '';
  top: 100%;
  left: 5%;
  height: 10px;
  width: 90%;
  opacity: 0;
  background: -webkit-radial-gradient(center, ellipse, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
  background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
  /* W3C */
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform, opacity;
  transition-property: transform, opacity;
}
.hvr-float-shadow:hover, .hvr-float-shadow:focus, .hvr-float-shadow:active {
  -webkit-transform: translateY(-5px);
  transform: translateY(-5px);
  /* move the element up by 5px */
}
.hvr-float-shadow:hover:before, .hvr-float-shadow:focus:before, .hvr-float-shadow:active:before {
  opacity: 1;
  -webkit-transform: translateY(5px);
  transform: translateY(5px);
  /* move the element down by 5px (it will stay in place because it's attached to the element that also moves up 5px) */
}

</style>

    {{-- <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image:url(images/banner.png);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters  align-items-center justify-content-center" >
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-10 text-white ">Play Is The New Learn</h1>
            <p><a href="#contact_form" class="btn btn-info px-4 py-3 mt-3" style="color:white;"><b>Admission Open</b></a></p>
            <p style="color:white">Playgroup | Preschool | KG | Day Care Upto 8pm  |  Activity Center</p>
        </div>
        </div>
        </div>
      </div>
    </section> --}}

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ url('images/banner_new.png')}}'); height:600px;">
        <div class="overlay"></div>
        <div class="container" style="padding-top:330px!important;">
          <div class="row no-gutters slider-text align-items-center justify-content-center" style="">
            <div class="col-md-6 text-center ftco-animate bannerinfo">
            <div style="border:0px solid red;
            background-clip: border-box;
            background-color:rgb(28, 25, 23,0.5);" class="pb-2">
                <h1 class="mb-0 text-white">Play Is The New Learn</h1>

                <p style="color:white">Playgroup | Preschool | KG | Day Care Upto 8pm  |  Activity Center</p>
            </div>
                <p><a href="#contact_form" class="btn btn-info px-4 py-3 mt-3" style="color:white;"><b>Admission Open</b></a></p>
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
                    {{-- <span class="flaticon-teacher"></span> --}}
                    <img src="images/box.png">

              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Sparkle Smart Box</h3>
               {{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> --}}
               <p>A compact package that contains interesting content for the child to joyfully learn through play

                at Sparkle kidss preschool</p>
              <!--  <p>playgroup</p>-->
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                    {{-- <span class="flaticon-reading"></span> --}}
                    <img src="images/parents.png">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Parent App</h3>
                {{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> --}}
                <p>Parents can keep track of daily activities of their child at the Sparkle kidss preschool</p>
               <!-- <p>preschool</p>-->
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                    {{-- <span class="flaticon-books"></span> --}}
                    <img src="images/task.png">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Daily Worksheets</h3>
             {{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> --}}
                <p>A child who has enrolled in the Sparkle kidss preschool program will enjoy a new, interesting

                    activity worksheet everyday</p>
                <!--<p>Kg</p>-->
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                    {{-- <span class="flaticon-diploma"></span> --}}
                    <img src="images/school.png">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Montessori</h3>
                {{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p> --}}
                <p>Montessori students are able to think critically, work collaboratively, and act boldly—a skill set for the 21st century.</p>
              <!-- <p>daycare upto 8pm </p>-->
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>



<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url('{{ url('images/about_us_up.jpg') }}'); margin-top:0px;"">

  <div class="container" style="">

    <div class="row justify-content-end">
      <div class="col-md-6 py-5 px-md-5" style="background-color:rgb(255, 255, 255,90%);">
        <div class="heading-section heading-section-white ftco-animate mb-5">
          <h2 class="mb-4" style="padding-bottom:!important; margin-bottom:0px!important; color:#000;">About Us</h2>
          {{-- <h2 class="mb-4">Please Enter Your Details</h2> --}}
         <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
          <p style="color:#000;">Learning is a process of acquiring new or modifying existing knowledge, behaviors, skills, values or preferences. This is a lifelong process.

          </p>
          <p  style="color:#000;">A child starts learning from the womb. The experiences a child goes through till the age of 5, plays a crucial role that impacts his / her future. The type of learning that is dominant in each child may vary.

          </p>
          <p  style="color:#000;">We provide safe and joyful environment for our children to explore. Because, learning is understood not only as a cognitive experience, but also as one that derives from the emotional, personal, social, cultural and preconceptual.
          </p>
          <p  style="color:#000;">Sparkle kidss provides the best start and the right foundation for your child, by imparting a broad range of knowledge and skills.

          </p>
          <p  style="color:#000;">Sparkle kidss ensures our children’s holistic development and readiness for their next level of learning through the 7 star curriculum.

          </p>
        </div>
            </div>
           <!-- <div class="col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7098.94326104394!2d78.0430654485247!3d27.172909818538997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1385710909804" width="600" height="450" frameborder="0" style="border:0"></iframe>
                <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497511.1146356065!2d79.92880799953032!3d13.04804380118091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1585555432621!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>

                        </div>-->
    </div>

    </div>

</section>



<section class="ftco-section ftco-no-pt ftc-no-pb">

    <div class="container-fluid">
        <div class="row bg-white pt-5">


            <div class="col-md-6 ssc" style="border:0px solid #1EAAF1; padding:0px;">
                <div class="card py-0"  style="width:100%;">
                    <div class="card-header p-2 text-center bg-primary" style="color:white;font-weight:bold;font-size:20px;">
                        7 Star Curriculum
                    </div>
                    <div class="card-body bg-white py-0">

                        <div class="row p-2 ml-0 mt-3" style="">
                            {{-- <p class="text-center bg-white mtitle pt-3 ml-4">Sparkle kidss ensures our children’s holistic development and readiness for their next level of learning through the 7 star curriculum.</p> --}}
                               <div class="col-lg-6 con" style="padding-top:30px;">
                                   <div class="services-2 d-flex hvr-float-shadow" style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                                       <div class="text">
                                           <h4 class="text-white pl-4" style="font-size:13px!important;">Connecting With <br>Nature</h4>
                                       <!--	<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                       </div>
                                       <div class="icon mt-3 pt-1 mr-1 d-flex justify-content-center align-items-center "><img src="images/Connecting_with_nature_3.png" width="35px"></div>
                                   </div>
                               </div>
                               <div class="col-lg-6 foster"  style="padding-top:30px;">
                                   <div class="services-2 d-flex  hvr-float-shadow" style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                                       <div class="text">
                                           <h4 style="font-size:13px!important;" class="text-white pl-4">Foster Individual <br>Potential</h4>
                                       <!--	<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                       </div>
                                       <div class="icon mt-3 pt-1 mr-1 d-flex justify-content-center align-items-center"><img src="images/Individual_Potential.png" width="35px"></div>
                                   </div>
                               </div>
                               <div class="col-lg-6"  style="padding-top:10px;">
                                   <div class="services-2 d-flex  hvr-float-shadow" style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                                       <div class="text">
                                           <h4 style="font-size:13px!important;" class="text-white pl-4">Social &amp; Emotional <br>Development </h4>
                                           <!--<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                       </div>
                                       <div class="icon mt-3 pt-1 mr-1 d-flex justify-content-center align-items-center"><img src="images/Emotional.png" width="35px"></div>
                                   </div>
                               </div>
                               <div class="col-lg-6"  style="padding-top:10px;">
                                   <div class="services-2 d-flex  hvr-float-shadow" style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                                       <div class="text">
                                           <h4 style="font-size:13px!important;" class="text-white pl-4">Personal <br>Awareness</h4>
                                           <!--<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                       </div>
                                       <div class="icon mt-3 pt-1 mr-1 d-flex justify-content-center align-items-center"><img src="images/Awareness_2.png" width="35px"></div>
                                   </div>
                               </div>
                               <div class="col-lg-6" style="padding-top:10px;">
                                   <div class="services-2 d-flex hvr-float-shadow" style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                                       <div class="text">
                                           <h4 style="font-size:13px!important;" class="text-white pl-4">Cognitive <br>Development</h4>
                                           <!--<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                       </div>
                                       <div class="icon mt-3 pt-2 mr-1 d-flex justify-content-center align-items-center"><img src="images/Cognitive.png" width="35px"></div>
                                   </div>
                               </div>
                               <div class="col-lg-6" style="padding-top:10px;">
                                   <div class="services-2 d-flex  hvr-float-shadow" style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                                       <div class="text">
                                           <h4 style="font-size:13px!important;" class="text-white pl-4">Speech &amp; Language<br> Development</h4>
                                           <!--<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                       </div>
                                       <div class="icon mt-0 pt-1 mr-1 d-flex justify-content-center align-items-center"><img src="images/Language_2.png" width="35px"></div>
                                   </div>
                               </div>
                               <div class="col-lg-6"  style="padding-top:10px; padding-bottom:11px;">
                                   <div class="services-2 d-flex  hvr-float-shadow" style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                                       <div class="text">
                                           <h4 style="font-size:13px!important;" class="text-white pl-4">Gross &amp; Fine <br>Motor Development</h4>
                                           <!--<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                       </div>
                                       <div class="icon mt-0 pt-1 mr-1 d-flex justify-content-center align-items-center"><img src="images/playtime.png" width="35px"></div>
                                   </div>
                               </div>


                      {{-- <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#!" class="btn btn-primary">Go somewhere</a> --}}

                  </div>

                    </div>
                </div>
            </div>

                  <div class="col-md-6 sa" style="border:0px solid #1EAAF1; padding:0px; margin-left:0px;">
                    <div class="card" style="width:100%;margin-left:0px;">
                        <div class="card-header text-center p-2 bg-primary" style="color:white;font-weight:bold;font-size:20px;">
                            Sparkle Advantages
                        </div>
                        <div class="card-body bg-white">
                          <div class="row ml-2 mt-3">

                            <div class="col-lg-6" style="padding-top:17px;">
                              <div class="services-2 d-flex  hvr-float-shadow" style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                                  <div class="text">
                                      <h4 style="font-size:13px!important;" class="text-white pl-4 pt-2">7 Star Curriculum</h4>
                                  <!--	<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                  </div>
                                  <div class="icon mt-2 pt-1 mr-1 d-flex justify-content-center align-items-center"><img src="images/stars.png" width="35px"></div>
                              </div>
                          </div>

                          <div class="col-lg-6" style="padding-top:17px;">
                            <div class="services-2 d-flex  hvr-float-shadow" style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                                <div class="text">
                                    <h4 style="font-size:13px!important;" class="text-white pt-2 pl-4">Well Trained Teachers</h4>
                                <!--	<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                                </div>
                                <div class="icon mt-2 mr-1 pt-1 d-flex justify-content-center align-items-center"><img src="images/TeacherIcon.png" width="35px"></div>
                            </div>
                        </div>

                        <div class="col-lg-6" style="padding-top:10px;">
                          <div class="services-2 d-flex  hvr-float-shadow"  style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                              <div class="text">
                                  <h4 style="font-size:13px!important;" class="text-white pt-2 pl-4">Story Yoga</h4>
                              <!--	<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                              </div>
                              <div class="icon mt-2 pt-1 mr-1 d-flex justify-content-center align-items-center"><img src="images/boy-kid-yoga-boy-kid-yoga.png" width="35px"></div>
                          </div>
                      </div>

                      <div class="col-lg-6" style="padding-top:10px;">
                        <div class="services-2 d-flex  hvr-float-shadow" style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                            <div class="text">
                                <h4 style="font-size:13px!important;" class="text-white pl-4 pt-2">Parent App</h4>
                            <!--	<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                            </div>
                            <div class="icon pt-1 mt-2 mr-1 d-flex justify-content-center align-items-center"><img src="images/parents.png" width="35px"></div>
                        </div>
                    </div>

                    <div class="col-lg-6" style="padding-top:10px;">
                      <div class="services-2 d-flex  hvr-float-shadow"  style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                          <div class="text">
                              <h4 style="font-size:13px!important; margin-left:1px;" class="text-white pl-3 pt-2">Splashpool & Sandplay</h4>
                          <!--	<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                          </div>
                          <div class="icon pt-1 mt-2 mr-1 d-flex justify-content-center align-items-center"><img src="images/Sandplay.png" width="35px"></div>
                      </div>
                  </div>

                  <div class="col-lg-6" style="padding-top:10px;">
                    <div class="services-2 d-flex  hvr-float-shadow"  style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                        <div class="text">
                            <h4 style="font-size:13px!important;" class="text-white pl-4 pt-2">Smart Box</h4>
                        <!--	<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                        </div>
                        <div class="icon pt-1 mt-2 mr-1 d-flex justify-content-center align-items-center"><img src="images/box.png" width="35px"></div>
                    </div>
                </div>


                <div class="col-lg-6" style="padding-top:10px;">
                  <div class="services-2 d-flex  hvr-float-shadow"  style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">

                      <div class="text">
                          <h4 style="font-size:13px!important;" class="text-white pt-2 pl-4">Daily Worksheet</h4>
                      <!--	<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                      </div>
                      <div class="icon pt-1 mt-2 mr-1 d-flex justify-content-center align-items-center"><img src="images/task.png" width="35px"></div>
                  </div>
              </div>



              <div class="col-lg-6" style="padding-top:10px;">
                <div class="services-2 d-flex  hvr-float-shadow"  style="background-color:#1eaaf1;-webkit-border-radius: 30px;-moz-border-radius: 30px;-ms-border-radius: 30px;border-radius: 30px; width:270px!important;">
                    <div class="text">
                        <h4 style="font-size:13px!important;" class="text-white pt-2 pl-4">Montessori</h4>
                    <!--	<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                    </div>
                    <div class="icon pt-1 mt-2 mr-1 d-flex justify-content-center align-items-center"><img src="images/school.png" width="35px"></div>

                </div>
            </div>







                          </div>











        </div>
    </div>
</section>




    <section class="ftco-section ftco-consult ftco-no-pt ftc-no-pb">

			<div class="container-fluid pt-4" style="margin-left:0px;margin-right:0px;width:100%;">
				<div class="row bg-white pt-3">


                </div>
              </div>
            </div>









        </div>
      </div>






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
    <div  style="padding-top:20px"></div>
    <div class="text-center heading-section ftco-animate"  >
        <h2 class="mb-4 text-center text-primary">Contact Form</h2>

      </div>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url('{{url('images/contact_us.jpeg')}}');" data-stellar-background-ratio="0.5">

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

<!--gallery-->
<section class="ftco-section ftco-no-pb bg-light">
    <div class=" heading-section ftco-animate">
        <h2 class="mb-4 text-center ptitle" >Gallery</h2>

      </div>






    <div class="container">

        <div class="row">


           {{-- /*resize image using css code* --}}

           {{-- style="object-fit:contain;width:100%;height:auto;"  --}}

            @foreach($albums as $album)

           {{-- {{$album->cover_picture}} --}}

            <div class="col-md-6 col-lg-4 ftco-animate">
                {{ app()->call('App\Http\Controllers\AlbumController@imageresize',['src'=>$album->cover_picture])}}

                <div class="blog-entry gallerysec">
                  <a href="{{ url('albums/'.$album->id) }}" class="block-20 p-2 d-flex align-items-end" style="background-color:white;">
                    <img src="{{ url('storage/cover_pictures/'.$album->cover_picture)}}" style="margin-left:3px; width:100%;height:auto;">
                                    {{-- <div class="meta-date text-center p-2">

                                        //   $date1= explode('-',$album->album_date);

                      <span class="day">{{ $date1[0] }}</span>
                      <span class="mos">{{ date("F", mktime(0, 0, 0, $date1[1], 1))}}</span>
                      <span class="yr">{{ $date1[2] }}</span>
                    </div> --}}
                  </a>
                  <div class="text bg-white p-4">
                    <h3 class="heading text-center">{{ $album->album_name }}</h3>
                    <p>{{ str_limit(strip_tags($album->album_description), 120) }}</p>
                    @if (strlen($album->album_description)>120)
                    <div class="d-flex align-items-center mt-4">
                        <p class="mb-0 offset-2"><a href="{{ url('storage/cover_pictures/'.$album->cover_picture) }}" class="btn btn-secondary">Know More <span class="ion-ios-arrow-round-forward"></span></a></p>
                    </div>
                    @endif

                  </div>
                </div>
              </div>
              @endforeach


        </div>


        <div class="row justify-content-center">
            <div class="pagination">
               <a class="btn btn-primary" href="{{ url('gallery') }}">Go To Gallery</a>
             </div>

        </div>



     </div>

     <div class="container-fluid m-0 p-0 mt-4">

        <div class="p-2 bg-white m-0 p-0"></div>

    </div>


</section>


<section class="ftco-section ftco-no-pb bg-light">
    <div class="container">
        <div class="row justify-content-center mb-1 pb-2">
  <div class="col-md-8 text-center heading-section ftco-animate">
    <h2 class="mb-4 text-primary pt-4">Latest Testimonials</h2>
    {{-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> --}}
  </div>
</div>
        <div class="row">


@php
 $test=new App\Http\Controllers\homecontroller;
 $testimonials = $test->testimonial();
@endphp
{{-- {{ $testimonials=App\Http\Controllers\homecontroller::testimonial() }} --}}



            @foreach($testimonials as $testimonial)
            @if($testimonial->type==1)


            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="{{ url('testimonial/'.$testimonial->id) }}"
                        class="block-20 d-flex align-items-end"
                        style="background-image: url('http://rest.sparklekidss.com/storage/testimonials_picture/{{ $testimonial->testimonial_image }}');">
                        <div class="meta-date text-center p-2">
                            <?php
                                      $date= explode('-',$testimonial->testimonial_date);
                                     ?>
                            <span class="yr">{{ $date[2] }}</span>
                            <span class="mos">{{ date("F", mktime(0, 0, 0, $date[1], 1)) }}</span>

                            <span class="day">{{ $date[0] }}</span>

                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading">{{ $testimonial->testimonial_name }}</h3>
                        <p>{{ str_limit(strip_tags($testimonial->testimonial_desc), 120) }}</p>
                        @if(strlen($testimonial->testimonial_desc)>120)
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a
                                        href="{{ url('testimonial/'.$testimonial->id) }}"
                                        class="btn btn-secondary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        @else

            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    @php
                        $link = $testimonial->path;
                        $video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
                        if (empty($video_id[1]))
                        $video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..

                        $video_id = explode("&", $video_id[1]); // Deleting any other params
                        $video_id = $video_id[0];
                    @endphp


                    <iframe width="auto" height="aoto"
                        src={{ 'https://www.youtube.com/embed/'.$video_id }}
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <div class="text bg-white p-4">
                        <h3 class="heading">{{ $testimonial->testimonial_name }}</h3>
                        <p>{{ str_limit(strip_tags($testimonial->testimonial_desc), 120) }}</p>
                        @if(strlen($testimonial->testimonial_desc)>120)
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a
                                        href="{{ url('testimonial/'.$testimonial->id) }}"
                                        class="btn btn-secondary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>

        @endif
             @endforeach



            </div>
            <div class="row justify-content-center pb-4">
                <div class="pagination">
                    {{-- {{ $testimonials->links() }} --}}

                    <a class="btn btn-primary" href="{{ url('testimonial') }}">Go To Testimonial</a>
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

