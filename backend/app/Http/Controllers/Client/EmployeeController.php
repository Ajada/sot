<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\EmployeesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    protected $employee;

    public function __construct(EmployeesModel $employee)
    {
        $this->employee = $employee;
    }

    public function index()
    {
        return response()->json($this->employee->all());
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
            $this->employee::create($request->all()) ? 
            response()->json(['success' => 'Employee added with successfull']) : 
            response()->json(['error' => 'error adding employee']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($param)
    {
        dd($param);

        $collect = DB::table('employees')
        ->whereUserId(session('user_id'))
        ->whereName('like', '%'.$param.'%')
        ->orWhere('cpf', 'like', '%'.$param.'%')
        ->orWhere('function', 'like', '%'.$param.'%')
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