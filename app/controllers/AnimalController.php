<?php

class AnimalController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// get all the animals
        $animals = Animal::all();

        // load the view and pass the nerds
        return View::make('animals.index')
            ->with('animals', $animals);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	
		// load the create form (app/views/nerds/create.blade.php)
        return View::make('animals.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('animals/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $animal = new Animal;
            $animal->title       = Input::get('title');
            $animal->description      = Input::get('description');
            $animal->father      = Input::get('father');
            $animal->mother      = Input::get('mother');
            $animal->price = Input::get('price');
            $animal->save();

            // redirect
            Session::flash('message', 'Successfully created animal!');
            return Redirect::to('animals');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		// get the animal
        $animal = Animal::find($id);

        // show the view and pass the animal to it
        return View::make('animals.show')
            ->with('animal', $animal);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the animal
        $animal = animal::find($id);

        // show the edit form and pass the nerd
        return View::make('animals.edit')
            ->with('animal', $animal);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required',
            'description'      => 'required',
            'price' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('animals/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $animal = Animal::find($id);
            $animal->title       = Input::get('title');
            $animal->description      = Input::get('description');
            $animal->father      = Input::get('father');
            $animal->mother      = Input::get('mother');
            $animal->price = Input::get('price');
            $animal->save();

            // redirect
            Session::flash('message', 'Successfully updated animal!');
            return Redirect::to('animals');
        }	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
        $animal = Animal::find($id);
        $animal->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the animal!');
        return Redirect::to('animals');
	}


}
