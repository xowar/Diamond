<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('employees')
            ->where('employees.status', '=', 1)
            ->paginate(15);

        return view('admin_table_users', ['users' => $users]); 
    }

    public function admin_create_acc($id)
    {
        $users = DB::table('employees')
                    ->select('*')
                    ->where('id_employees', '=', $id)
                    ->get();

        return view('admin_create_acc', ['users' => $users]);  
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $dateCreate = date("Y-m-d H:i:s"); 
            DB::table('users')->insert(
            [
                'name'                      => $request['name'],
                'email'                     => $request['email'], 
                'password'                  => bcrypt($request['password']),
                'remember_token'            => $request['_token'],
                'created_at'                => $dateCreate,
                'updated_at'                => $dateCreate,
            ]);

            $id_users = DB::table('users')
             ->select(DB::raw('MAX(id) as id'))
             ->get();
            $id_users = (array)$id_users[0];

            DB::table('employees')
            ->where('id_employees', $id)
            ->update([
                'id_user'   => $id_users['id'],
            ]);

            return redirect('home/admin_table_users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy_acc($id)
    {
            $id_users = DB::table('employees')
             ->select('id_user')
             ->where('id_employees', $id)
             ->get();

             $id_users = (array)$id_users[0];

            DB::table('users')
                ->where('id', '=', $id_users['id_user'])
                ->delete();

            DB::table('employees')
            ->where('id_employees', $id)
            ->update(['id_user'   => '0',]);

        return redirect('home/admin_table_users');  
    }
}
