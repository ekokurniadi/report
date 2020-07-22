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
<title>Konsultasi Pasien</title>
<body>
<table>
        <tr>
        <th width="150px;"><img src="image/bpjs.png" alt="Image" width="50px" id="logo" height="50px" ></th>
        <th colspan="2" style="font-family:roboto;text-align:center;">
            <h3 style="padding-bottom:-30px;">KLINIK HAMDY MAULANA</h3>
            <br>
            <h4 style="font-family:roboto;padding-bottom:-50px;">DR. H. MAULANA, MKM</h4>
            <br>
            <h6 style="font-family:roboto;padding-bottom:-80px;font-weight:normal">Jl. Yunus Sanis Lr. Andalas Rt. 01 No. 47 Kel. Kebun Kopi Kec. Jelutung</h6>
            <br>
            <br>
        </th>
        <th width="150px;"><img src="image/bpjs.png" alt="Image" width="50px" id="logo" height="50px" ></th>
        </tr>
        <tr>
            <th colspan="4" style="padding-top:-20px;"><hr style="border: 1.5px solid black;"></th>
        </tr>
</table>

    <table>
      <tr>
        <td width="220px;"><h3></h3></td>
        <td colspan="2"><h5>HASIL PEMERIKSAAN PASIEN</h5></td>
       <td></td>
      </tr>
    </table>
   
    <br>
    <br>
    <!-- <table class="word-table">
        <tr>
          <td>No. RM</td>
          <td>:</td>
          <td width="220px;"><?=$umum['no_buku']?></td>
          <td>Usia Pasien</td>
          <td>:</td>
          <td><?=$umum['usia']?> Thn</td>
        </tr>
        <tr>
          <td>No. Kartu BPJS</td>
          <td>:</td>
          <td width="220px;"><?=$umum['no_bpjs']?></td>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><?=$umum['jenis_kelamin']?></td>
        </tr>
        <tr>
          <td>Nama Pasien</td>
          <td>:</td>
          <td width="220px;"><?=$umum['nama_lengkap']?></td>
          <td>Fasilitas Kesehatan</td>
          <td>:</td>
          <td><?=$umum['faskes']?></td>
        </tr>
    </table>
    <br>
    <br>
    <table class="word-table2">
      <tr>
        <th>ANAMNESIS</th>
        <th>PEMERIKSAAN FISIK DAN LABORATORIUM</th>
        <th >DIAGNOSA MEDIS</th>
     
        <th>PENGOBATAN/NASEHAT</th>
        <th >KETERANGAN</th>
      </tr>
      <?php $u=$umum['no_konsul']; $konsul=$this->db->query("select * from tabel_konsul where no_konsul='$u'")->result();?>
      <?php foreach($konsul as $k):?>
      <?php $u=$k->no_konsul; $obt=$this->db->query("select * from detail_konsul where no_konsul='$u'")->result();?>
      <?php $u=$k->no_konsul; $det=$this->db->query("select a.nama_obat,a.jumlah,b.satuan from detail_konsul a join obat b on a.nama_obat=b.nama_obat where a.no_konsul='$u'")->result();?>
      
      <tr>
      <td><?=$k->Anamnesis?></td>
      <td style="text-align:center;">
        <?php $labor=""; if($k->labor=='Yes'){
            $labor= "Ya";
        }else{
            $labor="Tidak";
        }
        echo $labor;    
        ?>
      </td>
      <td><?=$k->diagnosa?></td>
      <td >
      <?php $no=1; foreach($det as $o):?>
      <?php echo $o->jumlah?> <?php echo $o->satuan." - ";?>  <?php echo $o->nama_obat. "<br>";?>
      <?php endforeach;?>
      </td>
      <td width="200px;">
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
       <td width="200px;" style=" font-size:12px;">Jambi, <?php echo tgl_indo($umum['tanggal_konsul'])?>  <br> Mengetahui</td>
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
   
    </table> -->
</body>
</html>
        