<?php

    //    $layout = $this->add('theme_bootstrap/Controller')
    //        ->layoutAdmin();

      //  $layout->menu->addMenuItem('users');
      //  $layout->menu->addMenuItem('content');
      //  $sb = $layout->menu->addSubMenu('Purchases');

      //  $sb->addMenuItem('foo');
      //  $sb->addMenuItem('bar');
      //  $sb->addMenuItem('baz');

     //   $this->template->trySet('app_name','Agile Toolkit');

        $this->add('Button')->set('Welcome to Bootstarp');

        $this->add('Grid')
            ->addPaginator(10)
            ->setModel('User',array('email','full_name','name','is_email_confirmed'))
            ->addCondition('email','like','%agiletech%')
;//,array('name','email','is_admin'));
        return;
