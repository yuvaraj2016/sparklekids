<!-- END nav -->
@extends('master')

@section('content')
<!--  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Testimonial</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Testimonial <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>-->

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4 text-primary">Latest Posts</h2>
                {{-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> --}}
            </div>
        </div>
        <div class="row">

            @foreach($testimonials as $testimonial)
                {{-- @dd($albums) --}}
                @if($testimonial->type==1)


                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="{{ url('testimonial/'.$testimonial->id) }}"
                                class="block-20 d-flex align-items-end"
                                style="background-image: url('http://restschool.hridham.com/storage/testimonials_picture/{{ $testimonial->testimonial_image }}');">
                                <div class="meta-date text-center p-2">
                                    <?php
                                              $date= explode('-',$testimonial->testimonial_date);
                                             ?>
                                    <span class="day">{{ $date[0] }}</span>
                                    <span
                                        class="mos">{{ date("F", mktime(0, 0, 0, $date[1], 1)) }}</span>
                                    <span class="yr">{{ $date[2] }}</span>
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
                {{ $testimonials->links() }}
            </div>

        </div>


    </div>

    </div>

</section>
@endsection
