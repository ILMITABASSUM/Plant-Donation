 <!-- <?php
class Pages extends Controllers {
    //eikhane amr software er jotogula page ase shob gula call korbo 
    public function __construct() {
        $this->userModel = $this->models('User');
    }

    public function visitorHome() {
        $this->views('pages/visitorHome');
        //$users = $this->userModel->getUsers();
        //$data = [
            //'/title' => 'Home page','users'=>$users
        //];

        //$this->view('index', $data);
       
    }
public function visitorHome(){
        $this->views('pages/visitorHome');
    }
    public function signup(){
        $this->views('pages/signup');
    }
    public function contactUs(){
        $this->views('pages/contactUs');
    }
    public function login(){
        $this->views('pages/login');
    }
    public function ourWork(){
        $this->views('pages/ourWork');
    }
}  -->