<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{



	public function __construct()
	{
		parent::__construct();

        $this->load->helper('url');

	}





	public function index()
	{
		$this->load->view('welcome_message');
	}


    public function download($file_name) {
        $this->load->helper('download');
        // Assuming your files are stored in the 'uploads/files/' directory
        $file_path = FCPATH . 'application/assets/csv/' . $file_name;
        // Force download the file
        force_download($file_path, null);
        return redirect('welcome/index');
    }

}
