<?php

namespace App\Http\Controllers;

use App\Vechicle;
use Illuminate\Http\Request;
use App\Http\Requests\vechicleRequest;


class VechicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vechicles=Vechicle::all();
        return view('vechicles.index',compact('vechicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vechicles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(vechicleRequest $request)
    {
        try {
            $validated = $request->validated();

            Vechicle::create([
                'name' => $request->name,
                'price' =>$request->price,
                'desc' => $request->desc,
            ]);

            toastr()->success('vechicle Added successfully');
            return redirect()->route('vechicles.index');
        }catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vechicle  $vechicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vechicle $vechicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vechicle  $vechicle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vechicle=Vechicle::findorfail($id);
        return view('vechicles.edit',compact('vechicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vechicle  $vechicle
     * @return \Illuminate\Http\Response
     */
    public function update(vechicleRequest $request, $id)
    {
        $vechicle=Vechicle::findorfail($id);

        $vechicle->update([
            'name' => $request->name,
            'price' =>$request->price,
            'desc' => $request->desc,
        ]);
        toastr()->success('vechicle Updated successfully');
        return redirect()->route('vechicles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vechicle  $vechicle
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $vechicle=Vechicle::findorfail($id)->delete();
        toastr()->success('vechicle Deleted successfully');
        return redirect()->route('vechicles.index');
    }
}
