<?php 

class ProductModel extends CI_Model {


  public function getProducts() {

    $query = $this->db->get('matakuliah');
          return $query->result();
          
  }
  
    public function insertProduct($data) {

      return  $this->db->insert('matakuliah', $data);

    }

    public function editProduct($kd_mk) {
      $query = $this->db->get_where('matakuliah', ['kd_mk'=>$kd_mk]);
      return $query->row();
    }

    public function updateProduct($data , $kd_mk) {
         return $this->db->update('matakuliah',$data,['kd_mk'=> $kd_mk]);
    }

    public function checkProductImage ($kd_mk) {
      $query = $this->db->get_where('matakuliah',['kd_mk'=> $kd_mk] );
      return $query->row();

    }

    public function deleteProduct($kd_mk) {
      return $this->db->delete('matakuliah',['kd_mk'=> $kd_mk]);
    }



    function select()
    {
      $this->db->order_by('kd_mk', 'DESC');
      $query = $this->db->get('matakuliah');
      return $query;
    }
  
    function insert($data)
    {
      $this->db->insert_batch('matakuliah', $data);
    }
    
    public function customer () {
      $this->db->select('*');
      $this->db->from('matakuliah');
      $query=$this->db->get();
      return $query->result();
    }

    public function dataMatakuliah()
{
  $this->db->select('*');
  $this->db->from('matakuliah');
  $this->db->order_by('kd_mk', 'DESC');
  $data = $this->db->get('');
  return $data;
}

 

}
?>