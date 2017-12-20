<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $property = Property::where('name', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->orWhere('phon_num_one', 'LIKE', "%$keyword%")
                ->orWhere('phon_num_two', 'LIKE', "%$keyword%")
                ->orWhere('poryorty', 'LIKE', "%$keyword%")
                ->orWhere('time_entry', 'LIKE', "%$keyword%")
                ->orWhere('time_out', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('evaluation', 'LIKE', "%$keyword%")
                ->orWhere('describstion', 'LIKE', "%$keyword%")
                ->orWhere('num_section', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $property = Property::paginate($perPage);
        }

        return view('property.property.index', compact('property'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('property.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

              $property = new Property;

              $property->name = $request->name;
              $property->user_id = $request->user_id;
              $property->type = $request->type;
              $property->phon_num_one = $request->phon_num_one;
              $property->phon_num_two = $request->phon_num_two;
              $property->poryorty = 0;
              $property->time_entry = $request->time_entry;
              $property->time_out = $request->time_out;
              $property->status = $request->status;
              $property->evaluation = 0;
              $property->describstion = $request->describstion;
              $property->name = $request->name;
              $property->name = $request->name;
              $property->num_section = $request->num_section;

              $property->save();
        return redirect('property')->with('flash_message', 'Property added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $property = Property::findOrFail($id);

        return view('property.property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $property = Property::findOrFail($id);

        return view('property.property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $property = Property::findOrFail($id);
        $property->update($requestData);

        return redirect('property')->with('flash_message', 'Property updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Property::destroy($id);

        return redirect('property')->with('flash_message', 'Property deleted!');
    }
    public function createsection($id)
    {
      // return dd($id);
          return view('property.section.create', compact('id')) ;
    }
}
