<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreResourceRequest;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        try{
            $resources = Resource::all();

            return response()->json($resources, 200);
        }
        catch(\Exception $e){
            return response()->json(['message' => 'Falha ao exibir os recursos'], 404);
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResourceRequest $request)
    {
        Gate::authorize('create', Resource::class);
        DB::beginTransaction();

        $date = $request->validated();

        try{
            $resource = new Resource();
            $resource->fill($date);

            $resource->save();

            DB::commit();
            return response()->json($resource, 201);
        }
        catch(\Exception $e){

            DB::rollBack();
            return response()->json(['message' => 'Falha ao exibir os recursos'], 404);
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
        Gate::authorize('update', Resource::class);

        DB::beginTransaction();

        try{
            $resource = Resource::find($id);
            $resource->update($request->validated());

            DB::commit();
            return response()->json($resource, 200);
        }
        catch(\Exception $e){
            DB::rollBack();
            return response()->json(['message' => 'Falha ao exibir os recursos'], 404);
        }
    }

    public function destroy(string $id)
    {
        Gate::authorize('delete', Resource::class);

        db::beginTransaction();

        try{
            $resource = Resource::find($id);
            $resource->delete();

            DB::commit();
            return response()->json($resource, 200);
        }
        catch(\Exception $e){
            DB::rollBack();
            return response()->json(['message' => 'Falha ao exibir os recursos'], 404);
        }
    }
}
