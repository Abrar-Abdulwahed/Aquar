@extends('Front.layouts.master')
@section('content')
    @include('Front.partials.nav')
    <div class="container mt-10">
        <div class="row">
            <div class="col-md-6">
                <iframe class="position-relative w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    style="min-height: 350px; border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"
                    frameborder="0"></iframe>
            </div>
            <div class="col-md-6">
                <form method="POST" action="" autocomplete="off">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control rounded-0" id="name"
                                    placeholder="Enter your name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control rounded-0" id="email"
                                    placeholder="Enter your email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                            <label for="subject">Subject</label>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control rounded-0" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 rounded-0 py-2" type="submit">
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
