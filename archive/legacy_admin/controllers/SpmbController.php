<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SpmbSubmission;
use Illuminate\Http\Request;

class SpmbController extends Controller
{
    public function index()
    {
        $items = SpmbSubmission::latest()->paginate(20);
        return view('admin.spmb.index', compact('items'));
    }

    public function show(SpmbSubmission $spmb_submission)
    {
        return view('admin.spmb.show', ['item' => $spmb_submission]);
    }

    public function destroy(SpmbSubmission $spmb_submission)
    {
        $spmb_submission->delete();
        return redirect()->route('admin.spmb.index')->with('success','Submission deleted');
    }
}
