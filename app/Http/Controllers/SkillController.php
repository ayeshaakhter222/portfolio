<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['skills'])->get();
        // dd($users);
        return view('skill.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('skill.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $inputs = $request->all();
            $skill = Skill::create($inputs);
            flash('Skill has been added.')->success();

            DB::commit();
        } catch (\Exception $exception) {
            flash('Something went wrong, while adding Skill.')->error();
            DB::rollBack();
        }

        return back()->withInput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        $users = User::all();
        return view('skill.edit', compact('skill','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        try {
            DB::beginTransaction();

            $inputs = $request->all();
            $skill->update($inputs);
            flash('Skill has been updated.')->success();

            DB::commit();
        } catch (\Exception $exception) {
            flash('Something went wrong, while updating Skill.')->error();
            DB::rollBack();
        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        try {
            DB::beginTransaction();

            $skill->delete();
            flash('Skill has been deleted.')->success();

            DB::commit();
        } catch (\Exception $exception) {
            flash('Something went wrong, while deleting Skill.')->error();
            DB::rollBack();
        }

        return back();
    }
}
