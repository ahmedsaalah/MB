

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class city_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    public function AllCountries() {
        $this->db->select('*');
        $this->db->from('countries');

 

  $query = $this->db->get();
        $result = $query->result();
        return $result;

    }

    public function citiesOfTheCountry($idcountry) {
       $this->db->select('*');
        
        $this->db->where('CountryID',$idcountry);
        $this->db->from('cities');
        return $this->db->get()->result();
    }

    public function addCityImage($cityid,$image) {
    
 $data = array(
                'cityId' => $cityid,
                'image' =>$image
				
            );
        


    $this->db->insert('citiesimages', $data);

    }

    public function addCityDesc($desc,$id) 
    {
             $data = array(
                'description' => $desc,
				
            );
        
        
    
        $this->db->where('id', $id);
        $this->db->update('cities', $data);
    }


    

//sales read msg or not

    
}


