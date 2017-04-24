<?php
define(lib_folder,"/weblibs");
//***************************************************************
if ( ! function_exists('cspit')) {
    function cspit($cs = '')
    {
        //<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        $linkrel = '<link href='.
            '"'.
            $cs.
            '"'.
            ' rel='.
            '"'.
            'stylesheet'.
            '"'.
            '>'.
            "\n";
        ;

        echo $linkrel;
        return $linkrel;
    }
}
if ( ! function_exists('jspit')) {
    function jspit($src = '')
    {
        $js = "<script ".
            'src="'.$src.
            '" language="'.
            'javascript"'.
            ' type="'.
            'text/javascript"' .
            ">".
            "</script>".
            "\n";

        echo $js;
        return $js;
    }
}

//***************************************************************
if ( ! function_exists('js_load')) {
    function js_load($src = '')
    {
$js = "<script ".
    'src="'.$src.
    '" language="'.
    'javascript"'.
    ' type="'.
    'text/javascript"' .
    ">".
    "</script>".
    "\n";

        return $js;
    }
}
//***************************************************************
if ( ! function_exists('css_load')) {
    function css_load($cs = '')
    {
        //<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        $linkrel = '<link href='.
            '"'.
            $cs.
            '"'.
            ' rel='.
            '"'.
            'stylesheet'.
            '"'.
            '>'.
            "\n";
            ;

        return $linkrel;
    }
}
//**************************************************
if ( ! function_exists('getjquery')) {
    function getjquery()
    {
        //$_serverip=$_SERVER['SERVER_ADDR'];

        $jqueryBase = "/weblibs/jquery/jquery311";
        //$jquery = $jqueryBase."/https _ajax.googleapis.com_ajax_libs_jquery_3.1.1_jquery.min.js";
        $jquery = $jqueryBase . "/jquery.js";
        $jq_js = js_load($jquery);
        return $jq_js;
    }
}
//***************************************************
function getbootstrap() {
//suhteeelinen apachen docroottiin.
    //$bstrapBase ="/bootstrap";
    $bstrapBase = lib_folder."/bootstrap/bootstrap337";
    $_serverip=$_SERVER['SERVER_ADDR'];
    $bootstrapCSS = $bstrapBase."/css/bootstrap.min.css";
    $bootstrapJS =  $bstrapBase. "/js/bootstrap.js";
    $bootstrapTHEME =  $bstrapBase."/css/bootstrap-theme.css";

    //$bootstrapNPM = $bstrapBase. "/js/npm.js";
    $bs_css = css_load($bootstrapCSS);
    $bs_theme = css_load($bootstrapTHEME);
    $bs_js =  js_load($bootstrapJS);
    //$bs_npm = js_load($bootstrapNPM);
$ret = $bs_css.$bs_theme.$bs_js;
    echo $ret;


    //.$bs_npm;
}

//************************************************
function getfontawesome() {
    $_serverip=$_SERVER['SERVER_ADDR'];
    $faBase = "/weblibs/fontawesome/fa470";
    $faCSS = $faBase."/css/font-awesome.css";
    $fa_css= css_load($faCSS);
    return $fa_css;

}
//************************************************
function get_tinymce() {
    $serverip=$_SERVER['SERVER_ADDR'];
    
    $tmceBase = "/weblibs/tinymce/tinymce452";
    $tmceJS = $tmceBase."/js/tinymce/tinymce.min.js";
    $tjs= js_load($tmceJS);
    return $tjs;

}
//************************************************
function get_codesnippet() {
    $_serverip=$_SERVER['SERVER_ADDR'];
    $base = "/weblibs/ckeditor/ckeditor_4.6.2_full/ckeditor/plugins/codesnippet/lib/highlight/styles";

    $CSS = $base."/default.css";
    $css= css_load($CSS);
    return $css;

}
//************************************************
function get_highlight() {
    $serverip=$_SERVER['SERVER_ADDR'];

    $base = "/weblibs/highlight";
    $JS1 = $base."/highlight.pack.js";
    //$css = $base."/ckeditor.js";
    $js1= js_load($JS1);


    return $js1;



}
//************************************************
function get_ckeditor() {
    $serverip=$_SERVER['SERVER_ADDR'];

    $base = "/weblibs/ckeditor/ckeditor_462_std/ckeditor";
    $JS1 = $base."/ckeditor.js";
    //$css = $base."/ckeditor.js";
    $js1= js_load($JS1);
    $JS2 = $base."/config.js";
    $js2= js_load($JS2);
    return $js1."\n".$js2;



}
//************************************************
function get_ckeditor_youtube() {
    $serverip=$_SERVER['SERVER_ADDR'];

    $base = "/weblibs/ckeditor/ckeditor_4.6.2_YT/ckeditor";
    $JS1 = $base."/ckeditor.js";
    //$css = $base."/ckeditor.js";
    $js1= js_load($JS1);
    $JS2 = $base."/config.js";
    $js2= js_load($JS2);
    return $js1."\n".$js2;



}
//************************************************
function get_nested_sortable() {
    $serverip=$_SERVER['SERVER_ADDR'];
    
    $base = "/weblibs/nestedsortable";
    $file = $base."/jquery.mjs.nestedSortable.js";
    $js= js_load($file);
    return $js;

}
//************************************************
function get_sort_table() {
    $serverip=$_SERVER['SERVER_ADDR'];
    
    $base = "/weblibs/sortable";
    $file = $base."/sorttable.js";
    $js= js_load($file);
    return $js;

}
function get_jquery_gui_js(){
    $serverip=$_SERVER['SERVER_ADDR'];
    
    $base = "/weblibs/jqueryui/jqueryui1121cus";
    $file = $base."/jquery-ui.min.js";
    $js= js_load($file);
    return $js;
}
function get_warm_css(){
    $serverip=$_SERVER['SERVER_ADDR'];
    $base = "/styles";
    $file = $base."/style_warm.css";
    $css= css_load($file);
    return $css;
}
function get_jquery_gui_css(){
    $serverip=$_SERVER['SERVER_ADDR'];
    $base = "/weblibs/jqueryui/jqueryui1121cus";
    $file = $base."/jquery-ui.min.css";
    $css= css_load($file);
    return $css;
}
function get_datepicker_js(){
    $serverip=$_SERVER['SERVER_ADDR'];
    $base = "/weblibs/datepicker/js";
    $file = $base."/bootstrap-datepicker.js";
    $js= js_load($file);
    return $js;
}
function get_datepicker_css(){
    $serverip=$_SERVER['SERVER_ADDR'];
    $base = "/weblibs/datepicker/css";
    $file = $base."/datepicker.css";
    $css= css_load($file);
    return $css;
}
function get_cmstut_css(){
    $serverip=$_SERVER['SERVER_ADDR'];
    $base = "/styles/";
    $file = $base."/cmstut.css";
    $css= css_load($file);
    return $css;
}

function relaroot(){
    return '/ci_sites/cms/index.php/';
}
function get_icon($path){

    $base = "/kuvat/logot/";
    $file = $base.$path; //"cicms/admin/kala.ico";
    $linkrel = '<link rel='.
            '"'.
            'icon'.
            '"'.
            ' href='.
            '"'.
            $file.'?v=3'.
            '"'.
            ' type='.
            '"'.
            'image/gif'.
            '"'.
            '>'.
            "\n";
            ;
    return $linkrel;
}
