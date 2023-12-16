<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function PostContactDetails(Request $request)
    {
        // /////get data member from the site-contact
        $name = $request->input("name");
        $email = $request->input("email");
        $message = $request->input("message");
        ////set the date and time
        date_default_timezone_set("Asia/Dhaka");
        $contact_time = date("h:i:sa");
        $contact_date = date("d-m-Y");
        /////set and connect to the data table
        $result = Contact::insert([
            "name" => $name,
            "email" => $email,
            "message" => $message,
            "contact_date" => $contact_date,
            "contact_time" => $contact_time,
        ]);
        return $result;
    }
}
