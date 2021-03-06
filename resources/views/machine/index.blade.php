<!-- resources/views/machine/index.blade.php -->

@extends('layouts.app')

@section('content')
<h2>Equipment Inventory</h2>

<table>
	<tr>
		<th>ID</th>
        <th>Modality</th>
		<th>Manufacturer</th>
		<th>Model</th>
		<th>SN</th>
		<th>Description</th>
		<th>Location</th>
        <th>Age</th>
		<th>Room</th>
	</tr>
	@foreach ($machines as $machine)
	<tr>
		<td>{{ $machine->id }}</td>
        <td>{{ $machine->modality->modality }}</td>
		<td>{{ $machine->manufacturer->manufacturer }}</td>
		<td>{{ $machine->model }}</td>
		<td>{{ $machine->serial_number }}</td>
		<td>{{ $machine->description }}</td>
		<td>{{ $machine->location->location }}</td>
        <td>{{ $machine->age }}</td>
		<td>{{ $machine->room }}</td>
	</tr>
	@endforeach
</table>

@endsection
