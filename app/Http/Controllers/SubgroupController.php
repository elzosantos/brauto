<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubgroupController extends Controller
{
    public function __construct(
 
        ) {
        }
        public function index(string $id)
        {
        /*    if (!$support = $this->supportService->findOne($id)) {
                return back();
            }
            $replies = $this->replyService->getAllBySupportId($id);
            //   dd($replies);
            return view('admin.supports.replies.replies', compact('support', 'replies'));*/
        }
    
        public function store() //(StoreReplySupportRequest $request)
        {
    
           /* $this->replyService->createNew(
                CreateReplyDTO::makeFromRequest($request)
            );
    
            return redirect()
                ->route('replies.index', $request->support_id)
                ->with('message', 'Cadastrado com sucesso!');*/
        }
    
        public function destroy(string $supportId, string $id)
        {
           /* $this->replyService->delete($id);
            return redirect()
                ->route('replies.index', $supportId)
                ->with('message', 'Deletado com sucesso!');*/
        }
}
