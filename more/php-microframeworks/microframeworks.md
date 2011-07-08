!SLIDE
# PHP Microframeworks 
## Johnson Page &#8212; [@jwpage](http://twitter.com/jwpage)

!SLIDE
## Sinatra 

* <http://www.sinatrarb.com>
* Ruby DSL for creating web applications.
* Filters, Templates, Helpers
* Extensible

!SLIDE
@@@ ruby
	require 'sinatra'
	require 'erb'
	get '/hello/:name' do |name|
		@name = name
		erb :hello	
	end
@@@

!SLIDE
## Sinatra Clones

* Filters, Templates, Helpers
* No Rack middleware.
* Harder to test/mock requests
* Less DSL-ish syntax.

!SLIDE
## Hello, World! 

* <http://myapp/hello/Brisbane> &#8594; Hello, Brisbane!
* Using templates for output: `Hello, <?= $name ?>!`
<br />
* Slim 
* Limonade
* Fitzgerald
* Silex (based on Symfony2)
* Lithium (as a microframework)

!SLIDE
## Slim

* <http://www.slimframework.com/>
* PHP 5+
* Documented, tested, maintained.

!SLIDE
@@@ php
	<?php
	require_once 'slim/Slim.php';

	Slim::init();

	Slim::get('/hello/:name', function($name) {
		Slim::render('hello.php', array('name' => $name));
	});

    Slim::run();
@@@

!SLIDE
## Limonade

* <http://www.limonade-php.net>
* PHP 5+
* Documented, tested, maintained.

!SLIDE
@@@ php
	<?php
	require_once 'lib/limonade.php';

	dispatch('/hello/:name', function() {
		return render(
			'hello.php', 
			array('name' => params('name'))
		);		
	});
@@@

!SLIDE
## Fitzgerald

* <https://github.com/jim/fitzgerald>
* PHP 5+
* Little documentation, good examples.
* No tests.

!SLIDE
@@@ php
	<?php
	require_once 'lib/fitzgerald.php';

	$app =  new Application();

	$app->get('/hello/:name', function($name) {
		return $this->render('hello', array('name' => $name));
	});

	$app->run();
@@@

!SLIDE
## Silex

* <http://github.com/fabpot/silex/>
* PHP 5.3+
* Based on Symfony2, proof of concept.
* Silex: Little documentation, no tests.
* Symfony2: Well documented and tested.

!SLIDE
@@@ php
	<?php
	require_once 'silex.phar';

	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Templating\Engine;
	use Symfony\Component\Templating\Loader\FilesystemLoader;
	use Silex\Framework;

	$framework = new Framework(array(
		'GET /hello/:name' => function($name) {
			$loader = new FilesystemLoader('views/%name%.php');
			$view = new Engine($loader);
			return new Response($view->render(
				'hello', 
				array('name' => $name)
			));
		}
	));

	$framework->handle()->send();
@@@

!SLIDE
## Lithium (as a microframework)

* <http://rad-dev.org/lithium/>
* <http://jamalsa.tumblr.com/post/1521361137/lithify-it-like-sinatra>
* PHP 5.3+
* Based on Lithium, proof of concept.
* Lithium: Well documented, tested.

!SLIDE
@@@ php
	<?php

	use lithium\action\Dispatcher;
	use lithium\action\Request;
	use lithium\action\Response;
	use lithium\core\Libraries;
	use lithium\net\http\Router;
	use lithium\template\View;

	require_once 'libraries/lithium/core/Libraries.php';
	Libraries::add('lithium');

	Router::connect(
		"/hello/{:name}", 
		array(
			"http:method" => "GET", 
			"name" => null
		),
		function($request) {
			$view = new View(array(
				'paths' => array('template' => 'views/{:template}.php')
			));
			$output = $view->render(
				'template',
				array('name' => $request->name),
				array('template' => 'hello')
			);
			return new Response(array('body' => $output));
		}
	);

	echo Dispatcher::run(new Request());
@@@

!SLIDE
## Finally

* Many Sinatra clones, just choose one!
* Solve simple problems.
* Know when to switch.

!SLIDE
# That's all.
