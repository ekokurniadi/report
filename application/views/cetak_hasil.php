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
<title>Konsultasi Pasien</title>
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
        <td width="170px;"><h3></h3></td>
        <td colspan="2"><h5 style="border-bottom:1px solid black;">PENILAIAN LOMBA KAMPUNG BANTAR KOTA JAMBI</h5></td>
       <td></td>
      </tr>
    </table>
    <!-- <table style="margin-top:-30px;">
        <tr>
            <td width="320px;">&nbsp;</td>
            <td width="300px;" colspan="2" style="text-align:right;font-size:11px;font-family:sans-serif;"><p>Jambi, <?php echo tgl_indo('Y-m-d')?></p></td>
        </tr>
    </table> -->
    <br>
    <br>
    <table style="margin-top:-20px;border-collapse:collapse !important">
        <tr>
        <?php date_default_timezone_set('Asia/Jakarta');?>
        <td width="70px;" style="font-size:11px;font-family:sans-serif;"><p>Nomor</p></td>
        <td width="10px;" style="text-align:left;font-size:11px;font-family:sans-serif;"><p>:</p></td>
            <td width="300px;" colspan="2" style="text-align:left;font-size:11px;font-family:sans-serif;"><p><?php echo $rangking['kode_perangkingan']."/".date('y/m/d')?></p></td>
        </tr>
        <tr >
        <td width="70px;" style="font-size:11px;font-family:sans-serif;padding-top:-25px;"><p>Perihal</p></td>
        <td width="10px;" style="text-align:left;font-size:11px;font-family:sans-serif;padding-top:-25px;"><p>:</p></td>
            <td width="300px;" colspan="2" style="text-align:left;font-size:11px;font-family:sans-serif;padding-top:-25px;"><p><b> HASIL PENILAIAN LOMBA KAMPUNG BANTAR KOTA JAMBI</b></p></td>
        </tr>
        <tr >
        <td width="70px;" style="font-size:11px;font-family:sans-serif;padding-top:-25px;"><p>Lampiran</p></td>
        <td width="10px;" style="text-align:left;font-size:11px;font-family:sans-serif;padding-top:-25px;"><p>:</p></td>
            <td width="300px;" colspan="2" style="text-align:left;font-size:11px;font-family:sans-serif;padding-top:-25px;"><p>-</p></td>
        </tr>
    </table>
    <table style="margin-top:10px;border-collapse:collapse !important">
        <tr>
        <td style="font-size:11px;font-family:sans-serif;"><p>Sehubungan dengan ada nya penilaian terhadap peserta lomba Kampung BANTAR  (Bersih, Aman, dan Pintar) di Kota Jambi yang di selenggarakan oleh Pemerintah Kota Jambi, maka berikut ini kami umumkan peringkat Kampung Bantar :</p></td> 
        </tr>
    </table>
    <br>
    <table class="word-table2">
        <tr>
            <th>No</th>
            <th>Kampung Bantar</th>
            <th>Alamat</th>
            <th>Kecamatan</th>
            <th>Kelurahan</th>
            <th>RT</th>
            <th>Nilai</th>
            <th>Peringkat</th>
        </tr>
        <?php $r=$rangking['kode_perangkingan']; $detail_rangking =$this->db->query("SELECT a.*,b.* FROM perangkingan_detail a join alternatif b on a.kode_alternatif=b.kode_alternatif where a.kode_perangkingan='$r'")->result()?>
       
        <?php foreach($detail_rangking as $rank):?>
        <?php $alamat =$this->db->query("SELECT a.alamat,a.rt,b.kecamatan,c.kelurahan from kampung a join kecamatan b on a.kecamatan=b.kode_kecamatan join kelurahan c on a.kelurahan=c.kode_kelurahan where a.kode='$rank->kode_kampung'")->row_array();?>
       
            <tr>
                <td><?php echo ++$start?></td>
                <td><?php echo $rank->nama_kampung?></td>
                <td><?php echo $alamat['alamat']?></td>
                <td><?php echo $alamat['kecamatan']?></td>
                <td><?php echo $alamat['kelurahan']?></td>
                <td><?php echo $alamat['rt']?></td>
                <td><?php echo $rank->nilai_akhir?></td>
                <td><?php echo $rank->peringkat?></td>
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
       <td width="200px;" style=" font-size:12px;">Jambi, <?php echo tgl_indo($rangking['tanggal'])?>  <br> Kepala Dinas DPMPPA Kota Jambi</td>
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
       <td width="200px;" style="text-decoration:underline;" ><p style=" font-size:12px;">(drg. Irawati Sukandar, M.Kes)</p><p style=" font-size:12px;padding-top:0px;"></p></td>
     </tr>
   
    </table>
</body>
</html>
        