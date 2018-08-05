<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 6/11/2018
 * Time: 6:51 PM
 */
class Joinfree_model extends CI_Model
{


    public function getDDlFrequncy()
    {
        $this->db->select('mast_frequency_id,frequency_name');
        $this->db->from('mast_tbl_frequency');
        $this->db->where('status', 'Active');
        $this->db->where('delStatus', 'no');
        $query = $this->db->get();
        return $query->result();
    }

    public function getddlSubCategory($where)
    {
        $this->db->select('subcat_id,subcat_name')
            ->from('tbl_subcategory')
            ->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function getddlMeasureUnit($where)
    {
        $this->db->select('um_id,um_name')
            ->from('mst_tbl_unitmeasure')
            ->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    public function getddlMaterial($where)
    {
        $this->db->select('mst_material_id,m_name')
            ->from('mast_tbl_material')
            ->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    public function getddlCapacity($where)
    {
        $this->db->select('cu_id,cu_name')
            ->from('mst_tbl_capacityunit')
            ->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    public function getddlpowerSource($where)
    {
        $this->db->select('psouce_id,ps_name')
            ->from('mst_tbl_powersource')
            ->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    public function getddlpowerUnit($where)
    {
        $this->db->select('punit_id,punit_name')
            ->from('mst_tbl_poweunit')
            ->where($where);
        $query = $this->db->get();
        return $query->result();
    }


}