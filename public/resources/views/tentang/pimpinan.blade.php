@extends('template')

@section('title')
Tentang
@endsection

@section('konten')


<section class="ftco-section">
    <div class="container-xl">
        <div class="row g-xl-5">
            <div class="col-md-12 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb">
    <div class="overlay"></div>
    <div class="container-xl">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="agent">
                    <div class="img" style="height: 400px;">
                        <img src="plugin/images/ra.png" class="img-fluid" alt="Colorlib Template">
                    </div>
                    <div class="desc">
                        <p class="h-info"><span class="position">Ketua</span></p>
                        <h3><a href="properties.html">K. Indi Aunullah, SS. S.Fil.</a></h3>
                        <a href="#" class="btn btn-more rounded">More Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section  ftco-no-pb">
    <div class="overlay"></div>
    <div class="container-xl">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="agent">
                    <div class="img" style="height: 400px;">
                        <img src="plugin/images/pak_imam.jpg" class="img-fluid" alt="Colorlib Template">
                    </div>
                    <div class="desc">
                        <p class="h-info"><span class="position">Pembantu Ketua I</span></p>
                        <h3><a href="properties.html">Drs. H. Imam Bustomi, M.Pd.</a></h3>
                        <a href="#" class="btn btn-more rounded">More Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <div class="agent">
                    <div class="img" style="height: 400px;">
                        <img src="plugin/images/ust.jpg" class="img-fluid" alt="Colorlib Template">
                    </div>
                    <div class="desc">
                        <p class="h-info"><span class="position">Pembantu Ketua II</span></p>
                        <h3><a href="properties.html">Kholid Al-Madani, S.Kom, M.Pd.</a></h3>
                        <a href="#" class="btn btn-more rounded">More Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="agent">
                    <div class="img" style="height: 400px;">
                        <img src="plugin/images/pak_s.jpg" class="img-fluid" alt="Colorlib Template">
                    </div>
                    <div class="desc">
                        <p class="h-info"><span class="position">Pembantu Ketua III</span></p>
                        <h3><a href="#">Suyono, S.Sos.I; M.Pd.</a></h3>
                        <a href="#" class="btn btn-more rounded">More Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(function() {
        $(".vision").on('click', function() {
            window.location.href = "{{url('tetangVisiMisi')}}/" + id + "/1";
        })
    })
</script>
@endsection