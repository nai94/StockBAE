<?php namespace App\Http\Controllers;

use App\Admin;
use App\Fa;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class FaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        $fas = Fa::all();
        return \View::make('falst')->with('fas',$fas);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function add()
	{
        $fas = Fa::all()->first()

            //->where('users.name', '=', 'abc')
            ->get();
        $fa = Fa::updateOrCreate(['fa_id' => 'ff69','password' => 'testing123','name' => 'Frankie Faison','email' => 'dirtyland@gmail.com','address' => '5th Street Near 6th ','dob' => '1969-06-09','contact_no' => '55696969','start_date' => '1980-05-04','salary/hr' => '100.69','ni_no' => '012345678','admin_id' => 'sp85']);
        return \View::make('index')->with('fas',$fas);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function edit()
	{
        $fas = Fa::all();
        $fa = Fa::where('fa_id','vv8')->update(['salary/hr'=>'69.00']);
        return \View::make('index')->with('fas',$fas);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete()
	{
        $fas = Fa::all()->first()

            //->where('users.name', '=', 'abc')
            ->get();
        $fa = Fa::where('fa_id',"ff69");
        $fa->delete();
        return \View::make('index')->with('fas',$fas);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
