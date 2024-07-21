<?php

get_header();

#---------------------------------
# WIDGET::Sticky
require_once get_template_directory() . '/templates/parts/sticky.php';
# WIDGET::Sticky
#---------------------------------

#---------------------------------
# WIDGET::ToTop
require_once get_template_directory() . '/templates/parts/to-top.php';
#---------------------------------

#---------------------------------
# START::Template Section
require_once get_template_directory() . '/template-parts/custom-template/detail-view/template.php';
# END::Template Section
#---------------------------------