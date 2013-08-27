<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Articles extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getArticle ($id) {

        $this->db->select('*')->from('news')->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows > 0) {
            return $query->result();
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
    
    public function getArticlesLimit ($limit, $start) {
        
        $this->db->select('*')->from('news')->order_by('date','asc')->limit($limit, $start);
        $query = $this->db->get();
        
        if ($query->num_rows > 0) {
            return $query;
        } else {
            return NULL;
        }
        
    }

    public function getArticleTitle ($id) {

        $this->db->select('title')->from('news')->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $query = $query->row();
            return $query->title;
        } else {
            return NuLL;
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
    
    public function countArticles () {
        
        return $this->db->count_all('news');
        
    }

}
