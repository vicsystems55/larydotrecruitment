@extends('layout')

@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style mb-4">
                        <h4 class="sub-title text-white px-3 mb-0">Contact Us</h4>
                    </div>
                    <p class="mb-0 text-black-50"> Contact Larydot Recruitment today, lets help you take your carrer to the next level</p>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5 col-xl-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                        <h2 class="display-5 text-white mb-2">Get in Touch</h2>
                        <p class="mb-4 text-white">Do you need our service? send us message and we will contact you right away.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent border border-white" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent border border-white" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control bg-transparent border border-white" id="phone" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent border border-white" id="project" placeholder="Project">
                                        <label for="project">Which servive</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent border border-white" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent border border-white" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-light text-primary w-100 py-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-transparent rounded">
                            <div class="d-flex flex-column align-items-center text-center mb-4">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                                <h4 class="text-dark">Addresses</h4>
                                <p class="mb-0 text-white">5 Harbour House
                                    Coldharbour Lane
                                    Rainham, Essex
                                    RM13 9YB UK</p>
                            </div>
                            <div class="d-flex flex-column align-items-center text-center mb-4">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                                <h4 class="text-dark">Mobile</h4>
                                <p class="mb-0 text-white">+447424598599</p>

                            </div>

                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-envelope-open fa-2x text-primary"></i></div>
                                <h4 class="text-dark">Email</h4>


                                <p class="mb-0 text-white">info@larydotrecruitment.com</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="d-flex justify-content-center mb-4">
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="rounded h-100">
                            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=5%20Harbour%20House%20%20Coldharbour%20Lane%20Rainham,%20Essex%20RM13%209YB+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps vehicle tracker</a></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

@endsection
