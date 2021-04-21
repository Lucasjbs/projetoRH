<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalsController extends Controller
{
    public function createProposalForm()
    {
        return view('proposals/proposal');
    }

    public function createProposalData(Request $request){
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'email' => 'required',
            'value' => 'required',
            'description' => 'required',
        ]);

        $proposals = new Proposal();

        $proposals->author = $request->author;
        $proposals->email = $request->email;
        $proposals->title = $request->title;
        $proposals->value = $request->value;
        $proposals->description = $request->description;

        $proposals->save(); 
        return redirect()->route('proposals.get.view_list');
    }

    public function readAllProposals(){
        $proposals = Proposal::paginate();
        return view('proposals/list', ['proposals' => $proposals]);
    }

    public function readProposalById($id){
        $proposals = Proposal::find($id);
        return view('proposals/listId', ['proposal' => $proposals]);
    }

    public function updateProposalForm($id){
        $proposals = Proposal::find($id);
        return view('proposals/edit', ['proposal' => $proposals]);
    }

    public function updateProposalData(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'email' => 'required',
            'value' => 'required',
            'description' => 'required',
        ]);

        $proposals = Proposal::find($id);

        $proposals->author = $request->author;
        $proposals->email = $request->email;
        $proposals->title = $request->title;
        $proposals->value = $request->value;
        $proposals->description = $request->description;

        $proposals->save();
        return redirect()->route('proposals.get.view_list');
    }

    public function deleteProposalData($id){
        $proposals = Proposal::find($id);
        $proposals->delete();
        return redirect()->route('proposals.get.view_list');
    }
}
