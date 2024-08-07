@extends('layouts.admin-layout')
<head>
    <link href={{asset("src/bootstrap/css/home.css")}} rel="stylesheet">
</head>
<body>
<div>
    <h2>
        Truong Tri Kiet
    </h2>
    <p>List of Users.</p>
    <ul>
        <!-- @foreach ($users as $user)
            <li>{{$user->name}}</li>
        @endforeach -->
    </ul>
</div>
</body>

