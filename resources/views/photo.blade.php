
    <!-- END nav -->
    @extends('master')

    @section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Gallery</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   <!-- <section class="ftco-gallery">
    	<div class="container-wrap">
            <div class="text-center heading-section ftco-animate">
                <h2 class="mb-4" >Gallery</h2>

              </div>
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/course-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
                    </div>
                    <div class="col-md-3 ftco-animate">
						<a href="images/image_5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_5.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
                    </div>
                    <div class="col-md-3 ftco-animate">
						<a href="images/image_6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_6.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
                    </div>
                    <div class="col-md-3 ftco-animate">
						<a href="images/person_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/person_1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>-->


    <section>
        <div class=" heading-section ftco-animate">
            <h2 class="mb-4 text-center" >Gallery</h2>

          </div>
        <div class="container">

            <!--<div class="portfolio-menu mt-2 mb-4">
               <ul>
                  <li class="btn btn-outline-dark active" data-filter="*">All</li>
                  <li class="btn btn-outline-dark" data-filter=".gts">Childran</li>
                  <li class="btn btn-outline-dark" data-filter=".lap">Course</li>
                  <li class="btn btn-outline-dark text" data-filter=".selfie">Teachers</li>
               </ul>
            </div>-->
            <div class="portfolio-item row">
             <!--  <div class="item gts col-lg-3 col-md-4 col-6 col-sm ">

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

               @foreach($albums as $album)
               {{-- @dd($albums) --}}
               <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="{{  }}"
                <div style="text-align:center"><b>{{ $album->album_name }}</b></div>
                   <a href="http://restschool.hridham.com/storage/cover_pictures/{{ $album->cover_picture }}" class="fancylight" data-fancybox-group="light">
                   <img class="img-fluid" src="http://restschool.hridham.com/storage/cover_pictures/{{ $album->cover_picture }}" alt="">
                   </a>
                   {{-- <address> --}}
                     <p>{{ $album->album_description }}</p>

                  {{-- </address> --}}
                </div>
                @endforeach
                {{-- <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <div style="text-align:center"><b>Childran</b></div>
                  <a href="images/image_4.jpg" class="fancylight" data-fancybox-group="light">
                  <img class="img-fluid" src="images/image_4.jpg" alt="">
                  </a>
                  <address>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic</p>

                 </address>
               </div>
               <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <div style="text-align:center"><b>Sports</b></div>
                  <a href="images/image_5.jpg" class="fancylight " data-fancybox-group="light">
                  <img class="img-fluid" src="images/image_5.jpg" alt="">
                  </a>
                  <address>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic</p>

                                      </address>
               </div>
               <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <div style="text-align:center"><b>Course</b></div>
                <a href="images/teacher-7.jpg" class="fancylight " data-fancybox-group="light">
                <img class="img-fluid" src="images/course-6.jpg" alt="">
                </a>
                <address>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic</p>

                                      </address>
             </div>
               <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <div style="text-align:center"><b>Teacher</b></div>
                  <a href="images/course-2.jpg" class="fancylight " data-fancybox-group="light">
                  <img class="img-fluid" src="images/course-2.jpg" alt="">
                  </a>
                  <address>
<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic</p>

                  </address>
               </div> --}}
             <!--  <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
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
            </div>

            <div class="row justify-content-center">
                <div class="pagination">
                    {{ $albums->links() }}
                 </div>

            </div>
         </div>

    </section>
    <br><br>
    @endsection
    <!--<button class="btn btn-primary offset-5" type="button" ><a href="{{ url('/')}}" style="color:black">load more</a></button>
    -->
	<!--	<section class="ftco-section">
    	<div class="container">
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
    </section>-->


