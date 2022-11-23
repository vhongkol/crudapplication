<?php

namespace App\Http\Controllers;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller

    {
  
        public function index()
        {
            $people = People::all();
          return view ('People.index')->with('people', $people);
        }
     
        
        public function create()
        {
            return view('People.create');
        }
     
      
        public function store(Request $request)
        {
            $input = $request->all();
            People::create($input);
            return redirect('people')->with('flash_message', 'People created successfully!');  
        }
     
        
        public function show($id)
        {
            $people = People::find($id);
            return view('People.show')->with('people', $people);
        }
     
        
        public function edit($id)
        {
            $people = People::find($id);
            return view('People.edit')->with('people', $people);
        }
     
      
        public function update(Request $request, $id)
        {
            $people = People::find($id);
            $input = $request->all();
            $people->update($input);
            return redirect('people')->with('flash_message', 'People Updated!');  
        }

        public function destroy($id)
        {
            People::destroy($id);
            return redirect('people')->with('flash_message', 'People Deleted!');  
        }
    }