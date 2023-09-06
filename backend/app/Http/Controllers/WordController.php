<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $words = Word::all();
        return response()->json(
            [
                'words' => $words,
                'message' => 'Words',
                'code' => 200
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'word' => [
                    'required',
                    'string',
                    Rule::unique('words', 'word'),
                ],
                'translation' => 'required|string',
            ]);

            // Check if the word and translate fields are not the same
            if ($validatedData['word'] === $validatedData['translation']) {
                return response()->json(['message' => 'Word and translate fields cannot be the same.'], 422);
            }

            // Create a new Work instance
            $work = Word::create($validatedData);

            return response()->json(['message' => 'Work created successfully', 'work' => $work], 201);
        } catch (\Exception $exception){
            return response()->json(['message' => $exception->getMessage()], 500);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
