@extends('layout')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Services</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="containe py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">What We Do</h4>
                </div>
                <h1 class="display-3 mb-4">Our Service Recruitment Expert.</h1>
                <p class="mb-0">We give the best services that you desreve

            </div>
            <div class="container">
                <div class="row g-4 justify-content-start">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img style="height: 320px; object-fit: cover;" src="img/job.jpeg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div style="height:300px;" class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Sterile Technician Job Recruitment</h5>
                                    <p class="mb-4">We places Sterile Service Technician in both Government and private
                                        sectors of the United Kingdom,</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img style="height: 320px; object-fit: cover;" src="img/cleaning2.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div style="height:300px;" class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4"> Sterile Cleaning Services</h5>
                                    <p class="mb-4">We're responsible for carrying out the cleaning, assembly,
                                        inspection, wrapping and stririlisation of surgical instrument</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img style="height: 320px; object-fit: cover;" src="img/domestic.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div style="height:300px;" class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Domestic Cleaning Services</h5>
                                    <p class="mb-4">House cleaning, commercial and office cleaning, end of tenancy
                                        cleaning</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img style="height: 320px; object-fit: cover;" src="img/technician.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div style="height:300px;" class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">CSSD Technician & Healthcare</h5>
                                    <p class="mb-4">clean, prepare, pack and sterilize unsterile instruments,
                                        linen and consumables and to supply sterile requirements to theatre in the hospital.
                                    </p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img style="height: 320px; object-fit: cover;" src="img/admission.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div style="height:300px;" class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Colleges & Universities Admission</h5>
                                    <p class="mb-4">Apply for admission in any country's Colleges and Universities</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img style="height: 320px; object-fit: cover;" src="img/travel.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div style="height:300px;" class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Travel Agent</h5>
                                    <p class="mb-4">We help you and your family relocate to Uk at low cost</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img style="height: 320px; object-fit: cover;" src="img/security.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div style="height:300px;" class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Security Services</h5>
                                    <p class="mb-4">Site security, office security, CCTV security, and event security</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img style="height: 320px; object-fit: cover;" src="img/construction work.png" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div style="height:300px;" class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Construction work </h5>
                                    <p class="mb-4">Residential construction, Commercial construction, Industrial
                                        construction, and Infrastructure construction</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img style="height: 320px; object-fit: cover;" src="img/warehouse.jpeg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div style="height:300px;" class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Warehouse Maintenance </h5>
                                    <p class="mb-4">keeping a warehousing facility in optimal functioning condition</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img style="height: 320px; object-fit: cover;" src="img/healthcare.jpg" class="img-fluid rounded-top w-100" alt="">
                            </div>
                            <div style="height:300px;" class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Healthcare </h5>
                                    <p class="mb-4">We serve patients, families, communities, and populations. </p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Services More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Why Choose Us</h4>
                    </div>
                    <h1 class="display-3 mb-4">Why Choose Us? How we’re different:</h1>
                    <p class="mb-0"> Partner with them to land your dream travel sterile technician assignment faster in
                        On Demand</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-diagnoses fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Speed to top loactions</h5>
                                    <p class="mb-0">Get submitted quickly to top travel nurse jobs and be first in line
                                        for an interview.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-briefcase-medical fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Our Benefits</h5>
                                    <p class="mb-0">Premier benefits package that supports your health, wealth, career
                                        and life.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-hospital-user fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Our Recruiters</h5>
                                    <p class="mb-0">Partner with them to land your dream travel sterile technician
                                        assignment faster in On Demand.,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-users fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Get Reward</h5>
                                    <p class="mb-0">Start earning rewards on your very first assignment.,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


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
                                <img src="img/testimonial1.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">My recruiter, Larydot Recruitment, is kind, compassionate, and
                                thoughtful. they makes
                                sure that all of my concerns are addressed in a timely manner. Larydot goes out of their way
                                every
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
                                <img src="img/testimonial 3.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7"> Larydot Recruitment is one of the best parts about working for
                                Sterile technician job! From the
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
                                <img src="img/testimonial 2.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Lardot Recriutment is the absolute best recruiter I could have ever
                                asked for!
                                they go above and beyond for any and every question or help that I need. they respond
                                at night and on the weekends. They always doing everything they can to help. I have never
                                had
                                such a great relationship with a recruiter as I do with Larrydot. They helped me in more
                                ways than
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


        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <img src="img/logo.JPG" alt="Logo">

                            <p> Larydot recruitment is sterile services recruitment agency, we are community of
                                passionate on sterile service, endoscopy decontamination technician, Cleaning,
                                Colleges and Universities admission, Travel Advisor and Recruitment.
                            </p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Quick Links</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Pages</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> News</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Our Team</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Larydot Services</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> All Services</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> CSSD Recruitment</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> School Addmission</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Sterile Services technician training
                            </a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Cleaning Services</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Travel Advisor</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> 48, Garner Court Dunlop Road,
                                TILBURY ESSEX RM 18 7GB UK</a>
                            <a href="mailto:info@larydotrecruitment.com"><i
                                    class="fas fa-envelope me-2"></i>info@larydotrecruitment.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +447424598599</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +447424598599 </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    @endsection
