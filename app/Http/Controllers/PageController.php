<?php

namespace JobDesk\Http\Controllers;

use Illuminate\Http\Request;
use JobDesk\Http\Requests\CreateContactMessageRequest;

use JobDesk\Mail\sendContactMessageMail;
use JobDesk\Message;

use Mail;
use Session;

class PageController extends Controller
{

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * product page
     */
    public function product()
    {
    	return view('welcome.product');
    }

    /**
     * contact page
     */
    public function contact()
    {
    	return view('pages.contact');
    }

    /**
     * about page
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * sitemap page
     */
    public function sitemap()
    {
        return view('pages.sitemap');
    }

    /**
     * send contact message
     */
    public function sendContact(CreateContactMessageRequest $request)
    {
        // define sender
        $sender = $request->all();

        if($sender)
        {
            // define data
            $firstname = $request->get('firstname');
            $lastname = $request->get('lastname');
            $email = $request->get('email');
            $message = $request->get('message');

            // create message
            $this->message->createMessageWith([
                'name' => $firstname . ' ' . $lastname,
                'email' => $email,
                'message' => $message
            ]);

            // send mail 
            Mail::to(
                $request->get('email') // to senders email
            )->send(
                new sendContactMessageMail( 
                    $request->all() 
                )
            );
        }

        Session::flash('success', 'Din Besked er blevet send vi respondere hurtigst muligt');

        return redirect()->route('contact'); // redirect back to last visited page
    }
}
