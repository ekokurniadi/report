  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for all logged in users
 */
class Laporan_pdf extends MY_Controller {

   function __construct() {
        parent::__construct();
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
    }
    

     public function cetak_hasil_penilaian($kode_perangkingan)
     {
      $dompdf= new Dompdf();
      $data['rangking']=$this->db->query("SELECT * FROM perangkingan where kode_perangkingan='$kode_perangkingan'")->row_array();
      $data['start']=0;
      $html=$this->load->view('cetak_hasil',$data,true);
     
      $dompdf->load_html($html);
      $dompdf->set_paper('A4','potrait');
      $dompdf->render();
     
      $pdf = $dompdf->output();

      $dompdf->stream('Cetak Hasil.pdf',array("Attachment"=>FALSE));
     }

     public function laporan_pertahun($tahun)
     {
      $dompdf= new Dompdf();
      $data['rangking']=$this->db->query("SELECT * FROM perangkingan where year(tanggal)='$tahun'")->row_array();
      $data['start']=0;
      $data['tahun']=$tahun;
      $html=$this->load->view('cetak_tahunan',$data,true);
     
      $dompdf->load_html($html);
      $dompdf->set_paper('A4','potrait');
      $dompdf->render();
     
      $pdf = $dompdf->output();

      $dompdf->stream('Cetak Hasil.pdf',array("Attachment"=>FALSE));
     }

     public function download($tahun)
     {
        $rangking=$this->db->query("SELECT * FROM perangkingan where year(tanggal)='$tahun'")->row_array();
        $start=0;
       $data=array(
         'tahun'=>$tahun,
         'rangking'=>$rangking,
         'start'=>$start
       );
       $this->load->view('download_excel',$data);
     }
}


