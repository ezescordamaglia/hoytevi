<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: isra
 * Date: 19/01/13
 * Time: 18:51
 * To change this template use File | Settings | File Templates.
 */
class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
		$this->load->model('login_model');
		$this->load->model('localidad_model');
		$this->load->model('usuario_model');
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
		$this->data = array();
    }
	
	public function index()
	{	
		$data = $this->data;

		switch ($this->session->userdata('perfil')) {
			case '':
				$data['token'] = $this->token();
				$this->load->view('header_login',$data);
				$this->load->view('login_view',$data);
				$this->load->view('footer');
				break;
			case 'administrador':
				redirect(base_url().'admin');
				break;
			case 'USER':
				redirect(base_url().'user');
				break;				
			case 'editor':
				redirect(base_url().'editor');
				break;	
			case 'suscriptor':
				redirect(base_url().'suscriptor');
				break;
		}
	}
	
	public function token()
	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}
	
	public function logueo()
	{
		$data = $this->data;

		$data['token'] = $this->token();
		$this->load->view('header_login', $data);
		$this->load->view('login_register', $data);
		$this->load->view('footer');
	}


	public function new_user()
	{
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
		{
            $this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[5]|max_length[150]|xss_clean');
 
            //lanzamos mensajes de error si es que los hay
            $this->form_validation->set_message('required', 'El %s es requerido');
            $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
            $this->form_validation->set_message('max_length', 'El %s debe tener al menos %s carácteres');
			if($this->form_validation->run() == FALSE)
			{
				$this->index();
			}else{
				$username = $this->input->post('username');
				$password = sha1($this->input->post('password'));
				$check_user = $this->login_model->login_user($username,$password);
				if($check_user == TRUE)
				{
					$data = array(
	                'is_logued_in' 	=> 		TRUE,
	                'id_usuario' 	=> 		$check_user->id,
	                'perfil'		=>		$check_user->perfil,
	                'username' 		=> 		$check_user->username
            		);		
					$this->session->set_userdata($data);
					$this->index();
				}
			}
		}else{
			redirect(base_url().'login');
		}
	}

	public function logout_ci()
	{
		$this->session->sess_destroy();
		redirect('index.php');
	}


	function newRegister()
	{

        if($this->input->post('submit'))
        {

			   $insert['username'] = $this->input->post('usuario');
			   $insert['password'] = sha1($this->input->post('contrasena'));
			   $insert['last_name'] = $this->input->post('apellido');
			   $insert['first_name'] = $this->input->post('nombre');
			   $insert['email'] = $this->input->post('correo');
			   $insert['born_in'] = $this->input->post('fechaNac');
			   $insert['gender'] = $this->input->post('sexo');
			   $insert['locality_id'] = $this->input->post('localidad_id');
	    	   	
	    	   $result = $this->usuario_model->guardarUsuario($insert);

				if ($result){
					redirect(base_url().'login/logueo');
				}		     	
				else{
					redirect(base_url().'login');
				}
		}

	}

	public function autocompletar()
    {
        //si es una petición ajax y existe una variable post
        //llamada info dejamos pasar
        if($this->input->is_ajax_request() && $this->input->post('info'))
        {
            
            $abuscar = $this->security->xss_clean($this->input->post('info'));
            
            $search = $this->localidad_model->buscador($abuscar);
            
            //si search es distinto de false significa que hay resultados
            //y los mostramos con un loop foreach
            if($search !== FALSE)
            {


			foreach($search as $fila)
			{
			?>
			                
			    <p><a href="" id=<?php echo $fila->id ?> rel="nofollow"><?php echo $fila->description ?></a></p>
			                
			<?php    
			}            	
			                

                
            //en otro caso decimos que no hay resultados
            }else{
            ?>
                
                <p><?php echo 'No hay resultados' ?></p>
                
            <?php    
            }
            
        }
 	}

}
