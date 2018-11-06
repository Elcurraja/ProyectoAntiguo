<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url_helper');
		session_start();
		
    // Comprobamos si hemos enviado el parametro para destruir la sesion
    // Destruimos la sesion y redireccionamos.
    if (isset($_POST['destroy'])&& $_POST['destroy']=="si"){
            session_destroy();
    }

    //Comprobamos si la sesion existe y el atributo para poder logear es correcto
    if(isset($_SESSION['verifi'])&& $_SESSION['verifi']==TRUE){
        redirect(base_url('principal'));
    }
    else{
        //Comprobamos si los parametros user y admin se han enviado y si son correctos,
        //cambiamos el parametro "verifi" a True y cargamos el archivo principal.
        if(isset($_POST['user'])&& isset($_POST['pass'])){
            if($_POST['user']=='admin' && $_POST['pass']=='admin'){
                $_SESSION['verifi']=TRUE;
                redirect(base_url('principal'));
            }
            else{
                $_SESSION['verifi']=FALSE;
                $this->load->view('base/menuNoLogin');
            }
        }
        //La sesion no existe, cargamos el login.php
        else {
            $this->load->view('base/menuNoLogin');
        }
    }
		$this->load->view('login');
        $this->load->view('base/footer');
	}
}
