<?php 

function is_logged_in()
{
	$CI = get_instance();
	if(!$CI->session->userdata('username')){
		redirect('auth/login');
	} else {
		$level = $CI->session->userdata('level');

		$leveluri = $CI->uri->segment(1);

		$querylevel = $CI->db->get_where('users', ['level' => $level])->row_array();

		$menu_id = $queryMenu['level'];


		$userAccess = $CI->db->get_where('users', [
			'level' => $leveluri,

			
		]);

		if($userAccess = $CI->session->userdata('level')){
			redirect('auth/blocked');
		}
	}
}


