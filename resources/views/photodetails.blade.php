
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
        //  echo request()->route('albumid');;exit;
        @endphp

@php
 $albid =request()->route('albumid');
 $id =request()->route('id');
 $photoobj=new App\Http\Controllers\PhotoController;
 $photoarr = $photoobj->getphotos($albid);
// echo $albid;exit;



//  $finalarr = $albumarr[0];

// var_dump($photoarr);exit;
// echo $id;exit;


$collection = collect($photoarr);

// echo count($collection);

$newcollect = $collection->pluck('id')->toArray();

// var_dump($newcollect);
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


        <div class="heading-section ftco-animate">

            <div class="row mt-3">
                <div class="col-lg-2 col-3 pt-3 pr-0">
                  <span class="float-right previous"><a href="{{ url('photos/'. $prev_item .'/'.$albid)}}" class="btn btn-primary ml-3">Previous</a></span>
                </div>
                <div class="col-lg-8 col-6 text-center">
                  {{-- Logo --}} <h2 class="mb-1 text-center" >Photo Details</h2>
                </div>
                <div class="col-lg-2 col-3 pt-3 pl-0">
                  <span class="float-left next"><a href="{{ url('photos/'.$next_item .'/'.$albid)}}" class="btn btn-primary mr-0">Next</a></span>
                </div>
              </div>





          </div>
            {{-- @dd($photodetails[0]->photo); --}}
            {{-- <div class="row mt-4">
                <div class="col-2 pt-3">
                  <span class="float-right"><a href="{{ url('photos/'. $prev_item .'/'.$albid)}}" class="btn btn-primary ml-3">Previous</a></span>
                </div>
                <div class="col-8 text-center">
                   <h2 class="mb-1 text-center" >Photo Details</h2>
                </div>
                <div class="col-2 pt-3">
                  <span class="float-left"><a href="{{ url('photos/'.$next_item .'/'.$albid)}}" class="btn btn-primary mr-3">Next</a></span>
                </div>
              </div> --}}





                {{-- <h2 class="mb-4 text-center" >Photo Details</h2> --}}

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

               @if(count($photodetails)==0)

                <div class="row items gts justify-content-center align-items-center">
                    <div class="col-lg-12 text-center">
                        <div class="alert alert-primary">
                            <p>Sorry! There is no details for this photo.
                        </div>
                    </div>

                </div>
               @else
               <div class="row py-2 justify-content-center">
               {{-- @foreach($photos as $photo) --}}

               {{-- @dd($photos) --}}

               <div class="item gts col-lg-6 col-md-8 col-12 col-sm text-center">

                   {{-- <a href="http://restschool.hridham.com/storage/photos/{{ $photodetails[0]->photo }}" class="fancylight" data-fancybox-group="light"> --}}
                   {{-- <img class="img-fluid img-responsive" src="{{ url('storage/photos/'.$photodetails[0]->photo) }}" alt="{{ $photodetails[0]->photo }}" height="100px"> --}}
                   <img class="img-fluid img-responsive" src="http://rest.sparklekidss.com/storage/photos/{{ $photodetails[0]->photo }}" alt="{{ $photodetails[0]->photo }}" width="100%" height="100%">
                   {{-- </a> --}}

                     <p>{{ $photodetails[0]->photo_description }}</p>

                </div>




                {{-- @endforeach --}}

                {{-- <img src="{{url('imager/http://restschool.hridham.com/storage/photos/IMG-20200224-WA0016_1586330222.jpg') }}"> --}}
            </div>
            <br/>
                @endif


            <div class="row justify-content-center pb-4">
                <div class="pagination">
                    <a href="{{ url()->previous() }}" class="album bg-primary text-white p-2">Back</a>

                    {{-- {{ $photos->links() }} --}}
                 </div>

            </div>

        </div>
    </div>



    </section>

    @endsection
