@extends('admin_layout')
@section('admincontent')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục sản phẩm
                        </header>
                        <div class="panel-body">
                            <?php

                            $message = session()->get('message');
                            if($message){
                                echo  $message;
                                
                                session()->put('message', null);
                              
                            }else{
                                echo '<span> Not successful! </span>';
                            }
                            ?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category-product')}}" method="POST">
                                    {{ csrf_field()}}
                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <input type="text" class="form-control" name="name_category" id="exampleInputEmail1" placeholder="Name Category">
                                    </div>
                                    <div class="form-group">
                                        <label>mô tả danh mục<canvas></canvas></label>
                                        <input type="text" class="form-control" name="description_category" id="exampleInputEmail1" placeholder="description">
                                    </div>

                                    <div class="form-group">
                                        <label>File input</label>
                                        <input type="file" name="image_category" enctype="multipart/form-data">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                    <!-- <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Check me out
                                        </label>
                                    </div> -->
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </div>

                        </div>
                    </section>

                </div>
            </div>

    </section>
    <!-- footer -->
    <div class="footer">
        <div class="wthree-copyright">
            <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
    <!-- / footer -->
</section>
@endsection