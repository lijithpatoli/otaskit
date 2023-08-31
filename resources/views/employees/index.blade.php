@extends('layouts.authenticated')

@section('style')
<style type="text/css">
    table, th {
        border: 1px solid black;
    }

    th {
        padding: 10px;
    }
</style>
@endsection

@section('content')
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile No.</th>
            <th>Department</th>
        </tr>
    </thead>
</table>
@endsection