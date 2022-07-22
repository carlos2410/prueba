<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Datatable;
use DataTables;
use Exception;

class TableController  extends Controller
{
    public function index(Request $request)
    {
     if ($request->ajax()) {
            $data = User::latest()->get();
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                $btn = '<a href="'.route("eliminar.destroy",[$row->id]).'"  class="edit btn btn-danger btn-sm">Eliminar</a>';
                return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
                }
                 
                return view('user');
                }

    public function destroy($id) 
                {
                    try{

                    
                   $row = User::where('id', $id)->firstorfail()->delete();
                   //echo ("User Record deleted successfully.");
                   return redirect()->route('users.index')->with('message', 'Eliminado correctamente');;
                }catch(Exception $e){
                    return redirect()->route('users.index')->with('error', 'Error al eliminar');
                }
                }
}


