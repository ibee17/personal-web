@extends('layouts.public.app')
@section('content')
    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large">Welcome to my portofolio</h1>
                        <a class="btn-solid-lg page-scroll" href="/about">Discover</a>
                        <a class="btn-outline-lg page-scroll" href="/contact"><i class="fas fa-user"></i>Contact
                            Me</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- About-->
    <div id="about" class="basic-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-container first">
                        <h2>Halo, saya Muhammad Irfan Bahri,</h2>
                        <p>Dan saya suka membuat situs web yang indah dan efisien untuk pelanggan saya. Saya senang
                            menjalani seluruh proses bersama pelanggan mulai dari konsep, desain, lalu pengembangan dan
                            peluncuran
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container second">
                        <div class="time">2019 - PRESENT</div>
                        <h6>Freelance Web Developer</h6>
                        <p>Working happily on my own web projects</p>
                        <div class="time">2018 - 2019</div>
                        <h6>Lead Web Developer</h6>
                        <p>Beautiful project for a major digital agency</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container third">
                        <div class="time">2017 - 2018</div>
                        <h6>Senior Web Designer</h6>
                        <p>Inhouse web designer for ecommerce firm</p>
                        <div class="time">2016 - 2017</div>
                        <h6>Junior Web Designer</h6>
                        <p>Junior web designer for small web agency</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of about -->

    <!-- Client List -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Beberapa client yang bekerja sama dengan saya.</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    @if (\App\Models\Client::all()->isEmpty())
                        <h1 class="text-center">Client belum ada</h1>
                    @else
                        @foreach (\App\Models\Client::all() as $client)
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <p class="testimonial-text">{{ $client->kesan }}</p>
                                    <div class="details">
                                        <div class="rounded-image mr-3">
                                            <img src="{{ asset('assets/public/images/' . $client->image) }}"
                                                alt="Foto Profil" class="rounded-image">
                                        </div>
                                        <div class="text">
                                            <div class="testimonial-author">{{ $client->nama }}</div>
                                            <div class="occupation">{{ $client->perusahaan }} - {{ $client->jabatan }}</div>
                                        </div> <!-- end of text -->
                                    </div> <!-- end of details -->
                                </div> <!-- end of card-body -->

                                <style>
                                    .rounded-image {
                                        width: 50px;
                                        /* Atur ukuran sesuai kebutuhan */
                                        height: 50px;
                                        /* Atur ukuran sesuai kebutuhan */
                                        border-radius: 50%;
                                        /* Membuat gambar menjadi bulat */
                                        overflow: hidden;
                                        /* Pastikan gambar yang melebihi border-radius tidak tumpah */
                                    }

                                    .rounded-image img {
                                        width: 100%;
                                        /* Memastikan gambar diisi seluruh ruang gambar */
                                        height: 100%;
                                        /* Memastikan gambar diisi seluruh ruang gambar */
                                        object-fit: cover;
                                        /* Memastikan gambar diisi dengan benar */
                                    }
                                </style>

                            </div> <!-- end of card -->
                            <!-- End of Card -->
                        @endforeach
                    @endif

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of client list -->


    <!-- Services -->
    <div id="services" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Offered services</h2>
                    <p class="p-heading">Desain dan pengembangan web telah menjadi kebutuhan saya selama lebih dari 5 tahun.
                        Selama waktu itu saya menyadari bahwa saya dapat membantu startup dan perusahaan dengan layanan
                        berikut</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="far fa-gem"></i>
                        <h4>DESIGN</h4>
                        <p>Proyek online yang sukses dimulai dengan desain yang bagus. Hal ini memberikan landasan yang
                            kokoh bagi pembangunan di masa depan dan memungkinkan pertumbuhan jangka panjang</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas fa-code"></i>
                        <h4>DEVELOPMENT</h4>
                        <p>Saya dapat membuat kode desain saya sendiri atau bahkan menggunakan desain pelanggan sebagai
                            dasar. Fokus saya adalah menghasilkan kode bersih yang terstruktur dengan baik untuk keandalan
                        </p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas fa-tv"></i>
                        <h4>BASIC SEO</h4>
                        <p>saya dapat mengatur proyek Anda untuk menggunakan prinsip-prinsip dasar SEO yang akan mendorong
                            proyek Anda ke halaman pertama di mesin pencari dan menghemat uang iklan</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of services -->


    <!-- Details -->
    <div class="split">
        <div class="area-1">
        </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space -->
        <div class="area-2 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Text Container -->
                        <div class="text-container">
                            <h2>Mengapa Bekerja Dengan Saya</h2>
                            <p>Saya seorang komunikator yang hebat dan senang menginvestasikan waktu yang diperlukan untuk
                                memahami masalah pelanggan dengan sangat baik</p>
                            <h5>DESIGN TOOLS</h5>
                            <p>Alat desain favorit saya adalah Photoshop dan Illustrator tetapi saya juga bisa membuat
                                desain di Figma, Sketch, dan Adobe XD</p>
                            <h5>DEVELOPMENT SKILLS</h5>
                            <p>Saya akrab dan bekerja setiap hari dengan HTML, CSS, JavaScript, Bootstrap, dan kerangka
                                kerja modern lainnya</p>

                            <div class="icons-container">
                                <img src="{{ asset('assets/public/images/details-icon-photoshop.png') }}" alt="alternative">
                                <img src="{{ asset('assets/public/images/details-icon-illustrator.png') }}"
                                    alt="alternative">
                                <img src="{{ asset('assets/public/images/details-icon-html.png') }}" alt="alternative">
                                <img src="{{ asset('assets/public/images/details-icon-css.png') }}" alt="alternative">
                                <img src="{{ asset('assets/public/images/details-icon-bootstrap.png') }}" alt="alternative">
                                <img src="{{ asset('assets/public/images/details-icon-javascript.png') }}"
                                    alt="alternative">
                            </div><!--end of icons-container-->
                        </div> <!-- end of text-container -->
                        <!-- end of text container -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of area-2 -->
    </div> <!-- end of split -->
    <!-- end of details -->

    <!-- Contact -->
    <div id="contact" class="form-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact details</h2>
                    <p class="p-heading">Untuk semua jenis proyek online jangan ragu untuk menghubungi saya. Cara tercepat
                        adalah mengirimkan pesan Anda kepada saya menggunakan email berikut <a class="blue no-line"
                            href="">imeldy46@gmail.com</a></p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Contact Form -->
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Project details</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->
@endsection
