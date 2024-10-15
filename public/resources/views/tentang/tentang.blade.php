@extends('template')

@section('title')
Tentang
@endsection

@section('konten')


<section class="ftco-intro ftco-no-pt ftco-no-pb img" style="background-image: url(plugin/images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container-xl py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="mt-5">
                            <h1 class="mb-4"></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light py-5">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="carousel-testimony">
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4 msg ">VISI, MISI, MOTTO</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img shadow-lg" style="background-image: url(plugin/images/v.png)"></div>
                                    <div class="pl-3 tx">
                                        <p class="name">VISION</p>
                                        <span class="position">about stainna</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4 msg">SEJARAH</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img shadow-lg" style="background-image: url(plugin/images/p.png)"></div>
                                    <div class="pl-3 tx">
                                        <p class="name">HISTORICAL</p>
                                        <span class="position">of Stainaa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4 msg">PROFIL PIMPINAN</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img shadow-lg" style="background-image: url(plugin/images/h.png)"></div>
                                    <div class="pl-3 tx">
                                        <p class="name">LEADERS</p>
                                        <span class="position">of Stainaa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection