<?php

namespace App\Http\Controllers;

use App\DTO\Consultancies\CreateConsultancyDTO;
use App\DTO\Consultancies\CreateEvaluationDTO;
use App\Http\Requests\StoreUpdateConsultancy;
use App\Http\Requests\StoreUpdateEvaluation;
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

    public function showEvaluation(string|int $id)
    {

        if (!$evaluation = $this->service->findOneEvaluation($id)) {
            return back();
        }
     //   dd(json_decode($evaluation->value));

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

        return  view('consultancy/create', compact('stepId'));
    }
    public function store(StoreUpdateConsultancy $request)
    {
 
       $this->service->new(
            CreateConsultancyDTO::makeFromRequest($request)

        );

        return redirect()->route('consultancies.create', 2)->with('message', 'Cadastrado com sucesso!');
    }

    public function evaluation(StoreUpdateEvaluation $request)
    {
 
        $this->service->newEvaluation(
            
            CreateEvaluationDTO::makeFromRequest($request));

        return redirect()->route('consultancies.create', 2)->with('message', 'Cadastrado com sucesso!');
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
