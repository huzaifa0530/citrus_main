<?php

namespace App\Http\Controllers;

use App\Models\ModelProfile;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalUsers = User::count();
        $totalRoles = Role::count();
        $totalPermissions = Permission::count();
        $totalModels = ModelProfile::count();

        return view('dashboard', compact('totalUsers', 'totalRoles', 'totalPermissions', 'totalModels'));
    }
    public function Request()
    {
        $models = ModelProfile::with('assets')->latest()->paginate(15);

        return view('dashboard.pages.request.New_Request', compact('models'));
    }
    public function show($id)
    {
        $model = ModelProfile::with('assets')->findOrFail($id);
        return response()->json($model);
    }
    public function holdRequest()
    {
        return view('dashboard.pages.request.hold', );
    }
    public function approvedRequest()
    {
        return view('dashboard.pages.request.approved', );
    }
    public function rejectedRequest()
    {
        return view('dashboard.pages.request.rejected', );
    }

}
