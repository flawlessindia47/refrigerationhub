<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by $ajaykan47.
 * User: FlawlessIndia.in
 * Date: 5/19/2018
 * Time: 1:33 PM
 */
class Setting_model extends CI_Model
{

    public function insertData($tableName, $data)
    {
        if ($this->db->insert($tableName, $data)) {
            $lastInsertId = $this->db->insert_id();
            return $lastInsertId;
        } else {
            return false;
        }


    }

    public function updateRecord($DbKey, $idH, $tableName, $data)
    {
        $this->db->where($DbKey, $idH);
        $this->db->update($tableName, $data);
        $updated_status = $this->db->affected_rows();
        if ($updated_status):
            return $idH;
        else:
            return false;
        endif;
    }

    public function getList($tableName)
    {
        $this->db->select('*')
            ->from($tableName)
            ->where('delStatus', 'no');
        $query = $this->db->get();
        return $query->result();
    }

    public function getListById($idG, $DbKey, $tableName)
    {

        $this->db->select('*')
            ->from($tableName)
            ->where($DbKey, $idG);
        $query = $this->db->get();
        return $query->result();
    }

    public function getadminDetailBySessionId($idLoginSession)
    {
        $this->db->select('*')
            ->from('tbl_adminlogindetail')
            ->where('login_id', $idLoginSession);
        $query = $this->db->get();
        return $query->result();
    }

    public function deleteRecord($DbKey, $idH, $tableName)
    {
        $this->db->where($DbKey, $idH);
        if ($this->db->delete($tableName)) {
            return true;
        } else {
            return false;
        }
    }

    public function getExitingData($select, $tableName, $whereCondition, $returnVal)
    {
        $this->db->select($select);
        $this->db->from($tableName);
        $this->db->where($whereCondition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->$returnVal;
        }
        return false;


    }

    public function getSellerIdByMail($reguser_mail)
    {
        $this->db->select('reguser_id')
            ->from('tbl_userregistration')
            ->where('reguser_mail', $reguser_mail);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->reguser_id;
        }
        return false;

    }


    /**********manage product********************/

    public function showtList($tableName)
    {
        $this->db->select('*')
            ->from($tableName);

        $query = $this->db->get();
        return $query->result();
    }

   

    public function getProductList()
    {
        $this->db->select('*')
            ->from('tbl_product as pro')
            ->join('tbl_productspecification as specific', 'specific.product_id=pro.product_id', 'left')
            ->join('tbl_tradeinformation as tra', 'tra.ps_id=specific.ps_id', 'left')
            ->join('tbl_category as cat', 'cat.cat_id=pro.cat_id', 'left')
            ->join('tbl_subcategory as subcat', 'subcat.subcat_id=pro.subcat_id', 'left');
        $query = $this->db->get();
        return $query->result();

    }
     /**********manage product*****End***************/
     public function gePostbyRequirementLead()
    {

        $this->db->select('*')
            ->from('tbl_postbyrequirement')
            ->order_by("pbr_id", "DESC");
            $query = $this->db->get();
        return $query->result();

    }
    
    

}