<?php

function get_acf_image_alt($acf_img_array){
    if(!empty( $acf_img_array['alt'] )) {
        $img_alt = $acf_img_array['alt'];
    } else {
        $img_alt = $acf_img_array['title'];
    }

    return $img_alt;
}


function get_background_or_default($acf_img, $default_bg){
    
    $background_image_url = !empty( $acf_img )
	? $acf_img
    : $default_bg;
    
    return $background_image_url;
}