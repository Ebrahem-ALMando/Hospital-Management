<?php

namespace App\Http\Controllers;

use App\Models\Appoitment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function addview()
    {
     return view('admin.add_doctor');
    }
    public function upload(Request $request)
    {
//        $request=\request()->validate([
//        'name'=>'min3'
//        ]);
        $doctor=new Doctor;
        $image=$request->d_image;
//        if (!$image){
//
//           dd($image);
//        }
//       else{
//           dd($image);}

           $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->d_image->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->d_name;
        $doctor->phone=$request->d_phone;
        $doctor->specialty=$request->d_speciality;
        $doctor->room=$request->d_room;
        $doctor->save();
        return redirect()->back()->with('Message_Add','Doctor Add Successfully');
    }
    public  function  appointments_view()
    {
        $datas=Appoitment::all();
        return view('admin.appointments_view',compact('datas'));
    }
    public  function  Approved_appointment($id)
    {
        $data=Appoitment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back()->with('Approved','Appointment Approved Successfully');
    }
    public  function  canceled_appointment($id)
    {
        $data=Appoitment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back()->with('Canceled','Appointment Canceled Successfully');
    }
    public  function  doctor_view()
    {
        $datas=Doctor::all();
        return view('admin.doctors_view',compact('datas'));
    }
    public  function  delete_doctor($id)
    {
        $data=Doctor::find($id);
        $data->delete();
        return redirect()->back()->with('Delete','Doctor Delete Successfully');
    }
    public  function  update_doctor($id)
    {
        $data=Doctor::find($id);
        return view('admin.updatedoctor',compact('data'));
    }
    public  function edite_doctor($id,Request $request)
    {
        $doctor=Doctor::find($id);
        $doctor->name=$request->d_name;
        $doctor->phone=$request->d_phone;
        $doctor->specialty=$request->d_speciality;
        $doctor->room=$request->d_room;
        $image=$request->d_image;
        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->d_image->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        }
        $doctor->save();
        return redirect()->back()->with('Message_Update','Doctor Update Successfully');
    }

}
