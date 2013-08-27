<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aktuelles extends MY_Controller {

    public function __construct() {
        
        parent::__construct();
        $this->load->model('articles');
        $this->load->library('pagination');
        
    }
    
    public function index() {

        // Set Controller properties
        $data ['page_title'] = "Aktuelles";
        
        // Pagination properties
        $config = array();
        $config["base_url"] = base_url() . "aktuelles/index";
        $config["total_rows"] = $this->articles->countArticles();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        
        // Initialize Pagination
        $this->pagination->initialize($config);
        
        // Set the offset and create links
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();

        // Load articles
        $data['articles'] = $this->articles->getArticlesLimit($config['per_page'], $page);

        // Load views with all the loaded data
        $this->load->view("meta/metadata", $data);
        $this->drawNavigation();
        $this->load->view("pages/aktuelles", $data);
        $this->load->view("elements/footer");

    }

    public function article($articleID) {

        // Load aritcle
        $data ['article'] = $this->articles->getArticle($articleID);
        $data ['articleTitle'] = $this->articles->getArticleTitle($articleID);

        // Set Controller properties
        $data['page_title'] = $data['articleTitle'];

        // Load views with all the loaded data
        $this->load->view("meta/metadata", $data);
        $this->drawNavigation();
        $this->load->view("elements/footer");

    }

}
