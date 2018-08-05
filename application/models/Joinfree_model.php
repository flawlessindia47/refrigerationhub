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
    
   /****** public function sendEmail($to_email, $id) {
        $varif_code = random_code();
        $this->db->where('id', $id);
        $this->db->update('users', array('varif_code' => $varif_code));
        $update = $this->db->affected_rows();
        if ($update) {
            $data = array(
                'to' => $to_email,
                'subject' => '[Refrigrationhub] Please Confirm Your E-mail Address',
                'message' => '
                    <p>Hi !</p>
                    <p>Welcome to Refrigrationhub. Having you as a part of this Business Community makes us proud!</br>
                    You are receiving this e-mail because user at has given yours as an e-mail address to connect their account.
                     </p>
                     <p>To Confirm it was you:</p>
                    <p><a href="' . base_url('JoinFree/varify_user?email=' . $to_email . '&varify_code=' . $varif_code) . '">Click here</a></p>
                    <p>For any queries, mail us at ' . INFO_EMAIL . '.</p>
                    <p>Thanks & Regards,<br>Team Refrigrationhub <br>
                                        Mobile: +91 9811280302
                                        </p>
                '
            );
            sendmail($data);
            return true;
        } else {
            return false;
        }
    }****/
    


}