<?php

/**
 * Add this file to your API to take advantage of the bootstrap.
 *
 * This theme comes with some ready-to-use layouts:
 *
 * - layoutAdmin
 * - layoutBlank
 *
 * $this->add('theme-bootstrap/Controller')
 *   ->setLayout('admin');
 */

namespace theme_bootstrap;
class Controller extends \AbstractController {
    function init(){
        parent::init();


        // add locations
        $l=$this->api->locate('addons',__NAMESPACE__,'location');
        $addon = $this->api->locate('addons',__NAMESPACE__);
        $l=$this->api->pathfinder->addLocation($addon,array(
            'template'=>'templates',
            'php'=>'defaults'
        ))->setParent($l);

    }

    function layoutAdmin(){
        $this->setApiTemplate('layout/admin');

        $this->menu=$this->api->add('Menu',null,'Menu');
        return $this;
    }

    function layoutBlank(){
        $this->setApiTemplate('layout/blank');
        return $this;
    }
    function setApiTemplate($template){
        $this->api->template->loadTemplate($template);

        $this->api->requires('atk','4.3','https://github.com/atk4/atk4/tree/4.3');

        if(@$this->api->jui){
            throw $this->exception('Do not use jUI with Bootstrap');
        }
        if(!@$this->api->jquery){
            $this->api->add('jQuery');
        }


        $this->api->jquery->addStaticStylesheet('//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css');
        $this->api->jquery->addStaticInclude('//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js');
    }
}
