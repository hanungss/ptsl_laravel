<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Data</title>
    <link
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Kabupaten_Boyolali.png/529px-Kabupaten_Boyolali.png"" rel="
        icon">
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{ asset('Artboard___1.css')}} " />
    <script id="applicationScript" type="text/javascript" src="{{ asset('Artboard___1.js')}} "></script>

    <style>
    @media print {
        body * {
            visibility: hidden;
        }

        #section-to-print,
        section * {
            visibility: visible;
        }

        #section-to-print {
            position: absolute;
            left: 0;
            top: 0;
        }
    }

    @page {
        size: auto;
        /* auto is the initial value */
        margin: 0;
        /* this affects the margin in the printer settings */
    }

    /* Add a black background color to the top navigation */
    .topnav {
        background-color: rgb(0 62 105);
        overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav button {
        float: left;
        color: #141313;
        text-align: center;
        padding: 20px 20px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a {
        float: left;
        background-color: orange;
        color: greenyellow;
        text-align: center;
        padding: 20px 20px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav p {
        float: left;
        background-color: silver;
        color: black;
        text-align: center;
        padding: 20px 20px;
        text-decoration: none;
        font-size: 17px;
    }

    a.button {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;

        text-decoration: none;
        color: initial;
    }

    /* Change the color of links on hover */
    .topnav button:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    /* Add a color to the active/current link */
    .topnav button.active {
        background-color: #04AA6D;
        color: white;
    }
    </style>
</head>

<body>
    <div class="topnav">
        <button onclick="window.print();" class="active">Print Dokumen Ini
        </button>
        <a href="../lihatdata" class="button">Kembali</a>
        <p>Perhatian! Gunakan kertas ukuran legal</p>
    </div>
</body>
<section>
    @foreach($ptsl as $p)

    <body>
        <div id="Artboard__1">
            <div id="halaman1">
                <div id="KEMENTRIAN_AGRARIA_DAN_TATA_RU">
                    <span>KEMENTRIAN AGRARIA DAN TATA RUANG /<br />BADAN PERTANAHAN NASIONAL<br />KANTOR PERTANAHAN
                        KABUPATEN BOYOLALI</span>
                </div>
                <div id="Jl_Perintis_Kemerdekaan_No_252">
                    <span>Jl. Perintis Kemerdekaan No. 252 Boyoalli, Telp/Fax : 0276-321035</span>
                </div>
                <svg class="Line_1" viewBox="0 0 657 4">
                    <path id="Line_1" d="M 0 0 L 657 0">
                    </path>
                </svg>
                <img id="Logo_BPN-KemenATR_2017" src="Logo_BPN-KemenATR_2017.png"
                    srcset="{{ asset('Logo_BPN-KemenATR_2017.png')}} 1x, Logo_BPN-KemenATR_2017@2x.png 2x">

                <div id="PTSL_2021">
                    <span>PTSL 2021</span>
                </div>
                <svg class="Rectangle_3">
                    <rect id="Rectangle_3" rx="0" ry="0" x="0" y="0" width="658" height="223">
                    </rect>
                </svg>
                <div id="DATA_TANAH">
                    <span>DATA TANAH</span>
                </div>
                <div id="Alas_Hak______________________">
                    <span>Alas Hak : 1. Surat Keterangan Tanah<br /> No. {{$p->skt}}, Tgl. {{$p->pengajuan}}<br /> 2.
                        Surat Pernyataan Tgl {{$p->pengajuan}}<br /> 3. C no. {{$p->no_c}}, Persil no. {{$p->persil}},
                        Kelas {{$p->kelas}}<br />Desa / </span><span style="text-decoration:line-through;">Kelurahan
                    </span><span> : {{$p->desa}}<br />Penggunaan Tanah : {{$p->status}}</span>
                </div>
                <svg class="Rectangle_18">
                    <rect id="Rectangle_18" rx="0" ry="0" x="0" y="0" width="659" height="520">
                    </rect>
                </svg>
                <img id="n_01-01" src="n_01-01.png" srcset="{{ asset('n_01-01.png')}} 1x, n_01-01@2x.png 2x">

                <svg class="Rectangle_5">
                    <rect id="Rectangle_5" rx="0" ry="0" x="0" y="0" width="658" height="194">
                    </rect>
                </svg>
                <div id="Nama__________________________">
                    <span>Nama : {{$p->nama}}<br /><br />Tempat & Tanggal lahir : {{$p->tempat_lahir}},
                        {{$p->tanggal_lahir}}<br /><br />No. KTP : {{$p->nik}}<br /><br />Alamat : {{$p->alamat}}</span>
                </div>
                <div id="DATA_PEMOHON">
                    <span>DATA PEMOHON</span>
                </div>
                <div id="No_Berkas_">
                    <span>No. Berkas :</span>
                </div>
            </div>
            <div id="halaman2">
                <div id="FORMULIR_PENDAFTARAN">
                    <span>FORMULIR PENDAFTARAN</span>
                </div>
                <div id="Yang_bertanda_tangan_di_bawah_">
                    <span>Yang bertanda tangan di bawah ini :<br />Nama : {{$p->nama}}<br />Tempat, Tanggal Lahir :
                        {{$p->tempat_lahir}}, {{$p->tanggal_lahir}}<br />Nomor Identitas (KTP/SIM) :
                        {{$p->nik}}<br />Alamat : {{$p->alamat}}<br />Nomor Telepon : <br /><br />Dalam hal ini
                        bertindak untuk diri sendiri /</span><span style="text-decoration:line-through;"> selaku
                        kuasa</span><span> : <br />Nama :
                        ...................................................................................................................<br />Tempat,
                        Tangga Lahir :
                        ...................................................................................................................<br />Nomor
                        Identitas (KTP/SIM) :
                        ...................................................................................................................<br />Alamat
                        :
                        ...................................................................................................................<br />Berdasarkan
                        Surat Kuasa No. : ........................................................, Tanggal :
                        .........................................<br /><br />Dengan ini mengajukan :<br /> Pendaftaran
                    </span><span style="text-decoration:line-through;">Konversi Penegasan Hak</span><span> / Pengakuan
                        Hak / </span><span style="text-decoration:line-through;">Pemberian Hak</span><span> *<br />Atas
                        bidang tanah :<br />Terletak di : <br />Desa / </span><span
                        style="text-decoration:line-through;">Kelurahan</span><span> : Keposong<br />Kecamatan :
                        Tamansari<br />Kabupaten / Kota : Boyolali<br /><br />Sebagai kelengkapan pendaftaran, bersama
                        ini kami lampirkan *): <br />1. Fotokopi KTP <br />2. Fotokopi KK <br />3. Alas Hak :<br /> a.
                        Akta / Surat Jual Beli No. .......... Tanggal .......... <br /> b. Surat Keterangan Tanah No.
                        {{$p->skt}}, Tanggal {{$p->pengajuan}} <br /> c. C no.{{$p->no_c}}, Persil
                        no.{{$p->persil}},Kelas:{{$p->kelas}} <br />4. SPPT PBB tahun berjalan <br />5. </span><span
                        style="text-decoration:line-through;">Bukti Pembayaran BPHTB atau Surat Pernyataan BPHTB
                        terhutang *)</span><span> <br />6. </span><span style="text-decoration:line-through;">Bukti
                        Pembayaran PPh atau Surat Pernyataan PPH terhutang *)</span><span> <br />7. Surat Pernyataan
                        <br />8.
                        ....................................................................................................................................................<br /><br /><br /><br />Hormat
                        kami,<br /><br /><br /><br /><br />{{$p->nama}}<br /><br />
                        <br /><br /><br /><br /><br /><br />Catatan :<br />*) Coret yang tidak perlu<br /></span><br />
                </div>
                <svg class="Line_2" viewBox="0 0 456 1">
                    <path id="Line_2" d="M 0 0 L 456 1">
                    </path>
                </svg>
                <svg class="Line_3" viewBox="0 0 449 67">
                    <path id="Line_3" d="M 0 67 L 449 0">
                    </path>
                </svg>
                <svg class="Line_4" viewBox="0 0 449 1">
                    <path id="Line_4" d="M 449 0 L 0 0">
                    </path>
                </svg>
                <img id="Image_1" src="Image_1.png" srcset="{{ asset('Image_1.png')}} 1x, Image_1@2x.png 2x">

            </div>
            <div id="halaman3">
                <div id="PEMERINTAH_KABUPATEN_BOYOLALI_">
                    <span>PEMERINTAH KABUPATEN BOYOLALI<br />KECAMATAN TAMANSARI<br />DESA KEPOSONG</span><br />
                </div>
                <svg class="Line_5" viewBox="0 0 579 3">
                    <path id="Line_5" d="M 0 0 L 579 0">
                    </path>
                </svg>
                <div id="SURAT_KETERANGAN_TANAH_NOMOR__">
                    <span>SURAT KETERANGAN TANAH</span><br /><span>NOMOR : {{$p->skt}}</span><br />
                </div>
                <div id="n_Yang_bertanda_tangan_di_bawa">
                    <span><br />Yang bertanda tangan di bawah ini, Kepala Desa Keposong, Kecamatan Tamansari, Kabupaten
                        Boyolali, dengan ini menerangkan sebagai berikut : <br />1. Bahwa sebidang tanah seluas ±
                        {{$p->dimohon}} M² terletak di Desa Keposong, Kecamatan Tamansari, Kabupaten Boyolali yang
                        penggunaannya berupa Pekarangan<br />dengan batas - batasnya :<br /> a. Sebelah Utara :
                        {{$p->utara}}<br /> b. Sebelah Timur : {{$p->timur}}<br /> c. Sebelah Selatan :
                        {{$p->selatan}}<br /> d. Sebelah Barat : {{$p->barat}}<br /><br /> Benar milik {{$p->nama}} dan
                        secara fisik dikuasai oleh yang bersangkutan.<br />Sesuai dengan catatan pada administrasi desa
                        / kelurahan kami, selanjutnya tanah tersebut :<br />1.a. Sebelum / pada tahun 1960 dikuasai /
                        dimiliki oleh {{$p->nama_c}};<br /> b. Berikutnya tahun {{$p->perolehan1}} dikuasai / dimiliki
                        oleh {{$p->pemilik_awal}} dengan cara Hibah Lisan ;<br /> c. Berikutnya tahun {{$p->perolehan2}}
                        dikuasai / dimiliki oleh {{$p->nama}} dengan cara Hibah Lisan;<br />2. Bahwa SPPT PBB tanah di
                        atas sampai saat ini masih tercatat dengan<br />NOP : {{$p->sppt}}, Luas : {{$p->luas_sppt}} M²,
                        Harga : {{$p->njop}} /M²<br />3. Bahwa tanah tersebut tidak terdapat sengketa baik batas maupun
                        kepemilikan dengan pihak lain, dan tidak dijadikan agunan / gadai dengan pihak lain, serta belum
                        pernah diajukan permohonan sertipikat hak atas tanahnya.<br /><br />Demikian Surat Keterangan
                        ini dibuat untuk dapat dipergunakan sebagaimana mestinya dan jika di kemudian hari ternyata
                        keterangan ini tidak sesuai dengan data / keadaan yang sebenarnya, maka saya bersedia dituntut
                        sesuai dengan ketentuan perundang - undangan.</span><br />
                </div>
                <div id="Boyolali_p-pengajuan_Kepala_De">
                    <span>Boyolali, {{$p->pengajuan}}<br />Kepala Desa
                        Keposong<br /><br /><br /><br /><br />SUNARDI</span><br />
                </div>
            </div>
            <div id="halaman4">
                <div id="Saya_yang_bertanda_tangan_di_b_bd">
                    <span>Saya yang bertanda tangan di bawah ini : <br />Nama : {{$p->nama}}<br />NIK :
                        {{$p->nik}}<br />Agama : {{$p->agama}}<br />Usia : {{$p->usia}} Tahun<br />Pekerjaan :
                        {{$p->pekerjaan}}<br />Alamat : {{$p->alamat}}<br /><br />Dengan ini menyatakan dengan
                        sesungguhnya serta dengan itikad baik bahwa saya menguasai / memiliki sebidang tanah yang
                        terletak di :<br />Jalan/RT/RW : <br />Desa / Kelurahan : Keposong<br />Kecamatan :
                        Tamansari<br />Kabupaten : Boyolali<br />Penggunaan Tanah : {{$p->status}}<br />Luas :
                        {{$p->dimohon}}<br /><br />Dengan batas - batas sebagai berikut :<br />Utara :
                        {{$p->utara}}<br />Timur : {{$p->timur}}<br />Selatan : {{$p->selatan}}<br />Barat :
                        {{$p->barat}}<br /><br />Bahwa bidang tanah tersebut saya kuasai / miliki sejak tahun
                        {{$p->perolehan2}} yang sampai saat ini terhadap bidang tanah dimaksud :<br />1. Saya kuasai /
                        miliki secara fisik dan terus menerus;<br />2. Tidak dijadikan jaminan suatu hutang;<br />3.
                        Tidak dalam keadaan sengketa atau keberatan dari pihak manapun;<br />4. Bukan merupakan aset
                        Pemerintah / Pemerintah Propinsi / Kabupaten/Kota / Desa/Kelurahan / BUMN/BUMD;<br />5. Tidak
                        berada / tidak termasuk dalam kawasan hutan;<br />6. Bea Perolehan Hak Atas Tanah dan Bangunan
                        (BPHTB) yang dikenakan atas perolehan hak atas tanah yang dimohon, menjadi tanggung jawab saya
                        sepenuhnya dan merupakan pajak atau bea terhutang bagi saya yang wajib dan akan saya lunasi
                        dengan NJOP {{$p->njop}} /M². (bila sudah ada NJOP);<br />7. Tanah tersebut saya peroleh melalui
                        Jual Beli, Waris, Hibah, Wasiat maka Pajak Penghasilan (PPh) yang dikenakan atas perolehan hak
                        atas tanah saya menjadi tanggung jawab sepenuhnya dan merupakan pajak atau bea terhutang bagi
                        saya dan yang wajib dilunasi oleh saya;<br />8. Di atas tanah yang dikuasai belum pernah
                        diterbitkan sesuatu hak atas tanah / sertipikat;<br />9. Bahwa alat bukti hak atas tanah yang
                        menjadi dasar pendaftaran PTSL ini adalah betul - betul yang saya punyai dan apabila terdapat
                        bukti pemilikan / penguasaan atas tanah dimaksud setelah dibuatnya pernyataan dan / atau telah
                        diterbitkan sertipikat maka dinyatakan tidak berlaku;<br />10.
                        .................................................................................... (Pernyataan
                        lain yang masih dianggap perlu)<br /> <br /> Surat Pernyataan ini saya buat dengan sebenar –
                        benarnya dengan penuh tanggung jawab baik secara perdata maupun secara pidana, dan apabila di
                        kemudian hari terdapat unsur – unsur yang tidak benar dalam pernyataan ini, maka segala akibat
                        yang timbul menjadi tanggung jawab saya sepenuhnya dan bersedia dituntut sesuai ketentuan hukum
                        yang berlaku, serta tidak akan melibatkan Kementrian Agraria dan Tata Ruang / Badan Pertanahan
                        Nasional, dan saya bersedia atas sertipikat yang saya terima dibatalkan oleh pejabat yang
                        berwenang.</span><br />
                </div>
                <div id="SURAT_PERNYATAAN">
                    <span>SURAT PERNYATAAN</span>
                </div>
                <div id="Surat_Pernyataan_Berdasarkan_S">
                    <span>Surat Pernyataan<br />Berdasarkan Surat Direktur Jendral Hubungan Hukum Keagrariaan<br />Nomor
                        2936/20.1-400/x/2018, Tanggal 10 Oktober 2018</span><br />
                </div>
                <div id="n_Hal_1-">
                    <span>-Hal 1-</span>
                </div>
                <div id="Saya_yang_bertanda_tangan_di_b_bd">
                    <span>Saya yang bertanda tangan di bawah ini : <br />Nama : {{$p->nama}}<br />NIK :
                        {{$p->nik}}<br />Agama : {{$p->agama}}<br />Usia : {{$p->usia}} Tahun<br />Pekerjaan :
                        {{$p->pekerjaan}}<br />Alamat : {{$p->alamat}}<br /><br />Dengan ini menyatakan dengan
                        sesungguhnya serta dengan itikad baik bahwa saya menguasai / memiliki sebidang tanah yang
                        terletak di :<br />Jalan/RT/RW : <br />Desa / Kelurahan : Keposong<br />Kecamatan :
                        Tamansari<br />Kabupaten : Boyolali<br />Penggunaan Tanah : {{$p->status}}<br />Luas :
                        {{$p->dimohon}}<br /><br />Dengan batas - batas sebagai berikut :<br />Utara :
                        {{$p->utara}}<br />Timur : {{$p->timur}}<br />Selatan : {{$p->selatan}}<br />Barat :
                        {{$p->barat}}<br /><br />Bahwa bidang tanah tersebut saya kuasai / miliki sejak tahun
                        {{$p->perolehan2}} yang sampai saat ini terhadap bidang tanah dimaksud :<br />1. Saya kuasai /
                        miliki secara fisik dan terus menerus;<br />2. Tidak dijadikan jaminan suatu hutang;<br />3.
                        Tidak dalam keadaan sengketa atau keberatan dari pihak manapun;<br />4. Bukan merupakan aset
                        Pemerintah / Pemerintah Propinsi / Kabupaten/Kota / Desa/Kelurahan / BUMN/BUMD;<br />5. Tidak
                        berada / tidak termasuk dalam kawasan hutan;<br />6. Bea Perolehan Hak Atas Tanah dan Bangunan
                        (BPHTB) yang dikenakan atas perolehan hak atas tanah yang dimohon, menjadi tanggung jawab saya
                        sepenuhnya dan merupakan pajak atau bea terhutang bagi saya yang wajib dan akan saya lunasi
                        dengan NJOP {{$p->njop}} /M². (bila sudah ada NJOP);<br />7. Tanah tersebut saya peroleh melalui
                        Jual Beli, Waris, Hibah, Wasiat maka Pajak Penghasilan (PPh) yang dikenakan atas perolehan hak
                        atas tanah saya menjadi tanggung jawab sepenuhnya dan merupakan pajak atau bea terhutang bagi
                        saya dan yang wajib dilunasi oleh saya;<br />8. Di atas tanah yang dikuasai belum pernah
                        diterbitkan sesuatu hak atas tanah / sertipikat;<br />9. Bahwa alat bukti hak atas tanah yang
                        menjadi dasar pendaftaran PTSL ini adalah betul - betul yang saya punyai dan apabila terdapat
                        bukti pemilikan / penguasaan atas tanah dimaksud setelah dibuatnya pernyataan dan / atau telah
                        diterbitkan sertipikat maka dinyatakan tidak berlaku;<br />10.
                        .................................................................................... (Pernyataan
                        lain yang masih dianggap perlu)<br /> <br /> Surat Pernyataan ini saya buat dengan sebenar –
                        benarnya dengan penuh tanggung jawab baik secara perdata maupun secara pidana, dan apabila di
                        kemudian hari terdapat unsur – unsur yang tidak benar dalam pernyataan ini, maka segala akibat
                        yang timbul menjadi tanggung jawab saya sepenuhnya dan bersedia dituntut sesuai ketentuan hukum
                        yang berlaku, serta tidak akan melibatkan Kementrian Agraria dan Tata Ruang / Badan Pertanahan
                        Nasional, dan saya bersedia atas sertipikat yang saya terima dibatalkan oleh pejabat yang
                        berwenang.</span><br />
                </div>
            </div>
            <div id="halaman5">
                <div id="Demikian_Surat_Pernyataan_ini_">
                    <span>Demikian Surat Pernyataan ini saya buat di hadapan saksi – saksi :</span>
                </div>
                <div id="n__Nama__p-nama_saksi1_____NIK">
                    <span>1. Nama : {{$p->nama_saksi1}}<br /> NIK : {{$p->nik_saksi1}}<br /> Agama :
                        {{$p->agama_saksi1}}<br /> Usia :
                        {{$p->usia_saksi1}} Tahun<br /> Pekerjaan : {{$p->pekerjaan_saksi1}}<br /> Alamat :
                        {{$p->alamat_saksi1}}<br /><br /><br /><br /><br /><br /></span><br />
                </div>
                <div id="n__Nama__p-nama_saksi2_____NIK">
                    <span>2. Nama : {{$p->nama_saksi2}}<br /> NIK : {{$p->nik_saksi2}}<br /> Agama :
                        {{$p->agama_saksi2}}<br /> Usia :
                        {{$p->usia_saksi2}} Tahun<br /> Pekerjaan : {{$p->pekerjaan_saksi2}}<br /> Alamat :
                        {{$p->alamat_saksi2}}<br /><br /><br /><br /><br /><br /></span><br />
                </div>
                <div id="Dibuat_di__p-desa_Pada_tanggal">
                    <span>Dibuat di : {{$p->desa}}<br />Pada tanggal : {{$p->pengajuan}}<br /></span><br />
                </div>
                <div id="Saksi_-_saksi">
                    <span>Saksi - saksi</span>
                </div>
                <div id="n__p-nama_saksi1______________">
                    <span>1. {{$p->nama_saksi1}} (...........................)<br /><br /><br /><br />2.
                        {{$p->nama_saksi2}} (...........................)</span><br />
                </div>
                <div id="Yang_Membuat_Pernyataan_">
                    <span>Yang Membuat Pernyataan </span>
                </div>
                <div id="p-nama">
                    <span>{{$p->nama}}</span>
                </div>
                <div id="Surat_Pernyataan_Berdasarkan_S_bn">
                    <span>Surat Pernyataan<br />Berdasarkan Surat Direktur Jendral Hubungan Hukum Keagrariaan<br />Nomor
                        2936/20.1-400/x/2018, Tanggal 10 Oktober 2018</span><br />
                </div>
                <div id="n_Hal_1-_bo">
                    <span>-Hal 1-</span>
                </div>
            </div>
            <div id="halaman6">
                <div id="RISALAH_PENELITIAN_DATA_YURIDI">
                    <span>RISALAH PENELITIAN DATA YURIDIS<br />Desa / </span><span
                        style="text-decoration:line-through;">Kelurahan</span><span> : {{$p->desa}}<br />NIB :
                        {{$p->nib}}</span><br />
                </div>
                <svg class="Rectangle_6">
                    <rect id="Rectangle_6" rx="0" ry="0" x="0" y="0" width="614" height="37">
                    </rect>
                </svg>
                <div id="IDENTIFIKASI_TANAH_YANG_BERKEP">
                    <span>IDENTIFIKASI TANAH YANG BERKEPENTINGAN</span>
                </div>
                <svg class="Rectangle_7">
                    <rect id="Rectangle_7" rx="0" ry="0" x="0" y="0" width="614" height="79">
                    </rect>
                </svg>
                <div id="BIDANG_TANAH_LETAK_TANAH_Ds_p-">
                    <span>BIDANG TANAH<br />LETAK TANAH<br />Ds. {{$p->desa}} Kec. {{$p->kecamatan}}</span>
                </div>
                <svg class="Line_6" viewBox="0 0 1 116">
                    <path id="Line_6" d="M 0 0 L 0 116">
                    </path>
                </svg>
                <svg class="Line_7" viewBox="0 0 570 1">
                    <path id="Line_7" d="M 0 0 L 570 0">
                    </path>
                </svg>
                <svg class="Rectangle_8">
                    <rect id="Rectangle_8" rx="0" ry="0" x="0" y="0" width="614" height="279">
                    </rect>
                </svg>
                <div id="YANG_BERKEPENTINGAN">
                    <span>YANG BERKEPENTINGAN</span>
                </div>
                <svg class="Line_8" viewBox="0 0 1 224">
                    <path id="Line_8" d="M 0 0 L 0 224">
                    </path>
                </svg>
                <svg class="Line_9" viewBox="0 0 570 1">
                    <path id="Line_9" d="M 0 0 L 570 0">
                    </path>
                </svg>
                <div id="Nama_________p-nama_NIK_______">
                    <span>Nama : {{$p->nama}}<br />NIK : {{$p->nik}}<br />Pekerjaan : {{$p->pekerjaan}}<br />Alamat :
                        {{$p->alamat}} </span>
                </div>
                <svg class="Line_10" viewBox="0 0 570 1">
                    <path id="Line_10" d="M 0 0 L 570 0">
                    </path>
                </svg>
                <div id="Perorangan__Badan_Hukum_Tgl_La">
                    <span>Perorangan / </span><span style="text-decoration:line-through;">Badan
                        Hukum</span><br /><span>Tgl. Lahir : {{$p->tanggal_lahir}}<br />Umur : {{$p->usia}}
                        Tahun<br />Agama : {{$p->agama}}</span>
                </div>
                <svg class="Line_11" viewBox="0 0 1 132">
                    <path id="Line_11" d="M 0 0 L 0 132">
                    </path>
                </svg>
                <div id="Badan_Hukum___Badan_Hukum__Pem">
                    <span>Badan Hukum : Badan Hukum / Pemerintah Kab/Kota / Desa/Kelurahan / BUMN/BUMD<br />Akta
                        Pendirian : No. ............................................ Tgl.
                        ..............................................<br />Didaftar di Pengadilan Negeri :
                        ................................... Tgl. ..............................................
                    </span><br />
                </div>
                <svg class="Line_12" viewBox="0 0 570 1">
                    <path id="Line_12" d="M 0 0 L 570 0">
                    </path>
                </svg>
                <div id="Perhatian__Bila_yang_berkepent">
                    <span>Perhatian : Bila yang berkepentingan terdiri lebih dari satu (1) orang, sehingga ruang ini
                        tidak muat,<br />dapat disertai lampiran. PERHATIAN LIHAT LAMPIRAN</span><br />
                </div>
                <svg class="Line_13" viewBox="0 0 1 55">
                    <path id="Line_13" d="M 0 0 L 0 55">
                    </path>
                </svg>
                <svg class="Line_14" viewBox="0 0 570 60">
                    <path id="Line_14" d="M 570 0 L 0 60">
                    </path>
                </svg>
                <svg class="Rectangle_9">
                    <rect id="Rectangle_9" rx="0" ry="0" x="0" y="0" width="614" height="53">
                    </rect>
                </svg>
                <div id="DATA_TENTANG_PEMILIKAN_DAN_PEN">
                    <span>DATA TENTANG PEMILIKAN DAN PENGUASAAN HAK ATAS TANAH</span>
                </div>
                <div id="KEPEMILIKAN__PENGUASAAN_TANAH">
                    <span>KEPEMILIKAN / PENGUASAAN TANAH</span>
                </div>
                <svg class="Line_15" viewBox="0 0 1 52">
                    <path id="Line_15" d="M 0 0 L 0 52">
                    </path>
                </svg>
                <svg class="Line_16" viewBox="0 0 614 1">
                    <path id="Line_16" d="M 0 0 L 614 0">
                    </path>
                </svg>
                <svg class="Rectangle_10">
                    <rect id="Rectangle_10" rx="0" ry="0" x="0" y="0" width="614" height="612">
                    </rect>
                </svg>
                <svg class="Line_17" viewBox="0 0 1 611">
                    <path id="Line_17" d="M 0 0 L 0 611">
                    </path>
                </svg>
                <svg class="Line_18" viewBox="0 0 570 1">
                    <path id="Line_18" d="M 0 0 L 570 0">
                    </path>
                </svg>
                <svg class="Line_19" viewBox="0 0 1 584">
                    <path id="Line_19" d="M 0 0 L 0 584">
                    </path>
                </svg>
                <div id="Bukti_-_Bukti_Kepemilikan__Pen">
                    <span>Bukti - Bukti Kepemilikan / Penguasaan</span>
                </div>
                <div id="Sertipikat___Atas_Nama___">
                    <span>Sertipikat : <br />Atas Nama : </span><br />
                </div>
                <svg class="Line_20" viewBox="0 0 570 1">
                    <path id="Line_20" d="M 0 0 L 570 0">
                    </path>
                </svg>
                <div id="Warisan_Nama_Pewaris___Meningg">
                    <span>Warisan<br />Nama Pewaris :<br />Meninggal Tahun :<br />Surat Keterangan Warisan : Ada [ ]
                        Tidak Ada [ ] </span><span style="font-style:italic;font-weight:normal;">(Lengkapi dengan Surat
                        Keterangan)</span><br /><span>Surat Wasiat : Ada [ ] Tidak Ada [ ]</span><span
                        style="font-style:italic;font-weight:normal;"> (Lengkapi dengan Surat Keterangan)</span><br />
                </div>
                <svg class="Line_21" viewBox="0 0 570 1">
                    <path id="Line_21" d="M 0 0 L 570 0">
                    </path>
                </svg>
                <svg class="Line_22" viewBox="0 0 570 156">
                    <path id="Line_22" d="M 570 0 L 0 156">
                    </path>
                </svg>
                <div id="Hibah__Pemberian_Dilakukan_den">
                    <span>Hibah / Pemberian<br />Dilakukan dengan : </span><span
                        style="text-decoration:line-through;">Surat di Bawah Tangan / Akta PPAT /
                    </span><span>Lisan<br /> </span><span style="text-decoration:line-through;"> No. Akta PPAT :
                        ................................. Tgl. : ...........................</span><br /><span>
                    </span><span style="text-decoration:line-through;">Nama PPAT :
                        .......................................................................</span><br />
                </div>
                <svg class="Line_23" viewBox="0 0 570 1">
                    <path id="Line_23" d="M 0 0 L 570 0">
                    </path>
                </svg>
                <div id="Pembelian_Dilakukan_dengan____">
                    <span>Pembelian<br />Dilakukan dengan : Surat di Bawah Tangan / Kwitansi / Akta PPAT / Lisan<br />
                        No. Akta PPAT : ................................. Tgl. : ...........................<br /> Nama
                        PPAT : .......................................................................</span><br />
                </div>
                <svg class="Line_24" viewBox="0 0 570 1">
                    <path id="Line_24" d="M 0 0 L 570 0">
                    </path>
                </svg>
                <div id="Pelelangan_Risalah_Lelang_____">
                    <span>Pelelangan<br />Risalah Lelang : No. .......................... Tgl. :
                        ...........................<br />Tempat dan Nama Kantor Lelang :
                        .......................................................................</span><br />
                </div>
                <svg class="Line_25" viewBox="0 0 570 1">
                    <path id="Line_25" d="M 0 0 L 570 0">
                    </path>
                </svg>
                <div id="Putusan_Pemberian_Hak_Jabatan_">
                    <span>Putusan Pemberian Hak<br />Jabatan Pejabat yang Memutuskan :
                        .......................................................................<br />Surat Keputusan :
                        No. .......................... Tgl. : ...........................<br />Persyaratan : Telah
                        Dipenuhi [ ] Belum Dipenuhi [ ]</span><br />
                </div>
                <div id="Perwakafan_Akta_Pengganti_Ikra">
                    <span>Perwakafan<br />Akta Pengganti Ikrar Wakaf : No. .......................... Tgl. :
                        ...........................<br />Nadzir / Nadzir Sementara :
                        .......................................................................</span><br /><span
                        style="font-style:italic;font-weight:normal;font-size:9px;">( Apabila nadzir sementara, maka
                        mengacu pada Surat Edaran Menteri ATR / BPN No. 3/SE/X/2018 tanggal 9 Oktober 2018
                        )</span><br />
                </div>
                <svg class="Line_26" viewBox="0 0 570 1">
                    <path id="Line_26" d="M 0 0 L 570 0">
                    </path>
                </svg>
                <svg class="Line_27" viewBox="0 0 570 340">
                    <path id="Line_27" d="M 570 0 L 0 340">
                    </path>
                </svg>
                <div id="a">
                    <span>a</span>
                </div>
                <div id="b">
                    <span>b</span>
                </div>
                <div id="c">
                    <span>c</span>
                </div>
                <div id="d">
                    <span>d</span>
                </div>
                <div id="e">
                    <span>e</span>
                </div>
                <div id="f">
                    <span>f</span>
                </div>
                <div id="g">
                    <span>g</span>
                </div>
                <div id="n_">
                    <span>1</span>
                </div>
                <div id="A_c">
                    <span>A</span>
                </div>
                <div id="II">
                    <span>II</span>
                </div>
                <div id="n__c">
                    <span>1</span>
                </div>
                <div id="n__da">
                    <span>2</span>
                </div>
                <div id="I">
                    <span>I</span>
                </div>
            </div>
            <div id="halaman7">
                <svg class="Rectangle_11">
                    <rect id="Rectangle_11" rx="0" ry="0" x="0" y="0" width="615" height="156">
                    </rect>
                </svg>
                <div id="Lain__lain_Sebutkan__1_SKT_No_">
                    <span>Lain – lain, Sebutkan :<br />1. SKT No. {{$p->skt}}<br />2. C no.{{$p->no_c}}, Persil
                        no.{{$p->persil}},Kelas:{{$p->kelas}}<br />3. Surat Pernyataan Tgl.
                        {{$p->pengajuan}}<br />(Apabila bukti kepemilikan / penguasaan tidak lengkap atau tidak ada sama
                        sekali, maka dilengkapi dengan Surat Pernyataan Penguasaan / Kepemilikan bermaterai yang
                        disaksikan<br />2 (dua) orang saksi)</span><br />
                </div>
                <svg class="Line_28" viewBox="0 0 1 156">
                    <path id="Line_28" d="M 0 0 L 0 156">
                    </path>
                </svg>
                <svg class="Line_29" viewBox="0 0 1 156">
                    <path id="Line_29" d="M 0 0 L 0 156">
                    </path>
                </svg>
                <svg class="Rectangle_12">
                    <rect id="Rectangle_12" rx="0" ry="0" x="0" y="0" width="615" height="233">
                    </rect>
                </svg>
                <svg class="Line_30" viewBox="0 0 581 1">
                    <path id="Line_30" d="M 0 0 L 581 0">
                    </path>
                </svg>
                <div id="Bukti_Perpajakan">
                    <span>Bukti Perpajakan</span>
                </div>
                <div id="Uraian">
                    <span>Uraian</span>
                </div>
                <svg class="Line_31" viewBox="0 0 1 232">
                    <path id="Line_31" d="M 0 0 L 0 232">
                    </path>
                </svg>
                <svg class="Line_32" viewBox="0 0 1 233">
                    <path id="Line_32" d="M 0 0 L 0 233">
                    </path>
                </svg>
                <svg class="Ellipse_1">
                    <ellipse id="Ellipse_1" rx="12.5" ry="12.5" cx="12.5" cy="12.5">
                    </ellipse>
                </svg>
                <div id="a_Patok_D__Letter_C_Girik_Keti">
                    <span>a. Patok D / Letter C, Girik, Ketikir :<br /> Pajak Hasil Bumi<br />b. Verponding
                        Indonesia<br /><br />c. IPEDA / PBB / SPPT<br /><br />d. Lain – lain, sebutkan :<br />(bukti
                        terlampir)</span><br />
                </div>
                <svg class="Line_33" viewBox="0 0 580 1">
                    <path id="Line_33" d="M 0 0 L 580 0">
                    </path>
                </svg>
                <svg class="Line_34" viewBox="0 0 580 1">
                    <path id="Line_34" d="M 0 0 L 580 0">
                    </path>
                </svg>
                <div id="Kantor_yang_menerbitkan__Tahun">
                    <span>Kantor yang menerbitkan :<br />Tahun / Tanggal :<br />Kantor yang menerbitkan :<br />Tahun /
                        Tanggal :<br />Kantor yang menerbitkan :<br />Tahun / </span><span
                        style="text-decoration:line-through;">Tanggal</span><span> : 2021<br />Kantor yang menerbitkan
                        :<br />Tahun / Tanggal :</span><br />
                </div>
                <svg class="Line_35" viewBox="0 0 580 1">
                    <path id="Line_35" d="M 0 0 L 580 0">
                    </path>
                </svg>
                <svg class="Rectangle_13">
                    <rect id="Rectangle_13" rx="0" ry="0" x="0" y="0" width="615" height="141">
                    </rect>
                </svg>
                <div id="Kenyataan_Penguasaan_dan_Pengg">
                    <span>Kenyataan Penguasaan dan Penggunaan Tanah</span>
                </div>
                <div id="a_Pada_tahun_1960_dikuasai_ole">
                    <span>a. Pada tahun 1960 dikuasai oleh {{$p->nama_c}}<br />b. Berikutnya tahun {{$p->perolehan1}}
                        dikuasai / dimiliki oleh {{$p->pemilik_awal}} dengan cara Hibah Lisan ;<br />c. Berikutnya pada
                        tahun {{$p->perolehan2}} dikuasai / dimiliki oleh {{$p->nama}} dengan cara Hibah Lisan<br />d.
                        Penggunaan Tanah : Sawah [ ] Ladang [ ] Kebun [ ] Kolam Ikan [ ] Perumahan [ ]</span><br />
                </div>
                <svg class="Line_36" viewBox="0 0 1 140">
                    <path id="Line_36" d="M 0 0 L 0 140">
                    </path>
                </svg>
                <svg class="Line_37" viewBox="0 0 580 1">
                    <path id="Line_37" d="M 0 0 L 580 0">
                    </path>
                </svg>
                <div id="n__dy">
                    <span>2</span>
                </div>
                <div id="n__dz">
                    <span>3</span>
                </div>
                <svg class="Rectangle_14">
                    <rect id="Rectangle_14" rx="0" ry="0" x="0" y="0" width="615" height="105">
                    </rect>
                </svg>
                <div id="a_Jenisnya__Rumah_Hunian______">
                    <span>a. Jenisnya : Rumah Hunian [ ] Gudang [ ] Kantor [ ] Bengkel [ ] Toko [ ] Pagar [ ]<br />
                        Rumah Ibadah [ ] Lain – Lain [ ] .............................................................
                        (sebutkan)<br />b. Tidak Ada Bangunan [ ]</span><br />
                </div>
                <div id="Bangunan_di_Atas_Tanah">
                    <span>Bangunan di Atas Tanah</span>
                </div>
                <svg class="Line_38" viewBox="0 0 1 105">
                    <path id="Line_38" d="M 0 0 L 0 105">
                    </path>
                </svg>
                <svg class="Line_39" viewBox="0 0 580 1">
                    <path id="Line_39" d="M 0 0 L 580 0">
                    </path>
                </svg>
                <div id="n__d">
                    <span>4</span>
                </div>
                <img id="Image_2" src="Image_2.png" srcset="{{ asset('Image_2.png')}} 1x, Image_2@2x.png 2x">

            </div>
            <div id="halaman8">
                <svg class="Rectangle_15">
                    <rect id="Rectangle_15" rx="0" ry="0" x="0" y="0" width="619" height="206">
                    </rect>
                </svg>
                <div id="Perkara__Sengketa_Atas_Tanah_a">
                    <span>Perkara / Sengketa Atas Tanah<br />a. Sedang dalam Perkara ( kalau ada uraikan ) : -<br />b.
                        Sedang dalam Sengketa ( kalau ada uraikan ) : -</span>
                </div>
                <svg class="Line_40" viewBox="0 0 1 226">
                    <path id="Line_40" d="M 0 0 L 0 226">
                    </path>
                </svg>
                <svg class="Line_41" viewBox="0 0 619 1">
                    <path id="Line_41" d="M 0 0 L 619 0">
                    </path>
                </svg>
                <svg class="Line_42" viewBox="0 0 583 1">
                    <path id="Line_42" d="M 0 0 L 583 0">
                    </path>
                </svg>
                <div id="Yang_Mengumpulkan_Data">
                    <span>Yang Mengumpulkan Data</span>
                </div>
                <div id="Yang_Berkepentingan__Kuasanya">
                    <span>Yang Berkepentingan / Kuasanya</span>
                </div>
                <svg class="Line_43" viewBox="0 0 585 1">
                    <path id="Line_43" d="M 0 0 L 585 0">
                    </path>
                </svg>
                <svg class="Line_44" viewBox="0 0 1 131">
                    <path id="Line_44" d="M 0 0 L 0 131">
                    </path>
                </svg>
                <div id="n__p-satgas__2_p-puldadis">
                    <span>1. {{$p->satgas}}<br /><br />2. {{$p->puldadis}}</span>
                </div>
                <div id="n__">
                    <span>(............................)<br /><br />(...........................)</span>
                </div>
                <div id="p-nama_ej">
                    <span>{{$p->nama}}</span>
                </div>
                <svg class="Rectangle_16">
                    <rect id="Rectangle_16" rx="0" ry="0" x="0" y="0" width="619" height="95">
                    </rect>
                </svg>
                <div id="KESIMPULAN_PANITIA_AJUDIKASI_P">
                    <span>KESIMPULAN PANITIA AJUDIKASI PENDAFTARAN TANAH SISTEMATIS LENGKAP<br />KANTOR PERTANAHAN
                        KABUPATEN BOYOLALI<br />Berdasarkan pada penilaian atas fakta dan data yang telah dikumpulkan,
                        maka dengan ini disimpulkan bahwa : </span>
                </div>
                <div id="Pemiliknya__yang_menguasai_tan">
                    <span>Pemiliknya / yang menguasai tanah adalah : {{$p->nama}}</span>
                </div>
                <svg class="Line_45" viewBox="0 0 1 94">
                    <path id="Line_45" d="M 0 0 L 0 94">
                    </path>
                </svg>
                <svg class="Line_46" viewBox="0 0 585 1">
                    <path id="Line_46" d="M 0 0 L 585 0">
                    </path>
                </svg>
                <svg class="Line_47" viewBox="0 0 585 1">
                    <path id="Line_47" d="M 0 0 L 585 0">
                    </path>
                </svg>
                <img id="Image_3" src="Image_3.png" srcset="{{ asset('Image_3.png')}} 1x, Image_3@2x.png 2x">

            </div>
            <div id="halaman9">
                <svg class="Rectangle_17">
                    <rect id="Rectangle_17" rx="0" ry="0" x="0" y="0" width="626" height="547">
                    </rect>
                </svg>
                <div id="SANGGAHAN__KEBERATAN">
                    <span>SANGGAHAN / KEBERATAN</span>
                </div>
                <div id="Uraian_singkat_perkara__sengke">
                    <span>Uraian singkat perkara / sengketa / sanggahan : <br />a. Terdapat perkara / sengketa /
                        sanggahan mengenai batas / pemilikan tanah antara yang berkepentingan dengan <br /> ( nama )
                        .........................................................................................................<br />
                        Gugatan ke Pengadilan telah diajukan / tidak diajukan<br />b. Selama pengumuman ada / tidak ada
                        yang menyanggah<br />c. Nama Penyanggah :
                        ...........................................................................................................................<br />
                        Alamat :
                        ...........................................................................................................................<br />d.
                        Alasan Penyanggah :
                        ...........................................................................................................................<br />
                        Beserta surat buktinya
                        ........................................................................................................................</span><br /><span
                        style="font-style:italic;font-weight:normal;">( c dan d diisi bila ada yang menyanggah
                        )</span><br />
                </div>
                <svg class="Line_48" viewBox="0 0 1 547">
                    <path id="Line_48" d="M 0 0 L 0 547">
                    </path>
                </svg>
                <svg class="Line_49" viewBox="0 0 626 1">
                    <path id="Line_49" d="M 0 0 L 626 0">
                    </path>
                </svg>
                <svg class="Line_50" viewBox="0 0 626 1">
                    <path id="Line_50" d="M 0 0 L 626 0">
                    </path>
                </svg>
                <div id="IV">
                    <span>IV</span>
                </div>
                <div id="n__ez">
                    <span>1</span>
                </div>
                <div id="Penyelesaian_Perkara__Sengketa">
                    <span>Penyelesaian Perkara / Sengketa / Sanggahan : </span>
                </div>
                <div id="n__e">
                    <span>2</span>
                </div>
                <svg class="Line_51" viewBox="0 0 626 1">
                    <path id="Line_51" d="M 0 0 L 626 0">
                    </path>
                </svg>
                <div id="KESIMPULAN_AKHIR_KETUA_PANITIA">
                    <span>KESIMPULAN AKHIR KETUA PANITIA AJUDIKASI<br />PENDAFTARAN TANAH SISTEMATIS
                        LENGKAP</span><br />
                </div>
                <svg class="Line_52" viewBox="0 0 626 1">
                    <path id="Line_52" d="M 0 0 L 626 0">
                    </path>
                </svg>
                <div id="Nama_Pemilik__Yang_Berkepentin">
                    <span>Nama Pemilik / Yang Berkepentingan : {{$p->nama}}</span>
                </div>
                <svg class="Line_53" viewBox="0 0 626 1">
                    <path id="Line_53" d="M 0 0 L 626 0">
                    </path>
                </svg>
                <div id="Status_Tanah__Tanah_Milik__Tan">
                    <span>Status Tanah : Tanah Milik / </span><span style="text-decoration:line-through;">Tanah
                        Negara</span>
                </div>
                <svg class="Line_54" viewBox="0 0 626 1">
                    <path id="Line_54" d="M 0 0 L 626 0">
                    </path>
                </svg>
                <div id="Pertimbangan_dalam_hal_status_">
                    <span>Pertimbangan dalam hal status : <br />a. Berdasarkan data fisik dan data yuridis yang disahkan
                        dengan Berita Acara Pengesahan Pengumuman Data Fisik <br /> dan Data Yuridis No.
                        ............................................ Tgl. ................................. hak atas
                        tanah ini diakui /</span><span style="text-decoration:line-through;"> ditegaskan
                    </span><br /><span> konversinya menjadi Hak Milik dengan pemegang haknya {{$p->nama}} (K1)<br />b.
                        Diproses melalui Pemberian Hak berupa HM / HGB / HP (K1)<br />c. Tanah dalam proses perkara /
                        sengketa dengan Nomor Perkara ................... Tgl. ........................ (K2)<br />d.
                        Tanah belum dapat dibukukan dan diterbitkan sertipikat sehingga dibuat dalam daftar <br /> tanah
                        ............................................................................................................................
                        (K3.1, K3.2)</span><br />
                </div>
                <div id="V">
                    <span>V</span>
                </div>
                <div id="n__fb">
                    <span>1</span>
                </div>
                <div id="n__fc">
                    <span>2</span>
                </div>
                <div id="n__fd">
                    <span>3</span>
                </div>
                <svg class="Line_55" viewBox="0 0 591 1">
                    <path id="Line_55" d="M 0 0 L 591 0">
                    </path>
                </svg>
                <svg class="Line_56" viewBox="0 0 591 62">
                    <path id="Line_56" d="M 0 62 L 591 0">
                    </path>
                </svg>
                <svg class="Line_57" viewBox="0 0 591 1">
                    <path id="Line_57" d="M 591 0 L 0 0">
                    </path>
                </svg>
                <div id="Catatan__Coret_seluruh_kata__k">
                    <span>Catatan : Coret seluruh kata – kata No. 3 bila tidak diperlukan</span>
                </div>
                <img id="Image_4" src="Image_4.png" srcset="{{ asset('Image_4.png')}} 1x, Image_4@2x.png 2x">

            </div>
            <div id="Halaman10">
                <svg class="Rectangle_19">
                    <rect id="Rectangle_19" rx="0" ry="0" x="0" y="0" width="627" height="781">
                    </rect>
                </svg>
                <div id="KEPUTUSAN_KETUA_PANITIA_AJUDIK">
                    <span>KEPUTUSAN KETUA PANITIA AJUDIKASI<br />PENDAFTARAN TANAH SISTEMATIS LENGKAP</span><br />
                </div>
                <svg class="Line_58" viewBox="0 0 627 1">
                    <path id="Line_58" d="M 0 0 L 627 0">
                    </path>
                </svg>
                <div id="Mengingat_Instruksi_Presiden_N">
                    <span>Mengingat Instruksi Presiden Nomor 2 Tahun 2018 tentang Percepatan Pendaftaran Tanah
                        Sistematis Lengkap jo. Peraturan Menteri Ag raria dan Tata Ruang / Kepala Badan Pertanahan
                        Nasional Nomor 6 Tahun 2018 tentang Pendaftaran Tanah Sistematis Lengkap dan Surat Keputusan
                        Kepala Kantor Pertanahan Kabupaten Boyolali tanggal 04 Januari 2021 Nomor
                        78/SK.33.09.UP.01.01/I/2021 tentang Penetapan Lokasi PTSL di Desa / Kelurahan Keposong,
                        Kecamatan Tamansari, Kabupaten Boyolali serta memperhatikan kesimpulan Panitia Ajudikasi PTSL
                        yang<br /> tercantum dalam Risalah Penelitian Data Yuridis, maka :<br /><br />1. Berdasarkan
                        data fisik dan data yuridis yang disahkan dengan Berita Acara Pengesahan Pengumuman data fisik
                        dan data yuridis Nomor ............................................... Tgl.
                        .............................. (D.I. 202), hak atas tanah ini </span><span
                        style="text-decoration:line-through;">ditegaskan konversinya menjadi Hak Milik</span><span> /
                        diakui sebagai Hak Milik dengan pemegang hak {{$p->nama}} tanpa / </span><span
                        style="text-decoration:line-through;">dengan</span><span> catatan ada keberatan (</span><span
                        style="text-decoration:line-through;"> tidak ada keberatan / sedang diproses di Pengadilan
                        dengan/tanpa sita jaminan</span><span> ) (K1)</span><br />
                </div>
                <div id="n__Berdasarkan_data_fisik_dan_">
                    <span>2. Berdasarkan data fisik dan data yuridis yang disahkan dengan Berita Acara Pengesahan
                        Pengumuman data fisik dan data yuridis Nomor ...............................................
                        Tgl. .............................. (D.I. 202), bidang tanah ini statusnya adalah Tanah Negara.
                        Kepada yang menempati / menguasai, nama ................................... dapat / tidak dapat
                        diusulkan untuk diberikan Hak Milik / Hak Guna Bangunan / Hak Pakai (K1)<br /><br />3. Kepada
                        yang menempati / menguasai, nama {{$p->nama}} dapat/</span><span
                        style="text-decoration:line-through;"> tidak dapat</span><span> diusulkan untuk diberikan Hak
                        Milik / </span><span style="text-decoration:line-through;">Hak Guna Bangunan / Hak
                        Pakai</span><span> (K1)*)<br /><br />4. Berdasarkan data fisik dan data yuridis yang disahkan
                        dengan Berita Acara Pengesahan Pengumuman data fisik dan data yuridis Nomor
                        ................................................. Tgl. ............................... (D.I.
                        202), bidang tanah yang diuraikan pada Risalah Penelitian Data Yuridis ini ada dalam Perkara /
                        Sengketa, sehingga proses sertipikatnya ditunda sampai diterbitkan Keputusan Lembaga Peradilan
                        yang telah mempunyai kekuatan hukum tetap / hasil musyawarah menentukan pihak yang berhak /
                        mediasi (K2)</span><br />
                </div>
                <svg class="Ellipse_2">
                    <ellipse id="Ellipse_2" rx="15" ry="15" cx="15" cy="15">
                    </ellipse>
                </svg>
                <svg class="Ellipse_3">
                    <ellipse id="Ellipse_3" rx="15" ry="15" cx="15" cy="15">
                    </ellipse>
                </svg>
                <div id="n_5__Biaya_Perolehan_Tanah_dan">
                    <span><br />5. Biaya Perolehan Tanah dan Bangunan (BPHTB) :<br /> a. Lunas<br /> b. Terhutang sesuai
                        dengan Surat Pernyataan Nomor ................................. Tgl.
                        ..............................<br /><br />6. Pajak Penghasilan (PPh) :<br /> a. Lunas<br /> b.
                        Terhutang sesuai dengan Surat Pernyataan Nomor ................................. Tgl.
                        ..............................<br /><br />Apabila di kemudian hari ternyata ada bukti yang lebih
                        kuat dan sah yang telah dibuktikan sesuai dengan peraturan perundang – undangan, maka keputusan
                        ini dinyatakan tidak berlaku.</span><br />
                </div>
                <svg class="Line_60" viewBox="0 0 627 1">
                    <path id="Line_60" d="M 0 0 L 627 0">
                    </path>
                </svg>
                <svg class="Line_61" viewBox="0 0 627 69">
                    <path id="Line_61" d="M 0 69 L 627 0">
                    </path>
                </svg>
                <svg class="Line_62" viewBox="0 0 627 1">
                    <path id="Line_62" d="M 627 0 L 0 0">
                    </path>
                </svg>
                <svg class="Line_63" viewBox="0 0 627 1">
                    <path id="Line_63" d="M 0 0 L 627 0">
                    </path>
                </svg>
                <svg class="Line_64" viewBox="0 0 627 1">
                    <path id="Line_64" d="M 627 0 L 0 0">
                    </path>
                </svg>
                <svg class="Line_65" viewBox="0 0 627 83">
                    <path id="Line_65" d="M 627 0 L 0 83">
                    </path>
                </svg>
                <div id="Catatan___-_Berikan_tanda_ling">
                    <span>Catatan : <br />- Berikan tanda lingkaran untuk nomor yang dipilih<br />*) Coret semua
                        ketentuan yang tidak diperlukan</span><br />
                </div>
                <img id="Image_5" src="Image_5.png" srcset="{{ asset('Image_5.png')}} 1x, Image_5@2x.png 2x">

                <div id="VI">
                    <span>VI</span>
                </div>
                <svg class="Line_66" viewBox="0 0 1 45">
                    <path id="Line_66" d="M 0 0 L 0 45">
                    </path>
                </svg>
            </div>
        </div>
    </body>
    @endforeach
</section>