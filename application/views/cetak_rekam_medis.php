<html>
<head>
<style>
               .word-table {
                   /* border:1px solid black !important;  */
                   border-collapse: collapse !important;
                   /* width: 100%; */
                   font-size:12px;
               }
               .word-table tr th, .word-table tr td{
                   /* border:1px solid black !important;  */
                   padding: 0px 5px;
                  
                   
               }
               .word-table th{
                   border:1px solid black !important; 
                   padding: 0px 10px;
                   background-color:yellow;
                   
               }

               .word-table2 {
                   border:1px solid black !important; 
                   border-collapse: collapse !important;
                   width: 100%;
               }
               .word-table2 tr th, .word-table2 tr td{
                   border:1px solid black !important; 
                   padding: 0px 5px;
                   font-size:11px;
                  
                   
               }
               .word-table2 th{
                   border:1px solid black !important; 
                   padding: 0px 10px;
                   background-color:pink;
                   font-size:11px;

                   
               }
           </style>

</head>
<title>Rekam Medis Pasien</title>
<body>
<table>
            <tr>
               <th width="200px;"><img src="image/bpjs.png" alt="Image" width="80px" id="logo" height="80px" ></th>
                <th colspan="2" style="font-family:sans-serif;text-align:center;">
                    <h2 style="padding-bottom:-30px;">KLINIK HAMDY MAULANA</h2>
                    <br>
                    <h4 style="font-family:sans-serif;padding-bottom:-50px;">DR. H. MAULANA, MKM</h4>
                    <br>
                    <h6 style="font-family:sans-serif;padding-bottom:-80px;font-weight:normal">Jl. Yunus Sanis Lr. Andalas Rt. 01 No. 47 Kel. Kebun Kopi Kec. Jelutung</h6>
                    <br>
                    <br>
                </th>
                <th width="100px;"><h1></h1></th>
               </tr>
                <tr>
                    <th colspan="4" style="padding-top:-20px;"><hr style="border: 1.5px solid black;"></th>
                </tr>
          </table>

    <table>
      <tr>
        <td width="250px;"><h3></h3></td>
        <td colspan="2"><h3>Riwayat Rekam Medis Pasien</h3></td>
       <td></td>
      </tr>
    </table>
    <table class="word-table">
      <tr>
        <td>Tanggal Cetak</td>
        <td>:</td>
        <td><?php echo tgl_indo(date('Y-m-d'))?></td>
      </tr>
      <tr>
        <td>Rumah Sakit</td>
        <td>:</td>
        <td>RSIA ANNISA</td>
      </tr>
      <tr>
        <td>Kabupaten</td>
        <td>:</td>
        <td>Kota Jambi</td>
      </tr>
    </table>
     <br><br>
    <table class="word-table">
        <tr>
          <td width="80px;">Kepada Yth, Pasien</td>
          <td>:</td>
          <td></td>
        </tr>
    </table>
    <br>
    <br>
    <table class="word-table">
        <tr>
          <td>No. Buku</td>
          <td>:</td>
          <td><?=$umum['no_buku']?></td>
        </tr>
        <tr>
          <td>No. Kartu BPJS</td>
          <td>:</td>
          <td><?=$umum['no_bpjs']?></td>
        </tr>
        <tr>
          <td>Nama Pasien</td>
          <td>:</td>
          <td><?=$umum['nama_lengkap']?></td>
        </tr>
        <tr>
          <td>Usia Pasien</td>
          <td>:</td>
          <td><?=$umum['usia']?> Thn</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><?=$umum['jenis_kelamin']?></td>
        </tr>
        <tr>
          <td>Fasilitas Kesehatan</td>
          <td>:</td>
          <td><?=$umum['faskes']?></td>
        </tr>
    </table>
    <br>
    <br>
    <table class="word-table2">
      <tr>
        <th width="50px;">Tanggal</th>
       
        <th width="100px;">Anamnesis</th>
        <th>Pemeriksaan Fisik/Lab</th>
        <th width="100px;">Diagnosa Medis</th>
     
        <th width="80px;">Pengobatan/Nasehat</th>
        <th width="120px;">Keterangan</th>
      </tr>
      <?php $u=$umum['no_bpjs']; $konsul=$this->db->query("select * from tabel_konsul where no_bpjs='$u'")->result();?>
      <?php foreach($konsul as $k):?>
      <?php $u=$k->no_konsul; $obt=$this->db->query("select * from detail_konsul where no_konsul='$u'")->result();?>
      <?php $u=$k->no_konsul; $det=$this->db->query("select a.nama_obat,a.jumlah,b.satuan from detail_konsul a join obat b on a.nama_obat=b.nama_obat where a.no_konsul='$u'")->result();?>
      <tr>
      <td><?=formatTanggal($k->tanggal_konsul)?></td>
      <td><?=$k->Anamnesis?></td>
      <td><?=$k->diagnosa?></td>
      <td><?=$k->diagnosa?></td>
      <td>
      <?php $no=1; foreach($det as $o):?>
      <?php echo $o->jumlah;?> <?php echo $o->satuan." - ";?>
      <?php endforeach;?>
      <?php $no=1; foreach($obt as $o):?>
      <?php echo $o->nama_obat. "<br>";?>
      <?php endforeach;?>
      </td>
      <td>
      <?php foreach($obt as $o):?>
      <?php echo $o->pemakaian."<br>";?>
      <?php endforeach;?>
      </td>
      </tr>
      <?php endforeach;?>
    </table>
    <br>
    <br>
    
    <table class="word-table">
     <tr>
       <td>Demikian kami sampaikan, kami ucapkan Terima Kasih.</td>
     </tr>
    </table>
<br>
<br>
    <table>
     <tr>
       <td width="200px;"style=" font-size:12px;">Pasien</td>
       <td width="300px;"><h3></h3></td>
       <td width="200px;" style=" font-size:12px;">Mengetahui</td>
     </tr>
     <tr>
       <td width="200px;"><h3></h3></td>
       <td width="300px;"><h3></h3></td>
       <td width="200px;"><h3></h3></td>
     </tr>
   
     <tr>
       <td width="200px;"><h3><br><br></h3></td>
       <td width="300px;"><h3></h3></td>
       <td width="200px;"><h3></h3></td>
     </tr>
   
     <tr>
       <td width="200px;" style=" font-size:12px;"><p>(<?=$umum['nama_lengkap']?>)</p></td>
       <td width="300px;"><h3></h3></td>
       <td width="200px;" style="text-decoration:underline;" ><p style=" font-size:12px;">(dr Reza Willentino)</p><p style=" font-size:12px;padding-top:0px;">SIP.446/119/DU/DINKES/2018</p></td>
     </tr>
   
    </table>
</body>
</html>