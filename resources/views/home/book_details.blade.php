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
                <div class="left-image">
                    <img src=" {{asset($book->book_img)}}" alt="" style="border-radius: 20px; width:300px" >
                   <br><h4>{{$book->title}}</h4>
                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <span class="author">
             <a href="{{route('home.authors')}}"><img src="{{asset($book->author->image)}}" alt="" style="max-width: 100px; border-radius: 5%;"></a>
            <h6>Зохиолч : {{$book->author->name}}</h6>
          </span>
                <p>{{$book->description}}</p>
                <div class="col-5">
              <span class="ends">
                Хэвлэгдсэн он : <strong>{{$book->quantity}}</strong><br>
              </span>
                </div>
                <div class="">
                    <br><a class="btn btn-primary" href="{{ route('home.book.read', $book->id) }}"
                       target="_blank">Унших</a>
                </div>
            </div>


        </div>

    </div>
</div>
</div>

@include('home.footer')

</body>
</html>
