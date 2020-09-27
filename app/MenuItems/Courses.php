<?php

namespace App\MenuItems;

class Courses extends AbstractMenuItem
{
    public $href = 'admin.courses.index';
    public $icon = 'fas fa-car';

    public function __construct() {
        parent::__construct();
        $this->title = __('Courses');
    }
}
