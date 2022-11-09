<?php

namespace App\Http\Livewire\Admin\Coupon;

use App\Models\Coupon;
use Livewire\Component;

class AdminCouponComponent extends Component
{
    public function deleteCoupon($coupon_id)
    {
        $coupon = Coupon::find($coupon_id);
        $coupon->delete();
        session()->flash('message', 'Coupon deleted successfully.');
    }
    public function render()
    {
        $coupons = Coupon::all();
        return view('livewire.admin.coupon.admin-coupon-component',['coupons'=>$coupons])->layout('layouts.base');
    }
}
