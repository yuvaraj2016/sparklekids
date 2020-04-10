<head>
	<!--  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-4 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                            <span class="text">ludhay3@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">NO 7. Mcn Nagar,1 St Street, Thoraipakkam, Chennai-97.</span>

					    </div>
					    <div class="col-md-2 offset-1 pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">9790751611</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>-->


<style>
    ul li{
        list-style: none;
    }
img .img {
    background-color: skyblue;
    border-radius: 15px;
}

.nav-item a  {

  color: black;

  font-size: 17px;
}


.nav-item a:hover {

background-color:#1eaaf1;
border-radius: 73px;
color:red;

}
.ss a:hover{
    color:orange;
}


    </style>











    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light " id="ftco-navbar">
	    <div class="container d-flex align-items-center">
        <a class="navbar-brand col-md-4 " href="{{ url('/')}}"><img src="images/sparklelogo.jpg" class="img" width="350px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse col-md-4" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <!--  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Page 1-1</a></li>
                      <li><a href="#">Page 1-2</a></li>
                      <li><a href="#">Page 1-3</a></li>
                    </ul>
                  </li>-->
             <!--   <li class="nav-item active dropdown"><a href="{{ url('/index')}}" class="nav-link pl-0 dropdown-toggle">Home</a>
                    <ul class="dropdown-menu" style="width:300px">
                        <li style="text-align:center"><a href="{{ url('/about_sparkle_kidss')}}" style="color:black;">About SparkleKidss</a></li>
                        <li style="text-align:center"><a href="{{ url('/curriculam_summary')}}" style="color:black;">Curriculum summary</a></li>
                        <li style="text-align:center"><a href="{{ url('/contact_form')}}" style="color:black;">Contact form to send email</a></li>
                      </ul>
                </li>-->
                <li class="nav-item active" style="border-radius:1px solid"><a href="#" class="nav-link "><span class="icon-home"></span> Home</a></li>
	        	<li class="nav-item"><a href="{{ url('/testimonial')}}" class="nav-link"><span class="icon-users"></span> Testimonial</a></li>
                <li class="nav-item"><a href="{{ url('/gallery')}}" class="nav-link"> <span class="icon-photo"></span> Gallery</a></li>

	       <!-- 	<li class="nav-item"><a href="courses.html" class="nav-link">Courses</a></li>
	        	<li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>-->
	        </ul>
          </div>

         <!-- <div class="col-md-1 offset-1 pr-4 d-flex topper align-items-center">
            <ul>
                <li class=""><a href="tel:+9790751611"><span class="icon-map"></span> 9790751611</a></li>
                <li><a href="mailto:ludhay3@gmail.com"><span class="icon-map"></span> ludhay3@gmail.com</a></li>

                            </ul>

          </div>-->

          <ul class="col-md-4 offset-1">
            <li class="ss"><a href="tel:+9790751611"><span class="icon-phone2 "></span> 9790751611</a></li>
            <li class="ss"><a href="mailto:sparklekidsschn@gmail.com"> <span class="icon-envelope "></span> sparklekidsschn@gmail.com</a></li>

                        </ul>

            <!-- <div class="col-md-2 offset-1 pr-4 d-flex topper align-items-center">
            <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>

         <span class="text" style="color:gray">9790751611</span>
        </div>-->
       <!-- <div class="col-md-2 pr-4 d-flex topper align-items-center">
            <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
            <span class="text" style="color:gray">ludhay3@gmail.com</span>
        </div>-->
	    </div>
      </nav>
<script>
//Click event handler for nav-items
$('.nav-item').on('click',function(){

//Remove any previous active classes
$('.nav-item').removeClass('active');

//Add active class to the clicked item
$(this).addClass('active');
});
</script>
</head>

