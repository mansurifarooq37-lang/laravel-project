<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Show all projects
    public function index()
    {
        if (!session('admin_id')) {
            return redirect()->route('admin.login');
        }

        $projects = Project::latest()->get();

        return view('admin.projects', compact('projects'));
    }

    // Show add project form
    public function create()
    {
        if (!session('admin_id')) {
            return redirect()->route('admin.login');
        }

        return view('admin.add-project');
    }

    // Store new project
    public function store(Request $request)
    {
        if (!session('admin_id')) {
            return redirect()->route('admin.login');
        }

        $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'technology' => 'nullable|string|max:255',
        'link' => 'nullable|url|max:255',
        ]);

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'technology' => $request->technology,
            'link' => $request->link,
        ]);

        return redirect()
            ->route('admin.projects')
            ->with('success', 'Project added successfully!');
    }

    // Delete project
    public function destroy($id)
    {
        if (!session('admin_id')) {
            return redirect()->route('admin.login');
        }

        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()
            ->route('admin.projects')
            ->with('success', 'Project deleted successfully!');
    }
}