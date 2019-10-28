@extends('layouts.app')
@section('content')
<div class="container-fluid app-body settings-page">
	<h3> item list</h3>
	<div class="feedback_from">
		<input type="search" value="{{request()->input('search')}}">
		<input type="date" value="{{request()->input('date')}}">
		<select name="group">
			<option value="{{request()->input('upload')}}">content upload</option>
			<option value="{{request()->input('curation')}}">content curation</option>
			<option value="{{request()->input('Autometion')}}">Rss Autometion</option>

		</select>
		
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Group name</th>
					<th scope="col">Group Type</th>
					<th scope="col">Account name</th>
					<th scope="col">Post test</th>
					<th scope="col">Time</th>
				</tr>
			</thead>
			<tbody>
				@foreach($items as $item)
				<tr>
					<th>{{ $item->group_name}}</th>
					<th>{{ $item->group_type}}</th>
					<th>{{ $item->account_name}}</th>
					<th>{{ $item->post_text}}</th>
					<th>{{ $item->sent_at}}</th>
					
				</tr>
				
				@endforeach
				{{ $item->appends($_GET)->links() }}



			</tbody>
		</table>
	</div>
</div>
@endsection