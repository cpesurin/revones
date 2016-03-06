@extends('layouts.default')

@section('title_page')
เกี่ยวกับเรา @parent
@stop

@section('active_about')
class="active"
@stop

@section('content')
 @include('includs.Menu')


 <!-- Section lntr!-->
 <div class="jumbotron">
 	<div class="container">
 		<h1 class="text-center">ABOUY Laravel</h1>
 		<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 		<p>
 			<a class="btn btn-primary btn-lg">Learn more</a>
 		</p>
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