<?php
namespace App\Repositories\Category;

use Saman\BarekatElectronicHealth\App\Contract\Repositories\ICategory;
use Saman\BarekatElectronicHealth\App\Models\Category;

class MainCategories implements ICategory
{
    public function index()
    {
        return Category::query()->with('allChildren')->select(Category::COLUMN_TITLE,Category::COLUMN_PARENT_ID,Category::COLUMN_IS_ACTIVE)->activeCategory()->get();
    }
}
