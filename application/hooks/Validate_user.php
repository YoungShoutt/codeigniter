    <?php  
    defined('BASEPATH') OR exit('No direct script access allowed');  

    class Validate_user {  
    	
        public function __construct(){

    	}

        public function User()  
        {  
            $CI =& get_instance();
            $CI->load->helper('url');
            if($CI->session->userdata('isLogin') == FALSE){
               	redirect(base_url('index.php/login'));
    		}else{

    		}
        }  
    }  
    ?>  