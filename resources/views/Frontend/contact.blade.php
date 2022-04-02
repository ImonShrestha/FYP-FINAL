@extends('frontend.layouts.main')

@section('main-container')
        <hr>
        <div class="container">
            <div class="col-lg-6">
                <div class="contact-form-info">
                    <h3>Get in touch</h3>
                    <div class="contact-form-info-details">
                        <div class="segments">
                            <h2><i class="fa-solid fa-user"></i> Name</h2>
                            <p>Imon Shrestha</p>
                        </div>
                        <div class="segments">
                            <h2><i class="fa-solid fa-envelope"></i> Email</h2>
                            <p>imonshrestha9@gmail.com</p>
                        </div>
                        <div class="segments">
                            <h2><i class="fa-solid fa-phone"></i> Phone</h2>
                            <p>+9779861494599</p>
                        </div>
                        <div class="segments">
                            <h2><i class="fa-solid fa-location-dot"></i> Address</h2>
                            <p>Lazimpat, Kathmandu</p>
                        </div>
                    </div>
                    <div class="social-links-contact">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 contact-form">
                <h3>Contact Us</h3>
                @if(Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                            {{ Session::get('message_sent') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="name" name="name" class="form-control" id="inputName" placeholder="Name">
                    </div>
                    <div class="form-group ">
                        <label for="inputEmail">Email Address</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" name="address"class="form-control" id="inputAddress" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message Here</label>
                        <textarea class="form-control" name="msg" id="message" rows="6" placeholder="Message Here"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.8848824666225!2d85.32222751498814!3d27.72084038278629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191084dc50af%3A0xd8a59125e5b20f2f!2sMeeting%20Point%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1648901744275!5m2!1sen!2snp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    @endsection   