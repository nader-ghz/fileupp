<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Resources\PlanResource;

class PlanController extends Controller
{
    public function __invoke()
    {
        return PlanResource::collection(Plan::orderBy('storage', 'asc')->get());
    }
}
