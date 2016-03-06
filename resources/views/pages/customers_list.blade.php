@extends('layouts.default')

@section('title_page')
รายการข้อมูล @parent
@stop



@section('content')

 @include('includs.Menu')

<div class="jumbotron">
	<div class="container">
		<h1>customerss list({{$data_count}})</h1>
		
		<p>
			<a class="btn btn-primary btn-lg">Learn more</a>
		</p>
	</div>
</div>
<div class="container">
{!!$data_customers->render()!!}
	<table class="table table-bordered">
		<thead>
			<tr class="bg-primary">
				<th>Nubmer</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>City</th>
				<th>PostalCode</th>
			</tr>
		</thead>

		<tbody>
		@foreach($data_customers as $data)
			<tr>
				<td>{{$data->customerNumber}}</td>
				<td>{{$data->customerName}}</td>
				<td>{{$data->contactLastName}}</td>
				<td>{{$data->phone}}</td>
				<td>{{$data->city}}</td>
				<td>{{$data->postalCode}}</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	{!!$data_customers->render()!!}
</div>

 @stop

