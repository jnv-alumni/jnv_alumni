<?php 
namespace App\Libraries;

class RegFormUtils {
    const EMAIL = [
        'name' => 'email',
        'validation' => [
            'label' => 'Email ',
            'rules' => 'required|valid_email'
        ]
    ];

    const NAME = [
        'name' => 'full_name',
        'validation' => [
            'label' => 'Full Name ',
            'rules' => 'required|alpha_numeric_punct'
        ]
    ];

    const MOBILE = [
        'name' => 'mobile',
        'validation' => [
            'label' => 'Mobile No. ',
            'rules' => 'permit_empty|is_natural'
        ]
    ];

    const ALT_MOBILE =[
        'name' => 'alt_mobile',
        'validation' => [
            'label'=> 'Alternate Mobile',
            'rules'=> 'permit_empty|is_natural'
        ]
    ];

    const GENDER =[
        'name' => 'gender',
        'validation' => [
            'label'=> 'Gender ',
            'rules'=> 'required|alpha'
        ]
    ];

    const BATCH =[
        'name' => 'batch',
        'validation' => [
            'label'=> 'Batch ',
            'rules'=> 'required|is_natural|max_length[4]|min_length[4]'
        ]
    ];

    const FROM_YEAR =[
        'name' => 'from_year',
        'validation' => [
            'label'=> 'From Year ',
            'rules'=> 'required|is_natural|max_length[4]|min_length[4]'
        ]
    ];

    const TO_YEAR =[
        'name' => 'to_year',
        'validation' => [
            'label'=> 'To Year ',
            'rules'=> 'required|is_natural|max_length[4]|min_length[4]'
        ]
    ];

    const VILL =[
        'name' => 'vill_town',
        'validation' => [
            'label'=> 'Vill/Town/City ',
            'rules'=> 'required|alpha_numeric_punct'
        ]
    ];

    const POFFICE =[
        'name' => 'post',
        'validation' => [
            'label'=> 'Post Office ',
            'rules'=> 'required|alpha_numeric_punct'
        ]
    ];

    const PIN =[
        'name' => 'pin_no',
        'validation' => [
            'label'=> 'Pin Code ',
            'rules'=> 'required|is_natural|max_length[6]|min_length[6]'
        ]
    ];

    const LOCALITY =[
        'name' => 'locality',
        'validation' => [
            'label'=> 'Locality ',
            'rules'=> 'permit_empty|alpha_numeric_punct'
        ]
    ];

    const DIST =[
        'name' => 'district',
        'validation' => [
            'label'=> 'District ',
            'rules'=> 'required|alpha_numeric_punct'
        ]
    ];

    const STATE =[
        'name' => 'state',
        'validation' => [
            'label'=> 'State ',
            'rules'=> 'required|alpha_numeric_punct'
        ]
    ];

    const ADDRESS_LINE =[
        'name' => 'address',
        'validation' => [
            'label'=> 'Additional address ',
            'rules'=> 'required|alpha_numeric_punct'
        ]
    ];

    const CURRENT_OCCUPATION =[
        'name' => 'cur_occup',
        'validation' => [
            'label'=> 'Current occupation ',
            'rules'=> 'required|alpha_numeric_punct'
        ]
    ];

    const FEEDBACK =[
        'name' => 'feedback',
        'validation' => [
            'label'=> 'Feedback/Suggestion ',
            'rules'=> 'permit_empty|alpha_numeric_punct'
        ]
    ];

    public static function email_name()
    {
        return self::EMAIL['name'];
    }

    public static function fullname_name(){
        return self::NAME['name'];
    }

    public static function mobile_name(){
        return self::MOBILE['name'];
    }

    public static function altmobile_name(){
        return self::ALT_MOBILE['name'];
    }

    public static function gender_name(){
        return self::GENDER['name'];
    }

    public static function batch_name(){
        return self::BATCH['name'];
    }

    public static function fromyr_name(){
        return self::FROM_YEAR['name'];
    }

    public static function toyr_name(){
        return self::TO_YEAR['name'];
    }

    public static function vill_name(){
        return self::VILL['name'];
    }

    public static function poffice_name(){
        return self::POFFICE['name'];
    }

    public static function pin_name(){
        return self::PIN['name'];
    }

    public static function locality_name(){
        return self::LOCALITY['name'];
    }

    public static function dist_name(){
        return self::DIST['name'];
    }

    public static function state_name(){
        return self::STATE['name'];
    }

    public static function addressline_name(){
        return self::ADDRESS_LINE['name'];
    }

    public static function curr_occup_name(){
        return self::CURRENT_OCCUPATION['name'];
    }

    public static function feedback_name(){
        return self::FEEDBACK['name'];
    }

    public static function set_rules_for(&$validation)
    {
        $validation->setRules([
            self::email_name() => self::EMAIL['validation'],
            self::fullname_name() => self::NAME['validation'],
            self::mobile_name() => self::MOBILE['validation'],
            self::altmobile_name() => self::ALT_MOBILE['validation'],
            self::gender_name() => self::GENDER['validation'],
            self::batch_name() => self::BATCH['validation'],
            self::fromyr_name() => self::FROM_YEAR['validation'],
            self::toyr_name() => self::TO_YEAR['validation'],
            self::vill_name() => self::VILL['validation'],
            self::poffice_name() => self::POFFICE['validation'],
            self::pin_name() => self::PIN['validation'],
            self::locality_name() => self::LOCALITY['validation'],
            self::dist_name() => self::DIST['validation'],
            self::state_name() => self::STATE['validation'],
            self::addressline_name() => self::ADDRESS_LINE['validation'],
            self::curr_occup_name() => self::CURRENT_OCCUPATION['validation'],
            self::feedback_name() => self::FEEDBACK['validation']
        ]);
    }
    
}

?>