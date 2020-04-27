
    <!-- END nav -->
    @extends('master')

    @section('content')

    <style>

        @media only screen and (max-width:480px)
        {

            .previous
            {
                margin-left:-12px!important;
                padding-left:0px!important;
                float:left!important;
                margin-top:8px!important;
                /* display:none; */

            }

            .next
            {
                margin-top:8px!important;


            }
        }

    </style>




    <section>


@php
$id =request()->route('id');
 $albumobj=new App\Http\Controllers\AlbumController;
 $albumarr = $albumobj->getalbums();




//  $finalarr = $albumarr[0];

// var_dump($albumarr);exit;
// echo $id;exit;


$collection = collect($albumarr);

// echo count($collection);

$newcollect = $collection->pluck('id')->toArray();

// echo count($newcollect);

$current_array_val = array_search($id, $newcollect);

$next_array_val = $current_array_val+1;

$prev_array_val = $current_array_val-1;

if($next_array_val==count($newcollect))
{
    // echo "yes";exit;
    $next_item = $newcollect[0];
}
else {
    $next_item = $newcollect[$next_array_val];
}

if($prev_array_val<0)
{
    $prev_item = $newcollect[0];
}
else {
    $prev_item = $newcollect[$prev_array_val];
}



// $next_array_val = $newcollect[$next_array_val];


// echo $next_item;

// echo $prev_item;
// exit;


@endphp

{{-- @dd($albumarr); --}}

        <div class="heading-section ftco-animate">
            {{-- @dd($albumdata); --}}
            <div class="row mt-3">
                <div class="col-lg-2 col-3 pt-3 pr-0">
                  <span class="float-right previous"><a href="{{ url('albums/'.$prev_item)}}" class="btn btn-primary ml-3">Previous</a></span>
                </div>
                <div class="col-lg-8 col-6 text-center">
                  {{-- Logo --}} <h2 class="mb-1 text-center" >{{ $albumdata[0]->album_name}} - Photos</h2>
                </div>
                <div class="col-lg-2 col-3 pt-3 pl-0">
                  <span class="float-left next"><a href="{{ url('albums/'.$next_item)}}" class="btn btn-primary mr-0">Next</a></span>
                </div>
              </div>





          </div>
          {{-- <ul class="pagination">
          <li class="previous"><a href="{{ url('albums/'.$prev_item)}}" class="btn btn-primary float-left">Previous</a></li>
            <li class="next justify-content-end"><a href="{{ url('albums/'.$next_item)}}" class="btn btn-primary justify-content-end">Next</a></li>
          </ul> --}}
          {{-- <div class="row">
            <div class="col-sm-1"><a href="{{ url('albums/'.$prev_item)}}" class="btn btn-primary float-left">Previous</a></div>
            <div class="col-sm-10 d-sm-none"></div>
            <div class="col-sm-1" style="float:right;"><a href="{{ url('albums/'.$next_item)}}" class="btn btn-primary justify-content-end">Next</a></div>
       </div> --}}



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

                <div class="row items gts justify-content-center align-items-center" style="padding-bottom:140px!important;">
                    <div class="col-lg-12 text-center" style="padding-top:80px;">
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

               <div class="item gts col-lg-3 col-md-4 col-12 col-sm text-center pt-4">

                {{ app()->call('App\Http\Controllers\PhotoController@imageresize',['src'=>$photo->photo])}}

               <a href="{{ url('photos/'.$photo->id.'/'.$id) }}" class="fancylight" data-fancybox-group="light">
               <img class="img-fluid img-responsive" src="{{ url('storage/photos/'.$photo->photo) }}" alt="{{ $photo->photo }}" style="width:auto;height:auto;">
               </a>

                 <p>{{ $photo->photo_description }}</p>
                 {{-- <a href="{{ url('photos/'.$photo->id) }}" class="album bg-primary text-white p-2">Know More</a> --}}

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
