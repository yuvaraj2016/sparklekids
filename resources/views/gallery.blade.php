
   @extends('master')

   @section('content')


   <section>
    <div class=" heading-section ftco-animate">
        <h2 class="mb-4 text-center ptitle text-primary" >Gallery</h2>

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

    <section class="bg-light">
        <div class=" heading-section ftco-animate">
            <h2 class="mb-4 text-center ptitle text-primary" >Gallery</h2>

          </div>
          <div class="container">

            <div class="row">


           {{-- {{$album->cover_picture}} --}}

               {{-- style="object-fit:contain;width:100%;height:auto;"  --}}

                @foreach($albums as $album)

               {{-- {{$album->cover_picture}} --}}

                <div class="col-md-6 col-lg-3 ftco-animate">
                    {{ app()->call('App\Http\Controllers\AlbumController@imageresize',['src'=>$album->cover_picture])}}

                    <div class="blog-entry">
                      <a href="{{ url('albums/'.$album->id) }}" class="block-20 p-2 d-flex align-items-end" style="background-color:white;">
                        <img src="{{ url('storage/cover_pictures/'.$album->cover_picture)}}" style="margin-left:7px;">
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

        <div class="row justify-content-center">
            <div class="pagination">
                <a class="btn btn-primary" href="{{ url('gallery') }}">Load More</a>
             </div>

        </div>
     </div>

</section>
@endsection
