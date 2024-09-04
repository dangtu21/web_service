@extends('mainMenu')

@section('css')

@endsection

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
                                                <h2 class="to">{{$user->email}}</h2>
                                                <div class="time">Đã tham gia: 10 ngày</div>
                                                <div class="id">ID định danh: UCE515{{$user->id}}</div>
                                                <div class="system" id="system">Hệ điều hành: Win</div>
                                                <div class="ip" id="ip">IP đang truy cập: 2405:4802:8030:9e00:c0d3:cf37:74c8:5576</div>
                                            </div>
                                            <script>
                                                // Function to detect OS
                                                function getOS() {
                                                    const platform = navigator.platform.toLowerCase();

                                                    if (platform.includes('win')) return 'Windows';
                                                    if (platform.includes('mac')) return 'MacOS';
                                                    if (platform.includes('linux')) return 'Linux';
                                                    if (platform.includes('iphone') || platform.includes('ipad')) return 'iOS';
                                                    if (platform.includes('android')) return 'Android';
                                                    
                                                    return 'Unknown OS';
                                                }
                                                async function getIP() {
                                                    try {
                                                        const response = await fetch('https://api.ipify.org?format=json');
                                                        const data = await response.json();
                                                        document.getElementById('ip').textContent = `IP đang truy cập:  ${data.ip}`;
                                                    } catch (error) {
                                                        document.getElementById('ip').textContent = 'Unable to retrieve IP address';
                                                        console.error('Error fetching IP address:', error);
                                                    }
                                                }

                                                getIP();

                                                // Display OS name
                                                document.getElementById('system').textContent = `Hệ điều hành: ${getOS()}`;
                                            </script>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                    @if($orderDetailsWithProducts->isEmpty())
                                        <p>No products found.</p>
                                    @else
                                        @foreach($orderDetailsWithProducts as $product)
                                            <div class="col-md-6">
                                                <div class="card mb-5" style="border-radius:20px">
                                                    <div class="card-header bg-light py-3" style="border-radius:20px">
                                                        <h5 class="card-title text-white text-uppercase text-center">{{$product->title }}</h5>
                                                        <h6 class="card-price text-white text-center">{{ number_format($product->price*1000, 0, ',', '.') }}VND<span class="term">/month</span></h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item bg-transparent"><span>Thông tin gói: {{$product->title }}</span></li>
                                                            <li class="list-group-item bg-transparent">HSD: {{$product->expiration_date}}</li>
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
                                                                            <span>Giới hạn sử dụng {{$product->device}} thiết bị </span>
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
                                                                <button class="btn btn-light my-2 radius-30 mx-2" onclick="window.location.href='{{ route('document') }}'">
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
                                                            <button  class="btn btn-light my-3 radius-30 mx-auto" id="synchronize"  onclick="listAppOpen('{{ $product->id }}' )">
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
                                        @endforeach
                                    @endif
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
                                    <div class="overlayx" id="overlayx"></div>
                                    <div class="menu2111" id="menu2111" style="padding-bottom: 15px">
                                        
                                            <ul class="list-unstyled" style="padding-left: 0;">
                                                <li style="border-bottom: 1px solid #757070; padding: 6px 0;" onclick="submitShadownRocket(1)">
                                                
                                                        <div class="d-flex align-items-center">
                                                            <div class="text-center" style="width: 30%;">
                                                                <img class="mr-2" src="{{ asset('assets/images/app/copy.png') }}" alt="V2RayNG" style="width: 50px; margin: 0 1rem;">
                                                            </div>
                                                            <p class="mb-0" style="color: #3f3f3f; font-size: 1rem;">Lấy liên kết server</p>
                                                        </div>
                                                    
                                                </li>
                                                <li style="border-bottom: 1px solid #757070; padding: 6px 0;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-center" style="width: 30%;">
                                                            <img class="mr-2" src="{{ asset('assets/images/app/qr.png') }}" alt="V2RayNG" style="width: 50px; margin: 0 1rem;">
                                                        </div>
                                                        <p class="mb-0" style="color: #3f3f3f; font-size: 1rem;">Quét mã QR để đăng kí</p>
                                                    </div>
                                                </li>
                                                <li style="border-bottom: 1px solid #757070; padding: 6px 0;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-center" style="width: 30%;">
                                                            <img class="mr-2" src="{{ asset('assets/images/app/sing-box.png') }}" alt="V2RayNG" style="width: 50px; margin: 0 1rem;">
                                                        </div>
                                                        <p class="mb-0" style="color: #3f3f3f; font-size: 1rem;">Nhập vào Sing-Box</p>
                                                    </div>
                                                </li>
                                                <li style="border-bottom: 1px solid #757070; padding: 6px 0;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-center" style="width: 30%;">
                                                            <img class="mr-2" src="{{ asset('assets/images/app/clashmeta.jpg') }}" alt="V2RayNG" style="width: 50px; margin: 0 1rem;">
                                                        </div>
                                                        <p class="mb-0" style="color: #3f3f3f; font-size: 1rem;">Nhập vào ClashMeta</p>
                                                    </div>
                                                </li>
                                                <li style="border-bottom: 1px solid #757070; padding: 6px 0;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-center" style="width: 30%;">
                                                            <img class="mr-2" src="{{ asset('assets/images/app/karing.png') }}" alt="V2RayNG" style="width: 50px; margin: 0 1rem;">
                                                        </div>
                                                        <p class="mb-0" style="color: #3f3f3f; font-size: 1rem;">Nhập vào Karing</p>
                                                    </div>
                                                </li>
                                                <li style="border-bottom: 1px solid #757070; padding: 6px 0;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="text-center" style="width: 30%;">
                                                            <img class="mr-2" src="{{ asset('assets/images/app/clashforwindows.png') }}" alt="V2RayNG" style="width: 50px; margin: 0 1rem;">
                                                        </div>
                                                        <p class="mb-0" style="color: #3f3f3f; font-size: 1rem;">Nhập vào Clash for Windows</p>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="text-center">
                                                <button class="btn btn-secondary" onclick="listAppClose()">Đóng Menu</button>

                                            </div>
                                        
                                    </div>

                                                            </div>
                                                            <script>
                                                                function listAppOpen(id){
                                                                    var OS = getOS();
                                                                    
                                                                    if(OS=='Windows'){
                                                                        var winString = `
                                                                                    <ul class="list-unstyled" style="padding-left: 0;">
                                                                                        <li style="border-bottom: 1px solid black; padding: 6px 0;">
                                                                                            <div class="d-flex align-items-center">
                                                                                                <div class="text-center" style="width: 30%;">
                                                                                                    <img class="mr-2" src="{{ asset('assets/images/app/sing-box.png') }}" alt="V2RayNG" style="width: 50px; margin: 0 1rem;">
                                                                                                </div>
                                                                                                <p class="mb-0" style="color: #3f3f3f; font-size: 1rem;">Nhập vào Sing-Box</p>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- Repeat <li> elements as needed -->
                                                                                        <li style="border-bottom: 1px solid black; padding: 6px 0;">
                                                                                            <div class="d-flex align-items-center">
                                                                                                <div class="text-center" style="width: 30%;">
                                                                                                    <img class="mr-2" src="{{ asset('assets/images/app/sing-box.png') }}" alt="V2RayNG" style="width: 50px; margin: 0 1rem;">
                                                                                                </div>
                                                                                                <p class="mb-0" style="color: #3f3f3f; font-size: 1rem;">Nhập vào Sing-Box</p>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="text-center">
                                                                                        <button class="btn btn-secondary mt-3" id="closeMenu">Đóng Menu</button>
                                                                                    </div>`;


                                                                        // document.getElementById('menu2111').innerHTML = winString;

                                                                    }else if(OS == 'iOS'){

                                                                    }else if(OS == 'Android'){

                                                                    }
                                                                    document.getElementById('overlayx').style.display = 'block';
                                                                    document.getElementById('menu2111').style.display = 'block'; // Hiển thị menu
                                                                }
                                                                function listAppClose(){
                                                                    document.getElementById('menu2111').style.display = 'none';
                                                                    document.getElementById('overlayx').style.display = 'none'; // Ẩn menu
                                                                }
                                                                
                                                            </script>

                                    <script>
                                        function submit(){
                                            var OS = getOS();
                                            if(OS=='Windows'){

                                            }else if(OS == 'iOS'){

                                            }else if(OS == 'Android'){

                                            }
                                        }
                                        function submitShadownRocket(id) {

                                                alert("hello x");
                                                // Gửi request GET đến route /subscribe
                                                $.ajax({
                                                    url: '/subscribe',
                                                    type: 'GET',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'Accept': 'application/json'
                                                    },
                                                    data: {
                                                        product_id: id  // Sử dụng ID sản phẩm từ thuộc tính dữ liệu của nút
                                                    },
                                                    success: function(response) {
                                                        // Xử lý thành công (có thể chuyển hướng hoặc thông báo cho người dùng)
                                                        window.location.href = response.redirect_url;
                                                    },
                                                    error: function(xhr) {
                                                        // Xử lý lỗi
                                                        console.error('Có lỗi xảy ra:', xhr.responseText);
                                                    }
                                                });
                                        }
                                        
                                    </script>

                                        
                                        
									<footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
								</div>
								<!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
								<div></div>
							</div>
						</div>
					</div>
				</div>
   


    

    


   
@endsection
