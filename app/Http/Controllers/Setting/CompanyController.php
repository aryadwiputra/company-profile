<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\CompanyUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\Settings\CompanyService;

class CompanyController extends Controller
{
    protected $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company_data = [
            'company_logo' => Setting::where('name', 'company_logo')->first()->value,
            'company_name' => Setting::where('name', 'company_name')->first()->value,
            'company_email' => Setting::where('name', 'company_email')->first()->value,
            'company_phone' => Setting::where('name', 'company_phone')->first()->value,
            'company_address' => Setting::where('name', 'company_address')->first()->value,
        ];

        return view('pages.dashboard.settings.company.index', $company_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyUpdateRequest $request)
    {
        $this->companyService->update($request);

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
