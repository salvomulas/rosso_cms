<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Articles extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getArticle ($id) {

        $this->db->select('n.*, u.firstName, u.lastName')
                ->select("DATE_FORMAT(date, '%e. %M %Y') AS date", FALSE)
                ->select("DATE_FORMAT(date, '%H:%i') AS time", FALSE)
                ->from('news AS n, users AS u')->where('n.autor = u.id')->where('n.id', $id);
        $query = $this->db->get();

        if ($query->num_rows > 0) {
            return $query->row();
        } else {
            return NULL;
        }
    }

    public function getMatchReport ($id) {

        $this->db->select('n.title, n.article, n.pictureURL, n.autor, n.date, n.category, n.formation, n.playerArray, m.*, u.firstName, u.lastName, t.name, t.ligaDesc')
            ->select("DATE_FORMAT(n.date, '%e. %M %Y') AS aDate", FALSE)
            ->select("DATE_FORMAT(n.date, '%H:%i') AS aTime", FALSE)
            ->select("DATE_FORMAT(m.date, '%e. %M %Y') AS mDate", FALSE)
            ->select("DATE_FORMAT(m.time, '%H:%i') AS mTime", FALSE)
            ->from('news AS n')
            ->join('match AS m','n.gameID = m.gameID')
            ->join('users AS u','n.autor = u.id')
            ->join('teams AS t','m.teamID = t.id')
            ->where('n.id', $id);
        $query = $this->db->get();

        return $query->row();

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
        
        $this->db->select('n.*, u.firstName, u.lastName');
        $this->db->select("DATE_FORMAT(date, '%e. %M %Y') AS fulldate", FALSE);
        $this->db->select("DATE_FORMAT(date, '%d.%m.%y') AS shortdate", FALSE);
        $this->db->from('news AS n, users AS u');
        $this->db->where('n.autor = u.id');
        $this->db->order_by('date','desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        return $query;
        
    }
    
    public function getArticlesHome ($limit, $start) {
        
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(date, '%e. %M %Y') AS fulldate", FALSE);
        $this->db->select("DATE_FORMAT(date, '%d.%m.%y') AS shortdate", FALSE);
        $this->db->from('news');
        $this->db->order_by('date','desc');
        $this->db->where('category != 3');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        return $query;
        
    }
    
    public function getHighlights ($limit, $start) {
        
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(date, '%e. %M %Y') AS fulldate", FALSE);
        $this->db->select("DATE_FORMAT(date, '%d.%m.%y') AS shortdate", FALSE);
        $this->db->from('news');
        $this->db->order_by('date','desc');
        $this->db->where('category', '3');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        return $query;
        
    }
    
    public function getArticlesHomeWidget ($limit, $start, $type) {
        
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(date, '%e.%m.%y') AS fulldate", FALSE);
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
