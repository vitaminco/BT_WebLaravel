<?php

namespace App\Http\Controllers;

use App\Models\CauHinh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Validator;

class CauHinhController extends Controller
{

    public function index()
    {
        $data = CauHinh::orderBy("id", "desc")->paginate(50);
        return view("admin.cauhinh.index")->with("data", $data);
    }

    public function create()
    {
        return view("admin.cauhinh.create");
    }

    public function edit($id)
    {
        $data = CauHinh::findOrFail($id);
        return view("admin.cauhinh.edit")->with("data", $data);
    }

    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data["_token"]);
        //ràng buộc dữ liệu tối thiểu và tối da
        $this->customValidate($request);
        if ($id == null) {
            $filename = "";
            $file = $request->file("logo");
            if (!empty($file)) {
                $filename = $file->hashName();
                $file->storeAs("/files", $filename);
                $filename = "/files/" . $filename;
            }
            $data["logo"] = $filename;

            $msg = "Thêm thành công";
        } else {
            $file = $request->file("logo");
            if (!empty($file)) {
                $filename = $file->hashName();
                $file->storeAs("/files", $filename);
                $filename = "/files/" . $filename;
            }
            $data["logo"] = $filename;
            $msg = "Cập nhật thành công!!! verrry goood!";
        }
        //update hoặc insert
        CauHinh::updateOrCreate(["id" => $id], $data);
        return redirect()->route('admin.cauhinh.index')->with("success_msg", $msg);
    }

    public function destroy($id)
    {
        $dm = CauHinh::findOrFail($id);
        $ten_cong_ty = $dm->ten_cong_ty;
        $logo = $dm->logo;
        CauHinh::destroy($id);
        return redirect()->back()->with("success_msg", "XÓA '$ten_cong_ty' THÀNH CÔNG!!!");
    }

    private function customValidate(Request $request)
    {
        $rules = [
            "ten_cong_ty" => "required|min:3|max:100" //not null min 3 k tự max 100 kí tự
        ];
        $request->validate($rules);
    }
}
