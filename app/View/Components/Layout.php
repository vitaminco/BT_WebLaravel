<?php

namespace App\View\Components;

use App\Models\CauHinh;
use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = CauHinh::orderBy("id", "desc")->paginate(1);
        return view('components.layout')->with("data", $data);
    }
}
