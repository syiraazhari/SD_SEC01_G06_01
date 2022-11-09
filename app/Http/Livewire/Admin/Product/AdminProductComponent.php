<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('message','Product has been deleted successfully');
    }
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.product.admin-product-component', ['products'=>$products])->layout('layouts.base');
    }
}
