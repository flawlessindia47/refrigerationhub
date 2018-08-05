<?php

/**
 * Created by $ajaykan47.
 * User: Flawless India Pvt Ltd.
 * Date: 7/21/2018
 * Time: 12:09 PM
 */
class Productservices_model extends CI_Model
{
    /*******Primary Business Type*******/
    public function getDDlPrimaryBusinessType()
    {
        $this->db->select('mst_pbt_id,pbt_name')
            ->from('mast_tbl_primarybussinesstype')
            ->where('status', 'Active')
            ->where('delStatus', 'no');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDDlMasterKeyword()
    {
        $this->db->select('mst_key_id,key_name')
            ->from('mast_tbl_keyword')
            ->where('status', 'Active')
            ->where('delStatus', 'no');
        $query = $this->db->get();
        return $query->result();
    }

    public function getProductServicebySessionId($whereCondition)
    {
        $this->db->select('*')
            ->from('tbl_productservicekeyword')
            ->where($whereCondition);
        $query = $this->db->get();
        return $query->result();
    }

}