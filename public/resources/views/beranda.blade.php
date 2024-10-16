@extends('template')

@section('title')
STAINAA | Beranda
@endsection

@section('konten')
<section class="slider-hero">
    <div class="overlay"></div>
    <div class="hero-slider">
        <div class="item">
            <div class="work">
                <div class="img d-flex align-items-center js-fullheight"
                    style="background-image: url(plugin/images/bg_1.jpg);">
                    <div class="container-xl">
                        <!-- <div class="row justify-content-center">
        <div class="col-md-10 col-xl-6">
         <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
          <h2>Your Property Is Our Priority</h2>
          <p class="mb-5">A small river named Duden flows by their place and supplies it
           with the necessary regelialia. It is a paradisematic country, in which
           roasted parts of sentences fly into your mouth.</p>
          <p><a href="#" class="btn btn-primary px-5 py-3">Learn More <span
             class="ion ion-ios-arrow-round-forward"></span></a></p>
         </div>
        </div>
       </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="work">
                <div class="img d-flex align-items-center justify-content-center js-fullheight"
                    style="background-image: url(plugin/images/bg_2.jpg);">
                    <div class="container-xl">
                        <!-- <div class="row justify-content-center">
        <div class="col-md-10 col-xl-6">
         <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
          <h2>Let Your Home Be Unique &amp; Stylist</h2>
          <p class="mb-5">A small river named Duden flows by their place and supplies it
           with the necessary regelialia. It is a paradisematic country, in which
           roasted parts of sentences fly into your mouth.</p>
          <p><a href="#" class="btn btn-primary px-5 py-3">Learn More <span
             class="ion ion-ios-arrow-round-forward"></span></a></p>
         </div>
        </div>
       </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="work">
                <div class="img d-flex align-items-center justify-content-center js-fullheight"
                    style="background-image: url(plugin/images/bg_3.jpg);">
                    <div class="container-xl">
                        <!-- <div class="row justify-content-center">
        <div class="col-md-10 col-xl-6">
         <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
          <h2>Modern House Make Better Life</h2>
          <p class="mb-5">A small river named Duden flows by their place and supplies it
           with the necessary regelialia. It is a paradisematic country, in which
           roasted parts of sentences fly into your mouth.</p>
          <p><a href="#" class="btn btn-primary px-5 py-3">Learn More <span
             class="ion ion-ios-arrow-round-forward"></span></a></p>
         </div>
        </div>
       </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jumlah mahasiswa, mahasiswa, dosen dan kuliah dan ngaji  -->
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="ftco-search">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap d-flex justify-content-center mb-5">
                            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap mt-5">

                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="v-pills-nextgen-tab">
                                    <div class="search-property-1">
                                        <div class="row g-0">
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4 border-0">
                                                    <label for="#">Mahasiswa</label>
                                                    <div class="counter-wrap" data-aos="fade-up" data-aos-delay="100"
                                                        data-aos-duration="1000">
                                                        <div class="text">
                                                            <span class="d-block number gradient-text"><b><span id="count2" class="counter h4 fw-bold" data-count="210">0</span></b></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Mahasiswi</label>
                                                    <div class="counter-wrap" data-aos="fade-up" data-aos-delay="100"
                                                        data-aos-duration="1000">
                                                        <div class="text">
                                                            <span class="d-block number gradient-text"><span id="count2" class="counter h4" data-count="210">0</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Dosen</label>
                                                    <div class="counter-wrap" data-aos="fade-up" data-aos-delay="100"
                                                        data-aos-duration="1000">
                                                        <div class="text">
                                                            <span class="d-block number gradient-text"><span id="count2" class="counter h4" data-count="210">0</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Pegawai</label>
                                                    <div class="counter-wrap" data-aos="fade-up" data-aos-delay="100"
                                                        data-aos-duration="1000">
                                                        <div class="text">
                                                            <span class="d-block number gradient-text"><span id="count2" class="counter h4" data-count="210">0</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group d-flex w-100 border-0">
                                                    <div class="form-field w-100 align-items-center d-flex">
                                                        <input type="submit" value="Kuliah & Ngaji"
                                                            class="align-self-stretch form-control btn btn-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

<!-- tentang -->
<section class="ftco-section ftco-about-section">
    <div class="container-xl">
        <div class="row g-xl-5" style="height: 500px !important;">
            <div class="col-md-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <div class="img w-100" style="background-image: url(plugin/images/ra.png); background-position: center 10px;"></div>
            </div>
            <div class="col-md-6 heading-section" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1000">
                <h2 class="mb-4">Tentang STAINAA</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.</p>
            </div>
        </div>
    </div>
</section>

<!-- pendukung pendukung -->
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row g-1 mb-1">
                    <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100" data-aos-duration="1000">
                        <a href="#" class="services">
                            <div class="icon"><span class="flaticon-architect"></span></div>
                            <div class="text">
                                <h2>INVOKASI</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200" data-aos-duration="1000">
                        <a href="#" class="services">
                            <div class="icon"><span class="flaticon-house"></span></div>
                            <div class="text">
                                <h2>NGAJI</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300" data-aos-duration="1000">
                        <a href="#" class="services">
                            <div class="icon"><span class="flaticon-apartment"></span></div>
                            <div class="text">
                                <h2>AKREDITASI</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400" data-aos-duration="1000">
                        <a href="#" class="services">
                            <div class="icon"><span class="flaticon-factory"></span></div>
                            <div class="text">
                                <h2>KAMPUS MERDEKA</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Berita -->
<section class="ftco-section ftco-no-pb bg-light">
    <div class="container-xl">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                <!-- <span class="subheading">Our Blog</span> -->
                <h2>Rilis Berita</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="100">
                    <a href="blog-single.html" class="block-20 img d-flex align-items-end"
                        style="background-image: url('plugin/images/b1.jpg');">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span></p>
                        <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <a href="blog-single.html" class="block-20 img d-flex align-items-end"
                        style="background-image: url('plugin/images/b2.jpg');">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span></p>
                        <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">
                    <a href="blog-single.html" class="block-20 img d-flex align-items-end"
                        style="background-image: url('plugin/images/b3.jpg');">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span></p>
                        <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a mb-3>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">
                    <a href="blog-single.html" class="block-20 img d-flex align-items-end"
                        style="background-image: url('plugin/images/b4.jpg');">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span></p>
                        <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a mb-3>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pengumuman -->
<section class="ftco-section testimony-section bg-light">
    <div class="container-xl">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                <!-- <span class="subheading">Testimonial</span> -->
                <h2 class="mb-3">Pengumuman</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="carousel-testimony">
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="name">Roger Scott</p>
                                <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="name">Roger Scott</p>
                                <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="name">Roger Scott</p>
                                <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="name">Roger Scott</p>
                                <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="name">Roger Scott</p>
                                <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dewan Dosen -->
<section class="ftco-section ftco-agent ftco-no-pb">
    <div class="overlay"></div>
    <div class="container-xl">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section heading-section-white" data-aos="fade-up"
                data-aos-duration="1000">
                <!-- <span class="subheading">Meets Our Agents</span> -->
                <h2 class="mb-4">Pimpinan Kami</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="agent">
                    <div class="img">
                        <img src="plugin/images/ra.png" class="img-fluid" alt="Colorlib Template">
                    </div>
                    <div class="desc">
                        <p class="h-info"><span class="position">Ketua</span></p>
                        <h3><a href="properties.html">K. Indi Aunullah, SS. S.Fil.</a></h3>
                        <ul class="ftco-social">
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-google"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="agent">
                    <div class="img">
                        <img src="plugin/images/pak_imam.jpg" class="img-fluid" alt="Colorlib Template">
                    </div>
                    <div class="desc">
                        <p class="h-info"><span class="position">Pembantu Ketua I</span></p>
                        <h3><a href="properties.html">Drs. H. Imam Bustomi, M.Pd.</a></h3>
                        <ul class="ftco-social">
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-google"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <div class="agent">
                    <div class="img">
                        <img src="plugin/images/ust.jpg" class="img-fluid" alt="Colorlib Template">
                    </div>
                    <div class="desc">
                        <p class="h-info"><span class="position">Pembantu Ketua II</span></p>
                        <h3><a href="properties.html">Kholid Al-Madani, S.Kom, M.Pd.</a></h3>
                        <ul class="ftco-social">
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-google"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="agent">
                    <div class="img">
                        <img src="plugin/images/pak_s.jpg" class="img-fluid" alt="Colorlib Template">
                    </div>
                    <div class="desc">
                        <p class="h-info"><span class="position">Pembantu Ketua III</span></p>
                        <h3><a href="properties.html">Suyono, S.Sos.I; M.Pd.</a></h3>
                        <ul class="ftco-social">
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-google"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection