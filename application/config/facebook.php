<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Facebook App details
| -------------------------------------------------------------------
|
| To get an facebook app details you have to be a registered developer
| at http://developer.facebook.com and create an app for your project.
|
|  facebook_app_id               string   Your facebook app ID.
|  facebook_app_secret           string   Your facebook app secret.
|  facebook_login_type           string   Set login type. (web, js, canvas)
|  facebook_login_redirect_url   string   URL tor redirect back to after login. Do not include domain.
|  facebook_logout_redirect_url  string   URL tor redirect back to after login. Do not include domain.
|  facebook_permissions          array    The permissions you need.
|  facebook_graph_version        string   Set Facebook Graph version to be used. Eg v2.6
|  facebook_auth_on_load         boolean  Set to TRUE to have the library to check for valid access token on every page load.
*/

$config['facebook_app_id']              = '1864723207107336';
$config['facebook_app_secret']          = 'c748c3e95bf758146cc55d0f0ff9cce2';
$config['facebook_login_type']          = 'web';
$config['facebook_login_redirect_url']  = 'conta';
$config['facebook_logout_redirect_url'] = 'conta/sair';
$config['facebook_permissions']         = array('public_profile', 'publish_actions', 'email', 'user_managed_groups', 'manage_pages', 'publish_pages', 'pages_show_list', 'user_posts', 'user_likes');
$config['facebook_graph_version']       = 'v2.6';
$config['facebook_auth_on_load']        = TRUE;