<?php

namespace Locomotif\Sliders\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Locomotif\Sliders\Models\Sliders;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Sliders::all();
        return view('sliders::list')->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sliders::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Sliders();
        $slider->name = $request->name;
        $slider->status = $request->status;
        $slider->save();

        return redirect('/admin/sliders/'.$slider->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function show(Sliders $slider)
    {
        return view('sliders::show')->with('slide', $slider);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function edit(Sliders $slider)
    {
        return view('sliders::edit')->with('slider', $slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sliders $slider)
    {
        $slider->name = $request->name;
        $slider->save();

        return redirect('/admin/sliders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sliders $slider)
    {
        $slider->delete();
        return redirect('/admin/sliders');
    }
}
