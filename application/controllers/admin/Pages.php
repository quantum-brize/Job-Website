<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once (APPPATH . 'controllers/admin/Admin.php');


class Pages extends Admin
{


    function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        if (
            $this->session->userdata(SES_ADMIN_ID) == null &&
            $this->session->userdata(SES_SUB_ADMIN_ID) == null
        ) {
            redirect('/admin/login');
        } else {
            redirect('/admin/home');
        }
    }

    /**HOME*/
    public function home()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['home_js.php'];
        $data['data_header']['header_link'] = ['home.css'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['home'] = true;
        $data['data_page']['banner_text'] = $this->Pages_model->get_all_banner_text();
        $data['data_page']['banner_images'] = $this->Pages_model->get_all_banner_img();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $data['data_page']['about_img'] = $this->Pages_model->get_all_about_img();
        $data['data_page']['update_img'] = $this->Pages_model->get_update_img();
        $data['data_page']['announcement'] = $this->Pages_model->get_announcement();
        $data['data_page']['infrastructure'] = $this->Pages_model->get_infrastructure();
        $data['data_page']['appreciation'] = $this->Pages_model->get_appreciation();
        $this->is_auth('admin/pages_home.php', $data);

    }
    public function product()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['product_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['product'] = true;
        $data['data_page']['product'] = $this->Pages_model->get_product();

        $this->is_auth('admin/product.php', $data);

    }

    public function categories()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['categories_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['categoris'] = true;
        $data['data_page']['categories'] = $this->Pages_model->get_categories();

        $this->is_auth('admin/categories.php', $data);

    }

    public function view_product(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $uid = $this->input->get('uid');
        $data['data_footer']['footer_link'] = ['product_single_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['product'] = true;
        $data['data_page']['product'] = $this->Pages_model->get_product_by_id($uid);
        $data['data_page']['features'] = $this->Pages_model->get_product_features_by_id($uid);
        $data['data_page']['product_banner_images'] = $this->Pages_model->get_aproduct_banner_images($uid);

        $this->is_auth('admin/product_single.php', $data);
    } 

    public function product_add()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['product_add_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['product'] = true;
        $this->is_auth('admin/product_add.php', $data);

    }

    public function category_add()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['category_add_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['categoris'] = true;
        $this->is_auth('admin/category_add.php', $data);

    }

    public function view_category(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $uid = $this->input->get('uid');
        $data['data_footer']['footer_link'] = ['category_update_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['categories'] = true;
        $data['data_page']['category'] = $this->Pages_model->get_category_by_id($uid);

        $this->is_auth('admin/category_update.php', $data);
    }

    public function product_feature_add(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['product_feature_add_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['product'] = true;
        $this->is_auth('admin/product_feature_add.php', $data);
    }

    public function view_infrastructure(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['infrastructure_single_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['product'] = true;
        $data['data_page']['infrastructure'] = $this->Pages_model->get_infrastructure_by_id($this->input->get('uid'));

        $this->is_auth('admin/infrastructure_single.php', $data);
    }

    public function view_quality(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['quality_single_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['product'] = true;
        $data['data_page']['quality'] = $this->Pages_model->get_quality_by_id($this->input->get('uid'));

        $this->is_auth('admin/quality_single.php', $data);
    }

    public function view_users(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['users_js.php'];
        $data['data_header']['title'] = 'Admin | Pages';
        $data['data_header']['sidebar']['pages'] = true;
        $data['data_header']['sidebar']['users'] = true;
        $data['data_page']['users'] = $this->Pages_model->get_all_user();

        $this->is_auth('admin/users.php', $data);
    }


    public function save_user_message(){
        $data = $this->input->post();
        $this->init_model(MODEL_PAGES);

        //$this->prd($data);
        $this->Pages_model->save_user_message($data);
        redirect('/home');
    }

    // public function get_all_jobs(){
    //     $data['jobs'] = $this->Pages_model->get_jobs();
    //     return $data;
    // }
    public function get_all_jobs()
    {
		$resp = [
            KEY_STATUS => false,
            KEY_MESSAGE => '',
            'data' => ''
        ];
        $this->init_model(MODEL_PAGES);
        $data = $this->Pages_model->get_jobs();
        if(!empty($data)){
            $resp = [
                KEY_STATUS => true,
                KEY_MESSAGE => 'Products found',
                'data' => $data
            ];
        } else{
            $resp = [
                KEY_MESSAGE => 'Products not found!',
                'data' => ''
            ];
        }
        return $this->response($resp);
    }

    public function get_all_categories()
    {
		$resp = [
            KEY_STATUS => false,
            KEY_MESSAGE => '',
            'data' => ''
        ];
        $this->init_model(MODEL_PAGES);
        $data = $this->Pages_model->get_category_with_jobs();
        if(!empty($data)){
            $resp = [
                KEY_STATUS => true,
                KEY_MESSAGE => 'Categories found',
                'data' => $data
            ];
        } else{
            $resp = [
                KEY_MESSAGE => 'Categories not found!',
                'data' => ''
            ];
        }
        return $this->response($resp);
    }


    public function add_new_product(){
        $data = $this->input->post();
        //$upload_data = $this->upload_files('./uploads/product_img/', 'product_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        $upload_banner_data = $this->upload_files('./uploads/product_banner_img/', 'product_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        //$this->prd($upload_banner_data);
        if ($upload_banner_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_product('/uploads/product_banner_img/',$upload_banner_data,$data);
        }
        redirect('/admin/products');
    }

    public function  add_new_flyer(){
        $upload_banner_data = $this->upload_files('./uploads/flyer_img/', 'flyer_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_banner_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_flyer('/uploads/flyer_img/'.$upload_banner_data['file_name']);
        }
        redirect('admin/flyers'); 
    }


    public function add_new_product_banner(){
        $p_id = $this->input->post('p_id');
        $upload_banner_data = $this->upload_files('./uploads/product_banner_img/', 'product_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        //$this->prd($upload_banner_data);
        if ($upload_banner_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_product_banner('/uploads/product_banner_img/'.$upload_banner_data['file_name'],$p_id);
        }
        redirect('admin/pages/view_product?uid='.$p_id);
    }

   



    public function update_product(){
        //$this->prd($this->input->post());
        $this->init_model(MODEL_PAGES);

        if(!empty($_FILES['product_img']['name'][0])){
            $upload_data = $this->upload_files('./uploads/product_img/', 'product_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $this->Pages_model->update_product_img('/uploads/product_img/' . $upload_data['file_name'], $this->input->post('product_uid'));
            }
        }
        if(!empty($_FILES['product_banner_img']['name'][0])){
            $upload_data = $this->upload_files('./uploads/product_banner_img/', 'product_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $this->Pages_model->update_product_banner_img('/uploads/product_banner_img/' . $upload_data['file_name'], $this->input->post('product_uid'));
            }
        }

        $update = $this->Pages_model->update_product($this->input->post());
        redirect('admin/pages/view_product?uid=' . $this->input->post('product_uid'));
    }

    public function update_category(){
        //$this->prd($this->input->post());
        $this->init_model(MODEL_PAGES);
        $category_data = [
            'name' => $this->input->post('name')
        ];
        if(!empty($_FILES['category_icon']['name'][0])){
            $upload_data = $this->upload_files('./uploads/category_icon/', 'category_icon', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $category_data['icon'] = '/uploads/category_icon/' . $upload_data['file_name'];
            }
        }

        $update = $this->Pages_model->update_category($category_data, $this->input->post('category_id'));
        if($update){
            redirect('admin/pages/view_category?uid=' . $this->input->post('category_id'));
        }
        
    }


    public function update_alert(){
        $this->init_model(MODEL_PAGES);
        if(!empty($_FILES['allerts_img']['name'][0])){
            $upload_data = $this->upload_files('./uploads/allerts_img/', 'allerts_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $this->Pages_model->update_alert_img('/uploads/allerts_img/' . $upload_data['file_name']);
            }
        }
        $this->Pages_model->update_alerts($this->input->post());
        redirect('/admin/alerts');
    }

    public function update_infrastructure(){

        $this->init_model(MODEL_PAGES);
        $uid = $this->input->post('uid');
        if(!empty($_FILES['home_infrastructure_img']['name'][0])){
            $upload_data = $this->upload_files('./uploads/home_infrastructure_img/', 'home_infrastructure_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $this->Pages_model->update_infrastructure_img('/uploads/home_infrastructure_img/' . $upload_data['file_name'], $uid);
            }
        }
        $this->Pages_model->update_infrastructure($this->input->post());
        redirect('/admin/pages/view_infrastructure?uid='.$uid);

    }

    public function update_quality(){
        $this->init_model(MODEL_PAGES);
        $uid = $this->input->post('uid');
        if(!empty($_FILES['quality_img']['name'][0])){
            $upload_data = $this->upload_files('./uploads/quality_img/', 'quality_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $this->Pages_model->update_quality_img('/uploads/quality_img/' . $upload_data['file_name'], $uid);
            }
        }
        $this->Pages_model->update_quality($this->input->post());
        redirect('/admin/pages/view_quality?uid='.$uid);
    }

    public function add_alert(){
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->add_alert($this->input->post());
        redirect('/admin/alerts');
    }

    public function add_job(){
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->add_job($this->input->post());
        redirect('/admin/jobs');
    }

    public function add_category(){
        $this->init_model(MODEL_PAGES);
        $insert_data = [
            'uid' => $this->generate_uid('CAT'),
            'name' =>  $this->input->post('name')
        ];
        if(!empty($_FILES['category_icon']['name'][0])){
            $upload_data = $this->upload_files('./uploads/category_icon/', 'category_icon', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $insert_data['icon'] = '/uploads/category_icon/' . $upload_data['file_name'];
            }
        }

        $insert_cat_data = $this->Pages_model->add_category($insert_data);
        if($insert_cat_data){
            redirect('/admin/categories');
        }
    }

    public function update_banner_text(){
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->update_banner_text($this->input->post());
        redirect('/admin/home');
    }

    public function update_action_buttons(){
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->update_action_buttons($this->input->post());
        redirect('/admin/alerts');
    }

  
    public function update_about_text()
    {
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->update_about_text($this->input->post());
        redirect('/admin/about');
    }

    public function update_logo()
    {
        $upload_data = $this->upload_files('./uploads/logo_img/', 'logo_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->update_logo('/uploads/logo_img/' . $upload_data['file_name']);
        }
        redirect('/admin/about');
    }

    public function upload_home_banner_img()
    {
        $upload_data = $this->upload_files('./uploads/home_banner_img/', 'home_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->insert_home_banner_img('/uploads/home_banner_img/' . $upload_data['file_name']);
        }
        redirect('/admin/home');
    }

    public function add_new_quality_banner(){
        $upload_data = $this->upload_files('./uploads/quality_banner_img/', 'quality_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_quality_banner('/uploads/quality_banner_img/' . $upload_data['file_name']);
        }
        redirect('/admin/quality');
    }


    public function upload_announcement_file(){
        $upload_data = $this->upload_files('./uploads/home_announcement_file/', 'home_announcement_file', IMG_FILE_TYPES, IMG_FILE_SIZE);
        //$this->prd($upload_data);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->insert_home_announcement_file('/uploads/home_announcement_file/' . $upload_data['file_name'], $this->input->post('title'));
        }
        redirect('/admin/updates');
    }

    public function add_new_about_banner(){

        $upload_data = $this->upload_files('./uploads/about_banner_img/', 'about_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        //$this->prd($upload_data);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_about_banner('/uploads/about_banner_img/' . $upload_data['file_name']);
        }
        redirect('/admin/about');
    }

    public function add_new_infrastructure_banner(){

        $upload_data = $this->upload_files('./uploads/infrastructure_banner_img/', 'infrastructure_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        //$this->prd($upload_data);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_infrastructure_banner('/uploads/infrastructure_banner_img/' . $upload_data['file_name']);
        }
        redirect('/admin/infrastructure');

    }

    public function add_new_updates_banner(){
        $upload_data = $this->upload_files('./uploads/updates_banner_img/', 'updates_banner_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        //$this->prd($upload_data);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_new_updates_banner('/uploads/updates_banner_img/' . $upload_data['file_name']);
        }
        redirect('/admin/updates');
    }

    public function upload_home_update_img(){
        $upload_data = $this->upload_files('./uploads/home_update_img/', 'home_update_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->update_home_update_img('/uploads/home_update_img/' . $upload_data['file_name']);
        }
        redirect('/admin/updates');
    }

    public function upload_home_about_img()
    {
        $upload_data = $this->upload_files('./uploads/home_about_img/', 'home_about_img', IMG_FILE_TYPES, IMG_FILE_SIZE);

        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $uid = $this->input->get('uid');
            $this->Pages_model->update_home_about_img('/uploads/home_about_img/' . $upload_data['file_name'], $uid);
        }
        redirect('/admin/about');

    }

    public function add_infrastructure(){
        $upload_data = $this->upload_files('./uploads/home_infrastructure_img/', 'home_infrastructure_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_infrastructure('/uploads/home_infrastructure_img/' . $upload_data['file_name'], $this->input->post());
        }
        redirect('/admin/infrastructure');

    }

    public function add_quality(){
        $upload_data = $this->upload_files('./uploads/quality_img/', 'quality_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_quality('/uploads/quality_img/' . $upload_data['file_name'], $this->input->post());
        }
        redirect('/admin/quality');
    }


    public function add_appreciation(){
        $upload_data = $this->upload_files('./uploads/home_appreciation_img/', 'home_appreciation_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_appreciation('/uploads/home_appreciation_img/' . $upload_data['file_name'], $this->input->post('home_appreciation_text'));
        }
        redirect('/admin/home');

    }

    public function add_product_feature(){
        //$this->prd($this->input->post());

        $upload_data = $this->upload_files('./uploads/feature_img/', 'feature_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->add_product_feature('/uploads/feature_img/' . $upload_data['file_name'], $this->input->post());
        }
        redirect('admin/pages/view_product?uid='.$this->input->post('product_id'));

    }

    public function save_job_req(){
        //$this->prd($_FILES);

        $upload_data = $this->upload_files('./uploads/cv_file/', 'cv_file', IMG_FILE_TYPES, IMG_FILE_SIZE);
        if ($upload_data) {
            $this->init_model(MODEL_PAGES);
            $this->Pages_model->save_job_req('/uploads/cv_file/' . $upload_data['file_name'], $this->input->post());
        }
        redirect('/');
    }

    public function update_user(){
        //$this->prd($this->input->post());
        $this->init_model(MODEL_PAGES);
        $user_data = [
            'user_name' => $this->input->post('user_name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
        ];

        $user_details_data = [
            'dob' =>  $this->input->post('dob'),
            'gender' =>  $this->input->post('gender'),
            'language' =>  $this->input->post('language'),
            'skills' =>  $this->input->post('skills'),
            'marital_status' =>  $this->input->post('maritalStatus'),
            'state' =>  $this->input->post('state'),
            'city' =>  $this->input->post('city'),
            'experience' =>  $this->input->post('experience'),
            'social_media_links' =>  $this->input->post('social_links'),
            'status' => 'complete',
        ];

        if(!empty($_FILES['user_image']['name'][0])){
            $upload_data = $this->upload_files('./uploads/user_img/', 'user_image', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $user_details_data['img'] = '/uploads/user_img/' . $upload_data['file_name'];
            }
        }

        if(!empty($_FILES['aadhar_img']['name'][0])){
            $upload_data = $this->upload_files('./uploads/user_document/', 'aadhar_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $user_details_data['aadhar'] = '/uploads/user_document/' . $upload_data['file_name'];
            }
        }

        if(!empty($_FILES['pan_img']['name'][0])){
            $upload_data = $this->upload_files('./uploads/user_document/', 'pan_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $user_details_data['pan'] = '/uploads/user_document/' . $upload_data['file_name'];
            }
        }

        if(!empty($_FILES['resume_img']['name'][0])){
            $upload_data = $this->upload_files('./uploads/user_document/', 'resume_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            if($upload_data){
                $user_details_data['resume'] = '/uploads/user_document/' . $upload_data['file_name'];
            }
        }

        // if($user_image_data != '' && $user_aadhar_data != '' && $user_pan_data != '' && $user_resume_data != '' &&){
            $update = $this->Pages_model->update_user($user_data, $user_details_data, $this->input->post('user_id'));
            if($update){
                redirect('account');
            }
        // }
        
        
        
    }




























    public function delete_banner_img()
    {
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_banner_img($uid);

        redirect('/admin/home');
    }

    public function delete_category()
    {
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_category($uid);

        redirect('/admin/categories');
    }

    public function delete_announcement_file(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_announcement_file($uid);

        redirect('/admin/updates');
    }

    public function delete_infrastructure(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_infrastructure($uid);
        redirect('/admin/infrastructure');
    }

    public function delete_appreciation(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_appreciation($uid);
        redirect('/admin/infrastructure');


    }

    public function delete_alert(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_alert($uid);
        redirect('/admin/alerts');
    }

    public function delete_product(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_product($uid);
        redirect('/admin/products');

    }

    public function delete_product_features(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_product_features($uid);
        redirect('/admin/pages/view_product?uid='.$this->input->get('p_id'));
    }

    public function delete_product_banner_img(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_product_banner_img($uid);
        redirect('/admin/pages/view_product?uid='.$this->input->get('p_id'));
    }


    public function delete_about_banner_img(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_about_banner_img($uid);
        redirect('/admin/about');
    }

    public function delete_infrastructure_banner_img(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_infrastructure_banner_img($uid);
        redirect('/admin/infrastructure'); 
    }
    

    public function delete_updates_banner_img(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_updates_banner_img($uid);
        redirect('/admin/updates');
    }

    public function delete_quality(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_quality($uid);
        redirect('/admin/quality');
    }

    public function delete_quality_banner_img(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_quality_banner_img($uid);
        redirect('/admin/quality');
    }

    public function delete_flyer_img(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_flyer_img($uid);
        redirect('/admin/flyers');
    }

    public function delete_job(){
        $uid = $this->input->get('uid');
        $this->init_model(MODEL_PAGES);
        $this->Pages_model->delete_job($uid);
        redirect('/admin/jobs');
    }

   

}