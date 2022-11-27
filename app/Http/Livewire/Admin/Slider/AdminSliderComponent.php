<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminSliderComponent extends Component
{
    public function deleteSlide($slide_id)
    {
        $slider = HomeSlider::find($slide_id);
        $slider->delete();
        session()->flash('message','Slide has been deleted successfully');
    }
    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.slider.admin-slider-component' ,['sliders'=>$sliders])->layout('layouts.base');
    }
}
