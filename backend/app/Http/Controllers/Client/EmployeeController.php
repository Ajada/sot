<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\EmployeesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class EmployeeController extends Controller
{
    protected $employee;

    public function __construct(EmployeesModel $employee)
    {
        $this->employee = $employee;
    }

    public function index(Request $request)
    {
        return response()->json(
            DB::table('employees')
                ->whereUserId($request->header('user_id'))
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
        $data = $request->all();

        if ($request->file('photo')){
            $data['photo'] = substr(bcrypt($request->file('photo')->getClientOriginalName()), 0, 10).'.'.$request->file('photo')->getClientOriginalExtension();
            $this->upload($request, $request->file('photo')->getClientOriginalExtension(), $data['photo']);
        }
        
        return 
            $this->employee::create($data) ? 
            response()->json(['success' => 'Employee added with successfull']) : 
            response()->json(['error' => 'error adding employee']);
    }

    public function upload ($req, $format, $name) {
        return $format == 'jpg' || $format == 'png' || $format == 'jpeg' || $format == 'gif' ?
            $req->file('photo')->storeAs('user_'.$req->header('user_id').'//images/', $name)  : '';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($param, Request $request)
    {
        $collect = 
        DB::table('employees')
            ->where('user_id', $request->header('user_id'))
            ->where('name', 'like', '%'.$param.'%')
            ->orWhere(function($query)use($param, $request) {
                $query->where('user_id', $request->header('user_id'))
                ->where('cpf', 'like', '%'.$param.'%');
            })
            ->orWhere(function($query)use($param, $request) {
                $query->where('user_id', $request->header('user_id'))
                ->where('function', 'like', '%'.$param.'%');
            })->get();

        return $collect ? response()->json($collect) : response()->json(['error' => 'Employee not found']);
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
