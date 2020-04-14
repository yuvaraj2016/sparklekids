
    <!-- END nav -->
    @extends('master')

    @section('content')



    <section>



        <div class="heading-section ftco-animate">
            {{-- @dd($photodetails[0]->photo); --}}


                <h2 class="mb-4 text-center" >Photo Details</h2>

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

               <div class="item gts col-lg-6 col-md-8 col-6 col-sm text-center">

                   {{-- <a href="http://restschool.hridham.com/storage/photos/{{ $photodetails[0]->photo }}" class="fancylight" data-fancybox-group="light"> --}}
                   {{-- <img class="img-fluid img-responsive" src="{{ url('storage/photos/'.$photodetails[0]->photo) }}" alt="{{ $photodetails[0]->photo }}" height="100px"> --}}
                   <img class="img-fluid img-responsive" src="http://restschool.hridham.com/storage/photos/{{ $photodetails[0]->photo }}" alt="{{ $photodetails[0]->photo }}" width="100%" height="100%">
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
