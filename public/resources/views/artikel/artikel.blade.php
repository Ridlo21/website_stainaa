@extends('template')

@section('title')
Artikel
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

<section class="ftco-section ftco-no-pt mt-5 bg-light">
    <div class="container-xl">
        <div class="row mb-3">
            <div class="col-md-12 heading-section" data-aos="fade-up" data-aos-duration="1000">
                <h3 style="margin-bottom: -5px; font-weight: 700;">Semua Artikel</h3>
                <hr style="margin-top: 5px; border: 1.5px solid;">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="100">
                    <a href="{{ url('/artikel_detail') }}" class="block-20 img d-flex align-items-end"
                        style="background-image: url('plugin/images/b1.jpg');">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span></p>
                        <h3 class="heading mb-3"><a href="{{ url('/artikel_detail') }}">New Home Sales Picked Up in December</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <a href="{{ url('/artikel_detail') }}" class="block-20 img d-flex align-items-end"
                        style="background-image: url('plugin/images/b2.jpg');">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span></p>
                        <h3 class="heading mb-3"><a href="{{ url('/artikel_detail') }}">New Home Sales Picked Up in December</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">
                    <a href="{{ url('/artikel_detail') }}" class="block-20 img d-flex align-items-end"
                        style="background-image: url('plugin/images/b3.jpg');">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span></p>
                        <h3 class="heading mb-3"><a href="{{ url('/artikel_detail') }}">New Home Sales Picked Up in December</a mb-3>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">
                    <a href="{{ url('/artikel_detail') }}" class="block-20 img d-flex align-items-end"
                        style="background-image: url('plugin/images/b4.jpg');">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span></p>
                        <h3 class="heading mb-3"><a href="{{ url('/artikel_detail') }}">New Home Sales Picked Up in December</a mb-3>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="100">
                    <a href="{{ url('/artikel_detail') }}" class="block-20 img d-flex align-items-end"
                        style="background-image: url('plugin/images/b1.jpg');">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span></p>
                        <h3 class="heading mb-3"><a href="{{ url('/artikel_detail') }}">New Home Sales Picked Up in December</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <a href="{{ url('/artikel_detail') }}" class="block-20 img d-flex align-items-end"
                        style="background-image: url('plugin/images/b2.jpg');">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span></p>
                        <h3 class="heading mb-3"><a href="{{ url('/artikel_detail') }}">New Home Sales Picked Up in December</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">
                    <a href="{{ url('/artikel_detail') }}" class="block-20 img d-flex align-items-end"
                        style="background-image: url('plugin/images/b3.jpg');">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span></p>
                        <h3 class="heading mb-3"><a href="{{ url('/artikel_detail') }}">New Home Sales Picked Up in December</a mb-3>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">
                    <a href="{{ url('/artikel_detail') }}" class="block-20 img d-flex align-items-end"
                        style="background-image: url('plugin/images/b4.jpg');">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span></p>
                        <h3 class="heading mb-3"><a href="{{ url('/artikel_detail') }}">New Home Sales Picked Up in December</a mb-3>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection