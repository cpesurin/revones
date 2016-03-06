<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Validator;
use App\model\User;
use Hash;
use DB;

class BasicController extends Controller {

	//

	public function index()
	{
		//echo "Jukkapun";
		return view('pages.index');
	}

	public function about_us()
	{
	return view('pages.about');
	}

	public function service()
	{
	return view('pages.service');
	}

	public function portfolio()
	{
	return view('pages.portfolio');
	}

	public function blog()
	{
	return view('pages.blog');
	}
	
	public function contact()
	{
	return view('pages.contact');
	}

	public	function register(){
		return view('pages.register');
	}

	public function register_submit(){

		//echo Request::input('first_name');
		//echo "<pre>";
		//print_r(Request::all());
		//echo "</pre>";
		$messages =[
			'required' => 'ข้อมูล:attribute จำเป็นต้องการกรอก',
			'numeric' => 'ข้อมูล:attribute ต้องกรอกเป็นตัวเลขเท่านั้น',


		];

		$rules =[
				'first_name'				 => 'required',
				'last_name' 				 => 'required',
				'email' 					 => 'required',
				'phon' 					     => 'required|numeric|digits:10',
				'password' 					 => 'required',
				'password_confirmation'		 => 'required'
		];
		$validator =Validator::make(Request::all(),$rules,$messages);
		if($validator->fails()){
			//echo "Validator fails!!!";
			return redirect()->back()->withErrors($validator)->withInput();
		}

		else{
			//echo "Validator Success";
			$data_user = array('firsname' 	=>  Request::input('first_name'),
							'lastname'		=>  Request::input('last_name'),
							'email' 		=>  Request::input('email'),
							'phon' 			=>  Request::input('phon'),
							'password' 		=>  Hash::make(Request::input('password'))

						  );
		User::create($data_user);
		if($insert_user->exists())
		{
			echo "Insert Success";
			//return redirect('register')->with('status','<div class="alert alert"'
		}
		else{
			echo "Insert F";
		}
		}

		//User::create(Request::all());
		
		}
		public function customers_list()
		{
			
			/*$data= DB::table('customers')->where('postalCode','44000')
										->first();
			

			echo "<pre>";
			print_r ($data);
			echo "</pre>";

			*/


			$data = DB::table('customers')->paginate(20);
			$data_count = DB::table('customers')->count();
			//echo $data_count;
			return view('pages.customers_list')->with(['data_customer'=>$data,'data_count'=>$data_count]);


		}

		public function products_list()
		{

			$data_product = DB::table('product')
        			->join('category', 'product.category_id','=''category.category_id')
        			->join('manufacturer', 'product.menufac_id','=''manufacturer.menufac_id')
        			->select('*')
					->get();
				return view('pages.products_list')->with('data_product',$data_product);
        			
        								}

        	
        			
		}

	}
		 

 
