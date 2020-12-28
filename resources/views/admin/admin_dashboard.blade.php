@extends('admin_layout')
@section('admincontent')

<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Prodcuts</h4>

                        <h3>{{count($products)}}</h3>
                        <!-- <p>Other hand, we denounce</p> -->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Users</h4>
                        <h3>{{count($customers)}}</h3>
                        <!-- <p>Other hand, we denounce</p> -->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Bill</h4>
                        <h3>{{count($bills)}}</h3>
                        <!-- <p>Other hand, we denounce</p> -->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-4">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Orders</h4>
                        <h3>{{count($bill_detail)}}</h3>
                        <!-- <p>Other hand, we denounce</p> -->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //market-->

        <div class="agil-info-calendar">
            <!-- calendar -->

            <!-- //calendar -->

            <div class="clearfix"> </div>
        </div>

        <div class="agileits-w3layouts-stats">
            <div class="col-md-4 stats-info widget">
                <div class="stats-info-agileits">
                    <div class="stats-title">
                        <h4 class="title">Categorys</h4>
                    </div>
                    <div class="stats-body">
                        <ul class="list-unstyled">
                            @foreach($categorys as $category)
                            <table class="table stats-table ">

                                <tr>
                                    <th>{{$category->id}}</th>
                                    <th>{{$category->name}}</th>

                                </tr>

                            </table>



                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 stats-info stats-last widget-shadow">
                <div class="stats-last-agile">
                    <table class="table stats-table ">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>PRODUCT</th>
                                <th>STATUS</th>
                                <th>PROGRESS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->name }}</td>
                                <td>{{$product->unit_price }}</td>
                                <td>
                                    {{$product->promotion_price }}
                                </td>
                                <td>
                                    {{$product->image }}
                                </td>
                                <td>
                                    {{$product->new }}
                                </td>
                                <td>
                                    {{$product->created_at }}
                                </td>
                                <td>
                                    {{$product->promotion_price }}
                                </td>



                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="clearfix"> </div>
        </div>
        <div class="col-md-6 agile-calendar">
            <div class="calendar-widget">
                <div class="panel-heading ui-sortable-handle">
                    <span class="panel-icon">
                        <i class="fa fa-calendar-o"></i>
                    </span>
                    <span class="panel-title"> Calendar Widget</span>
                </div>
                <!-- grids -->
                <div class="agile-calendar-grid">
                    <div class="page">

                        <div class="w3l-calendar-left">
                            <div class="calendar-heading">

                            </div>
                            <div class="monthly" id="mycalendar"></div>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 w3agile-notifications">
            <div class="notifications">
                <!--notification start-->

                <header class="panel-heading">
                    Notification
                </header>
                <div class="notify-w3ls">
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                                <li class="pull-right notification-time">1 min ago</li>
                            </ul>
                            <p>
                                Urgent meeting for next proposal
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-danger">
                        <span class="alert-icon"><i class="fa fa-facebook"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>
                                <li class="pull-right notification-time">7 Hours Ago</li>
                            </ul>
                            <p>
                                Very cool photo jack
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-success ">
                        <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender">You have 5 message unread</li>
                                <li class="pull-right notification-time">1 min ago</li>
                            </ul>
                            <p>
                                <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-warning ">
                        <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>
                                <li class="pull-right notification-time">5 Days Ago</li>
                            </ul>
                            <p>
                                Next 5 July Thursday is the last day
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-info clearfix" style="  height: 10px;">
                        <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                                <li class="pull-right notification-time">1 min ago</li>
                            </ul>
                            <p>
                                Urgent meeting for next proposal
                            </p>
                        </div>
                    </div>

                </div>

                <!--notification end-->
            </div>
        </div>
    </section>
    <!-- footer -->
    <div class="footer">

    </div>
    <!-- / footer -->
</section>
<!--main content end-->
@endsection