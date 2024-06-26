@extends('layout')

@section('content')



    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    {{-- <h4 class="sub-title px-3 mb-0">Get Started Today.</h4> --}}
                </div>
                <h1 class="display-3 mb-4">Get Started. </h1>


            </div>
        </div>



        <div style="max-width: 650px;" class="container bg-white">


            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="alert alert-warning">{{ $error }}</p>
                @endforeach
            @endif

            @if (Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
            @endif


            <form action="/apply" method="post">
                @csrf
                <div class="row g-3">
                    <div class="col-lg-12 col-xl-6">
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control  border " id="name"
                                placeholder="Your Name">
                            <label for="name">Your Name</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control  border " id="email"
                                placeholder="Your Email">
                            <label for="email">Your Email</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="form-floating">
                            <input type="phone" name="phone" class="form-control  border " id="phone"
                                placeholder="Phone">
                            <label for="phone">Your Phone</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="form-floating">
                            <select name="position" id="position" class="form-control bg-white border">
                                <option value="">Select Position</option>
                                <option value="Chief Technology Officer" {{request()->id == '2'?'selected':''}}>CTO</option>
                                <option value="Hair Stylist"  {{request()->id == '3'?'selected':''}}>Hair Stylist</option>
                                <option value="Accounts Assistant"  {{request()->id == '1'?'selected':''}}>Accounts Assistant</option>

                            </select>
                            <label for="position">Position</label>



                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" name="subject" class="form-control  border " id="subject"
                                placeholder="Subject">
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control  border " name="message" placeholder="Leave a message here" id="message"
                                style="height: 160px"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary  w-100 py-3">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Blog End -->
@endsection
