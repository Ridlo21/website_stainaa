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

<script>
    $(function () {
        $(".vision").on('click', function () {
            window.location.href="{{url('tetangVisiMisi')}}/"+id+"/1";
        })
    })
</script>
@endsection