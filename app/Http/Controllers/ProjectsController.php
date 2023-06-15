<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required',
            'project_type' => 'required',
            'project_description' => 'required',
            'project_manager' => 'required',
            'project_startDate' => 'required|date_format:Y-m-d',
            'project_endDate' => 'required|date_format:Y-m-d',
            'project_status' => 'required',
            'client_spoc_name' => 'required',
            'client_spoc_email' => 'required|email',
            'client_spoc_contact' => 'required',
            'project_status' => 'required',
        ]);

        Project::create([
            'project_name' => $request->input('project_name'),
            'project_type' => $request->input('project_type'),
            'project_description' => $request->input('project_description'),
            'project_manager' => $request->input('project_manager'),
            'project_startDate' => $request->input('project_startDate'),
            'project_endDate' => $request->input('project_endDate'),
            'project_status' => $request->input('project_status'),
            'client_spoc_name' => $request->input('client_spoc_name'),
            'client_spoc_email' => $request->input('client_spoc_email'),
            'client_spoc_contact' => $request->input('client_spoc_contact'),
            'project_status' => $request->input('project_status'),
        ]);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');

    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
