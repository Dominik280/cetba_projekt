<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');


class Controller extends CI_Controller
{
   public function __construct() {
      parent::__construct();
      $this->load->model('Model');
      $data['polozky'] = $this->Model->vypis_menu();
      $this->load->view('pages/menu', $data);
      $this->load->view('pages/header');
   }

   
   public function index()
   {
        $data['vypis'] = $this->Model->vypis();
        $this->load->view("pages/seznam_knih", $data);
      
   }

	  public function knihy_anotace($id)
	    {
            $data['knihy_anotace'] = $this->Model->vypis_knihy_anotace($id);
            $this->load->view('pages/knihy_anotace', $data);

      }
      
    public function knihy_kategorie($kat)
	    {
            $data['knihy_kategorie'] = $this->Model->vypis_knihy_kategorie($kat);
            $this->load->view('pages/knihy_kategorie', $data);

      }

      public function kategorie()
      {
        
        $data['kategorie'] = $this->Model->vypis_kategorie();
        $this->load->view("pages/kategorie", $data);
      
      }

      public function knihy_autori()
      {
        
        $data['knihy_autori'] = $this->Model->vypis_autori();
        $this->load->view("pages/autori", $data);
      
      }
 
}

