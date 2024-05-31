@extends('layout')

@section('content')


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Testimonial</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Testimonial</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title mb-5">
                    <div class="sub-style">
                        <h4 class="sub-title text-white px-3 mb-0">Testimonial</h4>
                    </div>
                    <h1 class="display-3 mb-4">What Clients have to Say</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/testimonial1.JPG" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">My recruiter, Larydot Recruitment, is kind, compassionate, and thoughtful. they makes
                                sure that all of my concerns are addressed in a timely manner. Larydot goes out of their way every
                                Friday to call and make sure that I have had a good week.
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">John Strawady</h5>
                                <p class="mb-2 text-white-50">London, UK</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/testimonial 3.JPG" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7"> Larydot Recruitment is one of the best parts about working for Sterile technician job! From the
                                first day I talked to her on the phone, I knew this was what I wanted to do.
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">Susan Abraham</h5>
                                <p class="mb-2 text-white-50">Bedfordshire, UK</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="img/testimonial 2.JPG" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Lardot Recriutment is the absolute best recruiter I could have ever asked for!
                                they go above and beyond for any and every question or help that I need. they respond
                                at night and on the weekends. They always doing everything they can to help. I have never had
                                such a great relationship with a recruiter as I do with Larrydot. They helped me in more ways than
                                I can even count.
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">Stephen Ryan</h5>
                                <p class="mb-2 text-white-50">England</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

@endsection
