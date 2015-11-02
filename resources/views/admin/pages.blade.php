@extends('layouts.admin')
@section('content')
	<div class="container">
		<h1>Pages</h1>

		@if(isset($page) && isset($page[0]) && count($page)>0)
			<p>{{link_to('admin', '< Back',array("class"=>"btn btn-default"))}} {{link_to('logout', 'Logout',array("class"=>"btn btn-default"))}}</p>
			<pre class="hide">{{var_dump($page->toArray());}}</pre>
			<div class="row" style="font-weight:bold;">
				<div class="col-xs-6">title</div>
				<div class="col-xs-2">created_at</div>
				<div class="col-xs-2">updated_at</div>
				<div class="col-xs-2">&nbsp;</div>
			</div>
		@foreach($page AS $p)
			<div class="row">
				<div class="col-xs-6">{{$p->title}}</div>
				<div class="col-xs-2">{{date('d/m/Y H:i',strtotime($p->created_at))}}</div>
				<div class="col-xs-2">{{date('d/m/Y H:i',strtotime($p->updated_at))}}</div>
				<div class="col-xs-2">{{link_to('admin/pages/edit/'.$p->id, 'Edit',array("class"=>"btn btn-default"))}}</div>
			</div>
		@endforeach
		@endif

		@if(isset($page) && !isset($page[0]) && count($page)>0)
			<p>{{link_to('admin/pages', '< Back',array("class"=>"btn btn-default"))}} {{link_to('logout', 'Logout',array("class"=>"btn btn-default"))}}</p>
			<pre class="hide">{{var_dump($page->toArray());}}</pre>
			<form method="post" action="{{URL::to('admin/pages/save/'.$page->id)}}">
			<h1>{{$page->title}}</h1>
			@foreach($page->toArray() AS $key=>$value)
				<div class="form-group row">
					<div class="col-xs-2">
						<label for="{{$key}}"><b>{{$key}}</b></label>
					</div>
					<div class="col-xs-10">
						<input id="{{$key}}" class="form-control" type="text" name="{{$key}}" value="{{$value}}"/>
					</div>
				</div>
			@endforeach
			<input type="submit" class="btn btn-default" value="Save"/>
			</form>
		@endif

	</div>
@stop