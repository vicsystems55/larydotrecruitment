@extends('layout')

@section('content')

<style>

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;

    }
    h1, h2, h3 {
        text-align: center;
    }
    label {
        display: block;
        margin: 15px 0 5px;
    }
    input, select, textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
</style>

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



        <div  class="container bg-white">


            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="alert alert-warning">{{ $error }}</p>
                @endforeach
            @endif

            @if (Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
            @endif


            <div class="container">

                <h2>Registration Form</h2>

                <form>
                    <!-- Personal Information Section -->
                    <h3>Personal Information</h3>
                    <label for="forename">Forename</label>
                    <input type="text" id="forename" name="forename">

                    <label for="middleName">Middle Name</label>
                    <input type="text" id="middleName" name="middleName">

                    <label for="surname">Surname</label>
                    <input type="text" id="surname" name="surname">

                    <label for="otherNames">Other Name Used</label>
                    <input type="text" id="otherNames" name="otherNames">

                    <label for="title">Title</label>
                    <select id="title" name="title">
                        <option value="mr">Mr</option>
                        <option value="mrs">Mrs</option>
                        <option value="ms">Ms</option>
                        <option value="miss">Miss</option>
                    </select>

                    <label for="dob">D.O.B</label>
                    <input type="date" id="dob" name="dob">

                    <label for="birthNationality">Birth Nationality</label>
                    <input type="text" id="birthNationality" name="birthNationality">

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">

                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">

                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>

                    <label for="address">Address</label>
                    <input type="text" id="address" name="address">

                    <label for="postcode">Postcode</label>
                    <input type="text" id="postcode" name="postcode">

                    <label for="position">Position Applying For</label>
                    <input type="text" id="position" name="position">

                    <label for="speciality">Speciality</label>
                    <input type="text" id="speciality" name="speciality">

                    <!-- Next of Kin Section -->
                    <h3>Next of Kin / Emergency Contact Details</h3>
                    <label for="nokName">Name</label>
                    <input type="text" id="nokName" name="nokName">

                    <label for="nokEmail">Email</label>
                    <input type="email" id="nokEmail" name="nokEmail">

                    <label for="nokRelationship">Relationship</label>
                    <input type="text" id="nokRelationship" name="nokRelationship">

                    <label for="nokMobile">Mobile Number</label>
                    <input type="tel" id="nokMobile" name="nokMobile">

                    <label for="nokAddress">Address</label>
                    <input type="text" id="nokAddress" name="nokAddress">

                    <!-- Eligibility to Work in the UK Section -->
                    <h3>Eligibility to Work in the UK</h3>
                    <label for="passportNumber">Passport Number</label>
                    <input type="text" id="passportNumber" name="passportNumber">

                    <label for="nationality">Your Nationality</label>
                    <input type="text" id="nationality" name="nationality">

                    <label for="passportExpiry">Passport Expiry Date</label>
                    <input type="date" id="passportExpiry" name="passportExpiry">

                    <label for="visa">Visa Type</label>
                    <input type="text" id="visa" name="visa">

                    <label for="visaExpiry">Visa Expiry Date</label>
                    <input type="date" id="visaExpiry" name="visaExpiry">

                    <!-- Add more sections as necessary following the same structure -->

                    <button class="mt-3 btn btn-primary btn-lg btn-block col-12" type="submit">Submit</button>
                </form>
            </div>



        </div>
    </div>
    <!-- Blog End -->





@endsection
