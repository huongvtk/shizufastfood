<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function getList()
    {
        $contacts = Contact::all();
        return view('admin.lienhe.list',['contacts'=>$contacts]);
    }
    public function getDel($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect("admin/lienhe/list")->with('thongbao','Xóa sản phẩm thành công');
    }
}
