<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Larydot Recruitment - {{$title??'Home'}}</title>
    <link rel="icon" type="image/x-icon" href="/img/logo only1.ico">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- seo -->
    <meta name="description" content="Larydot Recruitment specializes in sterile technician decontamination, ensuring infection prevention and equipment cleanliness.">

    <meta property="og:title" content="Larydot Recruitment - {{$title??'Home'}}">
    <meta property="og:description" content="Larydot Recruitment specializes in sterile technician decontamination, ensuring infection prevention and equipment cleanliness.">
    <meta property="og:image" content="{{asset('/')}}img/og-image.jpg">
    <meta property="og:url" content="https://larydotrecruitment.com">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Larydot Recruitment">

    <meta name="keywords" content="decontamination, sterile technician, infection prevention, sterile facilities, equipment cleanliness, pathogen removal, hygiene standards, sterilization technologies, microorganism destruction, bacteria elimination, virus control, advanced decontamination processes, sterile environment, infection control.">
    <link rel="canonical" href="https://larydotrecruitment.com">

    <!-- seo end -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/') }}lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/') }}css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('/') }}css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-light me-4"><i
                            class="fas fa-map-marker-alt text-primary me-2"></i>Locate us</a>
                    <a href="#" class="text-light me-4"><i
                            class="fas fa-phone-alt text-primary me-2"></i>+447424598599</a>
                    <a href="mailto:info@larydotrecruitment.com" class="text-light me-0"><i
                            class="fas fa-envelope text-primary me-2"></i>info@larydotrecruitment.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>


    <!-- Nav Header -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">

                <img src="{{ asset('/') }}img/logo.JPG" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/about-us" class="nav-item nav-link">About</a>
                    <a href="/services" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="/appointments" class="dropdown-item">Get in Touch</a>
                            <a href="/features" class="dropdown-item">Features</a>
                            <a href="/blog" class="dropdown-item">Our Blog</a>
                            <a href="/our-team" class="dropdown-item">Our Team</a>
                            <a href="/testimonial" class="dropdown-item">Testimonial</a>

                        </div>
                    </div>
                    <a href="/contact-us" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="/vacancies"
                    class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Apply</a>
            </div>
        </nav>
    </div>
    <!-- Nav Header End -->

    @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <img src="{{ asset('/') }}img/logo2.png" alt="Logo">

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
                            <a href=""><i class="fas fa-angle-right me-2"></i> Sterile Services technician
                                training </a>
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

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i
                                    class="fas fa-copyright text-light me-2"></i>Larydot Recruitment</a>, All right
                            reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="http://www.ethommdigital.com.ng/">Ethom Digital</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/') }}lib/wow/wow.min.js"></script>
        <script src="{{ asset('/') }}lib/easing/easing.min.js"></script>
        <script src="{{ asset('/') }}lib/waypoints/waypoints.min.js"></script>
        <script src="{{ asset('/') }}lib/owlcarousel/owl.carousel.min.js"></script>


        <!-- Template Javascript -->
        <script src="{{ asset('/') }}js/main.js"></script>

</body>

</html>
