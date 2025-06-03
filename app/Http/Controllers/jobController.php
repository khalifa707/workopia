<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class jobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
       $jobs = [
            'Web Designer',
            'Web Developer',
            'Software Engineer',
            'Data Analyst'
        ];

        return view('jobs.index', [
            'jobs' => $jobs,
            'title' => 'Available Jobs'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): string
    {
        return 'Store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): string
    {
        return 'Show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): string
    {
        return 'Edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): string
    {
        return 'Update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): string
    {
        return 'Destroy';
    }
}
