<?php

function is_logged_in()
{

    // instansiasi CI
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role = $ci->session->userdata('role');

        if ($role != 'Admin') {
            redirect('auth/blocked');
        }
    }
}

function logged_admin()
{
    // instansiasi CI
    $ci = get_instance();
    $role = $ci->session->userdata('role');

    if ($role != 'Member') {
        redirect('auth/blockedd');
    }
}
