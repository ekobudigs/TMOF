<?php
function checklog()
{
    $CI = &get_instance();
    $level = $CI->session->userdata('level');
    if (!empty($level)) {
        redirect('dashboard');
    }
}

function checklogin()
{
    $CI = &get_instance();
    $level = $CI->session->userdata('level');
    if (empty($level)) {
        redirect('auth/login');
    }
}
