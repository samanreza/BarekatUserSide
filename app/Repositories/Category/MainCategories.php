<?php
namespace App\Repositories\Category;

use Saman\BarekatElectronicHealth\App\Contract\Repositories\ICategory;
use Saman\BarekatElectronicHealth\App\Models\Category;

class MainCategories implements ICategory
{
    public function index()
    {
        return Category::getCategories();
    }
}
