@extends('layout')

@section('content')



    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    {{-- <h4 class="sub-title px-3 mb-0">Get Started Today.</h4> --}}
                </div>
                <h1 class="display-3 mb-4">Get Started.</h1>


            </div>
        </div>

        <div class="container py-5">
            <h4>Vaccancies</h4>
            <hr>

            <div class="row">
                <div class="col-md-6 col-lg-4 py-2">
                    <div style="height: 235px;" class="card card-body d-flex flex-column justify-content-between">
                        <div class="1">
                            <h6>Job title:  Accounts Assistant</h6>
                            <h6> Salary:  Up to 26k</h6>
                            <h6>Working hours: PART TIME (c20 hours)</h6>
                            <h6>Location:  Salford</h6>
                            <h6>Job type: Permanent</h6>
                        </div>
                        <div class="2">
                            <a href="/application?id=1" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 py-2">
                    <div style="height: 235px;" class="card card-body d-flex flex-column justify-content-between">
                        <div class="1">
                            <h6>Job title:  CTO</h6>
                            <h6> Salary:  </h6>
                            <h6>Working hours: PART TIME (c20 hours)</h6>
                            <h6>Location:  Salford</h6>
                            <h6>Job type: Permanent</h6>
                        </div>
                        <div class="2">
                            <a href="/application?id=2" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 py-2">
                    <div style="height: 235px;" class="card card-body d-flex flex-column justify-content-between">
                        <div class="1">
                            <h6>Job title:  Hair Stylist</h6>
                            <h6> Salary:  </h6>
                            <h6>Working hours: PART TIME (c20 hours)</h6>
                            <h6>Location:  Salford</h6>
                            <h6>Job type: Permanent</h6>
                        </div>
                        <div class="2">
                            <a href="/application?id=3" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- Blog End -->
@endsection
