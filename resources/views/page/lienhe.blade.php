    @extends('master')
    @section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Liên hệ</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{URL::route('trangchu')}}">Home</a> / <span>Contacts</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="beta-map">

        <div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9192895759315!2d105.80578851493208!3d20.99587218601613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acbf0df2c0e5%3A0xd740a66998e1a0ed!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaG9hIGjhu41jIFThu7Egbmhpw6puLCDEkOG6oWkgaOG7jWMgUXXhu5FjIGdpYSBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1608110349127!5m2!1svi!2s" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">

            <div class="space50">&nbsp;</div>
            <div class="row">
                <div class="col-sm-8">
                    <h2>Mẫu Liên Hệ</h2>
                    <div class="space20">&nbsp;</div>
                    <p>Quý khách có thể liên hệ với chúng tôi từ website này bằng cách điền đầy đủ thông tin, chúng tôi sẽ liên lạc với Quý khách sớm nhất!</p>
                    <div class="space20">&nbsp;</div>
                    <form action="#" method="post" class="contact-form">
                        <div class="form-block">
                            <input name="your-name" type="text" placeholder="Họ và tên (bắt buộc)">
                        </div>
                        <div class="form-block">
                            <input name="your-email" type="email" placeholder="Email (bắt buộc)">
                        </div>
                        <div class="form-block">
                            <input name="your-subject" type="text" placeholder="Số điện thoại (bắt buộc)">
                        </div>
                        <div class="form-block">
                            <input name="your-subject" type="text" placeholder="Địa chỉ (bắt buộc)">
                        </div>
                        <div class="form-block">
                            <textarea name="your-message" placeholder="Nội dung"></textarea>
                        </div>
                        <div class="form-block">
                            <button type="submit" class="beta-btn primary">Gửi <i class="fa fa-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <h2>Baker's Alley Cake</h2>
                    <div class="space20">&nbsp;</div>

                    <h6 class="contact-title">Địa chỉ</h6>
                    <p>
                        số 334 Nguyễn Trãi,<br>
                        Quận Thanh Xuân, <br>
                        Thành phố Hà Nội.
                    </p>
                    <div class="space20">&nbsp;</div>
                    <h6 class="contact-title">Điện thoại</h6>
                    <p>
                        0123456789 <br>
                    </p>
                    <div class="space20">&nbsp;</div>
                    <h6 class="contact-title">Fanpage</h6>
                    <p>
                        0123456789 <br>
                    </p>
                    <div class="space20">&nbsp;</div>
                    <h6 class="contact-title">Email</h6>
                    <p>
                        <a href="BACake@gmail.com">BACake@gmail.com</a>
                    </p>
                </div>
            </div>
        </div> <!-- #content -->
    </div> <!-- .container -->
    @endsection