<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class ViewsCtrl extends CI_Controller
{
      function __construct() 
       {
         parent::__construct();       
       } 
     public function index(){
        $this->load->view('pageLayout');  
     } 
     public function HomeView(){
        $this->load->view('HomePage');  
     } 
     public function CountriesView(){
        $this->load->view('CountriesData');  
     } 
     public function PackagesView(){
        $this->load->view('PackagesView');  
     } 
     public function AboutView(){
        $this->load->view('AboutPage');  
     } 
     public function TripsView(){
        $this->load->view('TripsManagement');  
     }    
}
?>