<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('curl');
    }

    function index(){
        $artikel = $this->db->get('artikel');
        $this->load->view('view', compact('artikel'));
    }

    function form_insert(){
        $this->load->view('form_artikel');
    }
  

    function add_artikel(){
        $judul = $this->input->post('judul_artikel');
        $artikel = $this->input->post('isi_artikel');
        $data = array('text' => $artikel);
        $url = 'https://api.prosa.ai/v1/topics';
        $result = json_decode($this->curl->postCURL($url, $data), true);
        $inserted = array(
            'judul' => $judul, 
            'isi' => $artikel, 
            'topic' => $result['topic'], 
            'confidence' => $result['confidence']
        );
        $this->db->insert('artikel', $inserted); 
        redirect(base_url('artikel'));
    }

    function hapus($id){
        $where = array('id' => $id);
        $this->db->delete('artikel' ,$where);
        redirect(base_url('artikel'));
    }

    function form_edit($id){
       // $where = array('id' => $id);
        //$data['artikel'] = $this->mdl_artikel->edit_data('artikel',$where)->result();
        $this->load->view('edit_artikel');
    }

    function update(){
    $id = $this->input->post('id');
    $judul = $this->input->post('judul_artikel');
    $artikel = $this->input->post('isi_artikel');

    $data = array(
        'judul' => $judul, 
            'isi' => $artikel, 
        );

    $where = array(
        'id' => $id
    );

    $this->mdl_artikel->update_data('artikel',$where,$data);
    redirect(base_url('artikel'));
    }
}
?>