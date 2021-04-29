@extends('layout')

{{-- @section('title', 'Beranda') --}}

@section('beranda')
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="hero__caption">
                                <h1>Web Pajak <span>Orang Pribadi</span> dan Badan UMKM</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--? Categories Area Start -->
    <div class="categories-area section-padding30" id="pengertian-npwp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        {{-- <span>Our Services</span> --}}
                        <h2>Apa itu Nomor Pokok Wajib Pajak (NPWP) ?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        {{-- <div class="cat-icon">
                            <span class="flaticon-shipped"></span>
                        </div> --}}
                        <div class="cat-cap">
                            <h5><a href="services.html">Pengertian</a></h5>
                            <p>Menurut Direktorat Jenderal Pajak, NPWP adalah nomor yang diperoleh wajib pajak dari dirjen pajak guna kepentingan administrasi pajak.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        {{-- <div class="cat-icon">
                            <span class="flaticon-ship"></span>
                        </div> --}}
                        <div class="cat-cap">
                            <h5><a href="services.html">NPWP Pribadi</a></h5>
                            <p>NPWP Pribadi diperuntukan untuk setiap orang yang memiliki penghasilan dan berumur diatas 18 tahun.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        {{-- <div class="cat-icon">
                            <span class="flaticon-plane"></span>
                        </div> --}}
                        <div class="cat-cap">
                            <h5><a href="services.html">NPWP Badan</a></h5>
                            <p>NPWP Badan itu dimiliki oleh perusahaan atau badan usaha yang memiliki penghasilan di Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Area End -->

    <!--? About Area Start -->
    <div class="about-low-area padding-bottom" id="fungsi-manfaat">
        <div class="container">
            <div class="row text-justify">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            {{-- <span>Fungsi & Manfaat NPWP</span> --}}
                            <h2>Fungsi NPWP</h2>
                        </div>
                        <ul class="unordered-list">
                            <li>Sebagai bentuk ketertiban dalam administrasi perpajakan.</li>
                            <li>Sebagai Indentitas wajib pajak.</li>
                            <li>Menjaga kepatuhan perpajakan. Karena Direktorat Jenderal Pajak (DJP) dapat lebih mudah mengakses masyarakat yang telah memiliki NPWP. 
                                Segala hal yang terkait dengan dokumen perpajakan seperti laporan SPT, baik SPT tahunan maupun SPT Masa wajib menyertakan NPWP.</li>
                            <li>Menjadi persyaratan dalam layanan publik, seperti pembuatan paspor, kredit bank dan lelang, 
                                serta persyaratan karyawan bagi beberapa perusahaan.</li>
                        </ul>
                        {{-- <a href="about.html" class="btn">More About Us</a> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>Manfaat NPWP</h2>
                        </div>
                        <ul class="unordered-list">
                            <li>Dengan memiliki NPWP, wajib pajak dapat terhindar dari sanksi hukum. 
                                Wajib Pajak yang tidak melaksanakan ketentuan UU KUP akan dikenakan sanksi pidana sesuai Pasal 39.
                            </li>
                            <li>Dengan memiliki NPWP, Wajib Pajak akan terhindar dari kenaikan PPh 
                                Pasal 21 sebesar 20%. Hal tersebut sesuai dengan Pasal 21 ayat (5) 
                                Undang-Undang Nomor 36 Tahun 2008 (Tentang Pajak Penghasilan) 
                                Tidak ada NPWP yang lebih tinggi yang diberlakukan bagi Wajib Pajak, 
                                yaitu 20% lebih tinggi dari tarif pajak yang berlaku bagi Wajib Pajak 
                                yang memiliki NPWP. Terkait Pasal 22 PPh dan Pasal 23 PPh, tarif pajak 
                                yang berlaku bagi orang yang tidak memiliki NPWP dinaikkan menjadi 100%.
                            </li>
                        </ul>
                        {{-- <a href="about.html" class="btn">More About Us</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!--? Tata cara pembuatan NPWP Start -->
    <div class="categories-area section-padding30" id="cara-membuat-npwp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        {{-- <span>Our Services</span> --}}
                        <h2>Bagaimana Cara Membuat NPWP?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            {{-- <span class="color: #ff5f13"><h1>1</h1></span> --}}
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Pelayanan <em>Offline</em></a></h5>
                            <p>
                                Orang Pribadi atau badan usaha dapat langsung datang ke Kantor 
                                Pelayanan Pajak (KPP) yang wilayah kerjanya meliputi tempat tinggal 
                                atau domisili atau tempat kegiatan usaha Wajib Pajak.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            {{-- <span class="color: #ff5f13"><h1>2</h1></span> --}}
                        </div>
                        <div class="cat-cap">
                            <h5><a href="https://ereg.pajak.go.id/daftar" target="__blank">Pelayanan <em>Online</em></a></h5>
                            <ul class="unordered-list text-justify">
                                <li>
                                    Orang pribadi atau badan usaha dapat mendaftar melalui laman 
                                    <a href="https://ereg.pajak.go.id/daftar" target="__blank" class="generic-btn link">INI</a>
                                </li>
                                <li>Orang pribadi atau badan usaha dapat mendaftar melalui 4 bank 
                                    BUMN yakni :
                                </li>
                            </ul>
                            <ol class="ordered-list text-justify">
                                <li>Bank Mandiri (Aplikasi Mandiri Pajakku)</li>
                                <li>BRI (Internet Banking BRI dan masuk ke layanan registrasi NPWP)</li>
                                <li>Bank BTN (Layanan Online Tax Portal)</li>
                                <li>Bank BNI (Aplikasi berbasis web BNI ASP aspbni.co.id)</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tata cara pembuatan NPWP End -->

    <!--? About Area Start -->
    <div class="about-low-area padding-bottom" id="fungsi-manfaat">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50 text-justify">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>Manfaat Membayar Pajak Bagi UMKM</h2>
                        </div>
                        <ul class="unordered-list">
                            <li>UMKM dapat naik level. Setelah UMKM dapat menyusun laporan keuangan 
                                sesuai standar, patuh membayar pajak, serta dapat menjadi jalan 
                                untuk memperoleh akses permodalan lewat bank.
                            </li>
                            <li>Meningkatkan kredibilitas usaha. Dengan membayar pajak, lembaga keuangan, 
                                perbankan, pelanggan, dan juga partner usaha menilai bisnis tersebut 
                                sebagai bisnis yang bonafide.
                            </li>
                            <li>Peningkatan pengelolaan keuangan. Untuk memenuhi syarat 
                                pembayaran pajak UMKM yang didasarkan pada omzet tiap bulan, 
                                maka secara tidak langsung pelaku UMKM telah melakukan pengelolaan 
                                keuangan sesuai standar.
                            </li>
                        </ul>
                        {{-- <a href="about.html" class="btn">More About Us</a> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-35 text-center">
                        <span>Alokasi 1 Juta Uang Pajak Kita Kemana?</span>
                    </div>
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img">
                            <img class="rounded" src="{{ url('/img/gallery/alokasi pajak kemana.png') }}" alt="">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!--? Tata cara Penggunaan kalkulator -->
    <div class="categories-area section-padding30" id="cara-menggunakan-kalkulator-pajak">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        {{-- <span>Our Services</span> --}}
                        <h2>Bagaimana Cara Menggunakan Kalkulator Pajak?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            {{-- <span class="color: #ff5f13"><h1>1</h1></span> --}}
                        </div>
                        <div class="cat-cap">
                            <h3>Pajak Perorangan</h3>
                            <ol class="ordered-list text-left">
                                <li>
                                    Pilih jenis wajib pajaknya
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/perorangan/1.png') }}" alt="pilih jenis pajak">
                                </li>
                                <li>
                                    Jika wajib pajak perorangan maka akan muncul tampilan seperti dibawah ini :
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/perorangan/2.png') }}" alt="tampilan pajak perorangan">
                                </li>
                                <li>
                                    Masukkan tahun pembuatan NPWP
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/perorangan/3.png') }}" alt="tahun pembuatan NPWP">
                                </li>
                                <li>
                                    Masukkan dasar pengenaan pajak
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/perorangan/4.png') }}" alt="dasar pengenaan pajak">
                                </li>
                                <li>
                                    Tarif pajak sebesar 0,5% untuk pajak perorangan
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/perorangan/5.png') }}" alt="tarif pajak perorangan">
                                </li>
                                <li>
                                    Kemudian tekan tombol hitung pajak
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/perorangan/7.png') }}" alt="tombol hitung pajak">
                                </li>
                                <li>
                                    Maka pajak yg harus di setorkan akan muncul setelah dikalkulasi
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/perorangan/6.png') }}" alt="pajak yang disetorkan">
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            {{-- <span class="color: #ff5f13"><h1>2</h1></span> --}}
                        </div>
                        <div class="cat-cap">
                            <h3>Pajak Badan/Perusahaan</h3>
                            <ol class="ordered-list text-left">
                                <li>
                                    Pilih jenis wajib pajaknya
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/badan/1.png') }}" alt="pilih jenis pajak">
                                </li>
                                <li>
                                    Apabila wajib pajak berupa badan ataupun perusahaan maka akan muncul tampilan seperti dibawah ini :
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/badan/2.png') }}" alt="kalkulator badan">
                                </li>
                                <li>
                                    Pilih jenis badan usaha
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/badan/3.png') }}" alt="pilih jenis badan usaha">
                                </li>
                                <li>
                                    Masukkan tahun pembuatan NPWP
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/badan/4.png') }}" alt="tahun npwp">
                                </li>
                                <li>
                                    Masukkan peredaran bruto
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/badan/5.png') }}" alt="peredarann bruto">
                                </li>
                                <li>
                                    Masukkan total biaya
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/badan/6.png') }}" alt="total biaya">
                                </li>
                                <li>
                                    Tekan tombol hitung pajak
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/badan/10.png') }}" alt="hitung pajak badan">
                                </li>
                                <li>
                                    Maka akan keluar PKP dan pajak yang harus di setorkan setelah di kalkulasi
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/badan/8.png') }}" alt="pkp">
                                    <img style="max-width: 100%; margin-top: 1rem; margin-bottom: 1rem;" class="rounded" src="{{ url('/img/gallery/badan/9.png') }}" alt="pajak yg disetorkan">
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tata cara Penggunaan kalkulator End -->

    <!--? contact-form start -->
    <section id="kalkulator-pajak" class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="{{ asset('/img/gallery/kalkulator.jpg') }}">
        <div class="container">
            <div class="row justify-content-end">
                <!-- Contact wrapper -->
                <div class="col-xl-8 col-lg-9">
                    <div class="contact-form-wrapper">
                        <!-- From tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-50">
                                    <span>Kalkulator Pajak</span>
                                    <h2>Perhitungan Pajak UMKM Orang Pribadi/Badan</h2>
                                </div>
                            </div>
                        </div>
                        <!-- form -->
                        <form class="contact-form">
                            <div class="row ">
                                <div class="col-lg-12 col-md-6">
                                    <div class="input-form">
                                        <select name="jenis_pajak" id="jenis_pajak">
                                            <option value="">-- Pilih Jenis Pajak --</option>
                                            <option value="pribadi">WP Orang Pribadi</option>
                                            <option value="badan">WP Badan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="input-form" id="form_input_jenis_badan_usaha" style="display: none">
                                        <select name="jenis_badan_usaha" id="jenis_badan_usaha">
                                            <option value="">-- Pilih Jenis Badan Usaha --</option>
                                            <option value="pt">PT</option>
                                            <option value="cv">CV</option>
                                            <option value="firma">Firma</option>
                                            <option value="koperasi">Koperasi</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input id="tahun_pembuatan_npwp" type="number" placeholder="Tahun Pembuatan NPWP" style="display: none">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input id="tarif_pajak" type="number" style="display: none; background-color: yellow" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input id="dasar_pengenaan_pajak" type="number" placeholder="Dasar Pengenaan Pajak" style="display: none">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input id="peredaran_bruto" type="number" placeholder="Peredaran Bruto" style="display: none">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input id="total_biaya" type="number" placeholder="Total Biaya" style="display: none">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input id="pkp" type="number" placeholder="PKP" style="display: none; background-color: yellow" disabled>
                                    </div>
                                </div>
                                {{-- Hasil/berapa pajak yang harus disetorkan --}}
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input id="pajak_yang_disetorkan" type="number" placeholder="Pajak Yang Disetorkan" style="display: none; background-color: yellow" disabled>
                                    </div>
                                </div>
                                
                                <!-- Button Hitung -->
                                <div class="col-lg-12">
                                    <button class="genric-btn danger circle" id="hitung-pajak" style="width: 100%">Hitung Pajak</button>
                                </div>

                                <!-- Button Reset -->
                                <div class="col-lg-12">
                                    <button class="genric-btn primary circle mt-3"  style="width: 100%" id="reset-pajak">Reset</button>
                                </div>
                            </div>
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form end -->
    <!--Team Ara Start -->
    {{-- <div class="team-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Our Team Mambers</span>
                        <h2>What We Can Do For You</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="{{ asset('/img/gallery/team1.png') }}" alt="">
                            <div class="team-caption">
                                <h3><a href="#">Mancherwan Kolin</a></h3>
                                <p>Health agent</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="{{ asset('/img/gallery/team2.png') }}" alt="">
                            <div class="team-caption">
                                <h3><a href="#">Mancherwan Kolin</a></h3>
                                <p>Health agent</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="{{ asset('/img/gallery/team3.png') }}" alt="">
                            <div class="team-caption">
                                <h3><a href="#">Mancherwan Kolin</a></h3>
                                <p>Health agent</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team Ara End -->
    <!--? Testimonial Start -->
    {{-- <div class="testimonial-area testimonial-padding section-bg" data-background="{{ asset('/img/gallery/section_bg04.jpg') }}">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-25">
                        <span>Clients Testimonials</span>
                        <h2>What Our Clients Say!</h2>
                    </div> 
                    <div class="h1-testimonial-active mb-70">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="{{ asset('/img/gallery/Homepage_testi.png') }}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jhaon smith</span>
                                        <p>Creative designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="{{ asset('/img/gallery/Homepage_testi.png') }}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jhaon smith</span>
                                        <p>Creative designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form Start -->
                <div class="col-xl-4 col-lg-5 col-md-8">
                    <div class="testimonial-form text-center">
                        <h3>Always listening, always understanding.</h3>
                        <input type="text" placeholder="Incoterms">
                        <button name="submit" class="submit-btn">Request a Quote</button>
                    </div>
                </div>
                <!-- Form End -->
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->
    <!--? Blog Area Start -->
    {{-- <div class="home-blog-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-70">
                        <span>Our Recent news</span>
                        <h2>Tourist Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset('/img/gallery/blog01.png') }}" alt="">
                            </div>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-date text-center">
                                <span>27</span>
                                <p>SEP</p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                    <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                </ul>
                                <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset('/img/gallery/blog1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-date text-center">
                                <span>27</span>
                                <p>SEP</p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                    <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                </ul>
                                <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset('/img/gallery/blog02.png') }}" alt="">
                            </div>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-date text-center">
                                <span>27</span>
                                <p>SEP</p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                    <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                </ul>
                                <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog Area End -->
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            // Tarif pajak orang pribadi = 0,5 %
            let tarif_pajak_orang_pribadi = 0.005;

            // Inisialisasi variabel field kalkulator
            let field_jenis_pajak = $('#jenis_pajak');
            let form_input_jenis_badan_usaha = $('#form_input_jenis_badan_usaha');
            let field_jenis_badan_usaha = $('#jenis_badan_usaha');
            let field_tahun_pembuatan_npwp = $('#tahun_pembuatan_npwp');
            let field_tarif_pajak = $('#tarif_pajak');
            let field_dasar_pengenaan_pajak = $('#dasar_pengenaan_pajak');
            let field_pajak_yang_disetorkan = $('#pajak_yang_disetorkan');
            let field_peredaran_bruto = $('#peredaran_bruto');
            let field_total_biaya = $('#total_biaya');
            let field_pkp = $('#pkp');
            let btn_hitung_pajak = $('#hitung-pajak');
            let btn_reset_pajak = $('#reset-pajak');

            // Jika user menekan value jenis pajak
            field_jenis_pajak.on('change', function(){
                hide_all_field_pajak();
                let val_jenis_pajak = $(this).val();

                if(val_jenis_pajak === 'pribadi'){
                    // reset semua value dulu ketika berubah pilihan hitung pajak pribadi atau badan
                    reset();

                    show_field_pajak_pribadi();

                    var placeholderTarifPajak = "Tarif Pajak  (" + tarif_pajak_orang_pribadi + ")";
                    // set value tarif pajak pribadi = 0,5 %
                    field_tarif_pajak.attr("placeholder", placeholderTarifPajak);
                    
                }else if(val_jenis_pajak === 'badan'){
                    reset();

                    show_field_pajak_badan();

                    var placeholderTarifPajak = "Tarif Pajak";
                    // set value tarif pajak pribadi = 0,5 %
                    field_tarif_pajak.attr("placeholder", placeholderTarifPajak);

                }else{
                    hide_all_field_pajak();
                }
            });

            // Fungsi hitung pajak PRIBADI
            // Jika User Menekan tombol hitung pajak
            btn_hitung_pajak.on('click', function(e){
                e.preventDefault();
                console.log('tombol hitung ditekan');
                let val_jenis_pajak = $(field_jenis_pajak).val();
                
                if(val_jenis_pajak == 'pribadi'){
                    console.log('pajak pribadi');   
                    // Cek format inputan tahun benar atau tidak
                    // Yang benar panjangnya 4 karakter, ex : 2021, 202121 => salah
                    if(validateYear() == false){
                        return;
                    }
                    var pajak_yang_harus_disetorkan_pribadi = tarif_pajak_orang_pribadi * field_dasar_pengenaan_pajak.maskMoney('unmasked')[0];

                    field_pajak_yang_disetorkan.val(pajak_yang_harus_disetorkan_pribadi).maskMoney('mask');
                }else{
                    console.log('pajak badan');

                    // Cek format inputan tahun benar atau tidak
                    // Yang benar panjangnya 4 karakter, ex : 2021, 202121 => salah
                    if(validateYear() == false){
                        return;
                    }

                    // Cek Pajak Badan Apa?
                    // Ada 2 kelompok bada
                    // 1. PT
                    // 2. CV, Firma, Koperasi, Lainnya
                    if(field_jenis_badan_usaha.val() == "pt"){
                        // Cek tahun
                        // Jika tahun <= 3 tahun
                        var tahun_pembuatan_npwp = parseInt(field_tahun_pembuatan_npwp.val());

                        if( (getCurrentYear() - tahun_pembuatan_npwp) <= 3){
                            console.log('<= 3 th, tarif pajak 0,5%');
                            // Set tarif pajak = 0,5%
                            var tarif_pajak_badan = 0.005;

                            // Tampilkan tarif pajak di field_tarif_pajak
                            field_tarif_pajak.val(tarif_pajak_badan);

                            // Cek PKP
                            if(checkPKP(parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]), parseInt(field_total_biaya.maskMoney('unmasked')[0])) == false){
                                return;
                            }

                            // Hitung PKP
                            var pkp = parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]) - parseInt(field_total_biaya.maskMoney('unmasked')[0]);

                            // Tampilkan PKP di field_pkp
                            field_pkp.val(pkp).maskMoney('mask');

                            // Hitung pajak yang harus disetorkan
                            // Pajak = pkp x tarif pajak
                            var pajak = pkp * tarif_pajak_badan;

                            // Tampilkan value pajak ke field_pajak_yang_disetorkan
                            field_pajak_yang_disetorkan.val(pajak).maskMoney('mask');

                        }
                        // Jika tahun > 3 tahun
                        else{
                            // Cek peredaran bruto
                            // Jika Peredaran bruto >= 4,8 milyar (4.800.000.000)
                            if(parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]) >= 4800000000){
                                // console.log(typeof(parseInt(field_peredaran_bruto.val())));
                                // console.log('lebih dari 3 th, bruto >= 4,8 milyar, tarif pajak 22%');

                                // set tarif pajak = 22%
                                var tarif_pajak_badan = 0.22;

                                // Tampilkan tarif pajak di field_tarif_pajak
                                field_tarif_pajak.val(tarif_pajak_badan);

                                // Cek PKP
                                if(checkPKP(parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]), parseInt(field_total_biaya.maskMoney('unmasked')[0])) == false){
                                    return;
                                }

                                // Hitung PKP
                                var pkp = parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]) - parseInt(field_total_biaya.maskMoney('unmasked')[0]);

                                // Tampilkan PKP di field_pkp
                                field_pkp.val(pkp).maskMoney('mask');

                                // Hitung pajak yang harus disetorkan
                                // Pajak =  pkp x tarif pajak
                                var pajak = pkp * tarif_pajak_badan;

                                // Tampilkan value pajak ke field_pajak_yang_disetorkan
                                field_pajak_yang_disetorkan.val(pajak).maskMoney('mask');

                            }
                            // Jika peredaran bruto < 4,8 milyar (4.800.000.000)
                            else{
                                // console.log('lebih dari 3 th, bruto < 4,8 milyar, tarif pajak 11%');

                                // Set tarif pajak = 11%
                                var tarif_pajak_badan = 0.11;

                                // Tampilkan tarif pajak di field_tarif_pajak
                                field_tarif_pajak.val(tarif_pajak_badan);

                                // Cek PKP
                                if(checkPKP(parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]), parseInt(field_total_biaya.maskMoney('unmasked')[0])) == false){
                                    return;
                                }

                                // Hitung PKP
                                var pkp = parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]) - parseInt(field_total_biaya.maskMoney('unmasked')[0]);

                                // Tampilkan PKP di field_pkp
                                field_pkp.val(pkp).maskMoney('mask');

                                // Hitung pajak yang harus disetorkan
                                // Pajak =  pkp x tarif pajak
                                var pajak = pkp * tarif_pajak_badan;

                                // Tampilkan value pajak ke field_pajak_yang_disetorkan
                                field_pajak_yang_disetorkan.val(pajak).maskMoney('mask');

                            }
                        }
                    }
                    // Jika jenis badan selain PT => brarti CV, Koperasi, Firma, dan Lainnya
                    else{
                        // Cek tahun
                        var tahun_pembuatan_npwp = parseInt(field_tahun_pembuatan_npwp.val());

                        // Jika tahun pembuatan <= 4 tahun
                        if( (getCurrentYear() - tahun_pembuatan_npwp) <= 4){
                            // console.log('jenis pajak lainnya, <= 4 th, tarif pajak 0,5%');

                            // Set tarif pajak = 0,5%
                            var tarif_pajak_badan = 0.005;

                            // Tampilkan tarif pajak di field_tarif_pajak
                            field_tarif_pajak.val(tarif_pajak_badan);

                            // Cek PKP
                            if(checkPKP(parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]), parseInt(field_total_biaya.maskMoney('unmasked')[0])) == false){
                                return;
                            }

                            // Hitung PKP
                            var pkp = parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]) - parseInt(field_total_biaya.maskMoney('unmasked')[0]);

                            // Tampilkan PKP di field_pkp
                            field_pkp.val(pkp).maskMoney('mask');

                            // Hitung pajak yang harus disetorkan
                            // Pajak = pkp x tarif pajak
                            var pajak = pkp * tarif_pajak_badan;

                            // Tampilkan value pajak ke field_pajak_yang_disetorkan
                            field_pajak_yang_disetorkan.val(pajak).maskMoney('mask');

                        }
                        // Jika tahun > 4 tahun
                        else{
                            // Cek peredaran bruto
                            // Jika Peredaran bruto >= 4,8 milyar (4.800.000.000)
                            if(parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]) >= 4800000000){
                                // console.log('jenis pajak lainnya, > 4 th, bruto >= 4,8 milyar, tarif pajak 22%');

                                // set tarif pajak = 22%
                                var tarif_pajak_badan = 0.22;

                                // Tampilkan tarif pajak di field_tarif_pajak
                                field_tarif_pajak.val(tarif_pajak_badan);

                                // Cek PKP
                                if(checkPKP(parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]), parseInt(field_total_biaya.maskMoney('unmasked')[0])) == false){
                                    return;
                                }

                                // Hitung PKP
                                var pkp = parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]) - parseInt(field_total_biaya.maskMoney('unmasked')[0]);

                                // Tampilkan PKP di field_pkp
                                field_pkp.val(pkp).maskMoney('mask');

                                // Hitung pajak yang harus disetorkan
                                // Pajak =  pkp x tarif pajak
                                var pajak = pkp * tarif_pajak_badan;

                                // Tampilkan value pajak ke field_pajak_yang_disetorkan
                                field_pajak_yang_disetorkan.val(pajak).maskMoney('mask');

                            }
                            // Jika peredaran bruto < 4,8 milyar (4.800.000.000)
                            else{
                                // console.log('jenis pajak lainnya, > 4 th, bruto < 4,8 milyar, tarif pajak 11%');

                                // Set tarif pajak = 11%
                                var tarif_pajak_badan = 0.11;

                                // Tampilkan tarif pajak di field_tarif_pajak
                                field_tarif_pajak.val(tarif_pajak_badan);   

                                // Cek PKP
                                if(checkPKP(parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]), parseInt(field_total_biaya.maskMoney('unmasked')[0])) == false){
                                    return;
                                }

                                // Hitung PKP
                                var pkp = parseInt(field_peredaran_bruto.maskMoney('unmasked')[0]) - parseInt(field_total_biaya.maskMoney('unmasked')[0]);

                                // Tampilkan PKP di field_pkp
                                field_pkp.val(pkp).maskMoney('mask');

                                // Hitung pajak yang harus disetorkan
                                // Pajak =  pkp x tarif pajak
                                var pajak = pkp * tarif_pajak_badan;

                                // Tampilkan value pajak ke field_pajak_yang_disetorkan
                                field_pajak_yang_disetorkan.val(pajak).maskMoney('mask');

                            }
                        }
                    }

                }
            });

            // Pajak Badan/Selain PT.
            // Fungsi untuk mengecek apakah peredaran bruto lebih besar/kecil dari total biaya
            // Cek nilai PKP : 
            // Jika nilai (-) maka return false, atau fungsi berhenti dan muncul alert
            // Jika nilai (+) maka lanjut
            function checkPKP(peredaranBruto, totalBiaya){
                if(totalBiaya > peredaranBruto){
                    alert('Total Biaya Tidak Boleh Lebih Dari Peredaran Bruto!');
                    return false;
                }
            }

            // Get current year
            // Parse the string to Int, supaya bisa dikalkulasikan tahunnya
            function getCurrentYear(){
                var date = new Date();
                var currentYear = date.getFullYear();

                return parseInt(currentYear);
            }

            // Jika user menekan tombol reset
            btn_reset_pajak.on('click', function(e){
                e.preventDefault();
                reset();
            });

            // Fungsi reset field pajak
            function reset(){
                console.log('reset');
                field_dasar_pengenaan_pajak.val('');
                field_jenis_badan_usaha.prop('selectedIndex', 0);
                field_tahun_pembuatan_npwp.val('');
                field_tarif_pajak.val('');
                field_peredaran_bruto.val('');
                field_total_biaya.val('');
                field_pkp.val('');
                field_pajak_yang_disetorkan.val('');
            }

            // Fungsi menampilkan field Pajak PRIBADI
            function show_field_pajak_pribadi(){
                field_tahun_pembuatan_npwp.show();
                field_tarif_pajak.show();
                field_dasar_pengenaan_pajak.show().maskMoney({
                    'allowNegative': false,
                    'allowZero': true,
                    'precision': 2,
                    'thousands': '.',
                    'decimal': ',',
                    'prefix': 'Rp ' 
                });
                field_pajak_yang_disetorkan.show().maskMoney({
                    'allowNegative': false,
                    'allowZero': true,
                    'precision': 2,
                    'thousands': '.',
                    'decimal': ',',
                    'prefix': 'Rp ' 
                });
            }   

            // Fungsi menampilkan field Pajak BADAN
            function show_field_pajak_badan(){
                form_input_jenis_badan_usaha.show();
                field_tahun_pembuatan_npwp.show();
                field_tarif_pajak.show();
                field_peredaran_bruto.show().maskMoney({
                    'allowNegative': false,
                    'allowZero': true,
                    'precision': 2,
                    'thousands': '.',
                    'decimal': ',',
                    'prefix': 'Rp ' 
                });
                field_total_biaya.show().maskMoney({
                    'allowNegative': false,
                    'allowZero': true,
                    'precision': 2,
                    'thousands': '.',
                    'decimal': ',',
                    'prefix': 'Rp ' 
                });
                field_pkp.show().maskMoney({
                    'allowNegative': false,
                    'allowZero': true,
                    'precision': 2,
                    'thousands': '.',
                    'decimal': ',',
                    'prefix': 'Rp ' 
                });
                field_pajak_yang_disetorkan.show().maskMoney({
                    'allowNegative': false,
                    'allowZero': true,
                    'precision': 2,
                    'thousands': '.',
                    'decimal': ',',
                    'prefix': 'Rp ' 
                });
            }   

            // Fungsi hide field all
            function hide_all_field_pajak(){
                field_dasar_pengenaan_pajak.hide();
                form_input_jenis_badan_usaha.hide();
                field_tahun_pembuatan_npwp.hide();
                field_tarif_pajak.hide();
                field_peredaran_bruto.hide();
                field_total_biaya.hide();
                field_pkp.hide();
                field_pajak_yang_disetorkan.hide();
            }   

            // VALIDASI TAHUN PEMBUATAN NPWP
            // 1. Validasi tahun
            // - Tahun tidak boleh lebih dari tahun sekarang
            // - Panjang tahun tidak boleh kurang dari 4 karakter/0;
            function validateYear(){
                if($('#tahun_pembuatan_npwp').val().length == 0){
                    alert('Tahun Pembuatan NPWP Harus Diisi !');
                    return false;
                }else if($('#tahun_pembuatan_npwp').val().length < 4 && $('#tahun_pembuatan_npwp').val().length != 0 ){
                    alert('Format Tahun Pembuatan NPWP Salah !');
                    return false;
                }
                else{
                    if(parseInt($('#tahun_pembuatan_npwp').val()) > getCurrentYear() ){
                        alert("Tahun Tidak Boleh Lebih Dari " + getCurrentYear() );
                        return false;
                    }
                }
            }

            // 2. Untuk inputan tahun, user max input 4 karakter (ex : 2021, 202121 => tidak bisa)
            function limitTextTahun(field, maxChar){
                var ref = $(field);
                var val = ref.val();

                if(val.length >= maxChar){
                    ref.val(function(){
                        return val.substr(0, maxChar);
                    });
                }
            }
 
            // 3. Ketika user input tahun pembuatan NPWP
            $('input#tahun_pembuatan_npwp').on('keyup', function(){
                limitTextTahun(this, 4);
            });

        });
    </script>
@endsection