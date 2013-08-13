<?php
namespace theme_bootstrap;
class Paginator extends \Paginator_Basic {
    public $ajax_reload=false;
    function defaultTemplate(){
        return array('bootstrap/paginator');
    }
}
