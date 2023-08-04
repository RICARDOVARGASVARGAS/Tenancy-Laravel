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
        $request->validate([
            'id' => 'required',
        ]);

        $tenant = Tenant::create($request->all());

        $tenant->domains()->create([
            // 'domain' => $request->get('id') . '.' . config('app.domain'),
            'domain' => $request->get('id') . '.' . 'tenancy.test',
        ]);

        return redirect()->route('tenants.index');
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
        $tenant->delete();
        return redirect()->route('tenants.index');
    }
}
