@extends('admin_layout.app')

@section('title', 'Manage Placements')

@section('content')

<div class="container">
    <h2>All Leads</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Qualification</th>
                <th>Experience</th>
                <th>Message</th>
                <th>Key1</th>
                <th>Key2</th>
                <th>Key3</th>
                <th>Key4</th>
                <th>Key5</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leads as $index => $lead)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $lead->name }}</td>
                    <td>{{ $lead->email }}</td>
                    <td>{{ $lead->phone }}</td>
                    <td>{{ $lead->qualification }}</td>
                    <td>{{ $lead->experience }}</td>
                    <td>{{ $lead->message }}</td>
                    <td>{{ $lead->key1 }}</td>
                    <td>{{ $lead->key2 }}</td>
                    <td>{{ $lead->key3 }}</td>
                    <td>{{ $lead->key4 }}</td>
                    <td>{{ $lead->key5 }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection