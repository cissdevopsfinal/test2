<?php

namespace App\Http\Controllers;

use App\pricing;
use App\users_event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use LaravelQRCode\Facades\QRCode;
use Swift_Attachment;

class reportController extends Controller
{
    public function index()
    {
        $users_event = users_event::where('id','>','0')->get()->toArray();
        $pending= users_event::where('ticketState','=','Pending')->count();
        $accepted= users_event::where('ticketState','=','Accepted')->count();
        $rejected= users_event::where('ticketState','=','Rejected')->count();
        $invited= users_event::where('ticketState','=','Invited')->count();
        $total = users_event::where('ticketState','=','Paid')->sum('Paid');
        $lounges=users_event::where('host','=','0')->where('optthree','=','Lounge')->count();
        $hightables=users_event::where('host','=','0')->where('optthree','=','High-Table')->count();
        return view('report', compact('users_event','pending','accepted','rejected','invited','total','lounges','hightables'));
    }
    ////////////////////////////////////////////////////LESA HAYTML
    public function edit($id)
    {
        $users_event = users_event::find($id);
        $current_id = users_event::where('id', $id)->pluck('email');
        $token=users_event::find($id)->token;
        QRCode::text($token)->setOutfile($token.".png")->png();

        if ($users_event != null) {
            Mail::send(['html' => 'QRmail'], ['name', 'Gouna Event'], function ($message) use ($current_id,$token) {

                $message->to($current_id[0])->subject('Your reservation has been Approved');
                $message->from('cissdevops@gmail.com');
                $message->attach("".$token.".png");



            });
            File::delete("".$token.".png");
            DB::table('users_event')
                ->where('token', $token)
                ->update(['ticketState' => "Invited"]);
            return redirect()->back()->with('success', 'QR Code Sent');


        }


    }

}
