@extends('layout.main')

<link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsif.css') }}">


@section('container')
<section class="contact_section layout_padding">
      <div class="container px-0">
        <div class="heading_container heading_center">
          <h2 class="">Contact Us</h2>
        </div>
      </div>
      <div class="container container-bg">
        <div class="row">
          <div class="col-lg-7 col-md-6 px-0">
            <div class="map_container">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4199.877611773446!2d119.64826392493434!3d-3.790301144446647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d944cffd05dcc6f%3A0xa42bbdc334202806!2sSinar%20Elektronik!5e0!3m2!1sid!2sid!4v1704259625809!5m2!1sid!2sid"
                  width="600"
                  height="300"
                  frameborder="0"
                  style="border: 0; width: 100%; height: 100%"
                  allowfullscreen
                  zoom="20"
                ></iframe>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 px-0 hello">
            <!-- <form action="#">
              <div>
                <input type="text" placeholder="Name" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex">
                <button>SEND</button>
              </div>
            </form> -->
            <h1>LANGSUNG<br />HUBUNGI VIA<br />WHATSAPP</h1>
            <div class="">
              <a href="https://wa.me/6282214013333" target="_blank"
                ><button>WHATSAPP</button></a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection