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

namespace themebootstrap;
class Controller extends \AbstractController {
    function init(){
        parent::init();

        if(@$this->api->jui){
            throw $this->exception('Do not use jUI with Bootstrap');
        }
        if(!@$this->api->jquery){
            $this->api->add('jQuery');
        }


        $this->api->jquery->addStaticStylesheet('//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css');
    }

    function layoutAdmin(){
        $this->setApiTemplate('layout/admin');

        $this->api->menu=$this->api->add('Menu',null,null);
    }

    function layoutBlank(){
        $this->setApiTemplate('layout/blank');
        return $this;
    }
}
