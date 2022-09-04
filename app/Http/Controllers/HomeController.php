<?php

namespace App\Http\Controllers;

use App\Models\Appoitment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
public function  redirect()
{
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctors=Doctor::all();
                return view('user.home',compact('doctors'));
            }
            else
            {
                return view('admin.home');
            }
        }     else{
            return redirect()->back();
        }

}
    public  function  index()
        { if(Auth::id())
        {
            return  redirect('home');
        }
        {
            $doctors=Doctor::all();
                return view('user.home',compact('doctors'));}
        }
        public  function  appointment(Request $request)
        {
            $data=new Appoitment;
            $data->name=$request->name;
            $data->emile=$request->emile;
            $data->date=$request->date;
            $data->phone=$request->number;
            $data->message=$request->message;
            $data->doctor=$request->doctor;
            $data->status='In progress';
            if(Auth::id())
            {
                $data->user_id=Auth::user()->id;
            }
              $data->save();
            return redirect()->back()
                ->with('message_success','Appointment Request Successfull . We Will contact with you sonn');
        }
        public  function  myappointment()
        {
            if(Auth::id())
            {  $user_id=Auth::user()->id;
                $datas=Appoitment::where('user_id',$user_id)->get();
              return  view('user.myappointment',compact('datas'));
             }
            else{
                return redirect('/');
            }
        }
        public function  cancel_appointment($id)
         { $data=Appoitment::find($id);
            $data->delete();
             return redirect()->back()->with('delete','Appointment Delete Successfully');
         }
}
