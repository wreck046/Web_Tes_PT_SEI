class Proyek extends CI_Controller {
    public function index() {
        // Load model
        $this->load->model('Proyek_model');
        
        // Fetch data from API
        $data['proyek'] = $this->Proyek_model->get_all_proyek();
        $data['lokasi'] = $this->Proyek_model->get_all_lokasi();
        
        // Load view
        $this->load->view('proyek/index', $data);
    }
    public function create() {
    // Load form helper and library
    $this->load->helper('form');
    $this->load->library('form_validation');
    
    // Set form validation rules
    $this->form_validation->set_rules('namaProyek', 'Nama Proyek', 'required');
    $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
    
    if ($this->form_validation->run() === FALSE) {
        $data['lokasi'] = $this->Proyek_model->get_all_lokasi();
        $this->load->view('proyek/create', $data);
    } else {
        $this->Proyek_model->create_proyek();
        redirect('proyek');
    }
}

}
