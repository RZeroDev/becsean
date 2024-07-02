<?php

namespace App\Http\Controllers;

use App\Helpers\FrontHelper;
use App\Helpers\ImageHelper;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdatRequest;
use App\Models\Image;
use Illuminate\Support\Str;
use App\Models\Project;
use App\Models\ProjectCategorie;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.pages.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie=ProjectCategorie::all();
        return view('dashboard.pages.projects.create',compact('categorie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectStoreRequest $request)
    {
        $imageHelper = new ImageHelper();
        $imagePath = $imageHelper->enregistrerImage($request->main_image, 'images/projects/');
        // dd('ggg');
        $project = Project::create([
            'title' => $request->title,
            'main_image' => FrontHelper::getEnvFolder() . $imagePath,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'project_categorie_id'=>$request->cate,
        ]);
        if ($request->hasFile('image_secondaire') && is_array($request->file('image_secondaire'))) {
            foreach ($request->file('image_secondaire') as $key => $image) {
                if ($image->isValid()) {
                    $imageSecondaire = $imageHelper->enregistrerImage($image, 'images/projects/secondaire');
                    Image::create([
                        'url' => $imageSecondaire,
                        'project_id' => $project->id,
                    ]);
                }
            }
        }

        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('dashboard.pages.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $categorie=ProjectCategorie::all();

        return view('dashboard.pages.projects.edit', compact('project','categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectUpdatRequest $request, Project $project)
    {
        $imagePath = null;
        $projectPath = null;
        $imageHelper = new ImageHelper();
        
        if ($request->hasFile('main_image') && $request->file('main_image')->isValid()) {
            $projectPath = $imageHelper->enregistrerImage($request->main_image, 'images/projects');
            if($projectPath)
                $imageHelper->removeImage($project->image);
        }

        if ($request->hasFile('image_secondaire') && is_array($request->file('image_secondaire'))) {
            if ($project->images) {
                foreach($project->images as $image) {
                    $imageHelper->removeImage($image->url);
                    $image->delete();
                }
            }
            
            foreach ($request->file('image_secondaire') as $key => $image) {
                if ($image->isValid()) {
                    $imageSecondaire = $imageHelper->enregistrerImage($image, 'images/projects/secondaire');
                    Image::create([
                        'url' => $imageSecondaire,
                        'project_id' => $project->id,
                    ]);
                }
            }
        }

        $project->update([
            'title' => $request->title,
            'main_image' => $projectPath ? FrontHelper::getEnvFolder() . $projectPath : $project->main_image,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'project_categorie_id'=>$request->cate,

        ]);

        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $imageHelper = new ImageHelper();

        if ($project->images) {
            foreach($project->images as $image) {
                $imageHelper->removeImage($image->url);
                $image->delete();
            }
        }

        if($project->main_image)
            $imageHelper->removeImage($project->main_image);

        $project->delete();
        
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('projects.index');
    }
}
