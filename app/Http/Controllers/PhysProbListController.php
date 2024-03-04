<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Member;

class PhysProbListController extends Controller
{
    public function index()
    {
        $phys_prob_lists = DB::table('phys_prob_lists')
            -> select(
                'Workbook',
                'ProbNo',
                'Field',
                'Class',
                'Level',
                'UsedDay',
                'updated_at',
                'created_at')
            ->get();

        return view('phys_prob_lists/index', compact('phys_prob_lists'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
