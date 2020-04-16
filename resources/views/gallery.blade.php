
    <!-- END nav -->
    @extends('master')

    @section('content')


    {{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Gallery</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section> --}}
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
            <h2 class="mb-4 text-center ptitle text-primary" >Gallery</h2>

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


