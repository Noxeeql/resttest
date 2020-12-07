<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class VaancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = new Vacancy;
        return view('messages', ['data' => $items->all()]);

        // $items->toArray();

        // return response()->json($items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($new)
    {
        $new = new Vacancy();
        return view('contact-form', ['data' => $new->all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $req)
    {
        $newVacancy = new Vacancy;
        $newVacancy->title = $req->input('title');
        $newVacancy->min_reward = $req->input('min_reward');
        $newVacancy->mid_reward = $req->input('mid_reward');
        $newVacancy->max_reward = $req->input('max_reward');
        $newVacancy->text = $req->input('text');
        $newVacancy->desc = $req->input('desc');
        $newVacancy->requirements = $req->input('requirements');

        $newVacancy->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Vacancy::findOrFail($id);
        return view('onemessage', ['data' => $item->find($id)]);
        // $item = Vacancy::findOrFail($id); - конечный результат

        // $items->toArray();

        // return response()->json($item); - конечный результат
        // return view('home', ['vacancy' => Vacancy::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacancy $id)
    {
        $item = Vacancy::find($id);

        return view('update-message', ['data' => $item->find($id)]);
    }


    public function update($id, ContactRequest $ref)
    {
        $newVacancy = Vacancy::find($id);
        $newVacancy->title = $ref->input('title');
        $newVacancy->min_reward = $ref->input('min_reward');
        $newVacancy->mid_reward = $ref->input('mid_reward');
        $newVacancy->max_reward = $ref->input('max_reward');
        $newVacancy->text = $ref->input('text');
        // $newVacancy->decs = $ref->input('desc');
        // $newVacancy->requirements = $ref->input('requirements');

        $newVacancy->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vacancy::find($id)->delete();
        return redirect()->route('home');
    }
}
