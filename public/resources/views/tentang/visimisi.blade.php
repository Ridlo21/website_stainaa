@extends('template')

@section('title')
Tentang
@endsection

@section('konten')


<section class="ftco-section">
    <div class="container-xl">
        <div class="row g-xl-5">
            <div class="col-md-12 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h3 class="mb-1">VISI</h3>
                <p>
                Visi STAINAA adalah menjadi Perguruan Tinggi unggul, inovatif, berkeadaban dan berkarakter dalam pengembangan ilmu keislaman, pengetahuan umum dan teknologi.
                </p>
            </div>
            <div class="col-md-12 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h3 class="mb-1">MISI</h3>
                <ol>
                    <li>Menyelenggarakan tridharma perguruan tinggi yang unggul dalam mengembangkan ilmu keislaman, pengetahuan umum dan teknologi.</li>
                    <li>Menciptakan lulusan yang berintelektualitas tinggi, berbudi luhur, cerdas spiritual, cerdas emosional, dan mampu bersaing secara global, serta berkarakter ahlussunnah wal jama’ah.</li>
                    <li>Menyebarluaskan ilmu keislaman untuk mewujudkan masyarakat yang berkeadaban dalam kerangka kebangsaan.</li>
                    <li>Mengembangkan ilmu keislaman yang responsif terhadap kebutuahan masyarakat plurar dan mampu menjadi basis pengembangan masyarakat berkeadaban.</li>
                </ol>
            </div>
            <div class="col-md-12 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h3 class="mb-1">MOTTO</h3>
                <p>Kesopanan lebih tinggi nilainya dari pada kecerdasan</p>
            </div>

        </div>
    </div>
</section>

<script>
    $(function () {
        $(".vision").on('click', function () {
            window.location.href="{{url('tetangVisiMisi')}}/"+id+"/1";
        })
    })
</script>
@endsection