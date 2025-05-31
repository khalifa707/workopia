<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
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

    public function create() {
        return view('jobs.create');
    }
}
