@extends('layouts.default')
@section('title_page')
ติดต่อเรา @parent
@stop

@section('active_contact')
class="active"
@stop


@section('content')
 @include('includs.Menu')
 

 <!-- Section lntr!-->
 <div class="jumbotron">
 	<div class="container">
<h1>Contact Address</h1><br>
	<div class="row text-center">
		<div class="col-sm-3 col-xs-6 first-box">
        <h1><span class="glyphicon glyphicon-earphone"></span></h1>
        <h3>Phone</h3>
        <p>+880-1700-987654</p><br>
    </div>
    <div class="col-sm-3 col-xs-6 second-box">
        <h1><span class="glyphicon glyphicon-home"></span></h1>
        <h3>Location</h3>
        <p>1036 Gulshan Road</p><br>
    </div>
    <div class="col-sm-3 col-xs-6 third-box">
        <h1><span class="glyphicon glyphicon-send"></span></h1>
        <h3>E-mail</h3>
        <p>info@yourdomain.com</p><br>
    </div>
    <div class="col-sm-3 col-xs-6 fourth-box">
    	<h1><span class="glyphicon glyphicon-leaf"></span></h1>
        <h3>Web</h3>
        <p>www.yourdomain.com</p><br>
    </div>
	</div>
</div>
</div>

 </div>
 <div class="container-fluid">
 	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
 		<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
 		<h2>aaaa</h2>
 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 	</div>
 	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
 		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
 		<h2>bbbbb</h2>
 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 	</div>
 	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
 		<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
 		<h2>ccccc</h2>
 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 	</div>
 </div>

 
@stop