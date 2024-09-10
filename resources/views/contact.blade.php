@extends('mainMenu')

@section('css')

@endsection

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3" style="
    border: 1px solid #fff;
    border-radius: 20px;
">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Liên hệ với chúng tôi</li>
                </ol>
            </nav>
        </div>

    </div>
    <div class="container">
        <div class="m-lg-5 m-sm-1 row align-items-stretch no-gutters contact-wrap py-3 px-3" style="border: 1px solid #fff; border-radius: 20px;">
            <div class="col-md-12">
                <div class="form h-100">
                    <h3 style="color:#000">Liên hệ</h3>
                    <form class="mb-5" method="post" id="contactForm" name="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="col-form-label">Tên *</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="col-form-label">Email *</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Your email">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <label for="message" class="col-form-label">Thông tin cần hỗ trợ *</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="4"
                                    placeholder="Write your message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                                <span class="submitting"></span>
                            </div>
                        </div>
                    </form>
                    <div id="form-message-warning mt-4"></div>
                    <div id="form-message-success">
                        Your message was sent, thank you!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection