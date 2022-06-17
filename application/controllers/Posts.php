 <?php

    use FontLib\Table\Type\post;

    defined('BASEPATH') or exit('No direct script access allowed');
    date_default_timezone_set("Asia/Jakarta");

    class Posts extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
        }
        public function allposts()
        {

            $data = [
                'title' => 'All Posts',
                'published' => $this->db->where('status', 'Publish')->order_by('created_at', 'DESC')->get('posts')->result_array(),
                'draft' => $this->db->where('status', 'Draft')->order_by('created_at', 'DESC')->get('posts')->result_array(),
                'trash' => $this->db->where('status', 'Trash')->order_by('created_at', 'DESC')->get('posts')->result_array(),
            ];

            $this->load->view('layout/admin/header', $data);
            $this->load->view('posts', $data);
            $this->load->view('layout/admin/footer', $data);
        }


        public function addNew()
        {
            $this->form_validation->set_rules('title', 'title', 'required|trim|min_length[20]');
            $this->form_validation->set_rules('content', 'content', 'required|min_length[200]');
            $this->form_validation->set_rules('category', 'category', 'required|trim|min_length[3]');
            $this->form_validation->set_rules('status', 'status', 'required');
            if ($this->form_validation->run() == false) {
                $data = [
                    'title' => 'Add New',
                ];

                $this->load->view('layout/admin/header', $data);
                $this->load->view('addNew', $data);
                $this->load->view('layout/admin/footer', $data);
            } else {
                $title = $this->input->post('title');
                $content = $this->input->post('content2');
                $category = $this->input->post('category');
                $status = $this->input->post('status');

                $content = preg_replace("#\[sp\]#", "&nbsp", $content);
                $content = preg_replace("#\[nl\]#", "<br>\n", $content);

                $posts = [
                    'title' => $title,
                    'content' => $content,
                    'category' => $category,
                    'status' => $status,
                    'created_at' => date('Y-m-d H:i:s')
                ];

                $this->db->insert('posts', $posts);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" id="flashdata">Data created successfully.</div>');
                redirect(base_url('posts/allPosts'));
            }
        }
        public function preview()
        {
            $data = [
                'title' => 'Preview',
                'published' => $this->db->where('status', 'Publish')->order_by('created_at', 'DESC')->get('posts')->result_array(),
            ];

            $this->load->view('layout/admin/header', $data);
            $this->load->view('preview', $data);
            $this->load->view('layout/admin/footer', $data);
        }

        public function trash()
        {
            $id = $this->input->post('id');

            $this->db->where('id', $id)->update('posts', ['status' => 'Trash']);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" id="flashdata">Data has been successfully moved to the trash.</div>');
            redirect(base_url('posts/allPosts'));
        }
        public function delete()
        {
            $id = $this->input->post('id');

            $this->db->where('id', $id)->delete('posts');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" id="flashdata">Data deleted successfully.</div>');
            redirect(base_url('posts/allPosts'));
        }

        public function edit()
        {
            $id = $this->input->post('id');

            $data = [
                'title' => 'Edit Post',
                'post' => $this->db->get_where('posts', ['id' => $id])->row_array()
            ];

            $this->load->view('layout/admin/header', $data);
            $this->load->view('editPost', $data);
            $this->load->view('layout/admin/footer', $data);
        }
        public function update($id)
        {
            $this->form_validation->set_rules('title', 'title', 'required|trim|min_length[20]');
            $this->form_validation->set_rules('content', 'content', 'required|min_length[200]');
            $this->form_validation->set_rules('category', 'category', 'required|trim|min_length[3]');
            if ($this->form_validation->run() == false) {
            } else {
                $title = $this->input->post('title');
                $content = $this->input->post('content2');
                $category = $this->input->post('category');

                $content = preg_replace("#\[sp\]#", "&nbsp", $content);
                $content = preg_replace("#\[nl\]#", "<br>\n", $content);
                $status = $this->input->post('status');

                $posts = [
                    'title' => $title,
                    'content' => $content,
                    'category' => $category,
                    'status' => $status,
                    'updated_at' => date('Y-m-d H:i:s')
                ];

                $this->db->where('id', $id)->update('posts', $posts);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" id="flashdata">Data updated successfully.</div>');
                redirect(base_url('posts/allPosts'));
            }
        }
    }
