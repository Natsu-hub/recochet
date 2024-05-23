<?php

define('HOME_URL', esc_url(home_url('/')));

define('SITENAME',    get_bloginfo('name'));
define('DESCRIPTION', get_bloginfo('description'));
define('DSEP', DIRECTORY_SEPARATOR);
define('TEMPLATE_PATH', str_replace('/', DSEP, get_template_directory()));
define('STYLESHEET_PATH', get_stylesheet_directory());
define('THEME', get_option('stylesheet'));

define('INC_PATH', TEMPLATE_PATH . DSEP . 'inc' . DSEP);
define('TEMPLATE_URI', get_template_directory_uri());
define('STYLESHEET_URI', get_stylesheet_directory_uri());


define('CONSULTING_URL', home_url('/consulting/'));
define('ACADEMY_URL', home_url('/online-shopping-academy/'));
define('CASE_URL', home_url('/case-study/'));
define('WELL_URL', home_url('/well-being/'));
define('COMPANY_URL', home_url('/company/'));
define('CONTACT_URL', home_url('/contact/'));
define('DOWNLOAD_URL', home_url('/download/'));
define('MEETING_URL', home_url('/meeting/'));
define('PRIVACY_URL', home_url('/privacy-policy/'));



define('BLOG_URL', home_url('/blog/'));
define('WORKS_URL', home_url('/works/'));
define('RECRUIT_URL', home_url('/recruit/'));
// define('CONSULTING_URL', home_url('/service-consulting/'));
// define('ACADEMY_URL', home_url('/service-academy/'));