<?php

namespace App\Http;

use App\Core\Support\Controller;
use Illuminate\Contracts\Support\Renderable;
use function view;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('dashboard');
    }
}
