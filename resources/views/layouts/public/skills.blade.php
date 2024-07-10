@extends('layouts.public.app')
@section('content')
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Skills</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Details -->
    <div class="split">
        <div class="area-1"></div>
        <!--end of area-1 on same line and no space between comments to eliminate margin white space-->
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
                        </div><!--end of text-container-->
                        <!--end of text container-->

                    </div><!--end of col-->
                </div><!--end of row-->
            </div><!--end of container-->
        </div><!--end of area-2-->
    </div><!--end of split-->
    <!--end of details-->
@endsection
