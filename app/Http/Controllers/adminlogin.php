<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Employe;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class adminlogin extends Controller
{
    public function admin()
    {
        return view('admin.login');
    }
    public function adminpp(Request $request)
    {
        $admin = Admin::where('username', $request->input('username'))->first();
        if ($admin && $admin->password === $request->input('password')) {
            Session::put('id', $admin->id);
            Session::put('username', $admin->username);
            // Session::put('user_id', $user->user_id);
            return redirect('employelist');
        } elseif (!$admin) {
            return redirect()->back()->with('message', 'user is invalid');
        } elseif ($admin && $admin->password !== $request->input('password')) {
            return redirect()->back()->with('message', 'Password is invalid');
        }
    }
    public function logout()
    {
        Session::flush();
        return redirect('admin');
    }

    public function employelist()
    {
        $sid = Session::get('id');
        if (Session::has('id'))
        {
            $departments = Department::all();
            $data = Employe::join('departments', 'employes.department_id', '=', 'departments.department_id')->select('employes.*', 'departments.department as department_name')->get();
            return view('employelist', compact('departments', 'data'));
        } else {
            return redirect('admin');
        }
    }
    public function edits($id)
    {
        $sid = Session::get('id');
        if (Session::has('id')) {
            $edit = Employe::where('id', $id)->first();
            $departments = Department::all();
            return view('edit', compact('departments', 'edit'));
        } else {
            return redirect('admin');
        }
    }
    public function update(Request $request, $id)
    {

        $update = Employe::where('id', $id)->first();
        $update->name = $request->get('name');
        $update->email = $request->get('email');
        $update->department_id = $request->get('dep');
        $update->salary = $request->get('salary');
        $update->save();
        return redirect('employelist')->with('success', 'Your Recored added');
    }

    public function departmentlist()
    {
        $sid = Session::get('id');
        if (Session::has('id')) {
            $departments = Department::all();
            return view('departmentlist', compact('departments'));
        } else {
            return redirect('admin');
        }
    }
    public function addnewdep()
    {
        $sid = Session::get('id');
        if (Session::has('id')) {
            return view('addnewdep');
        } else {
            return redirect('admin');
        }
    }
    public function addnedepp2(Request $request)
    {
        $pin = new Department(['department' => $request->get('department')]);
        $pin->save();
        return redirect('departmentlist')->with('success', 'Your Recored added');
    }
    public function report()
    {
        $sid = Session::get('id');
        if (Session::has('id')) {
            $report = Employe::select('employes.name as employee_name', 'departments.department as department_name', 'employes.salary as highest_salary')->join('departments', 'employes.department_id', '=', 'departments.department_id')
                ->whereRaw('employes.salary = (SELECT MAX(salary) FROM employes e2 WHERE e2.department_id = employes.department_id)')
                ->get();
            return view('report', compact('report'));
        } else {
            return redirect('admin');
        }
    }
    public function addemploye()
    {
        
        $sid = Session::get('id');
        if (Session::has('id'))
        {
            return view('addemploye');
        }
        else{
            return redirect('admin');
        }
    }
    public function addemploye2(Request $request)
    {
        $pin=new Employe
        ([
            'name'=>$request->get('name'),
            'email'=>$request->get('name'),
            'department_id'=>$request->get('dep'),
            'salary'=>$request->get('salary'),
        ]);
        $pin->save();
        // dd($pin);
        return redirect('employelist');
    }
}
