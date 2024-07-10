<?php
/*
    Template Name: Privacy Policy
*/

get_header();

#---------------------------------
# WIDGET::Sticky Info
require_once get_template_directory() . '/templates/parts/sticky.php';
# WIDGET::Sticky Info
#---------------------------------

#---------------------------------
# START::Template Section
require_once get_template_directory() . '/templates/privacy-policy/template.php';
# END::Template Section
#---------------------------------

get_footer();