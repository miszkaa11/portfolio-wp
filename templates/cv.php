<?php
/*
    Template Name: Cv
*/

get_header();

#---------------------------------
# WIDGET::Sticky Info
require_once get_template_directory() . '/templates/parts/sticky.php';
# WIDGET::Sticky Info
#---------------------------------

#---------------------------------
# WIDGET::ToTop
require_once get_template_directory() . '/templates/parts/to-top.php';
#---------------------------------

#---------------------------------
# START::Template Section
require_once get_template_directory() . '/templates/cv/template.php';
# END::Template Section
#---------------------------------

get_footer();
