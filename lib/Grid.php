<?php
namespace theme_bootstrap;
class Grid extends \Grid_Advanced {
    function defaultTemplate(){
        return array('bootstrap/grid');
    }
    function addPaginator($ipp = 25, $options = null)
    {
        // adding ajax paginator
        if ($this->paginator) {
            return $this->paginator;
        }
        $this->paginator = $this->add('Paginator', $options);
        $this->paginator->ipp($ipp);
        return $this;
    }
}
