<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiriesController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        $data = Inquiry::query();
        if (request()->ajax()) {
            return datatables()->of($data)
                ->addColumn("action", function ($data) {
                    $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editInquiry">Edit</a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteInquiry">Delete</a>';
                    return $button;
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
