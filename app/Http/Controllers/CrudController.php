<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class CrudController extends Controller
{
    //view data method
    public function addUser(){
        return view('add_user');
    }

    //insert data method
    public function storeData(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        $data = new Student();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        Session::flash('msg', 'Your Data Send Successfully');
        return redirect('/');
    }

    //read data method
    public function showData(){
        //$students = Student::all(); //send all data at a time
        //$students = Student::paginate(3); //send  minimum data as per your requirement
        $students = Student::simplePaginate(4); //Previous and Next Pagination style
        $data = compact('students');
        return view('index')->with($data);

    }

    //edit data method
    public function editData($id){
        
        $update = Student::find($id);
        if(is_null($update)){
            //not found data
             return redirect('/');
        }else{
            //found data
            $data = compact('update');
            return view('edit_data')->with($data);
        }
    }


    //insert data method
    public function updateData(Request $request, $id){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        $data = Student::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        Session::flash('msg', 'Your Data Updated Successfully');
        return redirect('/');
    }

    //delete data method
    public function delete($id){

        $delete_id = Student::find($id);
        if(!is_null($delete_id)){
            $delete_id->delete();
        }
        Session::flash('msg', 'Your Data Deleted Successfully');
        return redirect('/');
    }
}
