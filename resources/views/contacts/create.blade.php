@extends('layouts.master')
@section('title','create contact')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Contact</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-map"></i>
                            <h3>Our Address</h3>
                            <p>Sabo GRA Tsaunin Kura Str Opp Life Impact,Kaduna Nigeria</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>@jprhemasalvation@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+2349029671915</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>


                <div class="row gy-4 mt-1">

                    <div class="col-lg-6 ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.672818070776!2d7.463901673691182!3d10.447516365177146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104d4bda4e7d0673%3A0xa8f1a4cde59eebf1!2sSABO%20GRA%20U%2FBORO!5e0!3m2!1sen!2sng!4v1708178980730!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- End Google Maps -->

                    <div class="col-lg-6">
                        <form action="#" method="post" role="form" class="">
                            @if (isset($errors) && $errors->any())
                                @foreach ($errors->all() as $error)

                                @endforeach
                            @endif
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @csrf
                            <div class="row gy-4">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"  placeholder="Your Name" required>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror

                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror " name="phone" id="phone" placeholder="Your phone" required>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror " name="subject" id="subject" placeholder="Subject" required>

                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <textarea class="form-control @error('message') is-invalid @enderror " name="message" rows="5" placeholder="Message" required></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                @enderror

                            </div>
                            <div class="my-3">
                                <div class="error-message"></div>

                            </div>
                            <div class="text-center "><button type="submit" class="btn btn-warning">Send Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
