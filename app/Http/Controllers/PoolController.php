<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Pool;

use Auth;

use App\CostumsClass\Olah;

class PoolController extends Controller {


	public function index(Request $request) {

		if(isset($request->response) && $request->response == 'json'){

			/**
			 * Costum Class buat ngolah request dan query
			 * @var Olah
			 */
	    	$table = new Olah(Pool::with([]));

	    	/**
	    	 * Pannggil Closure di costum class Olah 
	    	 * buat costum mana aja field yang bisa di search
	    	 */
            $table->search(function($q) use ($request){
                if(isset($request->search) && $request->search != ''){
    	    		$q->where('nama', 'ILIKE', '%' . $request->search . '%');

                }
            });
	    	
	    	// $user = Auth::guard('admin')->user();
            $table->another(function($q) use($request){
      //           $group = 'pools';
      //           if(!$user->can($group.'-all_data')){
      //               if ($user->can($group.'-only_city')) {

      //                   $q->where('city_id','=',$user->city_id);
      //               }
      //               else if ($user->can($group.'-only_pool')) {
      //                   $q->where('admin_id','=',$user->city_id);
      //               }
      //           }
                $q->where('id','!=',0);
            });

	    	/**
	    	 * Ambil hasil query yang udah di olah
	    	 * @var ambil()
	    	 */
	    	$table = $table->ambil();
	    	return response()->json($table);
		} 

        return view('pool.index');
    }
}