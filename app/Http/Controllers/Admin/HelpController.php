<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CauHinh;
use App\Models\Help;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index()
    {
        $data = Help::orderBy("id", "desc")->paginate(50);
        $datach = CauHinh::orderBy("id", "desc")->paginate(1);
        return view("admin.help.index")->with("data", $data)->with("datach", $datach);
    }

    public function create()
    {
        return view("admin.help.create");
    }
    public function edit($id)
    {
        $data = Help::findOrFail($id);
        return view("admin.help.edit")->with("data", $data);
    }
    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data["_token"]);
        //ràng buộc dữ liệu tối thiểu và tối da
        $this->customValidate($request);
        if ($id == null) {
            $filename = "";
            $file = $request->file("anh_help");
            if (!empty($file)) { //tạo tên file ngẫu nhiên để tránh trùng tên gây lỗi
                $filename = $file->hashName();
                //luu ở thư mục public với tên mới tạo
                $file->storeAs("/files", $filename);
                $filename = "/files/" . $filename;
            }
            $data["anh_help"] = $filename;

            $msg = "Thêm thành công";
        } else {
            $file = $request->file("anh_help");
            if (!empty($file)) { //tạo tên file ngẫu nhiên để tránh trùng tên gây lỗi
                $filename = $file->hashName();
                //luu ở thư mục public với tên mới tạo
                $file->storeAs("/files", $filename);
                $filename = "/files/" . $filename;
            }
            $data["anh_help"] = $filename;
            $msg = "Cập nhật thành công!!! verrry goood!";
        }
        //update hoặc insert
        Help::updateOrCreate(["id" => $id], $data);
        return redirect()->route('admin.help.index')->with("success_msg", $msg);
    }

    public function destroy($id)
    {
        $dm = Help::findOrFail($id);
        $cau_hoi = $dm->cau_hoi;
        $anh_help = $dm->anh_help;
        Help::destroy($id);
        return redirect()->back()->with("success_msg", "XÓA '$cau_hoi' THÀNH CÔNG!!!");
    }

    private function customValidate(Request $request)
    {
        $rules = [
            "cau_hoi" => "required|min:3" //not null min 3 k tự max 100 kí tự
        ];
        $request->validate($rules);
    }
}
