<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;

class SiteSettingController extends Controller
{
    public function index(){
        $sitesettings = sitesetting::all();
        return view('sitesetting.index',['sitesettings' => $sitesettings]);
        
    }

    public function create(){
        return view('sitesetting.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'logo' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email1' => 'nullable',
            'email2' => 'nullable',
            'phone_number1' => 'nullable',
            'phone_number2' => 'nullable',
            'image' => 'nullable',
            'link1' => 'nullable',
            'link2' => 'nullable',
            'link3' => 'nullable',
        ]);

        $newsitesetting = sitesetting::create($data);

        return redirect(route('sitesetting.index'));
    }

    public function edit(SiteSetting $sitesetting){
        return view('sitesetting.edit', ['sitesetting' => $sitesetting]);
    }
    
    public function update(SiteSetting $sitesetting, Request $request){
        $data = $request->validate([
            'logo' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email1' => 'nullable',
            'email2' => 'nullable',
            'phone_number1' => 'nullable',
            'phone_number2' => 'nullable',
            'image' => 'nullable',
            'link1' => 'nullable',
            'link2' => 'nullable',
            'link3' => 'nullable',
        ]);
        
        $sitesetting->update($data);
        return redirect(route('sitesetting.index'))->with('success','Site settings updated successfully');
    }

    public function delete(SiteSetting $sitesetting){
        $sitesetting->delete(); // Delete sitesetting
        return redirect(route('sitesetting.index'))->with('success','Site settings deleted successfully');
    }
}
