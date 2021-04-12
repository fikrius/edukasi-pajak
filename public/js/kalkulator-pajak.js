$(document).ready(function(){
    alert('ready');
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
        alert('pilih');
        let val_jenis_pajak = $(this).val();

        if(val_jenis_pajak === 'pribadi'){
            show_field_pajak_pribadi();

            // set value tarif pajak pribadi = 0,5 %
            field_tarif_pajak.val(tarif_pajak_orang_pribadi);
            
        }else if(val_jenis_pajak === 'badan'){
            show_field_pajak_badan();
        }else{
            hide_all_field_pajak();
        }
    });

    // Fungsi hitung pajak PRIBADI
    // Jika User Menekan tombol hitung pajak
    btn_hitung_pajak.on('click', function(e){
        // e.preventDefault();
        console.log('tombol hitung ditekan');
        let val_jenis_pajak = $(field_jenis_pajak).val();

        if(val_jenis_pajak == 'pribadi'){
            console.log('pajak pribadi');
            let pajak_yang_harus_disetorkan_pribadi = tarif_pajak_orang_pribadi * field_dasar_pengenaan_pajak.val();

            field_pajak_yang_disetorkan.val(pajak_yang_harus_disetorkan_pribadi);
        }else{
            console.log('pajak badan');
        }
    });

    // Jika user menekan tombol reset
    btn_reset_pajak.on('click', function(e){

        reset();
    });


    // Fungsi reset field pajak
    function reset(){
        console.log('reset');
        return confirm('rset');
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
        field_dasar_pengenaan_pajak.show();
        field_pajak_yang_disetorkan.show();
    }   

    // Fungsi menampilkan field Pajak BADAN
    function show_field_pajak_badan(){
        form_input_jenis_badan_usaha.show();
        field_tahun_pembuatan_npwp.show();
        field_tarif_pajak.show();
        field_peredaran_bruto.show();
        field_total_biaya.show();
        field_pkp.show();
        field_pajak_yang_disetorkan.show();
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

});