<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 6/30/2018
 * Time: 2:59 PM
 */
class Bussinessprofile_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();


    }

    public function getDDlOwnertype()
    {
        $this->db->select('mast_ownershiptype_id,ownershiptype_name')
            ->from('mast_tbl_ownershiptype')
            ->where('status', 'Active')
            ->where('delStatus', 'no');
        $query = $this->db->get();
        return $query->result();
    }

    public function getDDlModePayment()
    {
        $this->db->select('mast_modepayment_id,modepayment_name ')
            ->from('mast_tbl_modepayment')
            ->where('status', 'Active')
            ->where('delStatus', 'no');
        $query = $this->db->get();
        return $query->result();
    }

    public function getFrequency()
    {
        $this->db->select('mast_frequency_id,frequency_name')
            ->from('mast_tbl_frequency')
            ->where('status', 'Active')
            ->where('delStatus', 'no');
        $query = $this->db->get();
        return $query->result();
    }

    public function getQuanityUnit()
    {
        $this->db->select('mst_qty_id,qty_name')
            ->from('mast_tbl_quantityunit')
            ->where('status', 'Active')
            ->where('delStatus', 'no');
        $query = $this->db->get();
        return $query->result();
    }

    public function updateGst($Wherecondition, $tableName, $data)
    {
        $this->db->where($Wherecondition);
        $this->db->update($tableName, $data);
        $updated_status = $this->db->affected_rows();
        if ($updated_status):
            return true;
        else:
            return false;
        endif;
    }

    public function getGstbyUsertype($wherecondition, $tableName)
    {
        $this->db->select('gstin,panno')
            ->from($tableName)
            ->where($wherecondition);
        $query = $this->db->get();
        return $query->result();
    }

    public function getProfileDetail()
    {
        $data['value'] = $this->session->userdata('Registerlogindetails');
        $reguser_id = $data['value']['reguser_id'];
        $wherecondition = array('reguser_id' => $reguser_id);
        $this->db->select('*')
            ->from('tbl_userregistrationdetail')
            ->where($wherecondition);
        $query = $this->db->get();
        return $query->result();
    }

    public function getUserIdandType($reguser_id, $tableName)
    {
        $this->db->select('reguser_id,reguser_type')
            ->from($tableName)
            ->where('reguser_id', $reguser_id);
        $query = $this->db->get();
        $ret = $query->row();
        return $ret->reguser_id;

    }

    public function getBusinessDetailBySellerId($whereCondition)
    {
        $this->db->select('*')
            ->from('tbl_businessdetail')
            ->where($whereCondition);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAdditionalDetailBySellerId($whereCondition)
    {
        $this->db->select('*')
            ->from('tbl_additionaldetail')
            ->where($whereCondition);
        $query = $this->db->get();
        return $query->result();
    }

    public function getRequirementBySellerId($whereCondition)
    {
        $this->db->select('p.productwebuy_id,p.requirement,p.quantity,p.quantityunit,f.frequency_name')
            ->from('tbl_productwebuy as p')
            ->join('mast_tbl_frequency as f','f.mast_frequency_id=p.frequency_id')
            ->where($whereCondition);
        $query = $this->db->get();
        return $query->result();
    }

    public function getCertificateAwardBySellerId($whereCondition)
    {
        $this->db->select('*')
            ->from('tbl_certificationaward')
            ->where($whereCondition);
        $query = $this->db->get();
        return $query->result();
    }


}