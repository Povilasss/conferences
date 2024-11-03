<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = [
            ['id' => 1, 'title' => 'IT Konferencija 2024', 'date' => '2024-10-10', 'status' => 'Planuojama'],
            ['id' => 2, 'title' => 'Web Development Seminar', 'date' => '2024-09-20', 'status' => 'Įvykusi'],
            ['id' => 3, 'title' => 'AI Technologijos', 'date' => '2024-12-15', 'status' => 'Planuojama']
        ];

        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'lecturers' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'address' => 'required|string'
        ]);

        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija sukurta sėkmingai!');
    }

    public function edit($id)
    {
        $conference = ['id' => $id, 'title' => 'AI Technologijos', 'date' => '2024-12-15', 'description' => 'Aprašymas', 'lecturers' => 'Lektorius', 'time' => '10:00', 'address' => 'Adresas'];
        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(Request $request, $id)
    {
        // Validacijos taisyklės
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'lecturers' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'address' => 'required|string'
        ]);

        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija sėkmingai atnaujinta!');
    }

    public function destroy($id)
    {

        $conference = ['id' => $id, 'title' => 'AI Technologijos', 'date' => '2024-12-15', 'status' => 'Planuojama'];

        if ($conference['status'] === 'Įvykusi') {
            return redirect()->route('admin.conferences.index')->with('error', 'Įvykusios konferencijos negalima ištrinti.');
        }

        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija sėkmingai ištrinta!');
    }
}


