@extends('layout.app')

@section('content')
  <div class="header-img">
    <img src="{{ asset('assets/image/11.png') }}" width="90%" height="60%" class="pt-3">
  </div>
  <h2 style="text-align: left">JAKARTA</h2>
  
  <div id="accordion" class="section-lokasi">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Jakarta Pusat
          </button>
        </h5>
      </div>
  
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Area</th>
                <th scope="col">Nama Toko</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jakarta Pusat</td>
                <td>SUMUR BATU</td>
                <td>JL SUMUR BATU NO. 8 B, RT 004, RW. 003, KEL. SUMUR BATU, KEC. KEMAYORAN, JAKARTA PUSAT</td>
              </tr>
              <tr>
              
                <td></td>
                <td>BENHIL</td>
                <td>JL. BENDUNGAN HILIR RAYA NO. 41, RT. 003, RW. 003, KEL. BENDUNGAN HILIR, KEC. TANAH ABANG, JAKARTA PUSAT
                </td>
              </tr>
              <tr>
              
                <td></td>
                <td>KEBON KACANG</td>
                <td>JL. KEBON KACANG IX NO. 75 B, RT. 002, RW. 002, KEL. KEBON KACANG, KEC. TANAH ABANG, JAKARTA PUSAT
                </td>
              </tr>
              <tr>
                <td></td>
                <td>CEMPAKA PUTIH RAYA</td>
                <td>JL. CEMPAKA PUTIH RAYA NO.14 JAKARTA PUSAT RT.07 RW.08 KEL. CEMPAKA PUTIH TIMUR KEC. CEMPAKA PUTIH.
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PERCETAKAN NEGARA 2</td>
                <td>JL. PERCETAKAN NEGARA II BLOK B NO.12B JOHAR BARU RT 2 RW 4 KEL. JOHAR BARU KEC. JOHAR BARU JAKARTA PUSAT 10560
                </td>
              </tr>
              <tr>
                <td></td>
                <td>KRAMAT SENTIONG	</td>
                <td>JL. KRAMAT SENTIONG 53 A RT.11 RW.06 KEL. KRAMAT KEC. SENEN JAKARTA PUSAT 10450
                </td>
              </tr>
              <tr>
                <td></td>
                <td>JIUNG</td>
                <td>JL. SUKAMULIA IV NO.160 RT.011 RW. 06 KEL. HARAPAN MULYA KEC. KEMAYORAN JAKARTA PUSAT 10640
                </td>
              </tr>
              <tr>
                <td></td>
                <td>CIBUBUR 3</td>
                <td>JL. CIBUBUR I NOMOR 7 C RT.03 RW.012 KEL. CIBUBUR KEC. CIRACAS JAKARTA TIMUR 13720
                </td>
              </tr>
              <tr>
                <td></td>
                <td>HOWITZER KEMAYORAN</td>
                <td>JL. HOWITZER RAYA NO.8 RT.12 RW.02 KEL. SUMUR BATU KEC. KEMAYORAN JAKARTA PUSAT 10640
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Jakarta Barat
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Area</th>
                <th scope="col">Nama Toko</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jakarta Barat</td>
                <td>TANJUNG DUREN</td>
                <td>JL. PEGANGSAAN NO.3 RT.024 RW.027 KEL. PEGANGSAAN DUA KEC. KELAPA GADING JAKARTA UTARA 14250
                </td>
              </tr>
              <tr>
                <td></td>
                <td>CITY PARK CENGKARENG</td>
                <td>JL. TANJUNG DUREN RAYA NO. 7.A, RT. 010, RW. 002, KEL. TANJUNG DUREN, KEC. GROGOL PETAMBURAN, JAKARTA BARAT
                </td>
              </tr>
              <tr>
                <td></td>
                <td>KEMANGGISAN</td>
                <td>RUKO CITY PARK BLOK L NO. 09, JL. OUTERING ROAD / JL. KAMAL RAYA, RT. 001, RW. 002, KEL. CENGKARENG TIMUR, KEC. CENGKARENG, JAKARTA BARAT</td>
              </tr>
              <tr>
                <td></td>
                <td>GROGOL</td>
                <td>JL. DR. SUSILO I NO. 18C, RT. 013, RW. 003, KEL. GROGOL, KEC. GROGOL PETAMBURAN, JAKARTA BARAT</td>
              </tr>
              <tr>
                <td></td>
                <td>KALIDERES</td>
                <td>JL. PETA SELATAN NO. 77, KOMPLEKS RUKO DUTA INDAH ALPHA INDAH 1 BLOK A NO. 6, KEL. KALIDERES, KEC. KALIDERES, JAKARTA BARAT
                </td>
              </tr>
              <tr>
                <td></td>
                <td>KEAMANAN</td>
                <td>JL. KEAMANAN NO. 37 A, KEL. KEAGUNGAN, KEC. KEAGUNGAN, JAKARTA BARAT
                </td>
              </tr>
              <tr>
                <td></td>
                <td>MENCENG RAYA</td>
                <td>JL. MENCENG RAYA NO. 21 & 22 KAV. BLOK. B.4, , RT. 003, RW. 007, KEL. TEGAL ALUR, KEC. KALIDERES, JAKARTA BARAT
                </td>
              </tr>
              <tr>
                <td></td>
                <td>JELAMBAR 2</td>
                <td>JL. JELAMBAR UTAMA RAYA NO. 12-A, KEL. JELAMBAR BARU, KEC. GROGOL PETAMBURAN, JAKARTA BARAT
                </td>
              </tr>
              <tr>
                <td></td>
                <td>MERUYA ILIR</td>
                <td>JL. MERUYA UTARA NO. 9A, KEL. MERUYA UTARA, KEC. KEMBANGAN, JAKARTA BARAT
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Jakarta Timur
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Area</th>
                <th scope="col">Nama Toko</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jakarta Timur</td>
                <td>PONDOK KELAPA</td>
                <td>JL. RAYA PONDOK KELAPA BLOK B.14 NO. 5 A, RT. 006, RW. 004, KEL. PONDOK KELAPA, KEC. DUREN SAWIT, JAKARTA TIMUR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>KALISARI</td>
                <td>JL. H. HASAN NO. 48, RT. 005, RW. 002, KEL. BARU, KEC. PASAR REBO, JAKARTA TIMUR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PONDOK BAMBU</td>
                <td>RUKO UNIKO NO. 3 B, PASAR PONDOK BAMBU, KEL. PONDOK BAMBU, KEC. DUREN SAWIT, JAKARTA TIMUR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PS KOTA WISATA CIBUBUR</td>
                <td>RUKO FRESH MARKET, WISATA, BLOK FMR.1, NO.2, KEL. CIANGSANA, KEC. GUNUNG PUTRI, BOGOR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>BUARAN</td>
                <td>JL. RAYA PERUMNAS NO. 86, RT. 001, RW. 014, KEL. KLENDER, KEC. DUREN SAWIT, JAKARTA TIMUR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>KLENDER</td>
                <td>JL. RAYA WIJAYA KUSUMA BLOK 23, KAV. 4 A, RT. 005, RW. 009, KEL. MALAKA JAYA, KEC. DUREN SAWIT, JAKARTA TIMUR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>DUREN SAWIT</td>
                <td>JL. KOLONEL SUGIONO NO. 15C, RT. 014, RW. 006, KEL. DUREN SAWIT, KEC. DUREN SAWIT, JAKARTA TIMUR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>CIPAYUNG</td>
                <td>JL. RAYA CIPAYUNG NO. 1, RT. 001, RW. 008, KEL. CIPAYUNG, KEC. CIPAYUNG, JAKARTA TIMUR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>RADAR AURI</td>
                <td>JL. RADAR AURI RT. 005, RW. 014, KEL. CIBUBUR, KEC. CIRACAS, JAKARTA TIMUR
                </td>
              </tr>
            </tbody>
          </table>        
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingFour">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
            Jakarta Utara
          </button>
        </h5>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Area</th>
                <th scope="col">Nama Toko</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jakarta Utara</td>
                <td>SUNTER INDAH</td>
                <td>JL. TAMAN SUNTER INDAH BLOK HJ 2, KAV. 17, KEL. SUNTER JAYA, KEC. TANJUNG PRIOK, JAKARTA UTARA
                </td>
              </tr>
              <tr>
                <td></td>
                <td>MUARA KARANG 2</td>
                <td>JL. PLUIT KARANG JELITA NO. 9 A, BLOK Y-5 BARAT KAV. 32, KEL. PLUIT, KEC. PENJARINGAN, JAKARTA UTARA
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PADEMANGAN</td>
                <td>JL. PADEMANGAN III GG. 25, NO. 29 A, RT. 004, RW. 002, KEL. PADEMANGAN TIMUR, KEC. PADEMANGAN, JAKARTA UTARA
                </td>
              </tr>
              <tr>
                <td></td>
                <td>SUMAGUNG</td>
                <td>JL. SUMMARECON AGUNG III KAV BLOK N2-16, PERUMAHAN KELAPA GADING PERMAI, KEL. KELAPA GADING TIMUR, KEC. KELAPA GADING, JAKARTA UTARA
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PIK</td>
                <td>RUKO FRESH MARKET PANTAI INDAH KAPUK NO. 07, KEL. KAMAL MUARA, KEC. KALIDERES, JAKARTA UTARA
                </td>
              </tr>
              <tr>
                <td></td>
                <td>ANCOL</td>
                <td>JL. ANCOL BARAT VIII/1 KEL. ANCOL, KEC. PADEMANGAN JAKARTA UTARA, DKI JAKARTA
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PADEMANGAN 2</td>
                <td>JL. PADEMANGAN 2 GG. 22, RT. 001, RW. 002, KEL. PADEMANGAN TIMUR, KEC. PADEMANGAN, JAKARTA UTARA

                </td>
              </tr>
              <tr>
                <td></td>
                <td>KELAPA GADING 5	</td>
                <td>JL BOULEVARD RAYA BLOK PD 9 / NO 6 RT/RW 10/18 KEL.PEGANGSAAN DUA KEC.KELAPA GADING
                </td>
              </tr>
              <tr>
                <td></td>
                <td>SUNTER JAYA	</td>
                <td>JL.SESPAKES 1 RT 02 RW 05 KEL. SUNTER JAYA KEC. TANJUNG PRIOK JAKARTA UTARA 1435

                </td>
              </tr>
            </tbody>
          </table>        
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingFive">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
            Jakarta Selatan
          </button>
        </h5>
      </div>
      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Area</th>
                <th scope="col">Nama Toko</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jakarta Selatan</td>
                <td>RAGUNAN</td>
                <td>JL. RAYA RAGUNAN NO. 14, RT. 002, RW. 007, KEL. JATIPADANG, KEC. PASAR MINGGU, JAKARTA SELATAN
                </td>
              </tr>
              <tr>
                <td></td>
                <td>KEMANG</td>
                <td>JL. BANGKA RAYA NO. 40 F, RT. 014/RW. 003, KEL. PELA MAMPANG, KEC. MAMPANG PRAPATAN, JAKARTA SELATAN

                </td>
              </tr>
              <tr>
                <td></td>
                <td>KARANG TENGAH	</td>
                <td>JL. KARANG TENGAH RAYA NO. 25 D, RT. 004/RW. 003, KEL. LEBAK BULUS, KEC. CILANDAK, JAKARTA SELATAN
                </td>
              </tr>
              <tr>
                <td></td>
                <td>JAGAKARSA</td>
                <td>JL. M. KAHFI NO. 99, KEL. JAGAKARSA, KEC. JAGAKARSA, JAKARTA SELATAN
                </td>
              </tr>
              <tr>
                <td></td>
                <td>KAHFI 2 JAGAKARSA	</td>
                <td>JL. MOH. KAHFI II, RT, 004, RW. 007, KEL. CIPEDAK, KEC. JAGAKARSA, JAKARTA SELATAN
                </td>
              </tr>
              <tr>
                <td></td>
                <td>TEBET</td>
                <td>JL. TEBET TIMUR DALAM RAYA NO. 61 A, RT. 001, RW. 006, BLOK NN PERSIL NO. 1420 C DAN BLOK PP PERSIL NO. 1420 D, KEL. TEBET, KEC. TEBET, JAKARTA SELATAN
                </td>
              </tr>
              <tr>
                <td></td>
                <td>CIDODOL</td>
                <td>JL. PANJANG NO. 12 A, RT. 001, RW. 008, KEL. CIPULIR, KEC. KEBAYORAN LAMA, JAKARTA SELATAN
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PESANGGRAHAN 2</td>
                <td>JL. GARUDA NO. 32-33, KEL. PESANGGRAHAN, KEC. PESANGGRAHAN, JAKARTA SELATAN
                </td>
              </tr>
              <tr>
                <td></td>
                <td>TANAH KUSIR</td>
                <td>JL. RC VETERAN NO. 17, RT. 04, RW. 012, KEL. BINTARO, KEC. PESANGGRAHAN, JAKARTA SELATAN
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <h2 style="text-align: left">JAWA</h2>
  
  <div id="accordion" class="section-lokasi">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Jawa Barat
          </button>
        </h5>
      </div>
  
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Area</th>
                <th scope="col">Nama Toko</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jawa Barat</td>
                <td>BOJONG BANDUNG</td>
                <td>RUKO BOJONG RAYA NO 93, RT 02 RW 02 KEL CARINGIN, KEC BANDUNG KULOM, BANDUNG
                </td>
              </tr>
              <tr>
              
                <td></td>
                <td>PASAR SEGAR BANDUNG	</td>
                <td>JL GEGER KALONG HILIR 50A – LT 1, RT 04 RW 04 KEL GEGERKALONG KEC SUKASARI BANDUNG UTARA
                </td>
              </tr>
              <tr>
              
                <td></td>
                <td>GEGER KALONG</td>
                <td>JL GEGER KALONG HILIR 50A – LT 1, RT 04 RW 04 KEL GEGERKALONG KEC SUKASARI BANDUNG UTARA
                </td>
              </tr>
              <tr>
                <td></td>
                <td>SUKAMENAK	</td>
                <td>JL. SUKAMENAK NO.55A KEL SAYATI, KEC MARGAHAYU BANDUNG SELATAN
                </td>
              </tr>
              <tr>
                <td></td>
                <td>TOKO TANI BOGOR	</td>
                <td>JL. TENTARA PELAJAR JL. CIMANGGU BARATA NO.01, MENTENG, KEC. BOGOR BAR., KOTA BOGOR, JAWA BARAT 16162
                </td>
              </tr>
              <tr>
                <td></td>
                <td>CIKONENG	</td>
                <td>PFM CIKONENG JL CIKONENG BLOK R NO.7 BOJONG SOANG BANDUNG TIMUR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>BATU NUGGAL	</td>
                <td>JL. BATUNUNGGAL INDAH RAYA NO. 233 KOMPLEK RUKO BATUNUNGGAL BANDUNG SELATAN JAWA BARAT 40226
                </td>
              </tr>
              <tr>
                <td></td>
                <td>SEDERHANA	</td>
                <td>JL.SEDERHANA NO 36 RT 7 RW 8 KEL. PASTEUR KEC. SUKAJADI BANDUNG
                </td>
              </tr>
              <tr>
                <td></td>
                <td>CIWASTRA	</td>
                <td>JL RANCASAWO RT 04 / RW 09 KEL MEKARJAYA KEC. MARGACINTA KOTA BANDUNG
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Jawa Timur
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Area</th>
                <th scope="col">Nama Toko</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jawa Timur</td>
                <td>DELTA NIAGA SELATAN	</td>
                <td>RUKO DELTA NIAGA SELATAN NO. 05
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PUCANG ANOM	</td>
                <td>JL. PUCANG ANOM NO. 14
                </td>
              </tr>
              <tr>
                <td></td>
                <td>BERBEK INDUSTRI	</td>
                <td>JL. BERBEK INDUSTRI I NO. 24 (LAHAN AREA KANTOR PFI BERBEK)
              </tr>
              <tr>
                <td></td>
                <td>NGORO</td>
                <td>NGORO INDUSTRI PERSADA BLOK U / 11 – 12, KEC. NGORO / KEL LO LAWANG
              </tr>
              <tr>
                <td></td>
                <td>WAGE</td>
                <td>TARUNA KAV 215 , KEL. WAGE – SIDOARJO
                </td>
              </tr>
              <tr>
                <td></td>
                <td>MONGINSIDI	</td>
                <td>JL. MONGINSIDI KAV DPRD 3A, KEL SIDOKLUMPUK – SIDOARJO
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PONDOK JATI	</td>
                <td>PERUMAHAN PONDOK JATI BLOK AL – 1A , KEL JATI – SIDOARJO
                </td>
              </tr>
              <tr>
                <td></td>
                <td>DRIYOREJO	</td>
                <td>RUKO PURI PERMATA KAV 16A KEC. DRIYOREJO, KAB GRESIK GRESIK</td>
              </tr>
              <tr>
                <td></td>
                <td>KARAH AGUNG	</td>
                <td>RUKO KARAH AGUNG 42B KEC. JAMBANGAN, KEL KARAH SURABAYA
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Jawa Tengah
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Area</th>
                <th scope="col">Nama Toko</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jawa Tengah</td>
                <td>IMAM BONJOL SEMARANG</td>
                <td>JL. LAMPER SARI 32 B KEL. LAMPER KIDUL KEC. SEMARANG SELATAN
                </td>
              </tr>
              <tr>
                <td></td>
                <td>KALISARI</td>
                <td>JL. H. HASAN NO. 48, RT. 005, RW. 002, KEL. BARU, KEC. PASAR REBO, JAKARTA TIMUR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PONDOK BAMBU</td>
                <td>RUKO UNIKO NO. 3 B, PASAR PONDOK BAMBU, KEL. PONDOK BAMBU, KEC. DUREN SAWIT, JAKARTA TIMUR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PARANG KEMBANG SEMARANG	</td>
                <td>JL. PARANG KEMBANG RAYA NO.23 RT.06/RW.20 KEL. TELOGO SAN KULON KEC. PEDURUNGA

                </td>
              </tr>
              <tr>
                <td></td>
                <td>KLIPANG SEMARANG	</td>
                <td>JL KLIPANG RAYA NO 24, KEL SENDANG MULYO, KEC TEMBALANG, SEMARANG TIMUR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>GAJAH BIROWO	</td>
                <td>JL. GAJAH BIROWO NO.08 KEL. MUKTIHARJO KIDUL KEC. PENDURUNGAN SEMARANG.
                </td>
              </tr>
              <tr>
                <td></td>
                <td>WR SUPRATMAN	</td>
                <td>JL. WR SUPRATMAN NO 28 KEL NGEMPLAK SIMONGAN, KEC SEMARANG BARAT
                </td>
              </tr>
              <tr>
                <td></td>
                <td>SUYUDONO</td>
                <td>JL.SUYUDONO NO.15 RT.05 RW.01 KEL. BULUSTALAN KEC. SEMARANG SELATAN.
                </td>
              </tr>
              <tr>
                <td></td>
                <td>TIRTO AGUNG	</td>
                <td>JL.TIRTO AGUNG NO.14 RT.05 RW.03 KEL. PEDALANGAN KEC. BANYUMANIK.
                </td>
              </tr>
              <tr>
                <td></td>
                <td>KARANGREJO	</td>
                <td>JL.KARANGREJO RAYA NO.20 RT 06 RW 07 KEL. SRONDOL WETAN KEC. BANYUMANIK
                </td>
              </tr>
            </tbody>
          </table>        
        </div>
      </div>
    </div>

  </div>

  <h2 style="text-align: left">BALI</h2>
  
  <div id="accordion" class="section-lokasi">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Bali
          </button>
        </h5>
      </div>
  
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Area</th>
                <th scope="col">Nama Toko</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Bali</td>
                <td>TUKAD BADUNG	</td>
                <td>JL TUKAD BADUNG NO 240, KEL RENON, KEC DENPASAR SELATAN, BALI
                </td>
              </tr>
              <tr>
              
                <td></td>
                <td>MERTASARI		</td>
                <td>JL MERTASARI NO 171, KEL SIDAKARYA, KEC DENPASAR SELATAN, BALI
                </td>
              </tr>
              <tr>
              
                <td></td>
                <td>DALUNG PERMAI	</td>
                <td>JL PERUM DALUNG PERMAI BLOK GG NO 60, KEL DALUNG, KEC KUTA UTARA, KAB BADUNG BALI
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PASAR KUTA	</td>
                <td>JL KENDEDES NO 5, LINK JABA JERO, KEL KUTA, KEC KUTA, KAB BADUNG, BALI
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PASAR BERINGKIT</td>
                <td>JL SINGARAJA- DENPASAR, KEL BERINGKIT, KEC MENGWI, KAB BADUNG
                </td>
              </tr>
              <tr>
                <td></td>
                <td>PASAR KANGKUNG</td>
                <td>JL. GLOGOR CARIK NO 990, KEL PEMOGAN, KEC DENPASAR SELATAN, KOTA DENPASAR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>MONANG-MANING	</td>
                <td>JL. GUNUNG BATUKARU NO 100 KEL. PEMECUTAN KEC. DENPASAR BARAT DENPASAR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>GATSU	</td>
                <td>JL. GATOT SUBROTO NO 330-X DAUH PURI KAJA KEL. DAUH PURI KAJA KEC. DENPASAR UTARA DENPASAR
                </td>
              </tr>
              <tr>
                <td></td>
                <td>KARTINI		</td>
                <td>JL. KARTINI NO 77 KEL. DAUH PURI KAJA KEC. DENPASAR UTARA DENPASAR
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
  </div>
@endsection