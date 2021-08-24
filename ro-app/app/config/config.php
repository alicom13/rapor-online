<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
setlocale(LC_ALL, 'IND');

//$config['base_url'] = 'https://ro-k13.sinau.web.id/';
$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['base_url'] .= "://".$_SERVER['HTTP_HOST'];
$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

// =================
// Config tambahan 
// =================


// config porsi nilai
$config['pnp_h'] = 2; // porsi nilai ulangan harian
$config['pnp_t'] = 1; // porsi nilai UTS
$config['pnp_a'] = 1; // porsi nilai UAS

// kkm global
$config['kkm'] = 70;
$config['session_name_prefix'] = "app_rapot_";
$config['is_kemenag'] = FALSE;
$config['nama_sekolah'] = "SMP NUSANTARA";
$config['alamat_sekolah'] = "Bangsri, Sukodono, Sidoarjo";
$config['kota_sekolah'] = "Sidoarjo";


/*!
| ==========================================
| Konfigutasi Tambahan
| ==========================================
!*/
/*
$config['qc_nsm_sekolah'] = "13061987";
$config['qc_npsm_sekolah'] = "870613";
$config['qc_desa_sekolah'] = "Bangsri";
$config['qc_kec_sekolah'] = "Sukodono";
$config['qc_propinsi_sekolah'] = "Jawa Timur";
$config['qc_pos_sekolah'] = "61258";
$config['qc_websekolah'] = "https://sinau.web.id";
$config['qc_emailsekolah'] = "admin@sinau.web.id";
$config['qc_telpsekolah'] = "085645473999";
*/

$config['index_page'] = '';
$config['uri_protocol']	= 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language']	= 'english';
$config['charset'] = 'UTF-8';
//$config['enable_hooks'] = FALSE;
$config['enable_hooks'] = TRUE;
$config['subclass_prefix'] = 'MY_';
$config['composer_autoload'] = FALSE;

$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

$config['allow_get_array'] = TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';

$config['log_threshold'] = 4;

$config['log_path'] = '';

$config['log_file_extension'] = '';

$config['log_file_permissions'] = 0644;

$config['log_date_format'] = 'Y-m-d H:i:s';

$config['error_views_path'] = '';

$config['cache_path'] = '';

$config['cache_query_string'] = FALSE;

$config['encryption_key'] = 'Akhwan90';

$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = sys_get_temp_dir();
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;

$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= FALSE;

$config['standardize_newlines'] = FALSE;

$config['global_xss_filtering'] = FALSE;

$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();

$config['compress_output'] = FALSE;

$config['time_reference'] = 'local';

$config['rewrite_short_tags'] = FALSE;

$config['proxy_ips'] = '';
$config['modules_locations'] = array(
    APPPATH.'../../ro-inc/modul/' => '../../../ro-inc/modul/',
);
