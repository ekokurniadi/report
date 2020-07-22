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
                   /* border:1px solid black !important;  */
                   padding: 0px 10px;
                   background-color:yellow;
                   
               }

               .word-table4 {
                   border:1px solid black !important; 
                   border-collapse: collapse !important;
                   /* width: 100%; */
                   font-size:12px;
               }
               .word-table4 tr th, .word-table4 tr td{
                   border:1px solid black !important; 
                   padding: 0px 5px;
                  
                   
               }
               .word-table4 th{
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
               .word-table3 {
                   border:1px solid black !important; 
                   border-collapse: collapse !important;
                   width: 100%;
               }
               .word-table3 tr th, .word-table3 tr td{
                   border:1px solid black !important; 
                   padding: 0px 5px;
                   font-size:11px;
                  
                   
               }
               .word-table3 th{
                   border:1px solid black !important; 
                   padding: 0px 10px;
                   background-color:pink;
                   font-size:11px;
                
                   
               }
           </style>

</head>
<title>SURAT RUJUKAN PASIEN BPJS</title>
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
        <td width="180px;"><h3></h3></td>
        <td colspan="2"><h5>HASIL PEMERIKSAAN LABORATORIUM</h5></td>
       <td></td>
      </tr>
    </table>
    <table class="word-table">
      <tr>
        <td>Tanggal Cetak</td>
        <td>:</td>
        <td><?php echo tgl_indo(date('Y-m-d'))?></td>
      </tr>
    </table>
     <br><br>
    
    <table class="word-table">
        <tr>
          <td>Nama Pasien</td>
          <td>:</td>
          <td width="210px;"><?=$umum['nama_lengkap']?></td>
          <td>No. Labor</td>
          <td>:</td>
          <td><?=$umum['no_labor']?></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>:</td>
          <td width="210px;"><?=formatTanggal($umum['tanggal_lahir'])?></td>
          <td>No. RM</td>
          <td>:</td>
          <td><?=$umum['no_buku']?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td width="210px;"><?=$umum['alamat']?></td>
          <td>dr. Pengirim</td>
          <td>:</td>
          <td><?=$umum['dr_pengirim']?></td>
        </tr>
        <tr>
          <td>Tanggal Terima</td>
          <td>:</td>
          <td width="210px;"><?=formatTanggal($umum['tanggal'])?></td>
          <td>Jenis Bahan</td>
          <td>:</td>
          <td><?=$umum['jenis_bahan']?></td>
        </tr>
    </table>
    <br>
    <br>
    <table>
      <tr>
        <th>
        <table class="word-table3" >
               <tr>
                    <th colspan="3" width="300px;">HEMATOLOGI</th>
               </tr>
               <tr>
                    <th>Pemeriksaan</th>
                    <th>Hasil</th>
                    <th>Nilai Normal</th>
               </tr>
               <?php
                    $no_kon=$umum['no_konsul'];
                    $hema=$this->db->query("SELECT * FROM detail_lab_hema where no_konsul='$no_kon'")->result();
                    ?>
                <?php foreach($hema as $each):?>
                    <?php $hasil=$this->db->query("select * from hematologi where hematologi='$each->pemeriksaan'")->row_array();?>
               <tr>
                <td><?=$each->pemeriksaan?></td>
                <td><?=$each->hasil?></td>
                <td><?=$hasil['nilai_normal']?></td>
               </tr>
                <?php endforeach;?>

            </table>
        </th>
        <th>
            <table class="word-table3" >
               <tr>
                    <th colspan="3" width="300px;">URINALISA</th>
               </tr>
               <tr>
                    <th>Pemeriksaan</th>
                    <th>Hasil</th>
                    <th>Nilai Normal</th>
               </tr>
               <?php
                    $no_kon=$umum['no_konsul'];
                    $urin=$this->db->query("SELECT * FROM detail_lab_urin where no_konsul='$no_kon'")->result();
                    ?>
                <?php foreach($urin as $each):?>
                    <?php $hasil=$this->db->query("select * from urinalisa where urinalisa='$each->pemeriksaan'")->row_array();?>
               <tr>
                <td><?=$each->pemeriksaan?></td>
                <td><?=$each->hasil?></td>
                <td><?=$hasil['nilai_normal']?></td>
               </tr>
                <?php endforeach;?>

            </table>
        </th>
      </tr>
      <tr>
        <th>
        <table class="word-table3" >
               <tr>
                    <th colspan="3" width="300px;">KIMIA DARAH</th>
               </tr>
               <tr>
                    <th>Pemeriksaan</th>
                    <th>Hasil</th>
                    <th>Nilai Normal</th>
               </tr>
               <?php
                    $no_kon=$umum['no_konsul'];
                    $kimia=$this->db->query("SELECT * FROM detail_lab_kimia where no_konsul='$no_kon'")->result();
                    ?>
                <?php foreach($kimia as $each):?>
                    <?php $hasil=$this->db->query("select * from kimia_darah where kimia_darah='$each->pemeriksaan'")->row_array();?>
               <tr>
                <td><?=$each->pemeriksaan?></td>
                <td><?=$each->hasil?></td>
                <td><?=$hasil['nilai_normal']?></td>
               </tr>
                <?php endforeach;?>

            </table>
        </th>
        <th>
        <table class="word-table3" >
               <tr>
                    <th colspan="3" width="300px;">PARASITOLOGI (FAECES)</th>
               </tr>
               <tr>
                    <th>Pemeriksaan</th>
                    <th>Hasil</th>
                    <th>Nilai Normal</th>
               </tr>
               <?php
                    $no_kon=$umum['no_konsul'];
                    $para=$this->db->query("SELECT * FROM detail_lab_parasit where no_konsul='$no_kon'")->result();
                    ?>
                <?php foreach($para as $each):?>
                    <?php $hasil=$this->db->query("select * from parasitologi where parasitologi='$each->pemeriksaan'")->row_array();?>
               <tr>
                <td><?=$each->pemeriksaan?></td>
                <td><?=$each->hasil?></td>
                <td><?=$hasil['nilai_normal']?></td>
               </tr>
                <?php endforeach;?>

            </table>
        </th>
      </tr>
      <tr>
        <th>
        <table class="word-table3" >
               <tr>
                    <th colspan="3" width="300px;">MICROBIOLOGY</th>
               </tr>
               <tr>
                    <th>Pemeriksaan</th>
                    <th>Hasil</th>
                    <th>Nilai Normal</th>
               </tr>
               <?php
                    $no_kon=$umum['no_konsul'];
                    $mic=$this->db->query("SELECT * FROM detail_lab_mik where no_konsul='$no_kon'")->result();
                    ?>
                <?php foreach($mic as $each):?>
                    <?php $hasil=$this->db->query("select * from micro where micro='$each->pemeriksaan'")->row_array();?>
               <tr>
                <td><?=$each->pemeriksaan?></td>
                <td><?=$each->hasil?></td>
                <td><?=$hasil['nilai_normal']?></td>
               </tr>
                <?php endforeach;?>

            </table>
        </th>
        
      </tr>
      
    </table>
    <br>
    <br>
    
    <table class="word-table4" width="300px;">
     <tr>
       <td style="height:60px;width:300px;"><p style="text-align:left;text-decoration:underline;">Catatan :</p></td>
     </tr>
     
    </table>

    
<br>
<br>
    <table>
     <tr>
       <td width="200px;"style=" font-size:12px;"><p></p></td>
       <td width="300px;"><h3></h3></td>
       <td width="200px;" style=" font-size:12px;">Jambi, <?php echo tgl_indo(date('Y-m-d'))?></td>
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
       <td width="200px;" style=" font-size:12px;"><p></p></td>
       <td width="300px;"><h3></h3></td>
       <td width="200px;" style="text-decoration:underline;" ><p style=" font-size:12px;">(dr Reza Willentino)</p><p style=" font-size:12px;padding-top:0px;">SIP.446/119/DU/DINKES/2018</p></td>
     </tr>
   
    </table>
</body>
</html>