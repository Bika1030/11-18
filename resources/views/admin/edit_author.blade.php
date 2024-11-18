<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        .div_deg{
            text-align: center;
            margin: auto;
        }
        .title_deg{
            color: white;
            padding: 40px;
            font-size: 30px;
            font-weight: bold;
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
            <div class="div_deg">

                <h2 class="title_deg">Update Author</h2>

                <form action="{{url('update_author',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="div_pad">
                    <label for="">Auther Name</label>
                    <input type="text" name="auther_name" value="{{$data->auther_name}}">
                  </div>>
                  <div class="div_pad">
                    <label for="">Description</label>
                    <input type="text" name="discription" value="{{$data->quantity}}">
                  </div>
                  <div class="div_pad">
                      <label for="">Current Author Image</label>
                      <img style="width: 80px; margin:auto " src="/author/{{$data->author_img}}" alt="">
                    </div>
                  <div class="div_pad">
                      <label for="">Current Author Image</label>
                      <input type="file" name="author_id">
                    </div>

                    <div class="div_pad">
                      <input class="btn btn-info" type="submit" value="Update Author">
                    </div>
                
                </form>

            </div>


          </div>
        </div>
      </div>    
      
      
      @include('admin.footer')
  </body>
</html>