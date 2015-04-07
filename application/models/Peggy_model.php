<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peggy_model extends CI_Model {
	public function main_image(){
		$query = $this->db->get('main_image');
		return $query->result();
	}
	
	public function get_round_image(){
		$query = $this->db->get('round_pics');
		return $query->result();
	}
	
	public function get_content_home(){
		$query = $this->db->get('content_home');
		return $query->result();
	}
	
	public function get_aside(){
		$query = $this->db->get('aside');
		return $query->result();
	}
	
	public function get_about(){
		$query = $this->db->get('about');
		return $query->result();
	}
	
	public function get_content_blog(){
		$query = $this->db->get('content_blog');
		return $query->result();
	}
	
	public function get_about(){
		$query = $this->db->get('about');
		return $query->result();
	}
}