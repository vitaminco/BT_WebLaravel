<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DongGop;
use App\Models\SanPham;

class DongGopController extends Controller
{

    public function index()
    {
        $data = DongGop::orderBy("id", "desc")->paginate(50);
        //cash 1:
        return view("admin.donggop.index")->with("data", $data);
    }

    public function create($id)
    {
        $data1 = DongGop::orderBy("id", "desc")->paginate(30); //donggop
        $data = SanPham::findOrFail($id);
        return view("admin.donggop.create")
            ->with("data", $data)
            ->with("data1", $data1);
    }

    public function edit($id)
    {
        //
    }

    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data["_token"]);

        //ràng buộc dữ liệu tối thiểu và tối da
        $this->customValidate($request);

        if ($id == null) {
            $msg = "Thêm thành công";
        } else {
            $msg = "Cập nhật thành công!!! verrry goood!";
        }
        //update hoặc insert
        DongGop::updateOrCreate(["id" => $id], $data);
        return redirect()->back()->with("success_msg", $msg);
    }
    public function destroy($id)
    {
        $dm = DongGop::findOrFail($id);
        $mo_ta = $dm->mo_ta;
        DongGop::destroy($id);
        return redirect()->back()->with("success_msg", "XÓA THÀNH CÔNG!!!");
    }

    private function customValidate(Request $request)
    {
        $rules = [
            "mo_ta" => "required|min:3" //not null min 3 k tự max 100 kí tự
        ];
        $request->validate($rules);
    }
}