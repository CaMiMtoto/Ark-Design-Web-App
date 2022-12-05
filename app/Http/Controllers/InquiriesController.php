<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Exception;
use Illuminate\Http\Request;

class InquiriesController extends Controller
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $data = Inquiry::query();
        if (request()->ajax()) {
            return datatables()->of($data)
                ->addColumn("action", function ($data) {
                    return '<a href="'.route('admin.inquiries.destroy',$data->id).'" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Delete" class="btn btn-light-danger btn-sm btn-icon rounded-circle js-delete"><i class="bi bi-trash"></i></a>';
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        return view('admin.inquiries');
    }

    public function show(Inquiry $inquiry)
    {
        return $inquiry;
    }

    public function destroy(Inquiry $inquiry)
    {
        $inquiry->delete();
        return response()->json(['success' => 'Inquiry deleted successfully.']);
    }
}
