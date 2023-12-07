@extends('layouts.main')

@section('content')

<main id="main">
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($software_user as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $item->nama_produk }}</h4>
                <p>{{ $item->spesifikasi }}</p>
                <a href="/assets/img/Produk/CCTV/CCTV Dahua.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dahua Technology Starlight 4MP Bullet Camera"><i class="bx bx-plus"></i></a>
                <a href="{{ url('/software_user/detail_software_user') }}/{{ $item->id }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>

  </main>

@endsection