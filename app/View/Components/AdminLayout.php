<?php

namespace App\View\Components;

use App\Models\CauHinh;
use App\Models\MuaSanPham;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    public function __construct()
    {
    }

    public function render()
    {
        $datanb = CauHinh::orderBy("id", "desc")->paginate(1);
        return view('components.admin-layout')->with("datanb", $datanb);
    }
}
