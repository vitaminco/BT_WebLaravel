<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\BangGia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Validator;

class BangGiaController extends Controller
{
    public function index()
    {
        $data = BangGia::orderBy("id", "desc")->paginate(50);
        return view("admin.banggia.index")->with("data", $data);
    }

    public function create()
    {
        return view("admin.banggia.create");
    }

    public function edit($id)
    {
        $data = BangGia::findOrFail($id);
        return view("admin.banggia.edit")->with("data", $data);
    }

    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data["_token"]);
        $this->customValidate($request);
        if ($id == null) {
            $filename = "";
            $file = $request->file("anh_cover");
            if (!empty($file)) {
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
        BangGia::updateOrCreate(["id" => $id], $data);
        return redirect()->route('admin.banggia.index')->with("success_msg", $msg);
    }

    public function destroy($id)
    {
        $dm = BangGia::findOrFail($id);
        $doi_tuong = $dm->doi_tuong;
        $anh_cover = $dm->anh_cover;
        BangGia::destroy($id);
        return redirect()->back()->with("success_msg", "XÓA '$doi_tuong' THÀNH CÔNG!!!");
    }

    private function customValidate(Request $request)
    {
        $rules = [
            "doi_tuong" => "required|min:3"
        ];
        $request->validate($rules);
    }
}
