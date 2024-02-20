<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check()) {
            if (auth()->user()->role == 1) {
                $choices = Choice::all();
                $companies = Company::all();
                $users = User::all();
                return view('teachers.index', compact('choices', 'companies', 'users'));
            } else {
                return redirect('/home');
            }
        } else {
            return redirect('/login');
        }
    }
}
