<!-- fake -->
<?php

    require_once '../models/payment.php';
    require_once '../helpers/session_helper.php';

    class paymentControler {

        private $userModel;
        
        public function __construct(){
            $this->userModel = new payment;
        }

        public function payment(){
            //Process form
            
            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            //Init data the data holds array of all of the inputs
            $data = [
                'creditcardNo' => trim($_POST['creditcardNo']),
                'creditYear' => trim($_POST['creditYear']),
                'creditMonth' => trim($_POST['creditMonth']),
                'creditCVV' => trim($_POST['creditCVV']),
            
    
            ];

    //Validate inputs
if( empty($data['creditcardNo']) || empty($data['creditYear']) || empty($data['creditMonth'])){
                       
                   flash("payment","Please fill out all inputs");
                          redirect("../views/payment.php");
                      }
    
            if($this->userModel->payment($data)){
                redirect("../views/home.php");
            }else{
                die("Something went wrong");
            }
        }
    }
    
