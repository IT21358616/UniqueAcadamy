<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DeleteEmployeeRequest;
use App\Http\Requests\StatusEmployeeRequest;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use App\Models\User;
use App\Models\Student;


class StudentController extends Controller
{
    public function index(Request $request)
    {
        $emps = User::where('user_role', 'STD')
            ->when($request->filled('name'), function ($q) use ($request) {
                $q->where('name', 'LIKE', "%" . $request->name . "%");
            })
            ->when($request->filled('status'), function ($q) use ($request) {
                $q->where('status', $request->status);
            })
            ->when($request->filled('email'), function ($q) use ($request) {
                $q->where('email', 'LIKE', "%" . $request->email . "%");
            })
            ->get();
        return view('student.index', compact('emps'));
    }
    public function create()
    {
        return view('student.add');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $emp = new User;
        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->password = Hash::make($request->password);
        $emp->phone = $request->phone;
        $emp->address = $request->address;
        $emp->user_role = 'STD';
        $emp->gender = $request->gender;
        $emp->status = 'A';
        $emp->save();

        $std = new Student();
        $std->user_id = $emp->id;
        $std->birthday = $request->birthday;
        $std->grade = $request->grade;
        $std->save();
        // dd($request->all());

        return redirect()->route('student.index')->with('notify_message', ['status' => 'success', 'msg' => 'Student created successfully!']);
    }

    public function show(Request $request)
    {
        $emp = User::with('student')->findOrFail($request->id);
        // $std = Student::where('user_id', $request->id)->firstOrFail();
        return view('student.view', compact('emp'));
    }

    public function edit(Request $request)
    {
        $emp = User::with('student')->findOrFail($request->id);
        return view('student.edit', compact('emp'));
    }

    public function update(UpdateEmployeeRequest $request)
    {
        $emp = User::find($request->employee);
        $emp->name = $request->name;
        $emp->email = $request->email;
        if (!empty($request->password)) {
            $emp->password = Hash::make($request->password);
        }
        $emp->gender = $request->gender;
        $emp->phone = $request->phone;
        $emp->address = $request->address;



        $emp->save();



        return redirect()->route('student.index')->with('notify_message', ['status' => 'success', 'msg' => 'Employee Updated successfully!']);
    }

    public function status(StatusEmployeeRequest $request)
    {
        $emp = User::find($request->id);
        $emp->status = $request->status;
        $emp->save();

        return redirect()->route('student.index')->with('notify_message', ['status' => 'success', 'msg' => 'Employee successfully ' . ($request->is_active ? 'Activated' : 'Deactivated') . '!']);
    }
    public function destroy(Request $request)
    {
        $emp = User::find($request->employee);
        $emp->delete();

        return redirect()->route('student.index');
    }
}
