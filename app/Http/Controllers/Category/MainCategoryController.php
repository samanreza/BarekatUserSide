<?php
namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
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
        $result = $this->category->index();

        return view('Category.index',['result'=>$result]);
    }
}
