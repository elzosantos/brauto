<?php

namespace App\Http\Controllers;

use App\Services\ConsultancyService;
use Illuminate\Http\Request;

class ConsultancyController extends Controller
{
    public function __construct(
        protected ConsultancyService $service
    ) {
    }
    public function index(Request $request)
    {
        
        $consultancy =  $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 10),
            filter: $request->filter

        );
        $filters = ['filter' => $request->get('filter', '')];
 
        return view('consultancy.index', compact('consultancy', 'filters'));
    }
/*

    public function show(string|int $id)
    {

        if (!$user = $this->service->findOne($id)) {
            return back();
        }
        return view('admin.users.partials.show', compact('user'));
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
        return  view('admin/users/create');
    }
    public function store(StoreUpdateUser $request)
    {
        $this->service->new(
             CreateUserDTO::makeFromRequest($request)
          
        );

        return redirect()->route('users.index')->with('message', 'Cadastrado com sucesso!');
    } 
   

  /*  public function update( StoreUpdateSupport $request )
    {
        $support = $this->service->update(
            UpdateSupportDTO::makeFromRequest($request)
        );

        if (!$support) {
            return back();
        }

        return redirect()->route('supports.index')->with('message', 'Atualizado com sucesso!');;
    }
    public function destroy(string $id)
    {
        $this->service->delete($id);
        return redirect()->route('users.index')->with('message', 'Deletado com sucesso!');;
    }*/
}
