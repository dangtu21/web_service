@extends('mainMenu')

@section('title', 'Home Page')

@section('content')
                <div class="card">
					<div class="card-body">
						<div id="invoice">
    
							<div class="invoice overflow-auto">
								<div style="min-width: 600px">
									
									<main>
                                    <div class= "conten">
                                        <div class="row contacts w-75 mx-auto" style="background: rgb(0 0 0 / 15%); border-radius:30px" >
                                            <div class="row invoice-details " >
                                                </br>
                                                <div class = "col text-center" >
                                                <img src="{{ asset('assets/images/avatars/avatar-7.png') }}" width="100 " height="100" class="rounded-circle" alt="Avatar">
                                                </div>
                                            </div>
                                            <div class="row invoice-to text-center">
                                                <div class="text-gray-light">Thông tin tài khoản</div>
                                                <h2 class="to">anhtuhanam1@gmail.com</h2>
                                                <div class="time">Đã tham gia: 10 ngày</div>
                                                <div class="id">ID định danh: 1234</div>
                                                <div class="system">Hệ điều hành: Windows</div>
                                                <div class="ip">IP đang truy cập: 2405:4802:8030:9e00:c0d3:cf37:74c8:5576</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                    <div class="col-md-6">
                                            <div class="card mb-5 mb-lg-0">
                                                <div class="card-header bg-light py-3">
                                                    <h5 class="card-title text-white text-uppercase text-center">DATA RUBY</h5>
                                                    <h6 class="card-price text-white text-center">70,000VND<span class="term">/month</span></h6>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item bg-transparent"><span>Thông tin gói</span></li>
                                                        <li class="list-group-item bg-transparent">HSD: 20/11/2025-14:01:02</li>
                                                        <li class="list-group-item bg-transparent"><i class="bx bx-check me-2 font-18"></i>Còn lại 23 ngày nữa hết hạn </li>
                                                        <li class="list-group-item bg-transparent">
                                                        <div class="container" style="/* background-color:#67AAAE; *//* opacity: 0.7; */border-radius: 20px;padding:10px;color: #fff;background-color: rgb(255 255 255 / 15%);border-color: rgb(255 255 255 / 35%);">
                                                                <div class="container text-center" style=" color: #fff;">
                                                                    <span style="color: #fff;font-size: 20px;font-weight: 500;">Thống kê sử dụng  </span>

                                                                </div>
                                                                <div class="device text-center" style="background-color: #557677;padding 10px;opacity: 1;border-radius: 15px;margin: 10px 20px;padding: 10px;">
                                                                    <div class="font-16 text-white">
                                                                        <i class="lni lni-laptop-phone"></i>
                                                                        <span> Đang online 0 thiết bị</span>
                                                                        <i class="lni lni-laptop-phone"></i>
                                                                    </div>
                                                                    <div class="font-16 text-white">	
                                                                        <i class="fadeIn animated bx bx-error"></i>
                                                                        <span>Giới hạn sử dụng 2 thiết bị </span>
                                                                        <i class="fadeIn animated bx bx-error"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="progress mb-1" style="height: 10px;position: relative;margin: 0 15px;">
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%; background-color: #fff;">
                                                                        <span class="progress-text" style="color: #000; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                                            0.00%
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="dvs-aiko-transfer font-w600 text-center" style="padding: 10px 10px">
                                                                    <div class="font-w700">Đã Sử Dụng 21 GB / Không Giới Hạn DATA</div>
                                                                </div>
                                                                
                                                                <div class="d-grid" style="margin:0 20px"> 
                                                                    <span class="btn btn-light my-2 radius-30" style="cursor:auto;background-color: #557677;padding 20px;opacity: 1">Đang sử dụng id tiktok</span>
                                                                </div>
                                                        </div>
                                                        </li>
                                                        
                                                    </ul>
                                                    <div class="d-grid text-center">
                                                        <div class="d-flex justify-content-center">
                                                            <button  class="btn btn-light my-2 radius-30 mx-2">
                                                                <i class="bx bx-cog bx-spin"></i> Thay đổi SNI
                                                            </button>
                                                            <button class="btn btn-light my-2 radius-30 mx-2">
                                                                <i class="lni lni-book"></i> Hướng dẫn sử dụng
                                                            </button>
                                                            <button  class="btn btn-light my-2 radius-30 mx-2">
                                                                <i class="lni lni-apple"></i> Lấy id Apple
                                                            </button>
                                                        </div>
                                                        <button class="btn btn-light my-2 radius-30" style="margin:0 20px">
                                                            <i class="fadeIn animated bx bx-reset"></i> Reset liên kết server
                                                        </button>
                                                    </div>
                                                    <div class="row" style="margin:10px 20px;padding:10px 20px; color: #fff; background-color: rgb(255 255 255 / 15%); border-color: rgb(255 255 255 / 35%);border-radius:20px">
                                                        <button class="btn btn-light my-3 radius-30 mx-auto"  >
                                                        <i class="fadeIn animated bx bx-wifi"></i>Bấm Vào Đây Để Đồng Bộ Máy Chủ 📲
                                                        </button>
                                                        <div class="row justify-content-center" style="font-size:35px;x">
                                                            <div class="col-auto  mx-auto ">
                                                                <i class="lni lni-windows "></i>
                                                            </div>
                                                            <div class="col-auto  mx-auto ">
                                                                <i class="lni lni-apple "></i>
                                                            </div>
                                                            <div class="col-auto   mx-auto">
                                                                <i class="lni lni-android-original"></i>
                                                            </div>
                                                            <div class="col-auto  mx-auto ">
                                                                <i class="lni lni-ubuntu "></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table " style="font-size: 1rem ; border-radius:20px; overflow: hidden;"">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center bg-light" colspan="2" style="font-size: 1.5rem">Danh sách menu</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left">Xem hướng dẫn sử dụng</td>
                                                        <td class="text-left"><i class="lni lni-book" style="font-size:28px"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Tạo web con</td>
                                                        <td class="text-left"><i class="lni lni-website" style="font-size:28px"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Gia hạn gói dịch vụ</td>
                                                        <td class="text-left"><i class="fadeIn animated bx bx-history" style="font-size:28px"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Lịch sử mua hàng </td>
                                                        <td class="text-left"><i class="fadeIn animated bx bx-spreadsheet" style="font-size:28px"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Thông tin trạng thái máy chủ </td>
                                                        <td class="text-left"><i class="fadeIn animated bx bx-server" style="font-size:28px"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Thay đổi mật khẩu  </td>
                                                        <td class="text-left"><svg xmlns="http://www.w3.org/2000/svg" style="font-size:28px" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user text-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Gửi hỗ trợ lên admin </td>
                                                        <td class="text-left"><i class="bx bx-support" style="font-size:28px"></i></td>
                                                    </tr>
                                                    <!-- Thêm các hàng khác ở đây -->
                                                </tbody>
                                            </table>
                                        </div>
                                        
									<footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
								</div>
								<!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
								<div></div>
							</div>
						</div>
					</div>
				</div>
    <div class="page-content">

        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
            <div class="col">
            <div class="card rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                <div class="">
                    <p class="mb-1">Total Orders</p>
                    <h4 class="mb-0">5.8K</h4>
                    <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>22.5% from last week</span></p>
                </div>
                <div class="ms-auto widgets-icons rounded-circle bg-light text-white">
                    <i class="bx bx-cart"></i>
                </div>
                </div>
                
            </div>
            </div>
            </div>
            <div class="col">
            <div class="card rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                <div class="">
                    <p class="mb-1">Total Income</p>
                    <h4 class="mb-0">$9,786</h4>
                    <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>13.2% from last week</span></p>
                </div>
                <div class="ms-auto widgets-icons rounded-circle bg-light text-white">
                    <i class="bx bx-credit-card"></i>
                </div>
                </div>
            </div>
            </div>
            </div>
            <div class="col">
            <div class="card rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                <div class="">
                    <p class="mb-1">Total Views</p>
                    <h4 class="mb-0">875</h4>
                    <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>12.3% from last week</span></p>
                </div>
                <div class="ms-auto widgets-icons rounded-circle bg-light text-white">
                    <i class="bx bx-happy-heart-eyes"></i>
                </div>
                </div>
            </div>
            </div>
            </div>
            <div class="col">
            <div class="card rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                <div class="">
                    <p class="mb-1">New Clients</p>
                    <h4 class="mb-0">9853</h4>
                    <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>32.7% from last week</span></p>
                </div>
                <div class="ms-auto widgets-icons rounded-circle bg-light text-white">
                    <i class="bx bx-group"></i>
                </div>
                </div>
            </div>
            </div>
            </div>

        </div><!--end row-->


    <div class="row">
        <div class="col-12 col-lg-8 col-xl-8 d-flex">
            <div class="card w-100 rounded-4">
                <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                <h6 class="mb-0">Revenue History</h6>
                <div class="fs-5 ms-auto dropdown">
                    <div class="dropdown-toggle dropdown-toggle-nocaret options cursor-pointer" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i></div>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                
                <div id="chart1"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xl-4 d-flex">
            <div class="card w-100 rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                <h6 class="mb-0">Task Overview</h6>
                <div class="fs-5 ms-auto dropdown">
                    <div class="dropdown-toggle dropdown-toggle-nocaret options cursor-pointer" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i></div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                </div>
                <div id="chart2"></div>
            </div>
            <ul class="list-group list-group-flush mb-0 shadow-none">
                <li class="list-group-item bg-transparent border-top"><i class="bi bi-circle-fill me-2 font-weight-bold text-primary"></i> Complete <span class="float-end">120</span></li>
                <li class="list-group-item bg-transparent"><i class="bi bi-circle-fill me-2 font-weight-bold text-orange"></i> In Progress <span class="float-end">110</span></li>
                <li class="list-group-item bg-transparent"><i class="bi bi-circle-fill me-2 font-weight-bold text-info"></i> Started <span class="float-end">70</span></li>
            </ul>
            </div>
        </div>

        </div><!--end row-->

    <div class="row row-cols-1 row-cols-lg-4 radial-charts g-4">
    <div class="col">
        <div class="card rounded-4">
        <div class="card-body">
            <div class="text-center">
            <p class="mb-1">Orders</p>
            <h4 class="">9,254</h4>
            </div>
            <div class="">
                <div id="chart3"></div>
            </div>
            <div class="text-center">
            <p class="mb-1">Completed</p>
            <h4 class="">5632</h4>
            </div>
        </div>
        </div>
    </div>
    <div class="col">
    <div class="card rounded-4">
        <div class="card-body">
        <div class="text-center">
            <p class="mb-1">Unique Visitors</p>
            <h4 class="">5,2684</h4>
        </div>
            <div class="">
            <div id="chart4"></div>
            </div>
        <div class="text-center">
            <p class="mb-1">Increased since Last Week</p>
            <h4 class="">25%</h4>
        </div>
        </div>
    </div>
    </div>
    <div class="col">
    <div class="card rounded-4">
    <div class="card-body">
        <div class="text-center">
        <p class="mb-1">Impressions</p>
        <h4 class="">7,362</h4>
        </div>
        <div class="">
            <div id="chart5"></div>
        </div>
        <div class="text-center">
        <p class="mb-1">Increased since Last Week</p>
        <h4 class="">45%</h4>
        </div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card rounded-4">
    <div class="card-body">
    <div class="text-center">
        <p class="mb-1">Followers</p>
        <h4 class="">4278K</h4>
    </div>
        <div class="">
        <div id="chart6"></div>
        </div>
    <div class="text-center">
        <p class="mb-1">Increased since Last Week</p>
        <h4 class="">55%</h4>
    </div>
    </div>
    </div>
    </div>

    </div><!--end row-->


    

    


   
@endsection
