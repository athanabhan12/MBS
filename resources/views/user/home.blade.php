@extends('layouts.main')

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="user/assets/img/bg2.png" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Tentang Kami</h2>
            <p style="font-family: 
        Arial, Helvetica, sans-serif; font-weight: bold;">Berdiri sejak Tahun 2017 merupakan Perusahaan IT Solution Provider yang dapat membantu dalam memberikan solusi baik itu berupa hardware, software dan services di suatu perusahaan baik itu instansi pemerintahan maupun perusahaan swasta.
          Selanjutnya Kami Berkembang menjadi Dua Perusahaan CV. Mitra Brata Sujana dan<br>
          PT. Mitra Bisnis Sopyan.</p>

          </div>
        </div>
        <div id="tim">
          <div class="section-header">
            <h2>Tim Kami</h2>
          </div>
          <div class="row">
            @foreach($tim as $item)
            <div class="col-6 col-lg-3">
              <div class="member">
                <div class="pic"><img src="{{ asset('storage/' . $item->image) }}" alt=""></div>
                <div class="details">
                  <h4>{{ $item->nama }}</h4>
                  <span>{{ $item->jabatan }}</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/a__sopyan/"><i class="bi bi-instagram"></i></a>
                    <a href="whatsapp://send?text=Halo mbsonline.id, saya tertarik dengan produk/services : ...&phone=+6285314930607"><i class="bi bi-whatsapp"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= visi&misi Section ======= -->
    <section id="visidanmisi">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 content">
            <h2>Visi</h2>
            <p style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Menjadi perusahaan IT terkemuka yang concern dan terdepan dalam memenuhi kebutuhan  barang dan jasa IT sebagai solusi terkini, ter-integrasi, sinergis, profesional dan berkelanjutan sehingga memuaskan klien dan stakeholder.</p>
          </div>

          <div class="col-lg-6 content">
            <h2>Misi</h2>
            <ul style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">
              <li><i class="fa-solid fa-circle-check" style="margin-right: 10px;"></i>Mengembangkan Produksi IT yang kompetitif</li>
              <li><i class="fa-solid fa-circle-check" style="margin-right: 10px;"></i>Mengedepankan profesionalisme dan teamwork dalam <p style="margin-left: 35px;">menghasilkan layanan yang berkualitas</p></li>
              <li><i class="fa-solid fa-circle-check" style="margin-right: 10px;"></i>Memberikan layanan yang terbaik pada klien</li>
              <li><i class="fa-solid fa-circle-check" style="margin-right: 10px;"></i>Mengembangkan kerjasama dan kemitraan usaha yang saling <p style="margin-left: 35px;">menguntungkan</p></li>
              <li><i class="fa-solid fa-circle-check" style="margin-right: 10px;"></i>Mengembangkan inovasi teknologi terbaik dan terkini dalam setiap <p style="margin-left: 35px;">produk</p></li>
              <li><i class="fa-solid fa-circle-check" style="margin-right: 10px;"></i>Meningkatkan benefit dan nilai tambah bagi klien dan stake holder</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Services</h2>
        </div>
        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
              <h4 class="title"><a href="">Instalasi</a></h4>
              <p class="description">Memberikan Layanan Instalasi untuk semua Perangkat Teknologi Informasi (TI) sehingga instalasi yang terpasang dapat sesuai dengan spesifikasi dan tingkat keamanan yang tinggi.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="fa-regular fa-envelope"></i></div>
              <h4 class="title"><a href="">Konsultasi Produk IT</a></h4>
              <p class="description">Membantu pelanggan untuk memilih kombinasi yang tepat dari merek, jenis, kualitas, garansi, pengembangan, investasi dan infrastruktur. Langkah ini sangat penting dalam membangun suatu Data Center di suatu perusahaan.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <div class="icon"><i class="fa-solid fa-globe"></i></div>
              <h4 class="title"><a href="">Profesional Services</a></h4>
              <p class="description">Memberikan Layanan perbaikan untuk semua product Teknologi Informasi (TI) dengan dukungan team tenaga ahli yang sudah berpengalaman.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="fa-solid fa-shield-halved"></i></div>
              <h4 class="title"><a href="">Maintenance & Contract Services</a></h4>
              <p class="description">Memberikan Layanan Perawatan secara berkala sesuai kebutuhan, sehingga Perangkat IT baik itu hardware maupun software dapat bekerja secara maksimal sesuai dengan yang
                semestinya dan guna menjaga kestabilan system/alat serta pendeteksian secara dini bila akan terjadi gangguan kerusakan.</p>
            </div>
          </div>

        </div>
        <div class="section-header" style="margin-top: 5%;">
          <h2>Platform Partnership</h2>
          <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href=""><img src="assets/img/clients/ecatalog.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="assets/img/clients/MBIZ.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="assets/img/clients/siplah1.png" class="img-fluid" alt="" ></a></div>
            <div class="swiper-slide"><a href=""><img src="assets/img/clients/simpel.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="assets/img/clients/LPSE.jpg" class="img-fluid" alt=""></a></div>  
          </div>
          <div class="swiper-pagination"></div>
        </div>
        </div>

        <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/hp-enterprise.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/dell.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/lenovo.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/ibm.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/nutanix.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/hp.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/asus.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/avita.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/acer.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/axioo.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/aruba.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/cisco.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/mikrotik.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/tp-link.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/microsoft.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/vmware.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/kaspersky.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/sophos.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/epson.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/canon.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/hik.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/dahua.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-between">
            <h2 style="font-size: 42px; margin: 0; padding: 0; font-family:Montserrat, sans-serif; font-weight: 700; color: #0c2e8a;">Project <span style="color: #5CE1E6;">Reference</span></h2>
          </div>
          <hr width="95%" height="100px" style="box-shadow: 0 10px 10px -10px #8c8c8c inset;">
        </div>
        <div class="row portfolio-container" data-aos="fade-up">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <span style="font-weight: bold; font-size: 125%; color: #8c8c8c;">Education :</span>
              <ul style="margin-right: 10px;">
                @foreach($education as $item)

                  <li>{{ $item->nama_education }}</li>

                @endforeach
              </ul>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <span style="font-weight: bold; font-size: 125%; color: #8c8c8c;">Finance & Banking :</span>
              <ul style="margin-right: 10px;">
                @foreach($fb as $item)

                  <li>{{ $item->nama_finance }}</li>

                @endforeach  
              </ul>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <span style="font-weight: bold; font-size: 125%; color: #8c8c8c;">Goverment:</span>
            <ul style="margin-right: 10px;">
                @foreach($goverment as $item)

                <li>{{ $item->nama_goverment }}</li>

                @endforeach
              </ul>
              <span style="font-weight: bold; font-size: 125%; color: #8c8c8c;">Hospital :</span>
              <ul style="margin-right: 10px;">
                @foreach($hospital as $item)
                <li>
                    {{ $item->nama_hospital }}
                </li>
                @endforeach
              </ul>
        </div>
        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <span style="font-weight: bold; font-size: 125%; color: #8c8c8c;">Non Goverment :</span>
          <ul style="margin-right: 10px;">
            @foreach($nongoverment as $item)

            <li>{{ $item->nama_nongoverment }}</li>

            @endforeach
          </ul>
      </div>
  
      </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Kontak Kami</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <address>Jl. Cilengkrang II No. 144, Palasari, Cibiru, Kota Bandung 40615</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Telepon / WhatsApp</h3>
              <p><a href="tel:+155895548855">(022) 6375 6596 / 0853 1493 0607</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:sales@mbsonine.id">sales@mbsonine.id</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.523435047034!2d107.715402!3d-6.919065!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd856424ca77%3A0x7b664d16433f282a!2sMBS%20Corp.!5e0!3m2!1sid!2sid!4v1692857445601!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen></iframe>
      </div>
    </section><!-- End Contact Section -->

  </main>

@endsection