<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\SiteSetting;
use App\Models\Slider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{

    public function index() {
        return view('dashboard.main');
    }
    public function login(Request $request) {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt($validate,$request->remember)) {
            return redirect()->route('dashboard')->with('success','You have been logged in');
        } else {
            return redirect()->route('dashboard')->with('error', 'Invalid email or password');
        }


    }
    public function logout(Request $request):RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('dashboard.login')->with('success', 'You have been logged out.');
    }

    public function contact() {
        $contact = Contact::latest()->first();
        return view('posts.contact', ['contact' => $contact]);
    }

       public function edit() {
        $contact = Contact::latest()->first();
        return view('dashboard.edit', ['contact' => $contact]);
    }
    public function update(Request $request) {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);
       DB::table('contacts')
           ->where('id', 1)
           ->update([
               'address' => $request->get('address'),
               'phone' => $request->get('phone'),
               'email' => $request->get('email'),
           ]);

        return back()->with('success', 'Your information has been updated');
    }
    public function about() {
        $about = About::latest()->first();
        return view('dashboard.edit-about', ['about' => $about]);
    }
    public function updateAbout(Request $request) {
        $request->validate([
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $about = About::first();

        $path = $about->image ?? null;
        if ($request->hasFile('image')) {
            if($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $path = Storage::disk('public')->putFile('about_images', $request->file('image'));
        }

        $about->body=$request->get('body');
        $about->image=$path;
        $about->save();
        return back()->with('success', 'Your information has been updated');
    }
    public function aboutStore() {
        $about = About::first();
        return view('posts.about', ['about' => $about]);
    }

    public function system ()
    {
    $setting = SiteSetting::first();
    return view("dashboard.system", ['setting' => $setting]);
    }

    public function updateSystem(Request $request) {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'keywords' => 'required|string',
        ]);
         DB::table('site_settings')
           ->where('id', 1)
           ->update([
               'title' => $request->get('title'),
               'description' => $request->get('description'),
               'keywords' => $request->get('keywords'),
           ]);
        return back()->with('success', 'Your information has been updated');
    }
}
