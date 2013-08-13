<?php
namespace theme_bootstrap;
class Menu extends \Menu_Objective {
    function init(){
        parent::init();
        $this->addClass('nav navbar-nav');
    }
    function addSeparator(){
        return $this->add('View')->setElement('li')
            ->addClass('divider');
    }
    function addSubMenu($name){
        $li=$this->add('View')
            ->setElement('li')
            ->setClass('dropdown');

        $a=$li->add('View')->setElement('a')
            ->addClass('dropdown-toggle')
            ->setAttr('data-toggle','dropdown')
            ;
        $a->add('Text')->set($name.' ');
        $a->add('View')->setElement('b')->addClass('caret');

        return $li
            ->add(get_class($this))->setClass('dropdown-menu');
    }
}
