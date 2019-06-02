<?php


namespace Beans\Frontend\Framework;


class Bulma implements Html
{
    public function grid_container_class(): string
    {
        return 'columns';
    }

    public function grid_class_attribute(): string
    {
        return 'class=column';
    }

    public function row_class_attribute(): string
    {
        return 'class=container';
    }

    public function data_grid_margin(): string
    {
        return 'find-if-bulma-has-data-grid-margin-attribute';
    }

    public function offcanvas(): string
    {
        return 'find-bulma-for-offcanvas';
    }

    public function offcanvas_bar(): string
    {
        return 'find-bulma-for-offcanvas-bar';
    }
}