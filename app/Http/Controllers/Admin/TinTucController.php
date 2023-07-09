<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TinTuc;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Validator;

class TinTucController extends Controller
{

    public function index()
    {
        $data = TinTuc::orderBy("id", "asc")->paginate(9);
        //cash 1:
        return view("admin.tintuc.index")->with("data", $data);
    }

    public function create()
    {
        return view("admin.tintuc.create");
    }


    public function edit($id)
    {
        $data = TinTuc::findOrFail($id);
        return view("admin.tintuc.edit")->with("data", $data);
    }


    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data["_token"]);

        //ràng buộc dữ liệu tối thiểu và tối da
        $this->customValidate($request);

        if ($id == null) {
            $filename = "";
            $file = $request->file("anh_cover");
            if (!empty($file)) { //tạo tên file ngẫu nhiên để tránh trùng tên gây lỗi
                $filename = $file->hashName();
                //luu ở thư mục public với tên mới tạo
                $file->storeAs("/files", $filename);
                $filename = "/files/" . $filename;
            }
            $data["anh_cover"] = $filename;

            $msg = "Thêm thành công";
        } else {
            $file = $request->file("anh_cover");
            if (!empty($file)) { //tạo tên file ngẫu nhiên để tránh trùng tên gây lỗi
                $filename = $file->hashName();
                //luu ở thư mục public với tên mới tạo
                $file->storeAs("/files", $filename);
                $filename = "/files/" . $filename;
            }
            $data["anh_cover"] = $filename;
            $msg = "Cập nhật thành công!!! verrry goood!";
        }
        //update hoặc insert
        TinTuc::updateOrCreate(["id" => $id], $data);
        return redirect()->route('admin.tintuc.index')->with("success_msg", $msg);
    }
    public function destroy($id)
    {
        $dm = TinTuc::findOrFail($id);
        $ten_tin_tuc = $dm->ten_tin_tuc;
        TinTuc::destroy($id);
        return redirect()->back()->with("success_msg", "XÓA '$ten_tin_tuc' THÀNH CÔNG!!!");
    }

    private function customValidate(Request $request)
    {
        $rules = [
            "ten_tin_tuc" => "required|min:3|max:100" //not null min 3 k tự max 100 kí tự
        ];
        $request->validate($rules);
    }
}
