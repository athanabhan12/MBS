@extends('layouts.detail')

@section('content')

<section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{ asset('storage/' . $san_switch_user->image) }}" alt="">
              </div>
              
              <div class="swiper-slide">
                <img src="{{ asset('storage/' . $san_switch_user->image1) }}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('storage/' . $san_switch_user->image2) }}" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="portfolio-info">
            <h2>Keterangan</h2>
            <p>
              {{$san_switch_user->deskripsi}}
            </p>
          </div>
        </div>
        <div class="col-12 col-lg-8 portfolio-description portfolio-info">
            <h2>Spesifikasi</h2>
            <p>
              {{ $san_switch_user->spesifikasi }}
            </p>
          </div>
      </div>
    </div>
  </section><!-- End Portfolio Details Section -->

@endsection