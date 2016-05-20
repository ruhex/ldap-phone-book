<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TemplateClass
 *
 * @author ruhex
 */
class Template {
    private $DirTpl;
    private $Data = array();
    
    public function __construct($dir, $data, $dataname)
    {
        $this->Data[$dataname] = $data;
        $this->DirTpl =$dir."/";
    }
    public function display($template)
    {
        $template = $this->DirTpl.$template.".php";
        ob_start();
        include($template);
        echo ob_get_clean();
    }
    
    
}
