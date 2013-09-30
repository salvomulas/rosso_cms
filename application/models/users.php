<?php

class Users extends CI_Model {
    
    public function __construct() {
    	parent::__construct();
    }
    
    /**
     * Check if the submitted credentials are valid.
     * @author SM
     * @return true if valid, false if invalid
     */
    public function can_log_in() {
        
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', sha1($this->input->post('password')));
        
        $query = $this->db->get('users');
        
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * Get id for username.
     * @author MP
     * @param username
     * @return id
     */
    public function get_id_for_username($username) {
    	$this->db->where('username', $username);
    	$query = $this->db->get('users');
    	$row = $query->row();
    	return $row->id;
    }
    
    /**
     * Add registration to temporary user table.
     * @author SM
     * @param registration key
     * @return true if successful, false otherwise
     */
    public function add_temp_user($key) {
        
        $data = array(
            'username' => $this->input->post('username'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'password' => sha1($this->input->post('password')),
            'email' => $this->input->post('email'),
            'key' => $key,           
        );
        
        $query = $this->db->insert('temp_users', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
        
    }
    
    /**
     * Check if the submitted key is valid.
     * @author SM
     * @param registration key
     * @return true if valid, false if invalid
     */
    public function is_key_valid($key) {
        $this->db->where('key', $key);
        $query = $this->db->get('temp_users');
        
        if ($query->num_rows() == 1) {
            return true;
        } else return false;
        
    }
    
    /**
     * Add user and complete registration.
     * @author SM
     * @param registration key
     * @return true if successful, false otherwise
     */
    public function add_user($key) {
        $this->db->where('key', $key);
        $temp_user = $this->db->get('temp_users');
        
        if ($temp_user) {
            $row = $temp_user->row();
            
            $data = array(
                'create_timestamp' => date('Y-m-d H:i:s'),
                'username' => $row->username,
                'firstname' => $row->firstname,
                'lastname' => $row->lastname,
                'password' => $row->password,
                'email' => $row->email,
                'deleted' => 0,
            );
            
            $did_add_user = $this->db->insert('users', $data);
        }
        
        if ($did_add_user) {
            $this->db->where('key', $key);
            $this->db->delete('temp_users');
            return true;
        } else return false;
    }
    
    public function get_user($id) {
        $this->db->select('*');
    	$this->db->where('id', $id);
        $this->db->from('users');
        $query = $this->db->get();

        return $query;

    }
    
    
    /**
     * Edits the profile details of a user
     * @author SR
     * @param int $user_id
     * @param String $firstname
     * @param String $lastname
     * @param String $email
     * @param String $job_description
     * @param String $company
     * @return boolean Returns true if successful, otherwise false
     */
    public function edit_user_details($user_id, $firstname, $lastname, $email, $job_description, $company) {
        
        $data = array(
            'firstname'         => $firstname,
            'lastname'          => $lastname,
            'email'             => $email,
            'job_description'   => $job_description,
            'company'           => $company,
        );
        
        $this->db->where('id', $user_id);
        $this->db->update('users', $data);

        return $this->db->affected_rows() === 1 ;
    }
    
    /**
     * Changes the password of a user after verifying the specified old password.
     * @author SR
     * @param int $user_id
     * @param String $old_password
     * @param String $new_password
     * @return boolean Returns true if changed password successfully, otherwise false
     */
    public function change_user_password($user_id, $old_password, $new_password) {
        // Fetch old password hash from DB and compare
        $db_password = $this->get_user($user_id)->password;

        if (sha1($old_password) === $db_password) {
            $data = array('password' => sha1($new_password));

            $this->db->where('id', $user_id);
            $this->db->update('users', $data);
            
            return $this->db->affected_rows() === 1;
        }
        
        return false;        
    }
    
}

?>
