@extends('layouts.main')
@section('content')

<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h1 class="edica-page-title" data-aos="fade-up">Contact</h1>
                @if (isset($sent))
                    <h3 data-aos="fade-up">{{ $sent }}</h3>
                @endif
                <section class="edica-contact">
                    <div class="row">
                        <div class="col-md-8 contact-form-wrapper">
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <h5 data-aos="fade-up">Contact form</h5>
                                <div class="row">
                                    <div class="form-group col-md-6" data-aos="fade-up">
                                        <label for="name">NAME</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6" data-aos="fade-up">
                                        <label for="phone">PHONE</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <label for="email">EMAIL</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email address" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <label for="subject">SUBJECT</label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="{{ old('subject') }}">
                                        @error('subject')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up" data-aos-delay="200">
                                        <label for="message">MESSAGE</label>
                                        <textarea name="message" id="message" rows="9" class="form-control">{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up" data-aos-delay="200">
                                        <div class="g-recaptcha" data-sitekey="6LdtGvIoAAAAANxZ3-rpseqzMew7q5ZnCqe5T4u2"></div>
                                        @error('g-recaptcha-response')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up" data-aos-delay="200">
                                        <button type="submit" class="btn btn-warning btn-lg" data-aos="fade-up" data-aos-delay="300">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4 contact-sidebar" data-aos="fade-left">
                            <h5>Contact me</h5>
                            <p>Have any question? Want to offer cooperation or job? Don't hesitate to contact me!</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>

@endsection
