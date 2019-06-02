<?php


namespace Beans\Frontend;


class Init
{
    public function framework_class($component, $framework): string
    {
        $framework_class = __NAMESPACE__ . '\\Framework\\' . $framework;
        $framework = new $framework_class;

        if (!method_exists($framework, $component)) {
            throw new \BadMethodCallException($component . ' does not exist.');
        }


        return $framework->{$component}();
    }

    public static function get($component): string
    {
        $framework = apply_filters('beans_frontend', 'UIKit2');
        $init = new self();

        return $init->framework_class($component, $framework);
    }

}