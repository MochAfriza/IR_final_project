<?php 
class Artikel extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('curl');
    }

    function index(){
        $this->load->view('form_artikel');
    }

    function add_artikel(){
        $artikel = $this->input->post('isi_artikel');
        $data = array('text' => $artikel);
        $url = 'https://api.prosa.ai/v1/topics';
        echo $this->curl->postCURL($url, $data);  
    }
}

?>