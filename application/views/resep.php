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
                   border:1px solid black !important; 
                   padding: 0px 0px;
                  
                   
               }
               .word-table th{
                   border:1px solid black !important; 
                   padding: 0px 10px;
                   background-color:yellow;
                   
               }

               .word-table2 {
                   border-bottom:1px solid black !important; 
                   border-collapse: collapse !important;
                   width: 100%;
               }
               .word-table2 tr th, .word-table2 tr td{
                /* border-bottom:1px solid black !important;  */
                   padding: 0px 5px;
                   font-size:11px;
                   text-align:center;
                  
                   
               }
               .word-table2 th{
                border-bottom:1px solid black !important;  
                   padding: 0px 10px;
                   background-color:white;
                   font-size:11px;

                   
               }
               .word-table3 {
                   /* border-bottom:1px solid black !important;  */
                   border-collapse: collapse !important;
                   width: 100%;
               }
               .word-table3 tr th, .word-table3 tr td{
                /* border-bottom:1px solid black !important;  */
                   padding: 0px 5px;
                   border-collapse: collapse !important;
                   /* font-size:11px; */
                   /* text-align:center; */
                  
                   
               }
               .word-table3 th{
                /* border-bottom:1px solid black !important;   */
                   padding: 0px 10px;
                   background-color:white;
                   /* font-size:11px; */

                   
               }
           </style>

</head>
<title>Konsultasi Pasien</title>
<body>
<table>
        <tr>
        <th width="50px;"><img src="image/bpjs.png" alt="Image" width="30px" id="logo" height="30px" ></th>
        <th colspan="2" style="font-family:roboto;text-align:center;">
            <h5 style="padding-bottom:-20px;">KLINIK HAMDY MAULANA</h5>
            <br>
            <h5 style="font-family:roboto;padding-bottom:-50px;">DR. H. MAULANA, MKM</h5>
            <br>
            <h6 style="font-family:roboto;padding-bottom:-50px;font-weight:normal">Jl. Yunus Sanis Lr. Andalas Rt. 01 No. 47 Kel. Kebun Kopi Kec. Jelutung</h6>
            <br>
            <h6 style="font-family:roboto;padding-bottom:-80px;padding-top:5px;font-weight:normal">Telp.0741-445226 ext.408</h6>
            <br>
            <br>
        </th>
        <th width="50px;"><img src="image/bpjs.png" alt="Image" width="30px" id="logo" height="30px" ></th>
        </tr>
        <tr>
            <th colspan="4" style="padding-top:-20px;"><hr style="border: 1.5px solid black !important; border-collapse: collapse !important;"></th>
        </tr>
</table>

<table style="margin-top:-10px;border-collapse: collapse !important;">
        <tr>
            <td width="100px;" height="10px;"><h6></h6></td>
            <td width="100px;" height="10px;"><h6></h6></td>
            <td height="10px;"><h6 style="font-family:roboto;font-weight:normal;padding-top:-20">Tanggal : <?=formatTanggal($umum['tanggal_konsul'])?></h6></th>
        </tr>
</table>
<table style="margin-top:-10px;border-collapse: collapse !important;">
        <tr>
            <td width="150px;" height="10px;"><h6 style="font-family:roboto;font-weight:normal;padding-top:-20">Poli <?=ucfirst($umum['poli'])?></h6></td>
            <td width="50px;" height="10px;"><h6></h6></td>
            <td height="10px;"><h6 style="font-family:roboto;font-weight:normal;padding-top:-20">Riwayat Alergi Obat</h6></th>
        </tr>
        <tr>
            <td width="150px;" height="10px;"><h6 style="font-family:roboto;font-weight:normal;padding-top:-40">Dokter : <?=ucfirst($umum['dokter'])?></h6></td>
            <td width="50px;" height="10px;"><h6></h6></td>
            <td height="10px;"style="font-family:roboto;font-weight:normal;padding-top:-38px;padding-left:-25px;"><img src="image/kotak.png" alt="" width="200px;"><h6 style="font-family:roboto;font-weight:normal;padding-top:-55;padding-left:35px;"> Tidak</h6></th>
        </tr>
        <tr>
            <td width="150px;" height="10px;"><h6 style="font-family:roboto;font-weight:normal;padding-top:-40"></h6></td>
            <td width="50px;" height="10px;"><h6></h6></td>
            <td height="10px;"style="font-family:roboto;font-weight:normal;padding-top:-43px;padding-left:-25px;"><img src="image/kotak.png" alt="" width="200px;"><h6 style="font-family:roboto;font-weight:normal;padding-top:-55;padding-left:35px;"> Ya, Nama Obat</h6></th>
        </tr>
</table>
<table style="margin-top:-10px;border-collapse: collapse !important;">
        <tr>
            <td width="150px;" height="10px;">
                <h6 style="font-family:roboto;font-weight:normal;padding-top:-20">R/</h6>
            </td>
            
        </tr>
</table>
<table class="word-table2" style="margin-top:-20px;">
        <tr>
            <th width="20px;">No</th>
            <th width="100px;">Nama Obat</th>
            <th>Satuan</th>
            <th>Jumlah</th>
            <th>Pemakaian</th>
        </tr>
        <?php 
            $no=1;
            $u=$umum['no_konsul'];
            $data_obat=$this->db->query("select * from detail_konsul where no_konsul='$u'")->result();
            ?>
        <?php foreach($data_obat as $each):?>
            <?php $satu=$this->db->query("select satuan from obat where nama_obat='$each->nama_obat'")->row_array(); ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $each->nama_obat?></td>
            <td><?php echo $satu['satuan']?></td>
            <td><?php echo $each->jumlah?></td>
            <td><?php echo $each->pemakaian?></td>
        </tr>
        <?php endforeach;?>
        <tr>
        <th width="20px;"></th>
            <th width="100px;"></th>
            <th>Total :</th>
            <?php $total=$this->db->query("select sum(jumlah) as total from detail_konsul where no_konsul='$u'")->row_array();?>
            <th><?=$total['total']?></th>
            <th></th>
        </tr>
</table>
<table class="word-table3">
    <tr>
      <td width="60px;"><h6 style="font-family:roboto;font-weight:normal;">Nama Pasien</h6></td>
      <td><h6 style="font-family:roboto;font-weight:normal;">:</h6></td>
      <td width="80px;"><h6 style="font-family:roboto;font-weight:normal;"><?=$umum['nama_lengkap']?></h6></td>
      <td width="70px;"><h6 style="font-family:roboto;font-weight:normal;">Tgl Lahir/Umur</h6></td>
      <td><h6 style="font-family:roboto;font-weight:normal;">:</h6></td>
      <?php $ui=$umum['no_bpjs']; $data_pasien=$this->db->query("select * from pasien where no_bpjs='$ui'")->row_array();?>
      <td width="80px;"><h6 style="font-family:roboto;font-weight:normal;"><?=formatTanggal($data_pasien['tanggal_lahir'])?> / <?=$umum['usia']?> </h6></td>
    </tr>
    <tr>
      <td width="60px;"><h6 style="font-family:roboto;font-weight:normal;padding-top:-50px">No.RM</h6></td>
      <td><h6 style="font-family:roboto;font-weight:normal;padding-top:-50px">:</h6></td>
      <td width="80px;"><h6 style="font-family:roboto;font-weight:normal;padding-top:-50px"><?=$umum['no_buku']?></h6></td>
      <td width="70px;"><h6 style="font-family:roboto;font-weight:normal;padding-top:-50px">Faskes</h6></td>
      <td><h6 style="font-family:roboto;font-weight:normal;padding-top:-50px">:</h6></td>
      <td width="80px;"><h6 style="font-family:roboto;font-weight:normal;padding-top:-50px"><?=$umum['faskes']?></h6></td>
    </tr>
    <tr>
      <td width="60px;"><h6 style="font-family:roboto;font-weight:normal;padding-top:-50px">Alamat</h6></td>
      <td><h6 style="font-family:roboto;font-weight:normal;padding-top:-50px">:</h6></td>
      <?php $ui=$umum['no_bpjs']; $data_pasien=$this->db->query("select * from pasien where no_bpjs='$ui'")->row_array();?>
      <td width="80px;" colspan="4"><h6 style="font-family:roboto;font-weight:normal;padding-top:-50px"><?=$data_pasien['alamat']?></h6></td>
      
    </tr>
</table>
</body>
</html>
        