<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() 
    {
    	return view('/masterData/member/index', [
    		'members' => Member::latest()->get()
    	]);
    }

    public function create()
    {
    	return view('/masterData/member/create');
    }

    public function store(MemberRequest $request)
    {
    	$data = request()->all();

    	Member::create($data);

    	return redirect('/data/member')->with('created', 'New member has been added!');
    }

    public function edit(Member $member)
    {
    	return view('/masterData/member/edit', [
    		'member' => $member
    	]);
    }

    public function update(MemberRequest $request, Member $member)
    {
    	$data = request()->all();

		$member->update($data);

    	return redirect('/data/member')->with('updated', 'Member has been updated!');
    }

    public function destroy(Member $member)
    {
    	$member->delete();

    	return redirect('/data/member')->with('deleted', 'Member has been deleted!');
    }
}









