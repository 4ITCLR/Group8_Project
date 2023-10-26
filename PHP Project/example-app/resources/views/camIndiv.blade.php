@extends('layouts.app')

@section('title', $updateCamera->Name . ' - AnalagoueMafia')

@section('content')
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="data:image;base64,{{ base64_encode($updateCamera->CamPic) }}"></div>
                <div class="col-md-6 mt-1">
                    <h5>{{ $updateCamera->Name }}</h5>
                    <h6>{{ $updateCamera->CameraId }}</h6>
                    <div class="d-flex flex-row">
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2">
                                @for ($i = 0; $i < $updateCamera->rating; $i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                            </div>
                            <span></span>
                        </div>
                    </div>
                    <p class="text-justify text-truncate para mb-0">{{ $updateCamera->Description }}<br><br></p>
                    <h4>{{ $MyString }}</h4>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">₱{{ $updateCamera->Price }}</h4>
                    </div>
                    <div class="d-flex flex-column mt-4">
                        <form method="post">
                            @csrf
                            <input type="hidden" name="CameraId" value="{{ $updateCamera->CameraId }}">
                            <input type="hidden" name="Name" value="{{ $updateCamera->Name }}">
                            <input type="hidden" name="Description" value="{{ $updateCamera->Description }}">
                            <input type="hidden" name="Price" value="{{ $updateCamera->Price }}">
                            <input type="hidden" name="CamPicPath" value="{{ $updateCamera->CamPicPath }}">
                            <input type="hidden" name="CamPicPath" value="{{ $updateCamera->CamPicPath }}">
                            <button class="btn btn-primary" asp-area="" asp-controller="camera" asp-action="addCart">Add To Cart</button>
                        </form>
                    </div>
                    <div class="d-flex flex-column mt-4">
                        <form method="post">
                            @csrf
                            <input type="hidden" name="CameraId" value="{{ $updateCamera->CameraId }}">
                            <button type="submit" class="btn btn-primary" asp-area="" asp-area="" asp-controller="camera" asp-action="likeCamera">Like</button>
                        </form>
                    </div>
                    <div class="d-flex flex-column mt-4">
                        <form method="post">
                            @csrf
                            <input type="hidden" name="CameraId" value="{{ $updateCamera->CameraId }}">
                            <button class="btn btn-primary" asp-area="" asp-controller="camera" asp-action="dislikeCamera">Dislike</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="portfolio" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2 class="camIndiv">SAMPLE SHOTS</h2>
        </div>
    </
