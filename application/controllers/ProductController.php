<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {

      public function __construct()
      {
          parent::__construct();
          $this->load->library('form_validation','session');
          $this->load->library('excel');
          $this->load->helper('form','url');

          if(empty($this->session->userdata('login'))) {
            redirect(base_url('login/login_aksi'));
        }

        // if(! $this->session->userdata('username')) {
        //     redirect(base_url('login/login_aksi'));
        // }

          $this->load->model('ProductModel');
          $this->load->helper('Dateindo');

      }
	
      public function index()
      {
          $this->load->view('templates/header');

          $products = new ProductModel;
          $data['products'] = $products->getProducts();
          $this->load->view('products/index',$data);
    

          $this->load->view('templates/footer');
      }


	public function create()
	{
        $this->load->view('templates/header');
		$this->load->view('products/create');
        $this->load->view('templates/footer');
	}


    public function store()
	{
        $this->form_validation->set_rules('kd_mk', 'kd_mk' , 'required');
        $this->form_validation->set_rules('nama_mk', 'nama_mk' , 'required');
        $this->form_validation->set_rules('sks', 'sks' , 'required');
        $this->form_validation->set_rules('semester', 'semester' , 'required');
        $this->form_validation->set_rules('Tanggal_ambil', 'Tanggal_ambil' , 'required');
        $this->form_validation->set_rules('kode_dosen', 'kode_dosen' , 'required');
        // $this->form_validation->set_rules('Sampul', 'Sampul' , 'required');

        if($this->form_validation->run()) {
            $ori_filename = $_FILES['Sampul']['name'];
            $new_name = time()."".str_replace('','-',$ori_filename);
              $config = [
                  'upload_path' => './images/',
                  'allowed_types' => 'gif|jpg|png',
                  'file_name' => $new_name,
              ];

              $this->load->library('upload', $config);

              if ( ! $this->upload->do_upload('Sampul'))
              {
                      $imageError = array('error' => $this->upload->display_errors());
                      $this->load->view('templates/header');
	                	$this->load->view('products/create',$imageError);
                         $this->load->view('templates/footer');

              }
              else
              {
                    $prod_filename = $this->upload->data('file_name');
                    $data = [
               'kd_mk' => $this->input->post('kd_mk'),
               'nama_mk' => $this->input->post('nama_mk'),
               'sks' => $this->input->post('sks'),
               'semester' => $this->input->post('semester'),
               'Tanggal_ambil' => $this->input->post('Tanggal_ambil'),
               'kode_dosen' => $this->input->post('kode_dosen'),
               'Sampul' => $prod_filename 
                    ];
                    $product = new ProductModel;
                    $res = $product->insertProduct($data);
                    $this->session->set_flashdata('status' , ' insert matakuliah berhasil');
                    redirect(base_url('products/add'));
              }

        } 
         else {
            $this->create();
        }

	}

    public function edit($kd_mk) {
        $this->load->view('templates/header');
        $product = new ProductModel;
        $data['product'] = $product->editProduct($kd_mk);
		$this->load->view('products/edit',$data);
        $this->load->view('templates/footer');

    }

    public function update($kd_mk) {
        $this->form_validation->set_rules('kd_mk', 'kd_mk' , 'required');
            $this->form_validation->set_rules('nama_mk', 'nama_mk' , 'required');
            $this->form_validation->set_rules('sks', 'sks' , 'required');
            $this->form_validation->set_rules('semester', 'semester' , 'required');
            $this->form_validation->set_rules('Tanggal_ambil', 'Tanggal_ambil' , 'required');
            $this->form_validation->set_rules('kode_dosen', 'kode_dosen' , 'required');

            if($this->form_validation->run()) {

              $old_filename = $this->input->post('old_file_name');
              $new_filename = $_FILES["Sampul"]['name'];
              if($new_filename == TRUE) {
                  $update_filename = time()."-".str_replace('','-',$_FILES["Sampul"]['name']);
                  $config = [
                      'upload_path' =>"./images/",
                      'allowed_types' =>"jpg|png|jpeg",
                      'file_name' => $update_filename,
                  ];
                  $this->load->library('upload',$config);
                  if($this->upload->do_upload('Sampul'))
                   {
                      if(file_exists("./images/".$old_filename))
                       {
                          unlink("./images/".$old_filename);
                      }
                  }

                  $data = [
                    'kd_mk' => $this->input->post('kd_mk'),
                    'nama_mk' => $this->input->post('nama_mk'),
                    'sks' => $this->input->post('sks'),
                    'semester' => $this->input->post('semester'),
                    'Tanggal_ambil' => $this->input->post('Tanggal_ambil'),
                    'kode_dosen' => $this->input->post('kode_dosen'),
                    'Sampul' => $update_filename
                         ];
                         $product = new ProductModel;
                         $res = $product->updateProduct($data, $kd_mk);
                         $this->session->set_flashdata('status' , ' Update matakuliah berhasil');
                         redirect(base_url('products/edit/'.$kd_mk));
                   }

               else {
                  $update_filename = $old_filename;
              }
            }

            else {
                return $this->edit($kd_mk);
            }
    }

    public function delete($kd_mk) {
        $product = new ProductModel;
        if($product->checkProductImage($kd_mk)) {
                 $data = $product->checkProductImage($kd_mk);
                //  $data->Sampul;
                if(file_exists("./images/".$data->Sampul)) {
                 unlink("./images/".$data->Sampul);
                }
                $product->deleteProduct($kd_mk);
                $this->session->set_flashdata('status','Data Matakuliah berhasil dihapus');
                redirect(base_url('products'));
        }
    
    }

    // public function tampilex()
	// {
    //     $this->load->view('templates/header');
	// 	$this->load->view('products/import');
    //     $this->load->view('templates/footer');
	// }

    public function fetch2() {

   
      

    }

  public  function fetch()
	{
        
        
		$data = $this->ProductModel->select();
        $this->load->view('templates/header');
        $this->load->view('products/import');
        $this->load->view('templates/footer');
		// $output = '
        
		// <h3 align="center">Total Data - '.$data->num_rows().'</h3>
		// <table class="table table-striped table-bordered">
        
		// 	<tr>
        //     <th>kode matakuliah</th>
        //     <th> nama matakuliah</th>
        //     <th> sks</th>
        //     <th>semester</th>
        //     <th>Tanggal ambil</th>
        //     <th>kode dosen</th>
        //     <th>Sampul</th>
		// 	</tr>
		// ';
		// foreach($data->result() as $row)
        
		// {
            
		// 	$output .= '
		// 	<tr>
		// 		<td>'.$row->kd_mk.'</td>
		// 		<td>'.$row->nama_mk.'</td>
		// 		<td>'.$row->sks.'</td>
		// 		<td>'.$row->semester.'</td>
		// 		<td>'.$row->Tanggal_ambil.'</td>
        //         <td>'.$row->kode_dosen.'</td>
        //         <td>'.$row->Sampul.'</td>
		// 	</tr>
		// 	';
		// }
        
       
		// $output .= '</table>';
		// echo $output;
	}

    function import()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
            

			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$kd_mk = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$nama_mk = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$sks = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$semester = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$Tanggal_ambil = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $kode_dosen = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $Sampul = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$data[] = array(
						'kd_mk'		=>	$kd_mk,
						'nama_mk'			=>	$nama_mk,
						'sks'				=>	$sks,
						'semester'		=>	$semester,
						'Tanggal_ambil'			=>	$Tanggal_ambil,
                        'kode_dosen'			=>	$kode_dosen,
                        'Sampul'			=>	$Sampul
					);
				}
			}
			$this->ProductModel->insert($data);
			echo 'Data Imported successfully';   
        }  
	}

    public function export()
{
  $data = $this-> ProductModel->dataMatakuliah();
  $this->load->view('products/excel_export' , ['data'=>$data]);

 
}

}
