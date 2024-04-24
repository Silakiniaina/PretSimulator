<?php
    if(!defined('BASEPATH')) exit('No direct script allowed');

    class User extends CI_Model{
        public function login($email,$password){
            $query = $this->db->query("SELECT * FROM user WHERE email='".$email."' AND password=SHA1('".$password."')");
            $result = -1;
            $res = $query->row_array();
            if($res != null){
                $result = $res['id'];
            }
            return $result;
        }

        public function inscription($nom, $email, $password){
            $this->db->query("INSERT INTO user(nom,email,password) VALUES ('".$nom."','".$email."',SHA1('".$password."'))");
        }
    }

