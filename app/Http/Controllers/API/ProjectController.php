<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;;

use App\AreaThree;
use App\Http\Resources\Project as ResourcesProject;
use App\Http\Resources\ProjectCollection;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
        $this->guard = "api";
    }
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(25);
        return new ProjectCollection($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        $users = User::all();
        $area_three = AreaThree::all();


        return view('admin.project.create', compact('projects', 'users', 'area_three'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



                Project::create([
            'user_id' => $request->user_id,
            'area_three_id' => $request->area_three_id,
            'name' => $request->name,
            'address' => $request->address,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image,
            'thumbnail' => $request->thumbnail,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);



        $filename = null;

        //$data=>array();

        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $exe = $image->getClientOriginalName();
            $filename = time() . '-' . $exe;
            $image->move(public_path('images/projects/'), $filename);
        }
        $data = Project::create($request->except('image') + ['image' => $filename]);
        return response()->json([
            'success' => true
        ]);

        // return redirect('admin/projects')->with('u_message', 'successfuly updated!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return new ResourcesProject($project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $filename=null;

        if(isset($request->clickapi)){


            Project::where('id',$request->id)->increment('project_click');

        }


        $project = Project::find($request->id);

        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $exe = $image->getClientOriginalName();
            $filename = time() . '-' . $exe;
            $image->move(public_path('images/projects/'), $filename);
            $project->update($request->except('image') + ['image' => $filename]);
        } else {
            $project->update($request->except('image'));
        }
        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::where('id', $id)->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function delete($id)
    {
        Project::where('id', $id)->delete();
        return redirect()->back();
    }
}
