<?php 
/* ========================================================================================================================
    Remove the FOUR (!!) Gravity Forms Stylesheets
    (this is terrible for page speed and we can write CSS ourselves!)
======================================================================================================================== */

add_filter('pre_option_rg_gforms_disable_css', '__return_true');