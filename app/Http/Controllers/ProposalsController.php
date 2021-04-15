<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalsController extends Controller
{
    public function viewProposalForm()
    {
        return view('proposals');
    }

    public function insertProposalData(Request $request){
        if( 
            $request->author == null || 
            $request->email == null || 
            $request->title == null || 
            $request->value == null || 
            $request->description == null
            ){
            return redirect()->route('proposals.get.view');
        }

        $proposals = new Proposal();

        $proposals->author = $request->author;
        $proposals->email = $request->email;
        $proposals->title = $request->title;
        $proposals->value = $request->value;
        $proposals->description = $request->description;

        $proposals->save();
        return redirect()->route('list.get.view.proposals');
    }

    public function listAllProposals(){
        $proposals = Proposal::paginate();
        return view('list', ['proposals' => $proposals]);
    }

    public function listProposalById($id){
        $proposals = Proposal::find($id);
        return view('listId', ['proposal' => $proposals]);
    }

    public function editProposalForm($id){
        $proposals = Proposal::find($id);
        return view('edit', ['proposal' => $proposals]);
    }

    public function updateProposalData(Request $request, $id){
        if( 
            $request->author == null || 
            $request->email == null || 
            $request->title == null || 
            $request->value == null || 
            $request->description == null
            ){
            return redirect()->route('list.get.view.proposals');
        }

        $proposals = Proposal::find($id);

        $proposals->author = $request->author;
        $proposals->email = $request->email;
        $proposals->title = $request->title;
        $proposals->value = $request->value;
        $proposals->description = $request->description;

        $proposals->save();
        return redirect()->route('list.get.view.proposals');
    }

    public function deleteProposalData($id){
        $proposals = Proposal::find($id);
        $proposals->delete();
        return redirect()->route('list.get.view.proposals');
    }
}
