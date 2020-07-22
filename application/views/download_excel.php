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
<?php
header("Content-type: application/vnd-ms-excel");
   $tanggal=date('Y-m-d').".xls";
   $name_file ="Laporan-Pemenang-Kampung-BANTAR".$tahun.".xls";
   header("Content-Disposition: attachment; filename=$name_file"); 
   ?>
    <table>
      <tr>
        <td colspan="2"><h5 style="border-bottom:1px solid black;text-align:center;">DATA RT PEMENANG KAMPUNG BANTAR (BERSIH, AMAN DAN PINTAR) KOTA JAMBI TAHUN <?=$tahun?></h5></td>
       <td></td>
      </tr>
    </table>
    <br>
    <table class="word-table2">
        <tr>
            <th rowspan="3">No</th>
            <th rowspan="3">Kecamatan</th>
            <th rowspan="3">Kelurahan</th>
            <th rowspan="3">Jumlah RT</th>
            <th rowspan="3">RT Yang di Usul</th>
            <th colspan="4">Tahun</th>
            <th rowspan="3">Total Pemenang</th>
            <th rowspan="3">Total RT yang di Usul</th>
            <th rowspan="3">Ket</th>
        </tr>
        <tr>
           <th colspan="4">Kategori</th>
        </tr>
        <tr>
           <th>B</th>
           <th>S</th>
           <th>K</th>
           <th>Jumlah</th>
        </tr>
        <?php $data_kecamatan =$this->db->query("SELECT * FROM kecamatan")->result();?>
        <?php foreach($data_kecamatan as $kec):?>
            <?php $kelurahan1=$this->db->query("SELECT * FROM kelurahan where kode_kecamatan='$kec->kode_kecamatan'");?>
            <?php $kelurahan2=$this->db->query("SELECT * FROM kelurahan where kode_kecamatan='$kec->kode_kecamatan'")->result();?>
            <?php $kampung=$this->db->query("SELECT * FROM kampung where kecamatan='$kec->kode_kecamatan'")->result();?>
            <?php $total_rt=$this->db->query("SELECT count(*) as c FROM kampung where kecamatan='$kec->kode_kecamatan'")->row_array();?>
            <?php $pemenang=$this->db->query("SELECT count(c.kode_alternatif) as pemenang,a.rt,e.tanggal FROM kampung a join alternatif b on a.kode=b.kode_kampung join perangkingan_detail c on c.kode_alternatif =b.kode_alternatif join perangkingan e on e.kode_perangkingan=c.kode_perangkingan where year(e.tanggal)='$tahun' and a.kecamatan='$kec->kode_kecamatan' and c.peringkat='1'")->row_array();?>
           
        <tr>
            <td><?php echo ++$start?></td>
            <td><?php echo $kec->kecamatan?></td>
            <td>
                <?php foreach($kelurahan2 as $kel):?>
                    <?=$kel->kelurahan ."<br>"?>
                <?php endforeach;?>
            </td>
            <td>
                <?=$total_rt['c']?>
            </td>
            <td>
                <?php foreach($kampung as $kam):?>
                    <?=$kam->rt ."<br>"?>
                <?php endforeach;?>
            </td>
            </td>
            <td>
                <?php foreach($kampung as $kam):?>
                    <?php if($kam->kategori=="Besar")
                    {
                        $b="M";
                    }else{
                        $b=" ";   
                    }
                    ?>
                     <?=$b ."<br>"?>
                <?php endforeach;?>
            </td>
            </td>
            <td>
                <?php foreach($kampung as $kam):?>
                    <?php if($kam->kategori=="Sedang")
                    {
                        $b="M";
                    }else{
                        $b=" ";   
                    }
                    ?>
                     <?=$b ."<br>"?>
                <?php endforeach;?>
            </td>
            <td>
                <?php foreach($kampung as $kam):?>
                    <?php if($kam->kategori=="Kecil")
                    {
                        $b="M";
                    }else{
                        $b=" ";   
                    }
                    ?>
                     <?=$b ."<br>"?>
                <?php endforeach;?>
            </td>
            <td>
                <?=$total_rt['c']?>
            </td>
            <td>
                <?=$pemenang['pemenang']?>
            </td>
            <td>
                <?=$total_rt['c']?>
            </td>
            <td>
                &nbsp;
            </td>
        <?php endforeach;?>
    </table>
    <br>
    <br>
    
    
<br>
<br>
    <table>
     <tr>
     
     <td width="500px;"><br><br></td>
       <td width="200px;" style=" font-size:12px;">Jambi, <?php echo tgl_indo(date('Y-m-d'))?>  <br> Kepala Dinas DPMPPA Kota Jambi</td>
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
        