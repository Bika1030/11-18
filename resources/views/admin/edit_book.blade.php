<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
      .div_center{
        text-align: center;
        margin: auto;
      }
      .title{
        color: white;
        padding: 30px;
        font-size: 30px;
        font-weight: bold;
      }
      label{
        display: inline-block;
        width: 200px;
      }
      .div_pad{
        padding: 10px;
      }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
              <div class="div_center">
              <h1 class="title">Update Book</h1>
                <form action="{{url('update_book',$data->id)}}" method="Post" enctype="multipart/form-data">

                @csrf 
                  <div class="div_pad">
                    <label for="">Book title</label>
                    <input type="text" name="title" value="{{$data->title}}">
                  </div>
                  <div class="div_pad">
                    <label for="">Quantity</label>
                    <input type="text" name="quantity" value="{{$data->quantity}}">
                  </div>
                  <div class="div_pad">
                    <label for="">Description</label>
                    <textarea name="description" id="">{{$data->description}}</textarea>
                  </div>
                   <div class="div_pad">
                    <label for="">Category</label>
                    <select name="category">
                        <option value="{{$data->category_id}}">{{$data->category->cat_title}}</option>
                        @foreach($category as $category)

                        <option value="{{$category->id}}">{{$category->cat_title}}</option>

                        @endforeach
                    </select>
                   

                    <div class="div_pad">
                      <label for="">Current Book Image</label>
                      <img style="width: 80px; margin:auto " src="/book/{{$data->book_img}}" alt="">
                    </div>

                    <div class="div_pad">
                      <label for="">Current Book Image</label>
                      <input type="file" name="book_id">
                    </div>

                    <div class="div_pad">
                      <input class="btn btn-info" type="submit" value="Update Book">
                    </div>

                   </div>
                </form>
              </div> 
          </div>
        </div>
      </div>    
      
      
      @include('admin.footer')
  </body>
</html>