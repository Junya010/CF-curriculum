<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;


use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $contacts =Contacts::where('user_id',$user->id)->get();
        return view('contacts.index',compact('contacts'));
    }

    public function edit(Contacts $contact)
    {
        return view('contacts.edit',compact('contact'));
    }

    public function create()
    {
        return view('contacts.create');
    }


    public function store (Request $request)
    {
        $validateDate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|unique:users,phone',
        ]);

        $user = User:: create($validateDate);
        $request->merge(['user_id'=>Auth::user()->id]);
        Contacts::create($request->all());
        return redirect()->route('home')->widh('success','ユーザーが正常に作成されました。');
    }

    public function destroy(Contacts $contact)
    {
        $contact->delete();
        return redirect()->route('home');
    }

    public function update(Request $request, Contacts $contact)
    {
        $request->validate([
            'phone_number'=>'numeric'
        ]);

        $contact->update($request->all());
        return redirect()->route('home');
    }

}

