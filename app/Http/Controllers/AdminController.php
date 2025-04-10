<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Contact;
use Hash;
class AdminController extends Controller
{
    public function addstudent()  {
        return view('pages.addstudent');
        
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|string|min:8',
        //     'user' => 'required|string',
        // ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('Password'));
        $user->usertype = $request->input('user');
        $user->save();

        return redirect()->back();
    }

    public function contact(Request $request)
{
    $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required|string',
    ]);

    Contact::create($request->all());

    return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح، سنقوم بالتواصل معك قريبًا!');

}
public function show($id)
{
    $contact = Contact::findOrFail($id);
    $contact->update(['is_read' => true]); // تعليم الرسالة كمقروءة
    return view('dashboard.showmessage', compact('contact'));
}

}
