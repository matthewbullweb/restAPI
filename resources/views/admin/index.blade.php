@extends('layouts.admin')
@section('content')
	<div class="container">
		<h1>Administrative Options</h1>
		<p>{{link_to('logout', 'Logout',array("class"=>"btn btn-default"))}}</p>
		<p>{{link_to('admin/pages', 'Pages',array("class"=>"btn btn-primary"))}}</p>
	</div>
@stop