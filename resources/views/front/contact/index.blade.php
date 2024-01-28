@extends('front.layout.template')

@push('meta-seo')
<meta name="description" content="Blog Faqih Nur Fahmi berisi tulisan berkaitan dengan ilmu islam berdasarkan al-quran dan sunnah dengan pemahaman sahabat dan salafus shalih">
<meta name="keyword" content="kontak faqih nur fahmi, kontak blog islam,kontak kajian islam, kontak kajian sunnah, kontak kitab ulama, fatwa ulama, nasihat islam, hijrah">
<meta property="og:title" content="kontak Faqih Nur Fahmi">
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:side_name" content="kontak Faqih Nur Fahmi Blog">
<meta property="og:description" content="kontak Blog Faqih Nur Fahmi berisi tulisan berkaitan dengan ilmu islam berdasarkan al-quran dan sunnah dengan pemahaman sahabat dan salafus shalih">
<meta property="og:image" content="{{ asset('front/img/logo.jpg') }}">
@endpush

@section('title', 'Contact - Faqih Nur Fahmi Blog')

@section('content')
    <!-- Page content-->
    <div class="container" data-aos="flip-down" data-aos-easing="ease-out-cubic" data-aos-duration="3000" data-aos-delay="500">
        <div class="row mb-4 shadow border">
            <div class="col-lg-6 bg-light" >
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15863.800546793975!2d106.8550448315708!3d-6.270288147386152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f2f10c0698e7%3A0xfe0c6705042e7f2a!2sJl.%20Masjid%20Al-Munir%20No.74%2C%20RT.12%2FRW.3%2C%20Makasar%2C%20Kec.%20Makasar%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013570!5e0!3m2!1sen!2sid!4v1703344674313!5m2!1sen!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="map mt-2"></iframe>
            </div>
            <div class="col-lg-6 bg-light rounded-full" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="500">
                <form name="contact-form">
                    <h2 class="text-center">Contact Me</h2>
                    <hr>
                    <div class="mb-3">
                        <label for="name" class="form-label"><b>Name</b></label>
                        <input type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><b>Email address</b></label>
                        <input type="email" class="form-control"  id="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label"><b>Message</b></label>
                        <textarea class="form-control" id="message" rows="5"></textarea>
                    </div>
                    <button class="btn btn-primary mb-2" type="submit" onclick="sendMessage()">Submit</button>
                </form>
            </div>
        </div>
    </div>
    {{-- @include('front.layout.side-widget') --}}
@endsection
