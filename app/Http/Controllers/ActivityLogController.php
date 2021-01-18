<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ActivityLog;

use Carbon\Carbon;

use Auth;

class ActivityLogController extends Controller
{
    //

    public function notification_read($id)
    {
        # code...

        ActivityLog::where('id', $id)->where('for_', Auth::user()->id)->update([
            'status' => 'read'
        ]);

        return back();
    }
}
