<?php

class User_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    /**
    * get_user : Retorna la información del usuario según id
    *
    * @param $user_id identificador del usuario
    * @return $response  array con la información del usuario
    */
    public function get_user($user_id){
      $q = $this->db->select('
                  name,
                  surnames,
                  email,
                  phone_number,
                  image_profile,
                  username,
                  account_status
                  ')
                ->where('id', $user_id)
                ->get('user');

      return $q->result_array();
    }
}
