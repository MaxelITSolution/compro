<?php

	#region Authentication
		// di controller
		return \Auth::user()->name; // fetch name user yang sedang login

		$article = new Article($request->all());
		Auth::user()->articles()->save($article); // untuk save semua data article atas nama user yang login

		#region	--MiddleWare
			// conventional way
			if(Auth::guest)
			{
				return redirect('articles');
			}

			// Laravel way folder Http\Middleware
			// Bila ingin semua content dalam controller tersebut tidak dapat diakses tanpa login terlebih dahulu maka buatlah
			public function __construct()
			{
				// 'only'=>'create' // berarti hanya method create yang membutuhkan authentication
				// 'except'
				$this->middleware('auth', [@parameter]);
			}

			//middleware pada route
			Route::get('about',['middleware'=>'auth', 'uses'=>'WelcomeController@about']);

			/*
			* Kernel.php digunakan untuk mendaftarkan middleware buatan kita
			* $middleware -> middleware akan langsung dijalankan untuk website kita
			* $routeMiddlware -> middleware akan digunakan hanya jika dipanggil
			* Cek Illuminate\Http\Request untuk melihat semua yang dapat digunakan pada middleware buatan kita

			*/
		#endregion
	#endregion

	#region Blade
		mentah-mentah : {{ $name }}
		print html syntax : {!! $name !!}
		@yield('content')
		@extends('app')
		@section('content')
		@stop / @endsection
		@if
		@else
			@endif
		@unless
		@foreach @endforeach
		@include('errors.list', ['submitButton'=>'Add Article']); // untuk include tampilan lain seperti header dll

		{{ link_to_action('ArticleController@show',$latest->title, [$latest->id]) }}
	#endregion

	#region Class
		Article::create($input);
	#endregion

	#region CMD
		cd "\xampp\htdocs\tes"
		php artisan
		php artisan help make:controller
		php artisan help make:migrate
		php artisan make:migration create_article_table --create="article"
		php artisan make:migration add_somthing_to_article_table --table="article"
		composer require doctrine/dbal
		php artisan tinker
		php artisan make:request CreateArticleRequest

		php artisan route:list // untuk melihat semua list dari route yang ada

		composer require illuminate\html
	#endregion

	#region Config
		App.php
		-	Providers
	#endregion

	#region Controller AuthController
		protected $redirectTo = '/articles'; // untuk langsung redirect setelah register
	#endregion

	#region Controllers
		Article::findOrFail($id);
		Article::lastest('published_at')->get();
		Article::order_by('published_at', 'desc')->get();
		Article::lastest('published_at')->where('published_at','<=',Carbon::now())->get();
		Article::lastest('published_at')->published()->get();
		dd($article->created_at->addDays(8)->diffForHumans());
		dd($article->created_at->addDays(8)->format('Y-m'));
		return redirect('articles');
	#endregion

	#region Datetime
		Carbon::now();
	#endregion

	#region Folder
		controller : app/Http/Controllers;
		view: resources/views;
		routes : app/Http/routes.php;
		models: app/Http/Models/model.php;
	#endregion

	#region Form
		Form::open([‘url’=>‘namaurl’]);
		{!! Form::open(['method'=>'PATCH', 'action'=>['ArticleController@update',$article->id]]) !!}
		{!! Form::model($article, ['method'=>'PATCH', 'action'=>['ArticleController@update',$article->id]]) !!} // untuk memparsing data kedalam isian form
		Form::label(‘name’,’Name : ’);
		Form::text(‘name’,’value’,[‘class’ => ‘form-control’,’foo’=>’bar’]);
		Form::input('inputType',‘name’,’value’,[‘class’ => ‘form-control’,’foo’=>’bar’]);
		Form::input('date',‘name’,Carbon\Carbon::now()->format('Y-m-d'),[‘class’ => ‘form-control’,’foo’=>’bar’]);

		Form::close();
	#endregion

	#region FlashingMessage
		#region --cara 1
			//in Controller
			//::flash temporary sekali pakai, berbeda dengan put
			\Session::flash('flash_message','Your Message');
			// atau bisa ditulis
			session()->flash('1'.'2');
			// atau
			return redirect('article')->with([
					'flash_message'=>'1'
				]);
			//in view
			@if (Session::has('flash_message'))
				 {!! Session::get('flash_message') !!}
			@endif
		#endregion

		#region --cara 2
			composer require laracasts/flash 	// pada CMD
			'Laracasts/Flash/FlashServiceProvider' 		// pada config/app.php
			'Flash' => 'Laracasts\Flash\Flash'			// pada config/app.phpp di alias
			@include ('flash::message') //view
			flash('testing')->important(); //controller
		#endregion

		#region --overlay message
			flash()->overlay('test'); //controller
			$('#flash-overlay-modal').modal(); //view
		#endregion
	#endregion

	#region Edit
		public function edit($id){
			$article = Article::findOrFail($id);
			return view('article.edit',compact($article));
		}

		public function update($id, ArticleRequest $request){
			$article = Article::findOrFail($id);
			$article->update($request::all());
		}
	#endregion

	#region Eloquent
		App\Article::all()->toArray();
		App\Article::find(1)
		$article = new App\Article;
		$article->timestamp = Carbon\Carbon::now();
		$article = App\Article::where('body','Lorem Ipsum')->get(); ==> Collection
		$article = App\Article::where('body','Lorem Ipsum')->first(); ==> object class
		$article = App\Article::create(['title'=>'New article', 'body'=>'Lorem ipsumz', 'published_at'=>Carbon\Carbon::now()]);
		$article->update(['body'=>'Updated Again']);
	#endregion

	#region EloquentClass

		protected $dates = ['published_at'];

		protected $fillable = [
			'title','body','published_at'
		];

		public function setPublishedAtAttribute($date)
		{
			// bisa digunakan untuk langsung memasukkan data kita, dan otomatis diproses oleh function ini
			// contoh $user->password = 'foobar';
			// didalam function setPasswordAttribute($password) kita mengubah password menjadi mcrypt($password)
			$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
			$this->attributes['published_at'] = Carbon::parse($date);
		}

		public function scopePublished($query, $value)
		{
			// Article::published($value);
			$query->where('published_at', '<=', Carbon::now());
		}

		public function scopeUnpublished($query){
			$query->where('published_at', '>=', Carbon::now());
		}
	#endregion

	#region EloquentRelationship
		// didalam model user
		public function articles()
		{
			return $this->hasMany("App/Articles");
		}

		//didalam model article
		public function user()
		{
			return $this->belongsTo('App/User');
		}

		// untuk mendapatkan isinya
		$user->articles()->toArray();
		// atau bisa dipanggil langsung sebagai collection
		$user->articles->toArray();
		$user->articles()->where('id','1')->get()->toArray();
	#endregion

	#region ManyToManyRelationship
		public function tags()
		{
			return $this->belongsToMany('App\Tag');
		}
	#endregion

	#region Migration
		$table->integer('user_id')->unsigned();
		$table	->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade');
	#endregion

	#region Request
		$input = Request::all(); return $input;
	#endregion

	#region Security
		Hash::make('password');
		bcrypt('password');
	#endregion

	#region Use
		Use Illuminate\Http\Request;
		Use Request;
		Use Carbon\Carbon;
	#endregion

	#region Validation

		#region --request
			// terdapat 2 method awal yang penting yaitu authorize dan rules
			public function authorize()
			{
				return true;
			}

			public function rules()
			{
				//lihat di website laravel bagian validation
				return [
					'title' => 'required|date|min:3',

				];
			}

		#endregion

		#region --handlingRequestinController
			public function store(CreateArticleRequest $request)
			{
				Article::create($request->all());
			}
		#endregion

		#region --handlingErrorInView
			// semua error akan ditampung didalam variable $errors
			@if ($errors->any())
				@foreach($erros->all() as $error)
					//cetak
				@endforeach
			@endif
		#endregion

		#region --handlingRequestWithoutRequestClass
			import Illuminate/Htpp/Request

			//in controller
			public function store(Request $request){
				$this->validate($request,['title'=>'required'.'body' => 'required']);
			}
		#endregion

	#endregion

	#region Route
		Route::get('article/{id}', 'ArticleController@show'); // {} menandakan wild card, maka semua link dengan awalan article/ akan memanggil function @show
		Route::get('article/{id}/edit', 'ArticleController@edit');

		Route:resource('articles','ArticleController'); // semua akan langsung di list otomatis oleh laravel

		#region	--ModelBinding
			/*
			 * Digunakan untuk memasangkan sebuah model pada parameter yang masuk
			 * Contoh bila coba.com/article/1
			 * Dengan model binding kita tidak perlu melakukan $article = Article::findOrFail($id)
			 * Namun
			 * Bisa langsung mengambil $article bila didaftarkan pada function show(Article $article)
			 */

			//Pada RouteServiceProvider
			public function boot(Router $router)
			{
				//tambahkan
				$router->model('articles', 'App\articles');
			}

		#endregion

		#region --Binding
			public function boot(Router $router)
			{
				$router->bind('articles', function($id)
				{
					return \App\Article::published()->findOrFail($id);
				});
			}
		#endregion
	#endregion

	#region Tags
		$article->tags()->attach();
		$article->tags()->sync();
		$article->tags()->detach();
	#endregion

	#region View
		<a href="{{ action('ArticleController@show',[$article->id]) }}">
	#endregion

	#region ViewComposerServiceProvider
	// pada appServiceProvider,
	view()->composer('partials.nav', function($view)
		{
			$view->with('latest', Article::latest()->first());
		});
	#endregion
?>