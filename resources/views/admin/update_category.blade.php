@extends('admin_layout')
@section('admincontent')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            UPDATE CATEGORY

                        </header>
                        <div class="panel-body">
                            @if(count($errors) >0)
                            <div>
                                @foreach($errors ->all() as $err)
                                {{$err}}<br>
                                @endforeach

                            </div>
                            @endif
                           
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" method="post" action="upda-category?id={{$category->id}}" novalidate="novalidate" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Name Category</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="namecategory" minlength="2" type="text" value="{{$category->name}}">

                                        </div>
                                    </div>


                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-3">description </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " cols="30" rows="5" id="ccomment" name="description">{{$category->description }}</textarea>

                                        </div>

                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">image </label>
                                        <div class="col-lg-6">

                                            <img style="margin-top: 20px" height="200px" width="200px" src="source/image/product/{{$category->image}} " alt="">
                                            <input class="form-control " style="margin-top: 20px" type="file" name="imagecategory" value="{{$category->image}}">
                                            {{$category->image}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-default" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>

            <!-- page end-->
        </div>
    </section>
    <!-- footer -->
    <div class="footer">

    </div>
    <!-- / footer -->
</section>
@endsection