<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Lost_Pet;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Lost_PetController extends Controller
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
            $lost_pet = Lost_Pet::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('pet_id', 'LIKE', "%$keyword%")
                ->orWhere('photo', 'LIKE', "%$keyword%")
                ->orWhere('let', 'LIKE', "%$keyword%")
                ->orWhere('long', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $lost_pet = Lost_Pet::latest()->paginate($perPage);
        }

        return view('lost_pet.index', compact('lost_pet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $user_id = Auth::id();

        $select_pet = Pet::where('user_id' , $user_id)->get();

        return view('lost_pet.create', compact('select_pet'));
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
        
        $requestData = $request->all();

        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }

        Lost_Pet::create($requestData);

        return redirect('lost_pet')->with('flash_message', 'Lost_Pet added!');
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
        $lost_pet = Lost_Pet::findOrFail($id);

        return view('lost_pet.show', compact('lost_pet'));
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
        $lost_pet = Lost_Pet::findOrFail($id);

        return view('lost_pet.edit', compact('lost_pet'));
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
                if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
                ->store('uploads', 'public');
        }

        $lost_pet = Lost_Pet::findOrFail($id);
        $lost_pet->update($requestData);

        return redirect('lost_pet')->with('flash_message', 'Lost_Pet updated!');
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
        Lost_Pet::destroy($id);

        return redirect('lost_pet')->with('flash_message', 'Lost_Pet deleted!');
    }
}