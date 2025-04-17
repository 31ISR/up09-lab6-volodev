<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index() {
        return view('note.index');

    }
    
    public function create() {
        return view('note.create');

    }

    public function store() {
        return 'store';
    }
    
    public function show($id) {
        return view('note.show');

    }
    
    public function edit($id) {
        return view('note.edit');

    }
    
    public function update($id) {
        return 'update';
    }
    
    public function destroy($id) {
        return 'destroy';
    }
}
