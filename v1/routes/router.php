<?php

$uri = explode("/",$_SERVER['REQUEST_URI']);

if (count($uri)>2){

	if(!empty($_GET)){
		$query_string = explode("?",$uri[2])[1];
	}else{
		$query_string = "";
	}

	switch ($uri[1]."/".$uri[2]) {


		case 'portfolio/'.$uri[2]:
		include APP_PATH."/views/portfolio_det.php";
		die;
		break;

		case 'blog/'.$uri[2]:
		include APP_PATH."/views/blog_post.php";
		die;
		break;

	 case 'services/'.$uri[2]:
	 include APP_PATH."/views/service_det.php";
	 die;
	 break;




	}


}else{
	if(!empty($_GET)){
		$query_string = explode("?",$uri[1])[1];
	}else{
		$query_string = "";
	}
	//$query_string = explode("?",$uri[1])[1];


switch ($uri[1]) {

	// case 'test':
  // include APP_PATH."/views/test.php";
  // break;
	//
	// case 'test?'.$query_string:
  // include APP_PATH."/views/test.php";
  // break;

  //case '':
  //include APP_PATH."/views/home.php";
 // break;



  case '':
  include APP_PATH."/views/home.php";
	die;
  break;


  case 'home':
  include APP_PATH."/views/home.php";
	die;
  break;

  case 'test':
  include APP_PATH."/views/test.php";
	die;
  break;

	case 'contact-us-mail':
  include APP_PATH."/views/contact-us-mail-backend.php";
	die;
  break;

	 case 'blog':
  include APP_PATH."/views/blog.php";
	die;
  break;


  case 'team':
  include APP_PATH."/views/team.php";
	die;
  break;

  case 'services':
  include APP_PATH."/views/services.php";
	die;
  break;

  case '404':
  include APP_PATH."/views/404.php";
	die;
  break;

  case 'about':
  include APP_PATH."/views/about.php";
	die;
  break;

  case 'contact':
  include APP_PATH."/views/contact.php";
	die;
  break;

   case 'portfolio':
  include APP_PATH."/views/portfolio.php";
	die;
  break;

	case 'preview':
 include APP_PATH."/views/maintenance.php";
 die;
 break;

 case 'admctest?'.$query_string:
 include APP_PATH."/views/admctest.php";
 die;
 break;

  }
}
