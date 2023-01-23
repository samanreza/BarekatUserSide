<?php
namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Saman\BarekatElectronicHealth\App\Models\Category;
use Saman\BarekatElectronicHealth\App\Contract\Repositories\ICategory;

class MainCategoryController extends Controller
{
    public ICategory $category;

    public function __construct(ICategory $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        //return $this->category->index();
        return Category::query()->with('allChildren')->select(Category::COLUMN_TITLE,Category::COLUMN_PARENT_ID,Category::COLUMN_IS_ACTIVE)->activeCategory()->get();
    }
}
