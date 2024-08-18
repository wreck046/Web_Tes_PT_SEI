class Proyek_model extends CI_Model {
    private $api_url = 'http://your-api-url.com/'; // Sesuaikan dengan URL API Anda
    
    public function get_all_proyek() {
        $response = file_get_contents($this->api_url . 'proyek');
        return json_decode($response, true);
    }
    
    public function get_all_lokasi() {
        $response = file_get_contents($this->api_url . 'lokasi');
        return json_decode($response, true);
    }
    public function create_proyek() {
    $data = array(
        'namaProyek' => $this->input->post('namaProyek'),
        'lokasi' => $this->input->post('lokasi')
    );
    
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ),
    );
    
    $context  = stream_context_create($options);
    $result = file_get_contents($this->api_url . 'proyek', false, $context);
    return json_decode($result, true);
}

}
