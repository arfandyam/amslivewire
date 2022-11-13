<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .page-break{
            page-break-after: always;
        }                        
        .p2{
            text-align: left;
            float: right;
            margin-right: 50px;           
        }
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        
        }
    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  <header>
    <img src="{{ public_path('/') }}./asset/frontend/images/pln.png" alt="" style="width:700px; margin-bottom:5px;">
  </header>
    @foreach($value as $value)
    <div class="container1">
        <div class="menue">
            <p class="p2">Makassar, 1 Juli 2022 <br><br> Kepada: PT.Distribusi Energi Mandiri<br> Alamat: Jl. Cendrawasih No. C18 <br> di- Tempat</p>                
            <p class="p1">Nomor: {{$value->nomor_po}} <br> Lamp.: 1(satu) Set <br> Perihal: SPBJ</p>              
        </div>
    </div>
    <div class="contents">
        <div class="content1">
            <p>Menunjuk Kontrak Perjanjian Sebagai Berikut</p>
            <p>Kontrak Nomor : {{$value->nomor_kontrak_induk}}</p>
            <p>Tanggal : 1 April 2020</p>
            <p>Pekerjaan : {{$value->pekerjaan}}</p>
        </div>
        <div class="content2">
            <p>Maka dengan ini disampaikan kepada saudara untuk melaksanakan pekerjaan : </p>
            <p><b>{{$value->pekerjaan}}</b></p>
            <p>Lokasi : {{$value->lokasi}}</p>
        </div>
        <div class="content3">
            <ol type="1">
                <li>Harga Borongan Pekerjaan {{$value->total_harga}}</li>
                <li>Rincian Pekerjaan diterbitkan dengan Perintah Kerja dari Manager Unit Layanan Pelanggan</li>
                <li>Jangka waktu pelaksanaan pekerjaan 63 Hari kalender sejak tanggal {{$value->startDate}} sampai dengan tanggal {{$value->endDate}}</li>
                <li>Sumber Dana Sesuai dengan SKK {{$value->nomor_skk}} <br> PRK No: {{$value->nomor_prk}}</li>
                <li>Direksi Pekerjaan adalah {{$value->direksi_pekerjaan}} PT PLN (Persero) UP3 Makassar Selatan</li>
                <li>Pengawas Pekerjaan adalah {{$value->pengawas_pekerjaan}} PT PLN (Persero) UP3 Makassar Selatan</li>
                <li>Tempat Penyerahan pekerjaan di Kantor PT PLN (Persero) UP3 Makassar Selatan Jl. Hertasning No.99 Rappocini - Makassar dilengkapi dengan realisasi perintah kerja yang sudah selesai dilaksanakan</li>
                <li>Surat Perjanjian/Kontrak Rinci jenis Pengadaan Jasa/Pengadaan Jasa dan Material/Supply Erect, pembayaran dilaksanakan sebanyak 2 (dua) tahap, Pembayaran Tahap I sebesar 95% (sembilan puluh lima persen) dari nilai Surat Perjanjian/Kontrak Rinci akan dilakukan setelah semua pekerjaan 100%dilaksanakan dengan cara PIHAK KEDUA mengajukan surat permohonan pembayaran dengan melampirkan dokumen-dokumen sebagai berikut:
                    <ol type="a">
                        <li>Kwitansi bermaterai Cukup;</li>
                        <li>Surat Perjanjian/Kontrak Rinci;</li>
                        <li>Faktur Pajak, SSP, Copy NPWP, Copy PKP, Copy surat pemberian nomor seri Faktur Pajak</li>
                        <li>Berita Acara Serah Terima Pekerjaan (BASTP 1) yang ditandatangani oleh Para Pihak yang dilampiri dengan Laporan Pemeriksaan Pekerjaan;</li>
                        <li>Asli bermaterai Surat Pernyataan Keaslian Barang;</li>
                        <li>Asli bermaterai Surat Pernyataan Jaminan Garansi dari PIHAK KEDUA;</li>
                        <li>Copy Surat Perjanjian/Kontrak;</li>
                        <li>Berita acara khusus apabila ada pekerjaan yang dilaksanakan diluar jam kerja;</li>
                        <li>Bukti pembayaran iuran BPJS Ketenagakerjaan.</li>
                    </ol>
                </li>
            </ol>
        </div>        
    </div>
    @endforeach
    <div class="page-break"></div>
    {{-- <table id="customers">
        <tr>
          <th>Company</th>
          <th>Contact</th>
          <th>Country</th>
        </tr>
        <tr>
          <td>Alfreds Futterkiste</td>
          <td>Maria Anders</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>Berglunds snabbköp</td>
          <td>Christina Berglund</td>
          <td>Sweden</td>
        </tr>
        <tr>
          <td>Centro comercial Moctezuma</td>
          <td>Francisco Chang</td>
          <td>Mexico</td>
        </tr>
        <tr>
          <td>Ernst Handel</td>
          <td>Roland Mendel</td>
          <td>Austria</td>
        </tr>
        <tr>
          <td>Island Trading</td>
          <td>Helen Bennett</td>
          <td>UK</td>
        </tr>
        <tr>
          <td>Königlich Essen</td>
          <td>Philip Cramer</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>Laughing Bacchus Winecellars</td>
          <td>Yoshi Tannamuri</td>
          <td>Canada</td>
        </tr>
        <tr>
          <td>Magazzini Alimentari Riuniti</td>
          <td>Giovanni Rovelli</td>
          <td>Italy</td>
        </tr>
        <tr>
          <td>North/South</td>
          <td>Simon Crowther</td>
          <td>UK</td>
        </tr>
        <tr>
          <td>Paris spécialités</td>
          <td>Marie Bertrand</td>
          <td>France</td>
        </tr>
      </table>
       --}}
    <table id="customers">
        <tr>
            <th>Kategori</th>
            <th>Item</th>
            <th>Satuan</th>                                                
            <th>Volume</th>                                                
            <th>Harga Satuan</th>
            <th>Harga</th> 
        </tr>
        @foreach ($orderedrabs as $orderedrab)
        <tr>                        
            <td>{{ $orderedrab->kategori_ordered }}</td>                                                                                                        
            <td>{{ $orderedrab->item_ordered }}</td>
            <td>{{ $orderedrab->satuan }}</td>
            <td>{{ $orderedrab->volume }}</td>
            <td>{{ $orderedrab->harga_satuan }}</td>                                                                    
            <td>{{ $orderedrab->harga }}</td>                                                                    
        </tr>                
        @endforeach       
    </table>                          
</body>
</html>