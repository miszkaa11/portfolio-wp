<?php
/*
    Template Name: Main
*/

get_header();

#---------------------------------
# WIDGET::Sticky
require_once get_template_directory() . '/templates/parts/sticky.php';
#---------------------------------

#---------------------------------
# WIDGET::ToTop
require_once get_template_directory() . '/templates/parts/to-top.php';
#---------------------------------

#---------------------------------
# SECTION::Intro
require_once get_template_directory() . '/templates/main/intro.php';
#---------------------------------

#---------------------------------
# SECTION::About
require_once get_template_directory() . '/templates/main/about.php';
#---------------------------------

#---------------------------------
# SECTION::Gallery
require_once get_template_directory() . '/templates/main/gallery.php';
#---------------------------------

#---------------------------------
# SECTION::Skills
require_once get_template_directory() . '/templates/main/skills.php';
#---------------------------------

#---------------------------------
# SECTION::Cv-zone
require_once get_template_directory() . '/templates/main/cv-zone.php';
#---------------------------------

#---------------------------------
# SECTION::Contact
require_once get_template_directory() . '/templates/parts/contact.php';
#---------------------------------

get_footer();
