<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager as Images;
 use Image;
use App\Section;
use App\Property;
use App\Price;
use App\Serf;
use App\Picture;

use DB;

use Illuminate\Http\Request;

class SectionController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

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
            $section = Section::where('name', 'LIKE', "%$keyword%")
                ->orWhere('room_num', 'LIKE', "%$keyword%")
                ->orWhere('property_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $section = Section::paginate($perPage);
        }

        return view('property.section.index', compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
      $section_id = NULL;

        return view('property.section.create', compact('section_id'));
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
      $section = new Section;
      $section->name        = $request->name;
      $section->room_num    = $request->room_num;
      $section->capacity    = $request->capacity;
      $section->property_id = $request->property_id;
      $section->save();

      $sectionprise_id = $section->id;
      $sectionprise = new Price;

      $sectionprise->typical_day = $request->typical_day;
      $sectionprise->weekend     = $request->weekend;
      $sectionprise->feast       = $request->feast;
      $sectionprise->section_id  = $sectionprise_id;
      $sectionprise->save();

       $sectionserves = $request->serves ;

       $section->serves()->attach($sectionserves);

       $i = 0;
      $sectionimage = new Picture;
       if ($request->hasFile('file1')) {
          foreach ($request->file1 as $imagename) {
            if ($i > 11) { break; }
            $i = $i + 1;
            $img = 'img' .$i;
            // $imagename  = $request->file1[0];
            $filename =  time() . $i . '.' . $imagename->getClientOriginalExtension();
            Image::make($imagename)->resize(1920, 1080)->save(public_path('/images/store/sectionimage/') . $filename);
            $sectionimage-> $img                =  $filename;
         }
          } else {
               $filename = 'avatar.png';
         }

          $sectionimage->section_id  = $sectionprise_id;
         $sectionimage->save();


 // ------------------------------------------------//
      $property_id = $request->property_id;

      DB::table('properties')->whereId($property_id)->increment('num_section');
      return back()->with('flash_message', 'Section added!');
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
        $section = Section::findOrFail($id);

        return view('property.section.show', compact('section'));
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
        $section = Section::findOrFail($id);
        $section_id = $section->property_id;
        return view('property.section.edit', compact('section', 'section_id'));
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

        $section = Section::findOrFail($id);
        $section->update($requestData);

        return redirect('section')->with('flash_message', 'Section updated!');
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
        Section::destroy($id);

        return back();
        // return redirect('section')->with('flash_message', 'Section deleted!');
    }
}
