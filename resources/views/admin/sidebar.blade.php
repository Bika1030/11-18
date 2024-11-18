<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">

        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('show_book')}}"> <i class="icon-home"></i>Нүүр</a></li>
                <li><a href="{{url('category_page')}}"> <i class="icon-grid"></i>Ангилал</a></li>

            <li><a href="{{route('admin.list')}}"> <i class="icon-grid"></i>Зохиолч</a></li>

                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Номууд </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_book')}}">Ном нэмэх</a></li>
                   
                  </ul>
                </li>

      </nav>
