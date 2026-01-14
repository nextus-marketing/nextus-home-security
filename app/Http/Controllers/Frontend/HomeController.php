<?php

namespace App\Http\Controllers\Frontend;
use App\Mail\Thankyou;
use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\BlogVisitor;
use App\Rules\CustomCaptcha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

  

    public function ContactEnquiryStore(Request $request)
    {
        $rules = [
            'name' => 'required|max:191',
            'email' => 'required|email|max:191',
            'phone' => 'required|digits:10',
            'subject' => 'required|max:191',
        ];

        $messages = [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name must not exceed 191 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'The email must not exceed 191 characters.',
            'phone.required' => 'The phone number field is required.',
            'phone.digits' => 'The phone number must be exactly 10 digits.',
            'subject.required' => 'The subject field is required.',
        ];

        $validatedData = $request->validate($rules, $messages);
        $enquiry = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];


        //dd($enquiry);

        Mail::to('sales@buyhomesecurity.org')->send(new ContactMail($enquiry));

        // Send thank-you email to the user
        Mail::to($request->email)->send(new Thankyou($enquiry));

        return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
    }
}
