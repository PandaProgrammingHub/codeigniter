public function edit(){
$id = $this->uri->segment(3);
 $data['user'] = $this->users_model->getById($id);
$this->load->view('edit', $data);
}