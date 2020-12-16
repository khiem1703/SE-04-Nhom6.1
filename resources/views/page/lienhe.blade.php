    @extends('master')
    @section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Contacts</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="index.html">Home</a> / <span>Contacts</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="beta-map">

        <div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3678.0141923553406!2d89.551518!3d22.801938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8ff8ef7ea2b7%3A0x1f1e9fc1cf4bd626!2sPranon+Pvt.+Limited!5e0!3m2!1sen!2s!4v1407828576904"></iframe></div>
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
                    <h6 class="contact-title">Email</h6>
                    <p>
                        <a href="hr@betadesign.com">BACake@gmail.com</a>
                    </p>
                </div>
            </div>
        </div> <!-- #content -->
    </div> <!-- .container -->
    @endsection