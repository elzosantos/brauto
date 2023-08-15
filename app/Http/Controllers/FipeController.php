<?php

namespace App\Http\Controllers;

use App\Services\FipeService;
use Illuminate\Http\Request;


use App\Models\Fipe;
use Illuminate\Support\Facades\App;

class FipeController extends Controller
{

    public function __construct(protected FipeService $service)
    {
    }
    public function index(Request $request)
    {
        $vehicles =  $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 15),
            filter: $request->filter

        );

     //   dd($vehicles);
        $filters = ['filter' => $request->get('filter', '')];
        return view('fipe.index', compact('vehicles', 'filters'));
    }
    public function show(string|int $id)
    {
        if (!$fipe = $this->service->findOne($id)) {
            return back();
        }

        return view('fipe.show', compact('fipe'));
    }
}
