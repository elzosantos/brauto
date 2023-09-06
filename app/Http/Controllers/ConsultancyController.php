<?php

namespace App\Http\Controllers;

use App\DTO\Consultancies\CreateConsultancyDTO;
use App\DTO\Consultancies\CreateEvaluationDTO;
use App\Enums\Reports\Default\TypeConsultancy;
use App\Http\Requests\StoreUpdateConsultancy;
use App\Http\Requests\StoreUpdateEvaluation;
use App\Services\ConsultancyService;
use Illuminate\Http\Request;
use stdClass;

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
       // dd($consultancy);
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

    public function create($stepId, $idConsult)
    {
        return  view('consultancy/create', compact('stepId', 'idConsult'));
    }
    public function store(StoreUpdateConsultancy $request)
    {

        $consultancy = $this->service->new(
            CreateConsultancyDTO::makeFromRequest($request)

        );

        return redirect()->route('consultancies.create', [TypeConsultancy::HISTORICO_DADOS,   $consultancy->id])->with('message', 'Consultoria iniciada com sucesso!');
    }

    public function evaluation(StoreUpdateEvaluation $request)
    {

        $evaluation = $this->service->newEvaluation(

            CreateEvaluationDTO::makeFromRequest($request)
        );

        if ($request->get('type_consultancy') ==  TypeConsultancy::RESULTADO_FINAL->value) {
            return redirect()->route('consultancies.index')->with('message', 'Consultoria realizada com sucesso!');;
        }

        return redirect()->route('consultancies.create', [$this->getStep($request->get('type_consultancy')),   $evaluation->consultancy_id])
            ->with('message', 'Consultoria iniciada com sucesso!');
    }

    public function getStep($type_consultancy)
    {
        switch ($type_consultancy) {
            case 1:
                return TypeConsultancy::HISTORICO_DADOS;
            case 2:
                return TypeConsultancy::ANALISE_EXTERIOR;
            case 3:
                return TypeConsultancy::ANALISE_INTERIOR;
            case 4:
                return TypeConsultancy::ANALISE_MECANICA;
            case 5:
                return TypeConsultancy::ANALISE_MECANICA_B;
            case 6:
                return TypeConsultancy::ANALISE_PREVENTIVA;
            case 7:
                return TypeConsultancy::RESULTADO_FINAL;
        }
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
