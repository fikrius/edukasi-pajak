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
                            <img data-src="{{ url('/img/gallery/alokasi pajak kemana.webp') }}" class="lazyload rounded" alt="">
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
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/perorangan/1.webp') }}" alt="pilih jenis pajak">
                                </li>
                                <li>
                                    Jika wajib pajak perorangan maka akan muncul tampilan seperti dibawah ini :
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/perorangan/2.PNG') }}" alt="tampilan pajak perorangan">
                                </li>
                                <li>
                                    Masukkan tahun Pajak
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/perorangan/3.PNG') }}" alt="tahun pembuatan NPWP">
                                </li>
                                <li>
                                    Masukkan dasar pengenaan pajak
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/perorangan/4.webp') }}" alt="dasar pengenaan pajak">
                                </li>
                                <li>
                                    Tarif pajak sebesar 0,5% untuk pajak perorangan
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/perorangan/5.webp') }}" alt="tarif pajak perorangan">
                                </li>
                                <li>
                                    Kemudian tekan tombol hitung pajak
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/perorangan/7.webp') }}" alt="tombol hitung pajak">
                                </li>
                                <li>
                                    Maka pajak yg harus di setorkan akan muncul setelah dikalkulasi
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/perorangan/6.webp') }}" alt="pajak yang disetorkan">
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
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/badan/1.webp') }}" alt="pilih jenis pajak">
                                </li>
                                <li>
                                    Apabila wajib pajak berupa badan ataupun perusahaan maka akan muncul tampilan seperti dibawah ini :
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/badan/2.PNG') }}" alt="kalkulator badan">
                                </li>
                                <li>
                                    Pilih jenis badan usaha
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/badan/3.webp') }}" alt="pilih jenis badan usaha">
                                </li>
                                <li>
                                    Masukkan tahun Pajak
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/badan/4.PNG') }}" alt="tahun pajak">
                                </li>
                                <li>
                                    Masukkan peredaran bruto (Apabila Muncul Kolom Peredaran Bruto)
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/badan/5.webp') }}" alt="peredarann bruto">
                                </li>
                                <li>
                                    Masukkan PKP (Apabila Muncul Kolom Peredaran Bruto)
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/badan/8.PNG') }}" alt="PKP">
                                </li>
                                <li>
                                    Tekan tombol hitung pajak
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/badan/10.webp') }}" alt="hitung pajak badan">
                                </li>
                                <li>
                                    Maka akan keluar pajak yang harus di setorkan setelah di kalkulasi
                                    <img style="max-width: 100%; height: auto; margin-top: 1rem; margin-bottom: 1rem;" class="lazyload rounded" data-src="{{ asset('/img/gallery/badan/9.webp') }}" alt="pajak yg disetorkan">
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
    <section id="kalkulator-pajak" class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="{{ asset('/img/kalkulator/kalkulator.webp') }}">
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
                                        <input id="tahun_pajak" type="text" placeholder="Tahun Pajak">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input id="tarif_pajak" type="text"  placeholder="Tarif Pajak" style="display: none; background-color: yellow" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input id="peredaran_bruto" type="text" placeholder="Peredaran Bruto" style="display: none">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input id="pkp" type="text" placeholder="PKP" style="display: none;">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input id="dasar_pengenaan_pajak" type="text" placeholder="Dasar Pengenaan Pajak" style="display: none;">
                                    </div>
                                </div>
                                {{-- Hasil/berapa pajak yang harus disetorkan --}}
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input id="pajak_yang_disetorkan" type="text" placeholder="Pajak Yang Disetorkan" style="display: none; background-color: yellow" disabled>
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
@endsection

@section('script')
    <script>
        $(document).ready(function(){

            // Inisialisasi variabel field kalkulator
            let field_jenis_pajak = $('#jenis_pajak');
            let form_input_jenis_badan_usaha = $('#form_input_jenis_badan_usaha');
            let field_jenis_badan_usaha = $('#jenis_badan_usaha');
            let field_tahun_pajak = $('#tahun_pajak');
            let field_tarif_pajak = $('#tarif_pajak');
            let field_dasar_pengenaan_pajak = $('#dasar_pengenaan_pajak');
            let field_pajak_yang_disetorkan = $('#pajak_yang_disetorkan');
            let field_peredaran_bruto = $('#peredaran_bruto');
            let field_pkp = $('#pkp');
            let btn_hitung_pajak = $('#hitung-pajak');
            let btn_reset_pajak = $('#reset-pajak');

            // Jika user menekan value jenis pajak
            field_jenis_pajak.on('change', function(){
                hide_all_field_pajak();
                // let val_jenis_pajak = $(this).val("");
                let val_jenis_pajak = $(this).val();

                // Tarif pajak badan
                // Set 0 terus ketika value nya milih pajak badan, biar aman
                var tarif_pajak_badan = 0;

                if(val_jenis_pajak === 'pribadi'){
                    // reset semua value dulu ketika berubah pilihan hitung pajak pribadi atau badan
                    reset();

                    show_field_pajak_pribadi();
                    field_peredaran_bruto.hide();
                    field_pkp.hide();

                    // Tarif pajak orang pribadi = 0,5 %
                    let tarif_pajak_orang_pribadi = 0.005;

                    var placeholderTarifPajak = "Tarif Pajak ("+ (tarif_pajak_orang_pribadi * 100).toString() +" %)";
                    
                    // set value tarif pajak pribadi = 0,5 %
                    field_tarif_pajak.attr("placeholder", placeholderTarifPajak);


                    //Jika klik hitung
                    btn_hitung_pajak.on('click', function(e){
                        // alert("pajak pribadi");
                        e.preventDefault();

                        var pajak_yang_harus_disetorkan_pribadi = (tarif_pajak_orang_pribadi * field_dasar_pengenaan_pajak.maskMoney('unmasked')[0]);

                        field_pajak_yang_disetorkan.val(pajak_yang_harus_disetorkan_pribadi).maskMoney('mask');
                    });
                    
                }else if(val_jenis_pajak === 'badan'){
                    reset();

                    // set value tarif pajak pribadi = 0,5 %
                    field_tarif_pajak.attr("placeholder", "Tarif Pajak");

                    // Tarif pajak badan
                    // Set 0 terus ketika value nya milih pajak badan, biar aman
                    var tarif_pajak_badan = 0;
                    
                    show_field_pajak_badan();
                    
                    field_jenis_badan_usaha.on('change', function(){
                        // Tarif pajak badan
                        // Set 0 terus ketika value nya milih pajak badan, biar aman
                        var tarif_pajak_badan = 0;

                        let val_jenis_badan_usaha = $(this).val();
                        // Cek jika PT
                        if(val_jenis_badan_usaha === "pt"){
                            console.log(val_jenis_badan_usaha);
                            // alert("pt");
    
                            field_tahun_pajak.on('keyup', function(e){
                                console.log('tahun pajak keyup');
    
                                let val_tahun_pajak = $(this).val();
                                let parse_tahun_pajak = parseInt($(this).val());

                                field_peredaran_bruto.hide();
                                field_pkp.hide();
    
                                if(val_tahun_pajak.length == 4 && parse_tahun_pajak <= 2020){
                                    // alert("show peredaran bruto field");
                                    field_peredaran_bruto.show().maskMoney({
                                        'allowNegative': false,
                                        'allowZero': true,
                                        'precision': 2,
                                        'thousands': '.',
                                        'decimal': ',',
                                        'prefix': 'Rp ' 
                                    });

                                    // tarif pajak 0,5%
                                    tarif_pajak_badan = 0.005;
                                    console.log(tarif_pajak_badan);

                                    //Jika klik hitung
                                    btn_hitung_pajak.on('click', function(e){
                                        e.preventDefault();
                                        let placeholderTarifPajak = "Tarif Pajak ("+ (tarif_pajak_badan * 100).toString() +" %)";
                                        
                                        // set value tarif pajak pribadi = 0,5 %
                                        field_tarif_pajak.attr("placeholder", placeholderTarifPajak);

                                        var pajak_yang_harus_disetorkan_pribadi = (tarif_pajak_badan * field_peredaran_bruto.maskMoney('unmasked')[0]);

                                        field_pajak_yang_disetorkan.val(pajak_yang_harus_disetorkan_pribadi).maskMoney('mask');
                                    });
                                    
                                }else if(val_tahun_pajak.length == 4 && parse_tahun_pajak >= 2021){
                                    // alert("show pkp field");
                                    field_pkp.show().maskMoney({
                                        'allowNegative': false,
                                        'allowZero': true,
                                        'precision': 2,
                                        'thousands': '.',
                                        'decimal': ',',
                                        'prefix': 'Rp ' 
                                    });

                                    //Jika klik hitung
                                    btn_hitung_pajak.on('click', function(e){
                                        e.preventDefault();
                                        let val_pkp = parseInt(field_pkp.val());

                                        // Jika tahun pajak = 2021
                                        if(parse_tahun_pajak == 2021){
                                            if(field_pkp.maskMoney('unmasked')[0] > 4800000000){
                                                // tarif pajak 22%
                                                tarif_pajak_badan = 0.22;
                                                console.log(tarif_pajak_badan);
                                            }else if(field_pkp.maskMoney('unmasked')[0] <= 4800000000){
                                                // tarif pajak 11%
                                                tarif_pajak_badan = 0.11;
                                                console.log(tarif_pajak_badan);
                                            }                                        

                                        }else if(parse_tahun_pajak >= 2022){
                                            if(field_pkp.maskMoney('unmasked')[0] > 4800000000){
                                                // tarif pajak 22%
                                                tarif_pajak_badan = 0.20;
                                                console.log(tarif_pajak_badan);
                                            }else if(field_pkp.maskMoney('unmasked')[0] <= 4800000000){
                                                // tarif pajak 11%
                                                tarif_pajak_badan = 0.10;
                                                console.log(tarif_pajak_badan);
                                            }   
                                        }

                                        let placeholderTarifPajak = "Tarif Pajak ("+ (tarif_pajak_badan * 100).toString() +" %)";
                                        
                                        // set value tarif pajak pribadi = 0,5 %
                                        field_tarif_pajak.attr("placeholder", placeholderTarifPajak);

                                        var pajak_yang_harus_disetorkan_pribadi = (tarif_pajak_badan * field_pkp.maskMoney('unmasked')[0]);

                                        field_pajak_yang_disetorkan.val(pajak_yang_harus_disetorkan_pribadi).maskMoney('mask');
                                    });

                                }   
    
                                console.log(typeof(parse_tahun_pajak));
                            });
                        }else if(val_jenis_badan_usaha === "cv" || val_jenis_badan_usaha === "firma" || val_jenis_badan_usaha === "koperasi" || val_jenis_badan_usaha === "lainnya"){
                            console.log(val_jenis_badan_usaha);
                            // alert("selain pt");
                            field_tahun_pajak.on('keyup', function(e){
                                console.log('tahun pajak keyup');
    
                                let val_tahun_pajak = $(this).val();
                                let parse_tahun_pajak = parseInt($(this).val());

                                field_peredaran_bruto.hide();
                                field_pkp.hide();
    
                                if(val_tahun_pajak.length == 4 && parse_tahun_pajak <= 2021){
                                    field_peredaran_bruto.show().maskMoney({
                                        'allowNegative': false,
                                        'allowZero': true,
                                        'precision': 2,
                                        'thousands': '.',
                                        'decimal': ',',
                                        'prefix': 'Rp ' 
                                    });
                                    
                                    // tarif pajak 0,5%
                                    tarif_pajak_badan = 0.005;
                                    // alert("show peredaran bruto field (selain pt)");
                                    console.log(tarif_pajak_badan);

                                    //Jika klik hitung
                                    btn_hitung_pajak.on('click', function(e){
                                        e.preventDefault();

                                        let placeholderTarifPajak = "Tarif Pajak ("+ (tarif_pajak_badan * 100).toString() +" %)";
                                        
                                        // set value tarif pajak pribadi = 0,5 %
                                        field_tarif_pajak.attr("placeholder", placeholderTarifPajak);

                                        var pajak_yang_harus_disetorkan_pribadi = (tarif_pajak_badan * field_peredaran_bruto.maskMoney('unmasked')[0]);

                                        field_pajak_yang_disetorkan.val(pajak_yang_harus_disetorkan_pribadi).maskMoney('mask');
                                    });
                                }else if(val_tahun_pajak.length == 4 && parse_tahun_pajak >= 2022){
                                    // alert("show pkp field (selain pt)");
                                    field_pkp.show().maskMoney({
                                        'allowNegative': false,
                                        'allowZero': true,
                                        'precision': 2,
                                        'thousands': '.',
                                        'decimal': ',',
                                        'prefix': 'Rp ' 
                                    });

                                    //Jika klik hitung
                                    btn_hitung_pajak.on('click', function(e){
                                        e.preventDefault();
                                        let val_pkp = parseInt(field_pkp.val());
                                        
                                        if(field_pkp.maskMoney('unmasked')[0] > 4800000000){
                                            // tarif pajak 22%
                                            tarif_pajak_badan = 0.20;
                                            console.log(tarif_pajak_badan);
                                        }
                                        
                                        if(field_pkp.maskMoney('unmasked')[0] <= 4800000000){
                                            // tarif pajak 11%
                                            tarif_pajak_badan = 0.10;
                                            console.log(tarif_pajak_badan);
                                        }   
                                        
                                        let placeholderTarifPajak = "Tarif Pajak ("+ (tarif_pajak_badan * 100).toString() +" %)";
                                        
                                        // set value tarif pajak pribadi = 0,5 %
                                        field_tarif_pajak.attr("placeholder", placeholderTarifPajak);

                                        var pajak_yang_harus_disetorkan_pribadi = (tarif_pajak_badan * field_pkp.maskMoney('unmasked')[0]);

                                        field_pajak_yang_disetorkan.val(pajak_yang_harus_disetorkan_pribadi).maskMoney('mask');
                                    });
                                }   

                                console.log(typeof(parse_tahun_pajak));
                            });
                        }else{
                            field_peredaran_bruto.hide();
                            field_pkp.hide();
                        }
                    });

                }else{
                    hide_all_field_pajak();
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
                field_jenis_badan_usaha.prop('selectedIndex', 0);
                field_tahun_pajak.val('');
                field_tarif_pajak.val('');
                field_dasar_pengenaan_pajak.val('');
                field_peredaran_bruto.val('');
                field_pkp.val('');
                field_pajak_yang_disetorkan.val('');
                // set value tarif pajak pribadi = 0,5 %
                field_tarif_pajak.attr("placeholder", "Tarif Pajak");
            }

            // Fungsi menampilkan field Pajak PRIBADI
            function show_field_pajak_pribadi(){
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
                field_tarif_pajak.show();
                form_input_jenis_badan_usaha.show();
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
                form_input_jenis_badan_usaha.hide();
                field_peredaran_bruto.hide();
                field_dasar_pengenaan_pajak.hide();
                field_pkp.hide();
                field_tarif_pajak.hide();
                field_pajak_yang_disetorkan.hide();
            }   

            // VALIDASI TAHUN PEMBUATAN NPWP
            // 1. Validasi tahun
            // - Tahun tidak boleh lebih dari tahun sekarang
            // - Panjang tahun tidak boleh kurang dari 4 karakter/0;
            function validateYear(){
                if($('#tahun_pajak').val().length == 0){
                    alert('Tahun Pajak Harus Diisi !');
                    return false;
                }else if($('#tahun_pajak').val().length < 4 && $('#tahun_pajak').val().length != 0 ){
                    alert('Format Tahun Pajak Salah !');
                    return false;
                }
                else{
                    if(parseInt($('#tahun_pajak').val()) > getCurrentYear() ){
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
            $('input#tahun_pajak').on('keyup', function(){
                limitTextTahun(this, 4);
            });

        });
    </script>
@endsection