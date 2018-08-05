<?php

/**
 * Created by $ajaykan47.
 * User: Flawless India Pvt Ltd
 * Date: 7/27/2018
 * Time: 10:02 AM
 */
class Home_model extends CI_Model
{

    public function getBanner()
    {
        $Wherecondition = array('delStatus' => 'no', 'status' => 'active');
        $this->db->select('banner_id,title,filename')->from('tbl_banner')->where($Wherecondition);
        $query = $this->db->get();
        return $query->result();
    }
    public function getMainLogo()
    {
        $Wherecondition = array('status' => 'active');
        $this->db->select('logo_id,cmp_logo')->from('tbl_logo')->where($Wherecondition);
        $query = $this->db->get();
        return $query->result();
    }
}