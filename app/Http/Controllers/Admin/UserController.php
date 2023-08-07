<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Supports\CreateUserDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUser;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        protected UserService $service
    ) {
    }
    public function index(Request $request)
    {
        
        $users =  $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 10),
            filter: $request->filter

        );
        $filters = ['filter' => $request->get('filter', '')];
 
        return view('admin.users.index', compact('users', 'filters'));
    }


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
    }*/
    public function destroy(string $id)
    {
        $this->service->delete($id);
        return redirect()->route('users.index')->with('message', 'Deletado com sucesso!');;
    }
}
