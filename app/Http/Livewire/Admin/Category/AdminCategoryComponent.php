<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category has been deleted successfully');
    }
    public function render()
    {
        $categories = Category::paginate(10);
        return view('livewire.admin.category.admin-category-component', ['categories'=>$categories])->layout('layouts.base');
    }
}
