<?php

namespace App\Http\Controllers;

use App\DTO\Vehicles\CreateVehicleDTO;
use App\Enums\VehicleUserStatus;
use App\Http\Requests\StoreUpdateVehicle;
use App\Services\VehicleService;
use App\Services\VehicleUserService;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function __construct(
        protected VehicleService $service
    ) {
    }
    public function index(Request $request)
    {

        $vehicles =  $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 10),
            filter: $request->filter

        );
        $filters = ['filter' => $request->get('filter', '')];

         // dd($vehicles);

        return view('vehicles.index', compact('vehicles', 'filters'));
    }


    public function show(string|int $id)
    {

        
        if (!$vehicles = $this->service->findByUserId($id)) {
            
            return back();
        }
 
    
        return view('vehicles.partials.show', compact('vehicles'));
    }


    public function edit(string|int $id)
    {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }
        return view('admin.supports.edit', compact('support'));
    }

    public function create()
    {

        return  view('vehicles/create');
    }

    public function store(StoreUpdateVehicle $request)
    {
 
        $vehicle = $this->service->new(
            CreateVehicleDTO::makeFromRequest($request)

        );
 

        return redirect()->route('dashboard')->with('message', 'Cadastrado com sucesso!');
    }
}
