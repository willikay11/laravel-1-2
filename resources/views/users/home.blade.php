@extends ('layouts.master')

@section('content')

	<div class="panel panel-info">
		<div class="panel-heading">Logged in as: {{ \Auth::user()->name }}</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Available</th>
						<th>Email</th>
						<th>Contact</th>
					</tr>
				</thead>
				<tbody>
				@foreach($users as $usr)
					<tr>
						<td>{{ $usr->name }}</td>
						<td>True</td>
						<td>{{ $usr->email }}</td>
						<td>{!! Form::submit('Contact', array('class' => 'btn btn-success btn-block')) !!}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection

