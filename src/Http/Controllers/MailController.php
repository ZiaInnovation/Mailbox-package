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


    public function index()
    {


         $this::check();


        $arr['mails'] = Mailbox::where('receiver',$this::getEmail())->get();
        return view('mailbox::mail')->with($arr);
    }
    public function sent()
    {

        //  $email = Auth::user()->email->email;


        $arr['mails'] = Mailbox::where('sender',$this::getEmail())->get();
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



            Mailbox::where('id',$id)->where('receiver' , $this::getEmail())->update([
                'read'=> 1,
            ]);


        return view('mailbox::mail-read')->with($arr);
    }

    public function send(Request $request)
    {
        // return $request;

        Mailbox::create([
            'receiver' => $request->receiver,
            'sender'    => $this::getEmail(),
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
