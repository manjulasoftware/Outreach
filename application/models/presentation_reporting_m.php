<?php 
	
class presentation_reporting_m extends CI_Model
{
	function __construct() {
        parent::__construct();
    	}
	
	public function getpresentation_reporting($id="",$limit="",$offset="") {
		if ($this->session->userdata('presentation_reporting_filter_data') !== FALSE) {
			   $filters=$this->session->userdata('presentation_reporting_filter_data');
			   if($filters['date_range'] != "") {
					$daterange=explode("_",$filters['date_range']); 
					$from_date=date("Y-m-d H:i:s", strtotime($daterange[0]));
					
					$to_date=date("Y-m-d H:i:s", strtotime("23:59:59",strtotime($daterange[1]))); 
					
					$this->db->where('created_on >=', $from_date);
					$this->db->where('created_on <=', $to_date);  
			   		}
			   $this->db->like('document_name', $filters['document_name'],'both');
			   }
		
		if($id != '') {	
			$this->db->where('document_id',$id);
			}
		
		if($limit != "" || $offset != "") {
			$this->db->limit($limit,$offset);
			}
		$this->db->where('status != 3');
		$query = $this->db->select('*')
						  ->from('presentation_reporting_documents')
						  ->order_by('document_id','desc')
						  ->get();
		//  echo $this->db->last_query();
		return $query->result_array();
	}
	public function  presentation_reporting_Count() {
			$this->db->where('status != 3');
        	$query = $this->db->get('presentation_reporting_documents');
		return $query->num_rows();
		}
		
		public function  presentation_reporting_add($data) {
				$this->db->insert('presentation_reporting_documents',$data);
				return   1;
		}
		
	public function presentation_reportingUpdStatus($corporate_reg_id,$st_val)	{
			$this->db->where('document_id', $corporate_reg_id);
			$this->db->set('status', $st_val);
			$this->db->set('edited_on',date('Y-m-d H:i:s'));
			$this->db->update('presentation_reporting_documents');
			return $this->db->affected_rows();
		}
		
		public function delete($id)	{
			$this->db->where('document_id', $id);
			$this->db->set('status', 3);
			$this->db->set('created_on',date('Y-m-d H:i:s'));
			$this->db->update('presentation_reporting_documents');
			return $this->db->affected_rows();
		}
		
		public function edit($id,$postdata){
			$this->db->where('document_id', $id);
			$this->db->set('document_name',$postdata['document_name']);
			$this->db->set('document_path',$postdata['document_path']);
			$this->db->set('status', 1);
			$this->db->update('presentation_reporting_documents');
			return $this->db->affected_rows();
		}
  }
  ?>