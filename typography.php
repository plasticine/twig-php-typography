<?php

require_once('lib/php-typography.php');

class Twig_Extension_Typography extends Twig_Extension {
    public function getFilters(){
        return array(
            'typography' => new Twig_Filter_Function('twig_typography_filter', array('needs_environment' => true)),
        );
    }

    public function getName(){
        return 'Typography';
    }
}

function twig_typography_filter(Twig_Environment $env, $value){
    $lib = new phpTypography();
    $value = $lib->process($value);
    return $value;
}