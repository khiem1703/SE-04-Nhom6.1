@extends('admin_layout')
@section('admincontent')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Responsive Table
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <select class="input-sm form-control w-sm inline v-middle">
                            <option value="0">Bulk action</option>
                            <option value="1">Delete selected</option>
                            <option value="2">Bulk edit</option>
                            <option value="3">Export</option>
                        </select>
                        <button class="btn btn-sm btn-default">Apply</button>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
                @if(Session::get('alert'))
                <div class="alart alart-success">
                    {{Session::get('alert')}}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>Name</th>
                                <th>IMAGE</th>
                                <th>DESCRIPTION</th>
                                <th>DATE CREATED</th>
                                <th>DATE UPLOAT</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $all_category as $categorys )
                            <tr>

                                <td>{{$categorys->id }}</td>
                                <td><span class="text-ellipsis">{{$categorys->name}}</span></td>
                                <td><span class="text-ellipsis"><img height="200px" width="200px" src="source/image/product/{{$categorys->image }}" alt=""></span></td>
                                <td><span class="text-ellipsis">{{$categorys->description }}</span></td>
                                <td><span class="text-ellipsis">{{$categorys->created_at }}</span></td>
                                <td><span class="text-ellipsis">{{$categorys->updated_at }}</span></td>
                                <td>
                                    <a href="{{URL::to('upda-category?id='.$categorys->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="" class="active" ui-toggle-class=""><i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>

                                <td>
                            </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">

                        <div class="col-sm-5 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">tổng số danh mục sản phẩm ({{count($all_category)}})</small>
                        </div>
                        <div class=" col-sm-7 text-right text-center-xs">
                            {{$all_category->links()}}
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </section>
    <!-- footer -->

    <!-- / footer -->
</section>
@endsection