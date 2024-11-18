<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>

<body>

@include('home.header')
<div class="item-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    
                </div>
            </div>
            <div class="col-lg-7">
            <img src="{{asset($book->author->image)}}" alt="" style="max-width: 100px; border-radius: 5%;">
            <h6>{{$book->author->name}}</h6>
            </div>
            <div class="col-lg-5 align-self-center">
                <h4>{{$book->title}}</h4>
                <span class="author">
            <img src="{{asset($book->author->image)}}" alt="" style="max-width: 100px; border-radius: 5%;">
            <h6>{{$book->author->name}}</h6>
          </span>
                <p>{{$book->description}}</p>
                <div class="col-5">
                </div>
            </div>


        </div>

    </div>
</div>
</div>

@include('home.footer')

</body>
</html>
