<?php

namespace App\Http\Controllers;

use App\Services\MaintenanceService;
use Illuminate\Http\Request;

class MaintenanceCrontroller extends Controller
{
    public function __construct(
        protected MaintenanceService $service
    ) {
    }
    public function index(Request $request)
    {

        $consultancies =  $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 10),
            filter: $request->filter

        );
        $filters = ['filter' => $request->get('filter', '')];

        //  dd($consultancies);

        return view('consultancy.index', compact('consultancies', 'filters'));
    }


    public function show(string|int $id)
    {

        if (!$consultancy = $this->service->findOne($id)) {
            return back();
        }
        return view('consultancy.partials.show', compact('consultancy'));
    }


    public function edit(string|int $id)
    {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }
        return view('admin.supports.edit', compact('support'));
    }

    public function create($stepId)
    {

        return  view('consultancy/create');
    }
}
