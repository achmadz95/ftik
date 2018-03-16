<?php
class My_Model extends CI_Model {

  public function loginadmin($username, $sha1){  
    
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->where('password', $sha1);
    

    $query = $this->db->get();

    if ($query->num_rows() == 1) {

     return true;
    }
    else{
     return false;
    } 
  }
  
//  public function komentar(){
//      return $this->db->get('komentar')->num_rows();
//  }
  
  public function addDataUser($data) {
    $this->db->insert('user', $data);
  }

  public function getDataUser($tabel) {
      return $this->db->get_where($tabel);
  }

  public function delete_item_user($item){
    $this->db->where_in('id_user', $item);
    $this->db->delete('user');
  }

  public function getDataSlider() {
    $data1 = $this->db->select('*')->from('slider')->get();
    return $data1->result_array();
  }

  public function getDataGallery() {
    $data2 = $this->db->select('*')->from('gallery')->get();
    return $data2->result_array();
  }
}
?>
