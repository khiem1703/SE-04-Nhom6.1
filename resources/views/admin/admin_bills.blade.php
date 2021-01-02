@extends('admin_layout')
@section('admincontent')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Carts Table
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
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>date_order </th>
                                <th>total </th>
                                <th>payment </th>
                                <th>note </th>
                                <th>created_at </th>
                                <th>updated_at </th>
                                <th>Customer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $all_bills as $bill )
                            <tr>
                                <td>{{$bill->id}}</td>
                                <td>{{$bill->date_order}}</td>
                                <td>{{$bill->total}}</td>
                                <td>{{$bill->payment}}</td>
                                <td>{{$bill->note}}</td>
                                <td>{{$bill->created_at}}</td>
                                <td>{{$bill->updated_at}}</td>



                                <td>
                                    <a href="{{URL::to('admin-infoCustomer?id_customer='.$bill->id_customer)}}" class="active" ui-toggle-class=""><i class="fa fa-camera-retro fa-2x"></i>

                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">

                        <div class="col-sm-5 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                        </div>
                        <div class="col-sm-7 text-right text-center-xs">
                            <!--  -->
                            {{$all_bills->links()}}
                        </div>
                    </div>
                </footer>
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