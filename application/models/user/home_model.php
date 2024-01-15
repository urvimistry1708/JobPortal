<?php
 class home_model extends CI_Model
 {
 // 	function search($condition)
 // 	{
 //        $sql = "select j.*,jt.*,cp.*,s.* where job j,job_title jt,company_profile cp,state s where jt.job_title_id=j.job_title_id and cp.company_profile_id=j.company_profile_id and cp.state_id=s.state_id and j.is_delete=0";
 //        $res = $this->db->query($sql);
      
     
	// 	if($condition!=""){
	// 		$res.= " and $condition";
	// 		  return $res->result_array();
	// 	}
	// }
	public function search_job($keyword, $location){
// 		$this->db->select("j.*,jt.job_title,cp.*,s.*");
//     $this->db->from("job j");
//      $this->db->join('job_title jt','jt.job_title_id=j.job_title_id');
//     $this->db->join("company_profile cp","cp.company_profile_id=j.company_profile_id");
//     $this->db->join("state s","s.state_id=cp.state_id");
//      $this->db->where("j.is_delete","0");
    
//       $My_Multiple_Statements_Array = array('jt.job_title' =>$keyword, 's.state_name' => $location);

// $this->db->where($My_Multiple_Statements_Array);
//     return $this->db->get()->result_array();
		 // $conditionArr = array();
   // if($keyword!=null && $keyword !=""){
   //    array_push($conditionArr,"j.job_title like '%$keyword%'");     
   // }
   // if($location!=null && $location !=""){
   //      array_push($conditionArr,"s.state_name  like '%$location%'");        
   //  }
   
   //     $condition = implode(" and ",array_filter($conditionArr));
       $sql = "select j.*,jt.*,cp.*,s.* from job j,company_profile cp,job_title jt,state s where jt.job_title_id=j.job_title_id and cp.company_profile_id=j.company_profile_id and s.state_id=cp.state_id and j.is_delete=0 and j.job_title='".$keyword."' and s.state_name='".$location."'";
	// if($condition!=""){
	// 	$sql.= " and $condition";
	// }
	 $res=$this->db->query($sql);
    return $res->result_array();
}
 }
?>