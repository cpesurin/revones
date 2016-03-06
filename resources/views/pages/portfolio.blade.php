@extends('layouts.default')
@section('title_page')
 แฟ้มข้อมูล@parent
@stop

@section('active_portfolio')
class="active"
@stop

@section('content')
 @include('includs.Menu')
 

 <!-- Section lntr!-->
 <div class="jumbotron">
 	<div class="container" style="margin-top:10px;">
    <div class="row form-group">
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-image">
                    <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52d09387ae003_1.JPG" class="panel-image-preview" />
                    <label for="toggle-1"></label>
                </div>
                <input type="checkbox" id="toggle-1" class="panel-image-toggle">
                <div class="panel-body">
                    <h4>Title of Image</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                </div>
                <div class="panel-footer text-center">
                    <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                    <a href="#facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-image hide-panel-body">
                    <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52cf9489095e8_1.JPG" class="panel-image-preview" />
                    <label for="toggle-2"></label>
                </div>
                <input type="checkbox" id="toggle-2" class="panel-image-toggle">
                <div class="panel-body">
                    <h4>Title of Image</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                </div>
                <div class="panel-footer text-center">
                    <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                    <a href="#facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row form-group">
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">You can even have a Panel Title</h3>
                </div>
                <div class="panel-image hide-panel-body">
                    <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52c470899a2e1_1.JPG" class="panel-image-preview" />
                    <label for="toggle-3"></label>
                </div>
                <input type="checkbox" id="toggle-3" class="panel-image-toggle">
                <div class="panel-body">
                    <h4>Title of Image</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                </div>
                <div class="panel-footer text-center">
                    <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                    <a href="#facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-image">
                    <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52cd36aac6bed_1.JPG" class="panel-image-preview" />
                    <label for="toggle-4"></label>
                </div>
                <input type="checkbox" id="toggle-4" checked class="panel-image-toggle">
                <div class="panel-body">
                    <h4>Show the Description by default!</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                </div>
                <div class="panel-footer text-center">
                    <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                    <a href="#facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                </div>
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