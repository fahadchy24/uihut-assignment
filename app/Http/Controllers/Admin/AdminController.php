<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(): Response
    {
        return Inertia::render('Admin/Dashboard', [
            'admin' => [
                'user' => [
                    'name' => Auth::guard('admin')->user()->name,
                    'email' => Auth::guard('admin')->user()->email,
                ],
            ],
        ]);
    }
}
