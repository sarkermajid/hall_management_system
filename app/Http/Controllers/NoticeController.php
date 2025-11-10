<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function Index()
    {
        $notices = Notice::orderBy('id', 'DESC')->get();
        return view('admin.notice.index', compact('notices'));
    }

    public function addNotice()
    {
        return view('admin.notice.add_notice');
    }


    public function storeNotice(Request $request)
    {
        $request->validate([
            'title'    => 'required|string|max:255',
        ]);

        Notice::create([
            'title'          => $request->title,
            'description'    => $request->description,
        ]);

        $notification = array(
            'message' => 'Notice Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('notice.index')->with($notification);
    }

    public function DeleteNotice($id)
    {
        Notice::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Notice Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('notice.index')->with($notification);
    }
}
