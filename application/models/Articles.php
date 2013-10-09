<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Articles extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getArticle ($id) {

        $this->db->select('*')
                ->select("DATE_FORMAT(date, '%e. %M %Y') AS date", FALSE)
                ->select("DATE_FORMAT(date, '%H:%i') AS time", FALSE)
                ->from('news')->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows > 0) {
            return $query->row();
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
        
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(date, '%e. %M %Y') AS fulldate", FALSE);
        $this->db->from('news');
        $this->db->order_by('date','desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        return $query;
        
    }
    
    public function getArticlesHome ($limit, $start, $type) {
        
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(date, '%e.%m.%y') AS date", FALSE);
        $this->db->from('news');
        $this->db->where('category',$type);
        $this->db->order_by('date','desc');
        $this->db->limit($limit, $start);
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
