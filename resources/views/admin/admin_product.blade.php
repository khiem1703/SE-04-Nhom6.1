@extends('admin_layout')
@section('admincontent')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Products table
                </div>
                <div>
                    <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
                        <thead>
                            <tr>
                                <th data-breakpoints="xs">ID</th>
                                <th> Name</th>
                                <th>Image</th>
                                <th data-breakpoints="xs">description</th>

                                <th data-breakpoints="xs sm md" data-title="DOB">new </th>
                                <th>created at </th>
                                <th>updated at </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $all_products as $product)
                            <tr data-expanded="true">
                                <td>{{$product->id}}</td>

                                <td>{{$product->name}}</td>

                                <td><span class="text-ellipsis"><img height="200px" width="200px" src="source/image/product/{{$product->image }}" alt=""></span></td>
                                <td>{{$product->description }}</td>
                                <td>{{$product->new }}</td>
                                <td>{{$product->created_at }}</td>
                                <td>{{$product->updated_at }}</td>


                                <td>
                                    <a href="#" class="active" ui-toggle-class=""><i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" class="active" ui-toggle-class=""><i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>

                                <td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <div class="footer">
        
    </div>
    <!-- / footer -->
</section>
@endsection