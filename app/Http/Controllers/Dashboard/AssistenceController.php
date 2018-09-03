<?php

namespace App\Http\Controllers\Dashboard;

use App\Entities\Assistence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssistenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
     public function view()
    {
        return view('dashbord.assistence.index');
    }

    public function index()
    {
     
         $sql=Assistance::get();
        return $sql;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        //
        $sql=Assistance();
        $sql->create($request->all());
        return redirect('dashboard/assistence');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $sql=Assistance::find($id);
        return $sql;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function update(Request $request, $id)
    {
        
        $sql=Assistance::find($id);
        $sql->create($request->all());
        return redirect('dashboard/assistence');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assistance::destroy($id);
        return redirect('dashboard/assistence');
    }
}
