<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once (APPPATH . 'controllers/Common.php');


class Load extends Common
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['home'] = true;
        $data['data_page']['banner_text'] = $this->Pages_model->get_all_banner_text();
        $data['data_page']['banner_images'] = $this->Pages_model->get_all_banner_img();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $data['data_page']['about_img'] = $this->Pages_model->get_all_about_img();
        $data['data_page']['update_img'] = $this->Pages_model->get_update_img();
        $data['data_page']['announcement'] = $this->Pages_model->get_announcement();
        $data['data_page']['infrastructure'] = $this->Pages_model->get_infrastructure();
        $data['data_page']['appreciation'] = $this->Pages_model->get_appreciation();
        $data['data_page']['products'] = $this->Pages_model->get_product();
        $data['data_page']['alerts'] = $this->Pages_model->get_alert();
        $data['data_page']['flyers'] = $this->Pages_model->get_flyer();
        $data['data_page']['action_buttons'] = $this->Pages_model->get_action_buttons();
        $data['data_page']['categories'] = $this->Pages_model->get_category_with_jobs();
        $data['data_page']['jobs'] = $this->Pages_model->get_jobs();


        $this->load_page('web/home.php', $data);
    }

    public function product()
    {
        $this->init_model(MODEL_PAGES);
        $p_id = $this->input->get('p_id');
        $data = PAGE_DATA_WEB;
        $data['data_header']['product'] = true;
        $data['data_page']['products'] = $this->Pages_model->get_product();
        $data['data_page']['product_details'] = $this->Pages_model->get_product_by_id($p_id);
        $data['data_page']['product_features'] = $this->Pages_model->get_product_features_by_id($p_id);
        $data['data_page']['product_banner_images'] = $this->Pages_model->get_aproduct_banner_images($p_id);
        $data['data_page']['flyers'] = $this->Pages_model->get_flyer();
        $data['data_page']['action_buttons'] = $this->Pages_model->get_action_buttons();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $this->load_page('web/product.php', $data);
    }


    public function contact_us()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;        
        $data['data_header']['contact_us'] = true;
        $data['data_page']['products'] = $this->Pages_model->get_product();
        $data['data_page']['flyers'] = $this->Pages_model->get_flyer();
        $data['data_page']['action_buttons'] = $this->Pages_model->get_action_buttons();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $this->load_page('web/contact_us.php', $data);
    }
    public function career()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;        
        $data['data_header']['career'] = true;
        $data['data_page']['products'] = $this->Pages_model->get_product();
        $data['data_page']['flyers'] = $this->Pages_model->get_flyer();
        $data['data_page']['action_buttons'] = $this->Pages_model->get_action_buttons();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $data['data_page']['jobs'] = $this->Pages_model->get_jobs();

        $this->load_page('web/career.php', $data);
    }


    public function career_apply(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;        
        $uid = $this->input->get('uid');
        $data['data_header']['career_apply'] = true;
        $data['data_page']['products'] = $this->Pages_model->get_product();
        $data['data_page']['flyers'] = $this->Pages_model->get_flyer();
        $data['data_page']['action_buttons'] = $this->Pages_model->get_action_buttons();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $data['data_page']['job'] = $this->Pages_model->get_jobs_by_id( $uid);

        $this->load_page('web/career_apply.php', $data);
    }


    public function about()
    {
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['about'] = true;
        $data['data_page']['products'] = $this->Pages_model->get_product();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $data['data_page']['about_img'] = $this->Pages_model->get_all_about_img();
        $data['data_page']['about_banner'] = $this->Pages_model->get_about_banners();
        $data['data_page']['flyers'] = $this->Pages_model->get_flyer();
        $data['data_page']['action_buttons'] = $this->Pages_model->get_action_buttons();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $this->load_page('web/about.php', $data);
    }


    public function updates()
    {

        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['about'] = true;
        $data['data_page']['products'] = $this->Pages_model->get_product();
        $data['data_page']['update_img'] = $this->Pages_model->get_update_img();
        $data['data_page']['announcement'] = $this->Pages_model->get_announcement();
        $data['data_page']['updates_banner'] = $this->Pages_model->get_updates_banner();
        $data['data_page']['flyers'] = $this->Pages_model->get_flyer();
        $data['data_page']['action_buttons'] = $this->Pages_model->get_action_buttons();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $this->load_page('web/updates.php', $data);

    }

    public function infrastructure()
    {

        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['about'] = true;
        $data['data_page']['products'] = $this->Pages_model->get_product();
        $data['data_page']['infrastructure'] = $this->Pages_model->get_infrastructure();
        $data['data_page']['infrastructure_banner'] = $this->Pages_model->get_infrastructure_banner();
        $data['data_page']['flyers'] = $this->Pages_model->get_flyer();
        $data['data_page']['action_buttons'] = $this->Pages_model->get_action_buttons();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $this->load_page('web/infrastructure.php', $data);
    }

    public function quality()
    {

        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['about'] = true;
        $data['data_page']['products'] = $this->Pages_model->get_product();
        $data['data_page']['quality'] = $this->Pages_model->get_quality();
        $data['data_page']['quality_banner'] = $this->Pages_model->get_quality_banner();
        $data['data_page']['flyers'] = $this->Pages_model->get_flyer();
        $data['data_page']['action_buttons'] = $this->Pages_model->get_action_buttons();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $this->load_page('web/quality.php', $data);
    }

    public function account()
    {
        $user_id = $this->session->userdata(SES_USER_ID);
        if(!empty($user_id)){
            $this->init_model(MODEL_PAGES);
            $data = PAGE_DATA_WEB;
            $data['data_footer']['footer_link'] = ['account_js.php'];
            $data['data_header']['account'] = true;
            $data['data_page']['action_buttons'] = $this->Pages_model->get_action_buttons();
            $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
            $data['data_page']['user'] = $this->Pages_model->get_a_user($user_id);
            $this->load_page('web/account.php', $data);
        }else{
            redirect('login');
        }
    }

    public function load_user_signup()
	{
		$this->load->view('web/signup');

	}

    public function load_user_signup_success()
	{
		$this->load->view('web/signup_success');

	}

    public function load_user_login()
	{
		$this->load->view('web/login');

	}

    public function job_details()
	{
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;   
        $data['data_header']['about'] = true;
        $data['data_page']['products'] = $this->Pages_model->get_product();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $data['data_page']['about_img'] = $this->Pages_model->get_all_about_img();
        $data['data_page']['about_banner'] = $this->Pages_model->get_about_banners();
        $data['data_page']['flyers'] = $this->Pages_model->get_flyer();
        $data['data_page']['action_buttons'] = $this->Pages_model->get_action_buttons();
        $data['data_page']['about_text'] = $this->Pages_model->get_all_about_text();
        $this->load_page('web/job_details.php', $data);
    }
}
?>