<?php

namespace Ziainnovation\Mailbox\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Ziainnovation\Mailbox\Http\Models\Mailbox;
use Ziainnovation\Mailbox\Http\Traits\userEmailTrait;

class MailController extends Controller
{
    use userEmailTrait;

    public $email ='admin@yourdomin.com';
    public function index()
    {
         $this::check();
        //  $email = Auth::user()->email->email;
        // $email ='admin@yourdomin.com';

        $arr['mails'] = Mailbox::where('sender','<>',$this->email)->get();
        return view('mailbox::mail')->with($arr);
    }
    public function sent()
    {

        //  $email = Auth::user()->email->email;


        $arr['mails'] = Mailbox::where('sender',$this->email)->get();
        return view('mailbox::sent')->with($arr);
    }
    public function stared()
    {
        return view('mailbox::stared');
    }
    public function snoozed()
    {
        return view('mailbox::snoozed');
    }
    public function important()
    {
        return view('mailbox::important');
    }
    public function trashed()
    {
        return view('mailbox::trash');
    }
    public function spam()
    {
        return view('mailbox::spam');
    }
    public function show($id)
    {

        $arr['mail'] = Mailbox::find($id);


        if($arr['mail']->sender != $this->email)
        {
            Mailbox::where('id',$id)->update([
                'is_seen'=> 1,
            ]);
        }

        return view('mailbox::mail-read')->with($arr);
    }

    public function send(Request $request)
    {
        // return $request;

        Mailbox::create([
            'receiver' => $request->receiver,
            'sender'    => 'admin@yourdomin.com',
            'subject'   => $request->subject,
            'body'      => $request->message,

        ]);

        return redirect()->back();
    }

    public function create()
    {
        return view('mailbox::mail-compose');
    }
}
