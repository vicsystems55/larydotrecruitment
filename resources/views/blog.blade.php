@extends('layout')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Larydot Recriutment Blog</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Blog</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Our Blog</h4>
                </div>
                <h1 class="display-3 mb-4">Excellent Sterile Service Technician Job</h1>
                <p class="mb-0"> Work where you want, Our benefits are always working for you. We provide you a Full
                    Circle
                    of Support so you can build the career you want and live your best life.

            </div>
        </div>

        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="img/sterile clean.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2024</p>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                            </div>
                            <a href="#" class="h4">What are the key testing tools for optimal cleaning reprocessing?</a>
                            <p class="my-4">a heightened awareness of airborne or contact contamination has drawn attention
                                 to sterile processing. There is no doubt that dentists across the country are…</p>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="img/sterile 2.JPG" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Feb 2024</p>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 5 Comments</a>
                            </div>
                            <a href="#" class="h4">Why choose Sterile Technician as a career</a>
                            <p class="my-4">Sterile Processing Technicians are responsible for keeping medical supplies
                                and equipment ready to be used by surgeons, doctors, and other medical staff. Sterile
                                Processing ensures that all the tools a hospital or medical office may need are properly
                                cleaned, disinfected, sterilized, in working order, and in their correct location. </p>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="img/travel.jpg" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Dec 2023</p>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 8 Comments</a>
                            </div>
                            <a href="#" class="h4">Exploring the most attractive sterile  service Technician jobs opportunity</a>
                            <p class="my-4"> With the growing demand for healthcare services across the country, talented sterile processing techs are in high demand.
                                One exciting option to consider is sterile processing tech travel jobs, which allow you to take on temporary
                                assignments at healthcare facilities around the country.</p>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
