@extends('mainMenu')



@section('content')
        <div class="page-content p-3" style="padding: 1.5rem 4.5rem 0 4.5rem;" >
            <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active">Hướng dẫn sử dụng </li>
							</ol>
						</nav>
					</div>
                </div>  
                            <div class="col w-100">
                                <div class="card mb-5 ">
                                    <div class="col card-header bg-light py-3">
                                        
                                        <h3 class="card-price text-white text-center">Cách dùng cho Android</h3>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item bg-transparent" style="cursor: pointer;" onclick="handleClick('androidNekobox')" >
                                                <h5>Hướng dẫn sử dụng 4G 4GFUTURE trên Android bằng app Nekobox</h5>
                                                <small>Cập Nhật Cuối: 30/08/2024</small>
                                            </li>
                                            <li class="list-group-item bg-transparent" style="cursor: pointer;" onclick="handleClick('androidSing-box')">
                                                <h5>Hướng dẫn sử dụng 4G 4GFUTURE trên Android bằng app SignBox</h5>
                                                <small>Cập Nhật Cuối: 30/08/2024</small>
                                            </li>
                                            <li class="list-group-item bg-transparent" style="cursor: pointer;" onclick="handleClick('androidV2RAY')">
                                                <h5>Hướng dẫn sử dụng 4G 4GFUTURE trên Android bằng app V2rayNG</h5>
                                                <small>Cập Nhật Cuối: 30/08/2024</small>
                                            </li>
                                            
                                        </ul>
                    
                                    </div>
                                </div>
                            </div>
                            <div class="col w-100">
                                <div class="card mb-5 ">
                                    <div class="col card-header bg-light py-3">
                                        
                                        <h3 class="card-price text-white text-center">Cách dùng cho IOS</h3>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            
                                            <li class="list-group-item bg-transparent" style="cursor: pointer;" onclick="handleClick('IOSShadowroket')">
                                                <h5>Hướng dẫn sử dụng 4G 4GFUTURE trên IOS bằng app Shadowrocket</h5>
                                                <small>Cập Nhật Cuối: 30/08/2024</small>
                                            </li>
                                            <li class="list-group-item bg-transparent" style="cursor: pointer;" onclick="handleClick('IOSSingBox')">
                                                <h5>Hướng dẫn sử dụng 4G 4GFUTURE trên IOS bằng app SignBox</h5>
                                                <small>Cập Nhật Cuối: 30/08/2024</small>
                                            </li>
                                            
                                        </ul>
                    
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-5 ">
                                    <div class="col card-header bg-light py-3">
                                        
                                        <h3 class="card-price text-white text-center">Hướng dẫn fix thông báo </h3>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            
                                            <li class="list-group-item bg-transparent">
                                                <h5>Hướng dẫn fix lỗi chậm thông báo chung cho Android & IOS</h5>
                                                <small>Cập Nhật Cuối: 30/08/2024</small>
                                            </li>
                                            <li class="list-group-item bg-transparent">
                                                <h5>Hướng dẫn fix lỗi chậm thông báo cho IOS</h5>
                                                <small>Cập Nhật Cuối: 30/08/2024</small>
                                            </li>
                                        </ul>
                    
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-5 ">
                                    <div class="col card-header bg-light py-3">
                                        
                                        <h3 class="card-price text-white text-center">Hướng dẫn phát mạng </h3>
                                    </div>
                                    <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-transparent" >
                                            <h5>Hướng dẫn phát mạng từ Android sang Android bằng Nekobox</h5>
                                            <small>Cập Nhật Cuối: 30/08/2024</small>
                                        </li>
                                        <li class="list-group-item bg-transparent"  >
                                            <h5>Hướng dẫn phát mạng từ Android sang Android bằng Sing-box</h5>
                                            <small>Cập Nhật Cuối: 30/08/2024</small>
                                        </li>
                                        <li class="list-group-item bg-transparent" >
                                            <h5>Hướng dẫn phát mạng từ Android sang Android bằng V2rayNG</h5>
                                            <small>Cập Nhật Cuối: 30/08/2024</small>
                                        </li>
                                        <li class="list-group-item bg-transparent" >
                                            <h5>Hướng dẫn phát mạng từ IOS sang IOS bằng Shadowrocket</h5>
                                            <small>Cập Nhật Cuối: 30/08/2024</small>
                                        </li>
                                        <li class="list-group-item bg-transparent" >
                                            <h5>Hướng dẫn phát mạng từ IOS sang IOS bằng Sing-box</h5>
                                            <small>Cập Nhật Cuối: 30/08/2024</small>
                                        </li>
                                        <li class="list-group-item bg-transparent"  >
                                            <h5>Hướng dẫn phát mạng từ điện thoại sang máy tính bằng Nekoray</h5>
                                            <small>Cập Nhật Cuối: 30/08/2024</small>
                                        </li>
                                        <li class="list-group-item bg-transparent" >
                                            <h5>Hướng dẫn phát mạng từ điện thoại sang máy tính bằng Netch</h5>
                                            <small>Cập Nhật Cuối: 30/08/2024</small>
                                        </li>
                                        <li class="list-group-item bg-transparent" >
                                            <h5>Hướng dẫn phát mạng từ điện thoại sang máy tính bằng Clash</h5>
                                            <small>Cập Nhật Cuối: 30/08/2024</small>
                                        </li>
                                    </ul>

                    
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-5 ">
                                    <div class="col card-header bg-light py-3">
                                        
                                        <h3 class="card-price text-white text-center">Hướng dẫn cài đặt nền </h3>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            
                                            <li class="list-group-item bg-transparent">
                                                <h5>Hướng dẫn cài đặt nền tiktok cũ Viettel</h5>
                                                <small>Cập Nhật Cuối: 30/08/2024</small>
                                            </li>
                                            <li class="list-group-item bg-transparent">
                                                <h5>Hướng dẫn cài đặt nền tiktok mới Viettel</h5>
                                                <small>Cập Nhật Cuối: 30/08/2024</small>
                                            </li>
                                            
                                        </ul>
                    
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-dialog-right modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content"  style="color: black;">
                                        <div class="modal-header" >
                                            <h5 class="modal-title" style="color: black;" id="modal-title"></h5>
                                            <button type="button" class="close" onclick="closeModal()" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="modal-body">
                                            <div class="custom-html-style">
                                                <p><strong>CÁCH SỬ DỤNG ĐƠN GIẢN THÔI NHÉ CÁC BẠN.</strong><br>
                                                🔴 <strong>Đầu tiên các bạn xem video hướng dẫn chi tiết trên kênh Youtube 4GFUTURE:</strong> 👉<a href="https://youtu.be/MRB4sonhkoc"><strong>TẠI ĐÂY</strong></a> 👈<br>
                                                <strong>-&gt;&gt;sau khi xem video xong, các bạn làm theo video cùng với 4 bước bên dưới là dùng được nhé.</strong></p>
                                                <p>🔴 <strong>4 BƯỚC</strong></p>
                                                <p>----- <strong>Bước 1: Mua gói data 4G 4GFUTURE trên trang web 4GFUTURE. COM</strong><br></p>
                                                <p>• 👉<a href="https://4GFUTURE.com/#/plan"><strong>NHẤN VÀO ĐÂY ĐỂ MUA GÓI</strong></a> 👈<br></p>
                                                <p>----- <strong>Bước 2: Tải app Nekobox để chạy 4G 4GFUTURE</strong><br>
                                                • 👉<a href="https://play.google.com/store/search?q=nekobox&amp;c=apps&amp;hl=vi_VN"><strong>NHẤN VÀO ĐÂY ĐỂ TẢI APP NEKOBOX</strong></a> 👈<br>
                                                lưu ý: hiện tại nhà phát triển đã đổi tên app Nekobox thành MIproxy, nên khi các bạn tải về thấy tên là MIproxy thì không vấn đề gì nhé</p>
                                                <p>-----<strong>Bước 3: Đồng bộ máy chủ của gói data 4GFUTURE mà các bạn đã mua vào app Nekobox</strong></p>
                                                <ul>
                                                    <li>thao tác như ảnh bên dưới để đồng bộ máy chủ của gói data 4GFUTURE mà các bạn đã mua vào app Nekobox (các bạn có thể nhấn giữ vào ảnh để tải ảnh hướng dẫn xuống nếu không phóng to ảnh trên điện thoại lên được)<br>
                                                    <img src="https://s3.ap-northeast-1.amazonaws.com/h.files/images/1718132471497_XgJPV88oNY.jpg" alt="" style="width:80%"></li>
                                                </ul>
                                                <p>----- <strong>Bước 4 : Đăng ký nền Viettel</strong><br>
                                                👉 <strong>Tùy theo nhu cầu sử dụng của các bạn thì các bạn đăng ký gói nền cho phù hợp dưới đây nhé:</strong></p>
                                                <ul>
                                                    <li><strong>T50K:</strong> cú pháp đăng ký ‘‘<strong>T50K gửi 191</strong>’’, 50k/tháng, 50GB/tháng</li>
                                                    <li><strong>T15KN:</strong> cú pháp đăng ký ‘‘<strong>T15KN gửi 191</strong>’’, 15k/7 ngày, 25GB/7 ngày, 100GB/tháng</li>
                                                    <li><strong>T5K:</strong> cú pháp đăng ký ‘‘<strong>T5K gửi 191</strong>’’, 5k/ngày, 15GB/ngày, 450GB/tháng</li>
                                                    <li><strong>MXH100:</strong> cú pháp đăng ký ‘‘<strong>MXH100 gửi 191</strong>’’, 100k/tháng, không giới hạn dung lượng sử dụng</li>
                                                </ul>
                                                <p>⚠ <strong>Một số lưu ý của bước đăng ký nền</strong><br>
                                                • trong video hướng dẫn đăng ký gói nền T30 nhưng hiện tại gói nền T30 của viettel đã ngừng đăng ký mới, nên các bạn đăng ký các nền bên trên<br>
                                                • gói nền T5K,T15KN,T50K của Viettel chỉ dùng để xem Tiktok nhưng kết hợp với gói DATA 4GFUTURE sẽ dùng được hết các ứng dụng khác như : facebook , youtube,tiktok,zalo, instagram, truy cập web,chơi game,…<br>
                                                • gói nền MXH100 của Viettel chỉ dùng để xem tiktok,youtube,facebook nhưng kết hợp với gói DATA 4GFUTURE sẽ dùng được hết các ứng dụng khác như : zalo, instagram, truy cập web,xem phim,chơi game,…mà không giới hạn dung lượng<br>
                                                • đăng ký nền xong mà hủy gói nền là sẽ không có mạng<br>
                                                • gói nền T5K,T15KN,T50K,MXH100 là của Viettel không phải của 4GFUTURE</p>
                                                <p><strong>VẬY LÀ XONG RỒI NHÉ . BÂY GIỜ CÁC BẠN CHỌN SERVER TRONG NEKOBOX VÀ DÙNG MẠNG THÔI</strong></p>
                                                <hr><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script src="{{ asset('assets/js/document.js') }}">
                            </script>
        </div>
@endsection