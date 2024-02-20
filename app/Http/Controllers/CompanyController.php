<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->check()) {
            $choices = Choice::where('user_id', auth()->user()->id)->get();
            if ($request->has('search')) {
                $companies = Company::where('description', 'like', '%' . $request->search . '%')->get();
                return view('companies.index', compact('companies', 'choices'));
            } else {
                $companies = Company::all();
                return view('companies.index', compact('companies', 'choices'));
            }
        } else {
            return redirect('/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->check()) {
            return view('companies.create');
        } else {
            return redirect('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (auth()->check()) {
            $company = new Company();
            $company->name = $request->name;
            $company->url = $request->url;
            $company->mode = $request->mode;
            $company->description = $request->description;
            $company->save();
            return redirect('/companies');
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        if (auth()->check()) {
            return view('companies.edit', compact('company'));
        } else {
            return redirect('/login');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        if (auth()->check()) {
            $company->update($request->all());
            $company->save();
            return redirect('/companies');
        } else {
            return redirect('/companies');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        if (auth()->check()) {
            $choices = Choice::all();
            foreach ($choices as $choice) {
                if ($choice->companies_id == $company->id) {
                    $choice->delete();
                }
            }
            $noChoices = Choice::where('companies_id', $company->id)->get();
            if ($noChoices->count() == 0) {
                $company->delete();
                return redirect('/companies');
            } else {
                return redirect('/companies');
            }
        } else {
            return redirect('/login');
        }
    }
}
