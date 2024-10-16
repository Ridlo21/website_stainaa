@extends('template')

@section('title')
Tentang
@endsection

@section('konten')


<section class="ftco-section">
    <div class="container-xl">
        <div class="row g-xl-5">
            <div class="col-md-12 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h3 class="mb-1">Sejarah</h3>
                    <p>
                        Di era globalisasi ini, menuntut multi menejemen di berbagai aspek kehidupan, yang dilaksanakan secara professional yang mempunyai karakteristik efektivitas, efisien, dan akuntabilitas serta berkesinambungan. Tuntutan ini juga sangat diperlukan dalam pengelolaan Perguruan Tinggi agar dapat dipertanggungjawabkan secara moral dan spiritual, sehingga segala akitivitas yang dilakukan dapat menunjukkan kualitas dan kuantitas kerja serta integritas tinggi dalam upaya pencepatan daya saing sumber daya manusia dalam segala aspek perkembangan ilmu pengetahuan dan teknologinya.
                    </p>
                    <p>
                        Penyelenggaraan Perguruan Tinggi merupakan bentuk implikasi besar dari transformasi masyarakat dengan harapan mampu beradaptasi dan melakukan antisipasi perubahan yang semakin nyata adanya. Dari semua elemen masyarakat jaman sekarang ini, baik dari pedesaan dan perkotaan, perekonomian yang semakin menjalar mulai dari lokal sampai global, serta perubahan nalar berpikir dan moralitas berbudaya, sudah mulai mengalami pergesaran yang signifikan dari pola pikir dan budaya yang ada.
                    </p>
                    <p>
                    Yayasan Nurul Abror Al-Robbaniyin Alasbuluh Wongsorejo Banyuwangi, telah berusah menjawab tantangan tersebut dengan mendirikan Perguruan Tinggi, dengan harapan agar lulusan di Perguruan Tinggi ini dapat membantu dan mampu menghasilkan lulusan yang memiliki kompetensi dan daya saing global untuk menghadapi tantangan jaman.
                    </p>
                    <p>
                    Dalam usaha mewujudkan hal tersebut diatas, maka Yayasan Nurul Abror Al-Robbaniyin pada tanggal 30 Desember 2020 mengajukan proses alih kelola STAI Istiqlal Buleleng dengan dua prodi, yaitu Pendidikan Agama Islam (PAI) dan Hukum Ekonomi Syari’ah (HES)/ Muamalah. Pengajuan tersebut terus berlanjut mulai dari bawah STAI Istiqlal, kopertais XIV Mataram, Kopertai IV Surabaya, dan sampai pada bagian tingkat Kelembagaan Kerjasama DIKTIS Kemenag pusat.
                    </p>
                    <p>
                    Dengan tekad dan semangat yang kuat dan atas bantuan beberapa pihak serta diberi kemudahan jalan oleh Allah SWT. Maka pada tanggal 5 November 2021 dikeluarkanlah surat Keputusan Menteri Agama (KMA) tentang alih kelola STAI Istiqlal Buleleng menjadi Sekolah Tinggi Agama Islam Nurul Abror Al-Robbaniyin (STAINAA). penyerahan KMA tersebut yang kebetulan diberikan di UNUJA sebagai saudara tua kami, oleh bapak Prof. Dr. Suyitno, M.Ag.
                    </p>
                    <br>
                    <p>
                        Alasbuluh, 15 september 2020
                    </p>
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