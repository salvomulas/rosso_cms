<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Articles extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getArticle ($id) {

        $this->db->select('*')->from('news')->where('id', $id);
        $query = $this->db-get();

        if ($query->num_rows > 0) {
            return $query;
        } else {
            return NULL;
        }
    }

    public function getArticles () {

        $this->db->select('*')->from('news')->order_by('date','asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return NULL;
        }

    }

    public function getArticlesType ($type) {

        $this->db->select('*')->from('news')->where('category',$type)->order_by('date','asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return NULL;
        }

    }

    public function getArticlesAutor ($autor) {

        $this->db->select('*')->from('news')->where('autor',$autor)->order_by('date','asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return NULL;
        }

    }

}
