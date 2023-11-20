<?php 
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\RegFormUtils as formUtils;
use App\Models\AlumniModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Registration extends BaseController{
    protected $alumniModel;
    protected $db;
    protected $session;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->alumniModel = new AlumniModel();
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function listOccupations(){
        
    }

    public function register(){
        // Validate data 
        $validation = service('validation');
        formUtils::set_rules_for($validation);
        //IF validation rules FAIL redirect back to Test details entry page with input data and error messages
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput();
        }
        
        // Check if already registered, if yes redirect with message
        if($alumni_details = $this->alumniModel->existAlumni($this->request->getVar(formUtils::email_name()))){
            return redirect()->back()->withInput()->with("error_msg","email ID: ". $alumni_details[formUtils::email_name()] ." already registered.");
        }
        
        // Check if payment pending, if pending allow to complete payment
        
        // If valid data generate Alumni id and insert into database register
        $builder_reg_alumni = $this->db->table("registered_alumni");

        // prepare alumni registration data to insert into database
        $registration_data = [
            formUtils::email_name() => $this->request->getVar(formUtils::email_name()),
            formUtils::fullname_name() => $this->request->getVar(formUtils::fullname_name()),
            formUtils::mobile_name() => $this->request->getVar(formUtils::mobile_name()),
            formUtils::altmobile_name() => $this->request->getVar(formUtils::altmobile_name()),
            formUtils::gender_name() => $this->request->getVar(formUtils::gender_name()),
            formUtils::batch_name() => $this->request->getVar(formUtils::batch_name()),
            formUtils::fromyr_name() => $this->request->getVar(formUtils::fromyr_name()),
            formUtils::toyr_name() => $this->request->getVar(formUtils::toyr_name()),
            formUtils::vill_name() => $this->request->getVar(formUtils::vill_name()),
            formUtils::poffice_name() => $this->request->getVar(formUtils::poffice_name()),
            formUtils::pin_name() => $this->request->getVar(formUtils::pin_name()),
            formUtils::locality_name() => $this->request->getVar(formUtils::locality_name()),
            formUtils::dist_name() => $this->request->getVar(formUtils::dist_name()),
            formUtils::state_name() => $this->request->getVar(formUtils::state_name()),
            formUtils::addressline_name() => $this->request->getVar(formUtils::addressline_name()),
            formUtils::curr_occup_name() => $this->request->getVar(formUtils::curr_occup_name()),
            formUtils::feedback_name() => $this->request->getVar(formUtils::feedback_name())
        ];

        echo json_encode($registration_data);
    }

}

?>