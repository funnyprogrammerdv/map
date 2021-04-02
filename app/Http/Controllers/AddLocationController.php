<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\validRequest;
use App\Models\locations;


use function GuzzleHttp\Promise\all;

class AddLocationController extends Controller
{
   public function addlocation(validRequest $req){
    $locat = new locations();
    $locat->namelocate = $req->input('nameloc');
    $locat->latitude = $req->input('latitude');
    $locat->longitude = $req->input('longitude');
    $locat->users_id = '1';

    $locat->save();
    return redirect('mainapp');
        } 
  public function alllocation(){
      
      return view('mainapp', ['data'=>locations::all()]);
      
  }
  public function updatelocation($id){
    $locat = new locations();
    return view('locateupdate', ['data'=> $locat->find($id)]);
  }

  public function updatelocationsubmit($id, validRequest $req){
    $locat = locations::find($id);
    $locat->namelocate = $req->input('nameloc');
    $locat->latitude = $req->input('latitude');
    $locat->longitude = $req->input('longitude');
    $locat->users_id = '1';

    $locat->save();
    return redirect('mainapp');
        } 

        public function deletelocation($id)
        {
            $locat = locations::find($id)->delete();  
            return redirect('mainapp');
        }
        
     

}
