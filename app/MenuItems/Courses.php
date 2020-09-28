<?php

namespace App\MenuItems;

class Courses extends AbstractMenuItem
{
    public $href = 'admin.courses.index';
    public $icon = 'fas fa-paint-brush';

    public function __construct() {
        parent::__construct();
        $this->title = __('Courses');
    }
}
