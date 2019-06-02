<?php


namespace Beans\Frontend\Framework;

use Beans\Framework\API\Widgets;


class UIKit2 implements Html
{
    public function grid_container_class(): string
    {
        return 'uk-grid';
    }

    public function grid_class_attribute(): string
    {
        return Widgets\beans_widget_shortcodes( 'class=uk-width-medium-1-{count}' );
    }

    public function row_class_attribute(): string
    {
        return Widgets\beans_widget_shortcodes( 'class=tm-widget uk-panel widget_{type} {id}' );
    }

    public function data_grid_margin(): string
    {
        return 'data-uk-grid-margin';
    }

    public function offcanvas(): string
    {
        return 'uk-offcanvas';
    }

    public function offcanvas_bar(): string
    {
        return 'uk-offcanvas-bar';
    }
}