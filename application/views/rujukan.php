<html>
<head>
<style>
               .word-table {
                   border:0.7px solid black !important; 
                   border-collapse: collapse !important;
                   width: 100%;
                   font-size:12px;
               }
               .word-table tr th, .word-table tr td{
                   /* border:1px solid black !important;  */
                   padding: 0px 5px;
                  
                   
               }
               .word-tabler {
                   border:0.7px solid black !important; 
                   border-collapse: collapse !important;
                   width: 95%;
                   font-size:10px;
                   font-family:sans-serif;
               }
               .word-tabler tr th, .word-tabler tr td{
                   /* border:1px solid black !important;  */
                   padding: 2px 5px;
                  
                   
               }
               /* .word-table th{
                   border:1px solid black !important; 
                   padding: 0px 10px;
                   background-color:yellow;
                   
               } */

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

            <style>
                div {
                    width:700px;
                    height: 600px;
                }
                .garis_tepi1 {
                    border: 1px solid black;
                }
                .divider {
                    width:700px;
                    height: 450px;
                    border: 1px solid black;
                    border-top: 0px solid black;
                    margin-top:-10px;
                }
               .divider_insider{
                    width:630px;
                    height: 100px;
                    border: 1px solid black;
                    border-top: 1px solid black;
                    margin-top:10px;
                    margin-left:30px;

               }
               .kotak{
                    width:40px;
                    height: 20px;
                    border: 1px solid black;
                    border-top: 1px solid black; 
                    /* margin-top:0px; */
                    /* margin-left:30px; */

               }
            </style>

</head>
<title>Rujukan BPJS</title>
<body>
<?php
     
    


?>
<table>
        <tr>
        <th style="text-align:left;"><img src="image/bpjs.png" alt="Image" width="50px" id="logo" height="50px" ></th>
        <th style="padding-top:20px;"><h4 style="color:navy;font-family:sans-serif;">BPJS</h4></th>
        <th width="300px;" style="padding-left:-110px;padding-top:20px;">
            <h4 style="color:green;font-family:sans-serif;">Kesehatan</h4><br>
            <h6 style="color:navy;font-family:sans-serif;font-size:7px;padding-left:-46px;padding-top:-40px;">Badan Penyelenggara Jaminan Sosial</h6><br>
        </th>
        <th width="130px;"><h6 style="font-family:sans-serif;">Kedeputian Wilayah</h6>
        <br>
        <h6 style="font-family:sans-serif;padding-left:-25px;padding-top:-10px;">Kantor Cabang</h6>
        </th>
        <th><h6 style="font-family:sans-serif;font-weight:normal;">REGIONAL  II - PEKANBARU</h6>
        <br>
        <h6 style="font-family:sans-serif;font-weight:normal;padding-left:-105px;padding-top:-10px;">JAMBI</h6>
        </th>
       </tr>
</table>
<hr>
    <table style="padding-top:-65px;">
        <tr>
        <th colspan="5" width="600px;"><h5 style="font-family:sans-serif;">Surat Rujukan FKTP</h5></th>
        </tr>
    </table>
   <div class="garis_tepi1">
        <p class="divider_insider">
            <table style="padding-top:-120px;padding-left:0px;">
               <tr>
                <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;">No. Rujukan</h6></th>
                <th width="200px;"><h6 style="font-weight:normal;font-family:sans-serif;text-align:left;padding-left:4px;">:  <?php echo $umum['no_konsul']?></h6></th>
                <th width="10px;"><h6 style="font-weight:normal;font-family:sans-serif;"></h6></th>
               </tr>
               <tr>
                <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-top:-40px;padding-left:-30px;">FKTP</h6></th>
                <th width="200px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-top:-40px;padding-left:0px;">: KLINIK HAMDY MAULANA(0082B006)</h6></th>
                <th width="10px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-top:-45px;padding-left:0px;"><img src="image/bar-code-39.png" alt="" width="250px;" height="20px;"></h6></th>
               </tr>
               <tr>
                <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-top:-40px;padding-left:23px;">Kabupaten / Kota</h6></th>
                <th width="200px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-top:-40px;padding-left:-90px;">: KOTA JAMBI(0082)</h6></th>
                <th width="10px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-top:-45px;padding-left:0px;"></h6></th>
               </tr>
            </table>
        </p>
        <table style="padding-left:30px;"> 
            <tr>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-15px;padding-top:-20px;">Kepada Yth. TS Dokter</h6></th>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-100px;padding-top:-20px;">: <?=$umum['dokter_tujuan']?></h6></th>
            </tr>
            <tr>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-115px;padding-top:-45px;">Di</h6></th>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-100px;padding-top:-45px;">: <?=$umum['rs']?></h6></th>
            </tr>
        </table>
        <table style="padding-left:38px;"> 
            <tr>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:0px;padding-top:-20px;">Mohon pemeriksaan dan penanganan lebih lanjut pasien :</h6></th>
            </tr>
        </table>
        <table style="padding-left:-15px;" > 
            <tr>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:0px;padding-top:-20px;">Nama </h6></th>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-50px;padding-top:-20px;">: <?php echo strtoupper($umum['nama_lengkap'])?> </h6></th>
            <th width="50px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:0px;padding-top:-20px;">Umur : </h6></th>
            <th width="30px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-200px;padding-top:-20px;"> <?php echo $umum['usia']?> </h6></th>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-300px;padding-top:-20px;">Tahun : </h6></th>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-350px;padding-top:-20px;"> <?php echo tgl_indo($umum['tanggal_lahir'])?> </h6></th>
            </tr>

            <tr>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:45px;padding-top:-40px;">No. Kartu BPJS </h6></th>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-40px;padding-top:-40px;">: <?php echo $umum['no_bpjs']?> </h6></th>
            <th width="50px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:0px;padding-top:-40px;">Status : </h6></th>
          
            <th width="30px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-200px;padding-top:-40px;text-decoration:underline"><?php echo substr($umum['faskes'],-1)?> </h6></th>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-350px;padding-top:-35px;font-size:9px;">Utama/Tanggungan  </h6></th>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-370px;padding-top:-40px;"> <?php echo ucwords($umum['jenis_kelamin'])?> </h6></th>
            </tr>

            <tr>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:15px;padding-top:-40px;">Diagnosa </h6></th>
            <th width="140px;" colspan="5" style="text-align:left"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:10px;padding-top:-40px;">: <?php echo $umum['diagnosa']?> </h6></th>
            </tr>
            <tr>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:40px;padding-top:-40px;">Telah diberikan </h6></th>
            <th width="140px;" style="text-align:left"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:10px;padding-top:-40px;">:  </h6></th>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:10px;padding-top:-40px;">Catatan  :</h6></th>
            <th width="140px;" style="text-align:left"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:10px;padding-top:-40px;"> </h6></th>
            </tr>
        </table>
        <table style="padding-left:38px;"> 
            <tr>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:0px;padding-top:-20px;">Atas bantuannya, diucapkan terima kasih</h6></th>
            <th width="250px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:0px;padding-top:-20px;"></h6></th>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:0px;padding-top:-20px;">Salam sejawat, <?php echo tgl_indo(date('Y-m-d'))?></h6></th>
            </tr>
        </table>
        <table style="padding-left:28px;padding-top:-10px;"> 
            <tr>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:0px;padding-top:-20px;">Tgl. Rencana Berkunjung</h6></th>
            <th><h6 style="font-weight:normal;font-family:sans-serif;padding-left:0px;padding-top:-20px;">:</h6></th>
            <th><h6 style="font-weight:normal;font-family:sans-serif;padding-left:0px;padding-top:-20px;"><?php echo tgl_indo($umum['rencana'])?></h6></th>
            </tr>
        </table>
        <table style="padding-left:28px;padding-top:-30px;"> 
            <tr>
            <th width="140px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-45px;padding-top:-20px;">Jadwal Praktek</h6></th>
            <th><h6 style="font-weight:normal;font-family:sans-serif;padding-left:0px;padding-top:-20px;">:</h6></th>
            <th width="310px;"><h6 style="font-weight:normal;font-family:sans-serif;padding-left:-210px;padding-top:-20px;"><?php echo $umum['jadwal_praktek']?></h6></th>
            <th><h6 style="font-weight:normal;font-family:sans-serif;padding-left:0px;padding-top:-20px;">dr. Reza Willentino</h6></th>
            </tr>
        </table>
   </div>
  <!-- <div class="divider">
        <table>
            <tr>
                <th colspan="5" width="700px;"><h5 style="font-family:sans-serif;text-align:center;">SURAT RUJUKAN BALIK</h5></th>
            </tr>
        </table>
        <table>
            <tr>
               
            </tr>
        </table>
  </div> -->
  
 
</body>
</html>
        