@extends('master')

   @section('content')


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

@endsection
