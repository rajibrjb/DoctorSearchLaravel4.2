<?php
class myController extends BaseController
{
	public function home()
	{
		$categories = Category::all();
		$areas = Area::all();
		return View::make('home',compact('categories','areas'));
	}
	public function about()
	{
		return View::make('about');
	}
	public function contact()
	{
		return View::make('contact');
	}
	public function contactSuccess()
	{
		$data = Input::all();
		$rules = array(
		'subject' => 'required',
		'message' => 'required'
		);
		$validator = Validator::make($data, $rules);
		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}
		return Redirect::action('myController@home');
	}
	
	public function userRegistretion()
	{
		return View::make('userRegistretion');
	}
	public function save_new_user()
	{
		$input = Input::all();

		$rules = array(
			'e-mail' => 'required|email|same:e-mail_confirmation|unique:users,user_email',
			'password' => 'required|min: 6|same:password_confirmation',
			'name' => 'required|alpha_spaces',
			'age' => 'required|numeric',
			'sex' => 'required',
			'address' => 'required',
			'phone' => 'required|numeric',
			'image' => 'image'
		);
		$validator = Validator::make($input, $rules);
		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));
		}

		$user = new User;
		$user->user_email = Input::get('e-mail');
		$user->user_password = hash('sha512', Input::get('password'));
		$user->user_full_name = Input::get('name');
		$user->user_age = (int) Input::get('age');
		$user->user_sex = Input::get('sex');
		$user->user_address = Input::get('address');
		$user->user_phone = Input::get('phone');
		$user->user_details = Input::get('details');
		if(Input::file('image') != NULL)
		{
			$fileName = Str::lower(pathinfo(Input::file('image')->getClientOriginalName(), PATHINFO_FILENAME).'-'.uniqid().'.'.Input::file('image')->getClientOriginalExtension());
			$destinationPath=base_path().'\public\upload\users\\';
			$user->user_pic = $fileName;
			Input::file('image')->move($destinationPath, $fileName);
		}
		$user->save();
		return Redirect::action('myController@home'); 
	}
	public function userLogin()
	{
		return View::make('userLogin');
	}

	public function doUserLogin()
	{
		$rules = array(
			'e-mail'    => 'required|email',
			'password' => 'required|min:6'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));
		}
		else
		{
			$email = Input::get('e-mail');
			$password = Input::get('password');
			$users = User::all();
			foreach($users as $user)
			{
				if($user->user_email == $email)
				{
					if($user->user_password == hash('sha512', $password))
					{
						Session::put('user_id',$user->id);
						Session::put('user_name',$user->user_full_name);
						return Redirect::to('');
					}
				}
			}
			Session::flash('error','Email and Password don\'t match');
			return Redirect::back();
		}
	}
	public function userLogout()
	{
		Session::forget('user_id');
		Session::forget('user_name');
		return Redirect::to('');
	}

	public function doctorRegistretion()
	{
		$areas = Area::all();
		$area_names = Area::lists('area_name');
		$hospitals_name = Hospital::lists('hospital_name');
		$categories_name = Category::lists('category_name');
		return View::make('doctorRegistretion',compact('areas','area_names','categories_name','hospitals_name'));
	}
	public function save_new_doctor()
	{
		/*
		$a = DB::table('categories')->where('category_id', 43)->pluck('category_name');
		
		$myfile = fopen("newfile.txt", "w");
		$txt = $a." ".(string)((int)Input::get('category')+1);
		fwrite($myfile, $txt);
		fclose($myfile);
		*/

		$input = Input::all();

		$rules = array(
			'category' => 'required|not_in:default',
			'hospital' => 'required|not_in:default',
			'e-mail' => 'required|email|same:e-mail_confirmation|unique:doctors,doctor_email',
			'password' => 'required|min: 6|same:password_confirmation',
			'name' => 'required|alpha_spaces',
			'age' => 'required|numeric',
			'sex' => 'required',
			'area' => 'required|not_in:default',
			'address' => 'required',
			'experience' => 'required|numeric',
			'ug' => 'required_without_all:diploma,pg,others',
			'fee' => 'required|numeric',
			'image' => 'image'
		);
		$validator = Validator::make($input, $rules);
		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));
		}

		$doctor = new Doctor;
		$chamber = new Chamber;
		$area = new Area;

		$doctor->doctor_avg_rating = 0;

		$degree_diploma = (int)Input::get('diploma');
		$degree_ug = (int)Input::get('ug');
		$degree_pg = (int)Input::get('pg');
		$degree_others = Input::get('others');
		
		if(strcmp(Input::get('category'), 'default')==0)
			$doctor->category_id = 0;
		else 
		{
			$doctor->category_id = Input::get('category')+1;
		}

		if(strcmp(Input::get('area'), 'default')==0)
			$doctor->area_id = 0;
		else 
		{
			$doctor->area_id = Input::get('area')+1;
		}

		if(strcmp(Input::get('hospital'), 'default')==0)
			$doctor->hospital_id = 0;
		else 
		{
			$doctor->hospital_id = Input::get('hospital')+1;
		}

		$doctor->doctor_password = hash('sha512', Input::get('password'));
		$doctor->doctor_full_name = Input::get('name');
		$doctor->doctor_age = (int) Input::get('age');
		$doctor->doctor_sex = Input::get('sex');
		$doctor->doctor_address = Input::get('address');
		$doctor->doctor_email = Input::get('e-mail');
		$doctor->doctor_experience = (int) Input::get('experience');
		
		$degree = "a";
		if($degree_diploma == 1)
			$degree .= "Diploma, ";
		if($degree_ug == 1)
			$degree .= "Under Graduate, ";
		if($degree_pg == 1)
			$degree .= "Post Graduate, ";
		$degree .= $degree_others;
		$degree .= "z";

		$doctor->doctor_degree = $degree;
		$doctor->doctor_passed_uni= Input::get('passed_uni');
		$doctor->doctor_fee = (int) Input::get('fee');
		$doctor->doctor_details = Input::get('details');

		if(Input::file('image') != NULL)
		{
			$fileName = Str::lower(pathinfo(Input::file('image')->getClientOriginalName(), PATHINFO_FILENAME).'-'.uniqid().'.'.Input::file('image')->getClientOriginalExtension());
			$destinationPath=base_path().'\public\upload\doctors\\';
			$doctor->doctor_pic = $fileName;
			Input::file('image')->move($destinationPath, $fileName);
		}
		$doctor->save();

		if(Input::get('have_chamber')==1)
		{
			$chamber->chamber_latitude = Input::get('la');
			$chamber->chamber_longitude = Input::get('lo');

			$chamber->doctor_id = DB::table('doctors')->orderBy('id', 'desc')->first()->id;
			$chamber->chamber_address = Input::get('chamber_address');
			$chamber->chamber_phone = Input::get('chamber_phone');
			$chamber->chamber_email = Input::get('chamber_e-mail');

			$shr = Input::get('visit_time_start_hr');
			$smn = Input::get('visit_time_start_mn')*15;
			if(Input::get('visit_time_start_ap')==0)
				$sap = 'AM';
			else 
			{
				$sap = 'PM';
			}
			$chamber->visiting_time_start = $shr.':'.$smn.' '.$sap;
			
			$ehr = Input::get('visit_time_end_hr');
			$emn = Input::get('visit_time_end_mn')*15;
			if(Input::get('visit_time_end_ap')==0)
				$eap = 'AM';
			else 
			{
				$eap = 'PM';
			}		
			$chamber->visiting_time_end = $ehr.':'.$emn.' '.$eap;
			$chamber->save();
		}
		return Redirect::action('myController@home');
	}
	public function doctorLogin()
	{
		return View::make('doctorLogin');
	}
	public function doDoctorLogin()
	{
		$rules = array(
			'e-mail'    => 'required|email',
			'password' => 'required|min:6'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));
		}
		else
		{
			$email = Input::get('e-mail');
			$password = Input::get('password');
			$doctors = Doctor::all();
			foreach($doctors as $doctor)
			{
				if($doctor->doctor_email == $email)
				{
					if($doctor->doctor_password == hash('sha512', $password))
					{
						Session::put('doctor_id',$doctor->id);
						Session::put('doctor_name',$doctor->doctor_full_name);
						return Redirect::to('');
					}
				}
			}
			Session::flash('error','Email and Password don\'t match');
			return Redirect::back();
		}
	}
	public function doctorLogout()
	{
		Session::forget('doctor_id');
		Session::forget('doctor_name');
		return Redirect::to('');
	}
	public function searchDoctors()
	{
		$area_names = Area::lists('area_name');
		$category_names = Category::lists('category_name');
		$rating = array("0",".5","1","1.5","2","2.5","3","3.5","4","4.5");
		$categories = Category::all();
		$areas = Area::all();
		$chambers = Chamber::all();
		$doctors = Doctor::all();
		return View::make('searchDoctors',compact('area_names','category_names','rating','doctors','categories','areas','chambers'));
	}
	public function searchDoctorswithArea(Area $area)
	{
		$area_names = Area::lists('area_name');
		$category_names = Category::lists('category_name');
		$rating = array("0",".5","1","1.5","2","2.5","3","3.5","4","4.5");
		$categories = Category::all();
		$areas = Area::all();
		$chambers = Chamber::all();
		$doctors = DB::table('doctors')->where('doctors.area_id', '=', $area->id)->get();
		return View::make('searchDoctors',compact('area_names','category_names','rating','doctors','categories','areas','chambers'));
	}
	public function searchDoctorswithCategory(Category $category)
	{
		$area_names = Area::lists('area_name');
		$category_names = Category::lists('category_name');
		$rating = array("0",".5","1","1.5","2","2.5","3","3.5","4","4.5");
		$categories = Category::all();
		$areas = Area::all();
		$chambers = Chamber::all();
		$doctors = DB::table('doctors')->where('doctors.category_id', '=', $category->id)->get();
		return View::make('searchDoctors',compact('area_names','category_names','rating','doctors','categories','areas','chambers'));

	}
	public function search_doctor_with_given_info()
	{
		$input = Input::all();

		$category_id = Input::get('category');
		$area_id = Input::get('area');
		$full_name = Input::get('name');
		$sex = Input::get('sex');
		$address = Input::get('address');
		$experience = Input::get('experience');
		$fee = (int)Input::get('fee');
		$rating = (float)Input::get('rating')/2;
		$degree_mbbs = (int)Input::get('mbbs');
		$degree_fcps = (int)Input::get('fcps');
		$male = (int)Input::get('male');
		$female = (int)Input::get('female');
		
		if(strcmp($category_id, 'default')==0)
			$builder = "SELECT * FROM doctors WHERE category_id BETWEEN 0 AND 51 ";
		else 
		{
			$category_id = (int)$category_id+1;
			$builder = "SELECT * FROM doctors WHERE category_id = '$category_id' ";
		}

		if(strcmp($area_id, 'default')!=0)
		{
			$area_id = (int)$area_id+1;
			$builder .= "and area_id = '$area_id' ";

		}

		if(strcmp($full_name, '')!=0)
			$builder.="and doctor_full_name LIKE '%$full_name%' ";
		if(strcmp($address, '')!=0)
			$builder.="and doctor_address LIKE '%$address%' ";
		if($experience!=0)
			$builder.="and doctor_experience > '$experience' ";
		if($male==1)
			$builder.="and doctor_sex LIKE 'male' ";
		if($female==1)
			$builder.="and doctor_sex LIKE 'female' ";
		if($fee!=0)
			$builder.="and doctor_fee < '$fee' ";

		$builder.="and doctor_avg_rating >= '$rating' ";
		
		var_dump($builder);

		$area_names = Area::lists('area_name');
		$chambers = Chamber::all();
		$category_names = Category::lists('category_name');
		$categories = Category::all();
		$areas = Area::all();
		$rating = array("0",".5","1","1.5","2","2.5","3","3.5","4","4.5");
	
		$doctors = DB::select( DB::raw($builder) );
		return View::make('searchDoctors',compact('area_names','category_names','rating','doctors','areas','categories','chambers'));
	}
	public function showDoctorDetails(Doctor $doctor)
	{
		$doctor_reviews = DB::table('doctors')->Join('doctor_reviews', 'doctors.id', '=', 'doctor_reviews.doctor_id')->where('doctors.id', '=', $doctor->id)->get();
		$categories = Category::all();
		$chambers = Chamber::all();
		$doctors = DB::table('doctors')->where('doctors.id', '=', $doctor->id)->get();
		return View::make('showDoctorDetails',compact('doctors','categories','doctor_reviews','chambers'));
	}

	public function save_new_doctor_review(Doctor $doctor)
	{
		$rules = array(
			'rating'    => 'required|between:0,5',
			'review' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));
		}

		$input = Input::all();
		$num_of_reviews = DB::table('doctor_reviews')->where('doctor_reviews.doctor_id', '=', $doctor->id)->count();
		$new_avg_rating = ($doctor->doctor_avg_rating*$num_of_reviews+Input::get('rating'))/($num_of_reviews+1);
		DB::table('doctors')->where('id', $doctor->id)->update(array('doctor_avg_rating' => $new_avg_rating));	
		$review = new DoctorReview;
		$review->user_id = Session::get('user_id');
		$review->doctor_id = $doctor->id;
		$review->doctor_rating = Input::get('rating');
		$review->doctor_review = Input::get('review');
		$review->save();
		return Redirect::back();
	}




	public function hospitalRegistretion()
	{
		return View::make('hospitalRegistretion');
	}
	public function save_new_hospital()
	{
		$input = Input::all();

		$rules = array(
			'name' => 'required|alpha_spaces',
			'address' => 'required',
			'phone' => 'required|numeric',
			'e-mail' => 'required|email|unique:users,user_email',
			'image' => 'image',
			'avg_cost' => 'required|numeric'
		);
		$validator = Validator::make($input, $rules);
		if($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		}

		$hospital = new Hospital;
		$hospital->hospital_avg_rating = 0;

		$hospital->hospital_name = Input::get('name');
		$hospital->hospital_address = Input::get('address');
		$hospital->hospital_phone = Input::get('phone');
		$hospital->hospital_email = Input::get('e-mail');
		$hospital->hospital_avg_cost = Input::get('avg_cost');
		$hospital->hospital_details = Input::get('details');
		$hospital->hospital_latitude = Input::get('la');
		$hospital->hospital_longitude = Input::get('lo');
		if(Input::file('image') != NULL)
		{
			$fileName = Str::lower(pathinfo(Input::file('image')->getClientOriginalName(), PATHINFO_FILENAME).'-'.uniqid().'.'.Input::file('image')->getClientOriginalExtension());
			$destinationPath=base_path().'\public\upload\hospitals\\';
			$hospital->hospital_pic = $fileName;
			Input::file('image')->move($destinationPath, $fileName);
		}
		$hospital->save(); 
		return Redirect::action('myController@home');
	}

	public function seeUsers()
	{
		$users = User::all();
		return View::make('seeUsers',compact('users'));
	}
	public function seeDoctors()
	{
		$doctors_with_chamber_and_category = DB::table('doctors')->leftJoin('chambers', 'doctors.id', '=', 'chambers.doctor_id')->leftJoin('categories', 'doctors.category_id', '=', 'categories.id')->get();
		return View::make('seeDoctors',compact('doctors_with_chamber_and_category'));
	}
		public function news()
	{
		return View::make('news');
	}
	public function save_new_news()
	{
		$rules = array(
			'author' => 'required|alpha_spaces',
			'titel' => 'required',
			'body' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}

		$input = Input::all();
		$news = new News;
		$news->news_author = Input::get('author');
		$news->news_titel = Input::get('titel');
		$news->news_body = Input::get('body');
		$news->save();
		return Redirect::action('myController@home');
	}
	
	public function tips()
	{
		return View::make('tips');
	}
	public function save_new_tips()
	{
		$rules = array(
			'author' => 'required|alpha_spaces',
			'titel' => 'required',
			'body' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}

		$input = Input::all();
		$tip = new tip;
		$tip->tip_author = Input::get('author');
		$tip->tip_titel = Input::get('titel');
		$tip->tip_body = Input::get('body');
		$tip->save();


		return Redirect::action('myController@home');
	}

	
}

?>