@extends('layouts.app')

@section('title', 'View Inventory')

@section('content')
<div class="navbar1-nav flex-grow-1">
    <ul class="navbar1-nav">
        <li class="nav-item1">
            <a class="nav-link text-white" href="{{ route('camera.add') }}">ADD CAMERA</a>
        </li>
        <li class="nav-item2">
            <a class="nav-link text-white" href="{{ route('camera.viewInventory') }}">VIEW STOCK</a>
        </li>
    </ul>
</div>

<h1>Cameras</h1>

<table class="table" border="3" width="500">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Picture</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cameras as $camera)
        <tr>
            <td height="50">{{ $camera->CameraId }}</td>
            <td height="50">{{ $camera->Name }}</td>
            <td height="50">{{ $camera->Description }}</td>
            <td>{{ $camera->Price }}</td>
            <td>
                <img src="data:image;base64,{{ base64_encode($camera->CamPic) }}" width="250" height="300" />
            </td>
            <td class="view-button">
                <a class="button1 text-black" href="{{ route('camera.editInventory', ['id' => $camera->CameraId]) }}">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
