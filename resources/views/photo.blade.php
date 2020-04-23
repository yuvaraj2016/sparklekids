
    <!-- END nav -->
    @extends('master')

    @section('content')



    <section>



        <div class="heading-section ftco-animate">
            {{-- @dd($albumdata); --}}


                <h2 class="mb-4 text-center" >{{ $albumdata[0]->album_name}} - Photos</h2>

          </div>

            <!--<div class="portfolio-menu mt-2 mb-4">
               <ul>
                  <li class="btn btn-outline-dark active" data-filter="*">All</li>
                  <li class="btn btn-outline-dark" data-filter=".gts">Childran</li>
                  <li class="btn btn-outline-dark" data-filter=".lap">Course</li>
                  <li class="btn btn-outline-dark text" data-filter=".selfie">Teachers</li>
               </ul>
            </div>-->
            {{-- <div class="portfolio-item row"> --}}
             <!--  <div class="item gts col-lg-3 col-md-4 col-6 col-sm ">

               {{-- <a href="{{ url('gallery')}}" class="fancylight" data-fancybox-group="light"> --}}
                  <img class="img-fluid" src="images/image_6.jpg" alt="">

                  <div class="pad">Course</div>
                  </a>
               </div>
               <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                  {{-- <a href="{{ url('gallery')}}" class="fancylight" data-fancybox-group="light"> --}}
                  <img class="img-fluid" src="images/image_1.jpg" alt="">
                  <div class="pad">Childran</div>
                  </a>
               </div>
               <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                  {{-- <a href="{{ url('gallery')}}" class="fancylight " data-fancybox-group="light"> --}}
                  <img class="img-fluid" src="images/image_2.jpg" alt="">
                  <div class="pad">Sports</div>

                  </a>
               </div>
               <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                  {{-- <a href="{{ url('gallery')}}" class="fancylight " data-fancybox-group="light"> --}}
                  <img class="img-fluid" src="images/image_3.jpg" alt="">
                  <div class="pad">Teacher</div>
                  </a>
               </div>-->
               {{-- <div class="container my-4" style="margin-bottom:50px;"> --}}

               @if(count($photos)==0)

                <div class="row items gts justify-content-center align-items-center">
                    <div class="col-lg-12 text-center">
                        <div class="alert alert-primary">
                            <p>Sorry! There is no Media in this album.
                        </div>
                    </div>

                </div>
               @else
               <div class="row py-2">
               @foreach($photos as $photo)

               {{-- @dd($photos) --}}
               @if ($photo->type==1)

               <div class="item gts col-lg-3 col-md-4 col-6 col-sm text-center pt-4">

                {{ app()->call('App\Http\Controllers\PhotoController@imageresize',['src'=>$photo->photo])}}

               <a href="{{ url('photos/'.$photo->id) }}" class="fancylight" data-fancybox-group="light">
               <img class="img-fluid img-responsive" src="{{ url('storage/photos/'.$photo->photo) }}" alt="{{ $photo->photo }}" height="100px">
               </a>

                 <p>{{ $photo->photo_description }}</p>
                 <a href="{{ url('photos/'.$photo->id) }}" class="album bg-primary text-white p-2">Know More</a>

            </div>

               @else
               <div class="item gts col-lg-3 col-md-4 col-6 col-sm text-center pt-4">

                @php
                        $link = $photo->path;
                        $video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
                        if (empty($video_id[1]))
                            $video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..

                        $video_id = explode("&", $video_id[1]); // Deleting any other params
                        $video_id = $video_id[0];
                @endphp


                <iframe width="auto" height="aoto" src={{ 'https://www.youtube.com/embed/'.$video_id  }} frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>

               @endif






                @endforeach

                {{-- <img src="{{url('imager/http://restschool.hridham.com/storage/photos/IMG-20200224-WA0016_1586330222.jpg') }}"> --}}
            </div>
            <br/>
                @endif


            <div class="row justify-content-center">
                <div class="pagination">
                    {{ $photos->links() }}
                 </div>

            </div>

        </div>
    </div>



    </section>

    @endsection
