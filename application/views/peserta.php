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
                   border:0.5px solid black !important; 
                   border-collapse: collapse !important;
                   width: 100%;
                   text-align:center;
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
<title>Cetak Laporan Pertahun</title>
<body>
<table>
        <tr>
        <th width="120px;"><img src="image/kota.png" alt="Image" width="50px" id="logo" height="60px" ></th>
        <th colspan="2" style="font-family:roboto;text-align:center;">
            <h3 style="padding-bottom:-30px;">PEMERINTAH KOTA JAMBI</h3>
            <br>
            <h4 style="font-family:roboto;padding-bottom:-50px;">DINAS PEMBERDAYAAN MASYARAKAT, PEREMPUAN DAN PERLINDUNGAN ANAK</h4>
            <br>
            <br>
            <h6 style="font-family:roboto;padding-bottom:-80px;font-weight:normal">Jl. Samarinda, Paal Lima, Kec. Kota Baru, Kota Jambi, Jambi 36129</h6>
            <br>
            <br>
        </th>
        <th width="130px;"><img src="image/bantar.jpg" alt="Image" width="60px" id="logo" height="60px" ></th>
        </tr>
        <tr>
            <th colspan="4" style="padding-top:-20px;"><hr style="border: 1.5px solid black;"></th>
        </tr>
</table>

    <table>
      <tr>
        <td width="50px;">&nbsp;</td>
        <td colspan="2"><h5 style="border-bottom:1px solid black;text-align:center;">DATA RT PESERTA KAMPUNG BANTAR (BERSIH, AMAN DAN PINTAR) KOTA JAMBI</h5></td>
       <td></td>
      </tr>
    </table>
    <br>
    <table class="word-table2">
        <tr>
            <th>No</th>
            <th>Nama Kampung</th>
            <th>Alamat</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>RT</th>
            <th>Kategori</th>
        </tr>
        <?php foreach($rangking as $rank):?>
        <tr>
            <td><?=++$start;?></td>
            <td><?=$rank->nama?></td>
            <td><?=$rank->alamat?></td>
            <td><?=$rank->kelurahan?></td>
            <td><?=$rank->kecamatan?></td>
            <td><?=$rank->rt?></td>
            <td><?=$rank->kategori?></td>
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
     <td width="500px;"><br><br></td>
       <td width="200px;" style=" font-size:12px;text-align:left;">Jambi, <?php echo tgl_indo(date('Y-m-d'))?></td>
     </tr>
     <tr>
     <td width="500px;"><br><br></td>
       <td width="150px;" style=" font-size:12px;text-align:center;">Kepala Dinas Pemberdayaan Masyarakat, Perempuan dan Anak <br> Kota Jambi</td>
     </tr>
     <tr>
       <td width="500px;"><h3></h3></td>
       <td width="200px;"><h3></h3></td>
     </tr>
     <tr>
       <td width="500px;"><h3></h3></td>
       <td width="200px;"><h3></h3></td>
     </tr>
     <tr>
       <td width="500px;"><h3></h3></td>
       <td width="200px;"><h3></h3></td>
     </tr>
     <tr>
       <td width="500px;"><br><br></td>
       <td width="200px;"><br><br></td>
     </tr>
     <tr>
     <td width="500px;"><br><br></td>
       <td width="200px;" style="text-decoration:underline; text-align:center;"><p style=" font-size:12px;">(drg. Irawati Sukandar, M.Kes)</p><p style=" font-size:12px;padding-top:-10px;">Pembina Utama Muda</p><p style=" font-size:12px;padding-top:-10px;">NIP. 19640413 199302 2 001</p></td>
     </tr>
   
    </table>
</body>
</html>
        