<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $choices = Choice::where('user_id', auth()->user()->id)->get();
        $companies = Company::all();
        return view('students.index', compact('choices', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function choice(Request $request)
    {
        $choices = Choice::where('user_id', auth()->user()->id)->get();
        if ($choices->count() >= 3) {
            return redirect('/companies');
        } else {
            $choice = new Choice();
            $choice->user_id = auth()->user()->id;
            $choice->companies_id = $request->company_id;
            $choice->save();
            return redirect('/companies');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $choice = Choice::where('user_id', auth()->user()->id)->where('companies_id', $id);
        $choice->delete();
        return redirect('/companies');
    }
}
