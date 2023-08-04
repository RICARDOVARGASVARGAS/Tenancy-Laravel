<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index()
    {
        return view('tenants.index', [
            'tenants' => Tenant::all()
        ]);
    }

    public function create()
    {
        return view('tenants.create');
    }

    public function store(Request $request)
    {
    }

    public function show(Tenant $tenant)
    {
        return view('tenants.show', [
            'tenant' => $tenant
        ]);
    }


    public function edit(Tenant $tenant)
    {
        return view('tenants.edit', [
            'tenant' => $tenant
        ]);
    }

    public function update(Request $request, Tenant $tenant)
    {
        //
    }

    public function destroy(Tenant $tenant)
    {
        //
    }
}
