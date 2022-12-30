<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\TrainingsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainingsController extends Controller
{
    protected $training;
    protected $request;

    public function __construct(TrainingsModel $training, Request $request)
    {
        $this->request = $request;
        return $this->training = $training;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            DB::table('trainings')
                ->whereUserId($this->request->header('user_id'))
                ->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 
            $this->training::create($request->all()) ? 
            response()->json(['success' => 'item added']) : 
            response()->json(['error' => 'item not added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name, Request $request)
    {
        $collect = 
            DB::table('trainings')
            ->whereUserId($request->header('user_id'))
            ->where('training_name', 'like', '%'.$name.'%')
            ->get();

        return $collect ? response()->json($collect) : response()->json(['error' => 'Equipment not found']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
