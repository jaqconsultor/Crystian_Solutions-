<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_news($slug = FALSE)
	{
		$this->load->helper('url');
		if ($slug === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}
	
		$query = $this->db->get_where('news', array('id' => $slug));
		return $query->row_array();
	}
	
	
	public function set_news()
	{
		$this->load->helper('url');
	
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
	
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'texto' => $this->input->post('texto'),
			'cantidad' => $this->input->post('cantidad')			
		);
	
		return $this->db->insert('news', $data);
	}


	public function set_update_news($id)
	{
		$this->load->helper('url');
	
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
	
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'texto' => $this->input->post('texto'),
			'cantidad' => $this->input->post('cantidad')
		);

		$this->db->where('id', $id);
		$this->db->update('news', $data); 
	}

	
	public function set_delete($id)
	{
		return $this->db->delete('news', array('id' => $id)); ;
	}

	
}
?>
