@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<h1>Welcome!</h1>

<form method="post" class="search-bar">
    @csrf
    <input type="search" name="search" pattern=".*\S.*" placeholder="Search cameras" required>
    <button class="search-btn" type="submit" formaction="{{ route('camera.DisplayPage') }}">
        <span>Search</span>
    </button>
</form>

@if ($Model->searches != null)
@foreach ($Model->searches as $camera)
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1">
                    <img class="img-fluid img-responsive rounded product-image" src="data:image;base64,{{ base64_encode($camera->CamPic) }}">
                </div>
                <div class="col-md-6 mt-1">
                    <h5>{{ $camera->Name }}</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2">
                            @for ($i = 0; $i < $camera->rating; $i++)
                                <i class="fa fa-star"></i>
                            @endfor
                        </div>
                        <span></span>
                    </div>
                    <p class="text-justify text-truncate para mb-0">{{ $camera->Description }}<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">₱{{ $camera->Price }}</h4>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4">
                        <a class="btn btn-primary" href="{{ route('camera.camIndiv', $camera->CameraId) }}" role="button">BUY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif

<h1>{{ $ViewBag['MyString'] }}</h1>

@foreach ($Model->likes as $camera)
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1">
                    <img class="img-fluid img-responsive rounded product-image" src="data:image;base64,{{ base64_encode($camera->CamPic) }}">
                </div>
                <div class="col-md-6 mt-1">
                    <h5>{{ $camera->Name }}</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2">
                            @for ($i = 0; $i < $camera->rating; $i++)
                                <i class="fa fa-star"></i>
                            @endfor
                        </div>
                        <span></span>
                    </div>
                    <p class="text-justify text-truncate para mb-0">{{ $camera->Description }}<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">₱{{ $camera->Price }}</h4>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4">
                        <a class="btn btn-primary" href="{{ route('camera.camIndiv', $camera->CameraId) }}" role="button">BUY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<h2>Our Selection of Cameras</h2>
@foreach ($Model->cameras as $camera)
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1">
                    <img class="img-fluid img-responsive rounded product-image" src="data:image;base64,{{ base64_encode($camera->CamPic) }}">
                </div>
                <div class="col-md-6 mt-1">
                    <h5>{{ $camera->Name }}</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2">
                            @for ($i = 0; $i < $camera->rating; $i++)
                                <i class="fa fa-star"></i>
                            @endfor
                        </div>
                        <span></span>
                    </div>
                    <p class="text-justify text-truncate para mb-0">{{ $camera->Description }}<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">₱{{ $camera->Price }}</h4>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4">
                        <a class="btn btn-primary" href="{{ route('camera.camIndiv', $camera->CameraId) }}" role="button">BUY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
