<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /////get all notification
    public function NotificationHistory()
    {
        $res = Notification::all(); ////get all data
        return $res;
    }
}
