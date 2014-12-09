<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MydbMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('areas', function($area) {
			$area->increments('id'); 
			$area->string('area_name');
			$area->float('area_latitude',18,16);
			$area->float('area_longitude',18,16);
			$area->timestamps();
		});
		
		Schema::create('categories', function($category) {
			$category->increments('id'); 
			$category->string('category_name');
			$category->text('category_details');
			$category->timestamps();
		});

		Schema::create('chambers', function($chamber) {
			$chamber->increments('id'); 
			$chamber->integer('doctor_id');
			$chamber->text('chamber_address');
			$chamber->string('chamber_phone');
			$chamber->string('chamber_email');
			$chamber->float('chamber_latitude',18,16)->default(23.7000);
			$chamber->float('chamber_longitude',18,16)->default(90.3750);
			$chamber->string('visiting_time_start');
			$chamber->string('visiting_time_end');
			$chamber->timestamps();
		});

		Schema::create('diseases', function($disease) {
			$disease->increments('id');
			$disease->integer('category_id');
			$disease->string('disease_name');
			$disease->string('disease_pic');
			$disease->text('disease_detail');
			$disease->timestamps();
		});

		Schema::create('disease_drugs', function($disease_drug) {
			$disease_drug->integer('id');
			$disease_drug->integer('disease_id'); 
			$disease_drug->integer('drug_id');
			$disease_drug->timestamps();
		});

		Schema::create('disease_symptoms', function($disease_symptom) {
			$disease_symptom->increments('id');
			$disease_symptom->integer('disease_id');
			$disease_symptom->integer('symptom_id');
			$disease_symptom->timestamps();
		});

		Schema::create('doctors', function($doctor) {
			$doctor->increments('id');
			$doctor->integer('hospital_id');
			$doctor->integer('category_id');
			$doctor->string('area_id');
			$doctor->string('doctor_user_name');
			$doctor->string('doctor_password');
			$doctor->string('doctor_full_name');
			$doctor->integer('doctor_age');
			$doctor->string('doctor_sex');
			$doctor->text('doctor_address');
			$doctor->string('doctor_email');
			$doctor->integer('doctor_experience');
			$doctor->string('doctor_degree');
			$doctor->string('doctor_passed_uni');
			$doctor->integer('doctor_fee');
			$doctor->float('doctor_avg_rating',3,2);
			$doctor->string('doctor_pic');
			$doctor->text('doctor_details');
			$doctor->timestamps();		
		});
		
		Schema::create('doctor_reviews', function($doctor_review) {
			$doctor_review->increments('id'); 
			$doctor_review->integer('user_id');
			$doctor_review->integer('doctor_id');
			$doctor_review->float('doctor_rating',3,2);
			$doctor_review->text('doctor_review');
			$doctor_review->timestamps();
		});

		Schema::create('drugs', function($drug) {
			$drug->increments('id'); 
			$drug->string('drug_name');
			$drug->string('drug_manufacturer');
			$drug->integer('drug_price');
			$drug->text('drug_elements');
			$drug->float('drug_avg_rating',3,2);
			$drug->string('drug_pic');
			$drug->text('drug_details');
			$drug->timestamps();
		});

		Schema::create('drug_reviews', function($drug_review) {
			$drug_review->increments('id'); 
			$drug_review->integer('user_id');
			$drug_review->integer('drug_id');
			$drug_review->float('drug_rating',3,2);
			$drug_review->text('drug_review');
			$drug_review->timestamps();
		});

		Schema::create('hospitals', function($hospital) {
			$hospital->increments('id'); 
			$hospital->string('hospital_name');
			$hospital->text('hospital_address');
			$hospital->string('hospital_phone');
			$hospital->string('hospital_email');
			$hospital->string('hospital_pic');
			$hospital->float('hospital_latitude',18,16);
			$hospital->float('hospital_longitude',18,16);
			$hospital->float('hospital_avg_rating',3,2);
			$hospital->integer('hospital_avg_cost');
			$hospital->text('hospital_details');
			$hospital->timestamps();
		});

		Schema::create('hospital_reviews', function($hospital_review) {
			$hospital_review->increments('id'); 
			$hospital_review->integer('user_id');
			$hospital_review->integer('hospital_id');
			$hospital_review->float('hospital_rating',3,2);
			$hospital_review->text('hospital_review');
			$hospital_review->timestamps();
		});

		Schema::create('symptoms', function($symptom) {
			$symptom->increments('id'); 
			$symptom->string('symtom_name');
			$symptom->string('symtom_pic');
			$symptom->text('symtom_details');
			$symptom->timestamps();
		});
	
		Schema::create('users', function($user) {
			$user->increments('id');
			$user->string('user_name');
			$user->string('user_password');
			$user->string('user_full_name');
			$user->integer('user_age');
			$user->string('user_sex');
			$user->text('user_address');
			$user->string('user_phone');
			$user->string('user_email');
			$user->string('user_pic');
			$user->text('user_details');
			$user->timestamps();
		});

		$categories = array("Acupuncturist","Allergist (Immunologist)","Audiologist","Cardiologist (Heart Doctor)",
							"Cardiothoracic Surgeon","Chiropractor","Dentist","Dermatologist","Dietitian / Nutritionist",
							"Ear, Nose and Throat Doctor (ENT)","Endocrinologist (incl Diabetes Specialists)","Eye Doctor",
							"Gastroenterologist","Hearing Specialist","Hematologist (Blood Specialist)","Infectious Disease Specialist",
							"Infertility Specialist","Midwife","Medicine","Naturopathic Doctor","Nephrologist (incl Headache Specialist)",
							"Neurosurgeon","OB-GYN (Obstetrician-Gynecologist)","Oncologist","Ophthalmologist","Optometrist","Orthodontist",
							"Orthopedic Surgeon (Orthopedist)","Pain Management Specialist","Pediatric Dentist","Pediatrician",
							"Physiatrist (Physical Medicine)","Physical Therapist","Plastic Surgeon","Podiatrist (Foot and Ankle Specialist)",
							"Primary Care Doctor","Prosthodontics","Psychiatrist","Psychologist","Pulmonologist (Lung Doctor)","Radiologist",
							"Rheumatologist","Sleep Medicine Specialist","Sports Medicine Specialist","Surgeon","Therapist / Counselor",
							"Urgent Care Doctor","Urological Surgeon","Urologist","Vascular Surgeon");
		foreach ($categories as $category1)
		{
			$category = new Category;
			$category->category_name = $category1;
			$category->save();
		}

		$area_names = array("Badda","Banani","Biman Bandar","Cantonment","Demra","Dhanmondi","Gulshan","Hazaribagh","Jatra Bari","Kafrul",
							"Khilgaon","Kotwali","Lalbagh","Mirpur","Mohammadpur","Motijheel","Mugda","Pallabi","Ramna","Rampura","Sabujbagh",
							"Sadarghat","Shyampur","Sutrapur","Tejgaon","Tongi","Uttara");
		$area_latitudes = array(23.780514476993286,23.794398734736838,23.850421370897422,23.8282036539417,23.720790615686248,
								23.746522837817807,23.791021685687184,23.73744838987837,23.710574890079315,23.78960801119148,
								23.756539351357635,23.710653475637667,23.718983276340584,23.822275669319204,23.765730297460316,
								23.732891285845728,23.731398406767187,23.845985982460547,23.74153393385166,23.760859962419648,
								23.741612500749326,23.704680838297175,23.685425080753383,23.712068007592784,23.759445960042,
								23.889940648443748,23.875657018679583);
		$area_longitudes = array(90.42670726776123,90.4009473323822,90.4084575176239,90.38897395133972,90.4833447933197,90.37597060203552,
								90.41605353355408,90.36657214164734,90.4350221157074,90.39133429527283,90.46446204185486,90.409015417099,
								90.38802981376648,90.3654134273529,90.35837531089783,90.41725516319275,90.43485045433044,90.36549925804138,
								90.40832877159119,90.42008757591248,90.45742392539978,90.41605353355408,90.44549345970154,90.41961550712585,
								90.39133429527283,90.40583968162537,90.37966132164001);

		for($i=0;$i<count($area_names);$i++)
		{
			$area = new Area;
			$area->area_name = $area_names[$i];
			$area->area_latitude = $area_latitudes[$i];
			$area->area_longitude = $area_longitudes[$i];
			$area->save();

		}

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('areas');
		Schema::drop('categories');
		Schema::drop('chambers');

		Schema::drop('users');
		Schema::drop('doctors');
		Schema::drop('diseases');
		Schema::drop('disease_symptoms');
		Schema::drop('symptoms');
		Schema::drop('drugs');
		Schema::drop('disease_drugs');
		Schema::drop('hospitals');
		Schema::drop('drug_reviews');
		Schema::drop('doctor_reviews');
		Schema::drop('hospital_reviews');

		
	}

}
