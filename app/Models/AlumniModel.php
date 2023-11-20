<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model
{
    protected $table = 'registered_alumni'; //Database table name
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'reg_id', 
        'email', 
        'full_name', 
        'mobile', 
        'alt_mobile', 
        'gender', 
        'batch', 
        'from_year', 
        'to_year', 
        'vill_town', 
        'post_office', 
        'pin_no', 
        'locality', 
        'district', 
        'state', 
        'address', 
        'cur_occup', 
        'feedback'
    ];

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    //If a particular email id or phone no already exist
    public function existAlumni(string $email_id = ''): array|bool
    {
        $builder = $this->builder();
        $builder->where(['email' => $email_id]);
        $result_set = $builder->get()->getRowArray();
        return is_null($result_set) ? false : $result_set;
    }

    // public function getTestDetails(int $post_id)
    // {
    //    $builder = $this->builder();
    //    $builder->select('tests.test_id, type, test_dates.test_date,  test_notif_no, test_notif_date');
    //    //$builder->from('advt_info.tests');
    //    $builder->join('test_dates', 'tests.test_id = test_dates.test_id');
    //    $builder->where(['post_id' => $post_id]);
    //    $resultSet = $builder->get()->getResultArray();
    //    return count($resultSet) ? $resultSet:false;
    // }
}
