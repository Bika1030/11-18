<div class="categories-collections">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="categories">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h2>Номийн Ангилал</em></h2>
                            </div>
                        </div>
                        @foreach($categories as $category)
                            <div class="col-lg-2 col-sm-6">
                                <div class="item">
                                    <a href="" style="margin-top: 10px;"><h4>{{$category->cat_title}}</h4></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
