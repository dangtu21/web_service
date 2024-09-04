@extends('mainMenu')



@section('content')
        <div class="row" style="padding: 2rem 2rem 0rem 2rem">
                            <div class="col-md-5">
                                    <img style="width: 100%;border-radius: 30px;margin-bottom: 10%;" src="https://img.vietqr.io/image/970422-0799721539-print.png?amount={{$product->price*1000*1*$number}}&addInfo={{$payString}}&accountName=DANGANHTU" alt="">
                                    <<div class="row text-center"><div id="countdown" style="font-size: 2rem;border: 1px solid #fff;border-radius: 20px;width: fit-content;margin: auto;margin-bottom: 2rem;">15:00</div></div>

    <script>
        // Thời gian đếm ngược là 15 phút
        const countdownMinutes = 15;
        let endTime = new Date().getTime() + countdownMinutes * 60 * 1000;

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = endTime - now;

            if (distance <= 0) {
                document.getElementById('countdown').innerHTML = "00:00";
                clearInterval(timerInterval);
                return;
            }

            // Tính toán phút và giây còn lại
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Định dạng phút và giây
            const formattedMinutes = minutes < 10 ? `0${minutes}` : minutes;
            const formattedSeconds = seconds < 10 ? `0${seconds}` : seconds;

            // Hiển thị thời gian còn lại
            document.getElementById('countdown').innerHTML = `${formattedMinutes}:${formattedSeconds}`;
        }

        // Cập nhật thời gian đếm ngược mỗi giây
        const timerInterval = setInterval(updateCountdown, 1000);

        function callApi() {
            const headers = new Headers({
                'Accept': '*/*',
                'User-Agent': 'Thunder Client (https://www.thunderclient.com)'
            });
            const payString = @json($payString);
            fetch('http://localhost:3000/getTransaction', { 
                method: 'GET',
                headers: headers
            }) // Thay thế bằng URL API của bạn
                .then(response => response.json())
                .then(data => {
                    let found = false;
                    console.log(data);

                    console.log(data);

                    // Kiểm tra từng đối tượng trong mảng
                    for (const item of data) {
                        if (item.addDescription && item.addDescription.includes(payString)) {
                            found = true;
                            break;
                        }
                    }
                    if (found) {
                        clearInterval(timerInterval); // Dừng đồng hồ đếm ngược
                        
                        // Tạo URL với tham số key
                        const url = new URL('/user/paymentSuccess', window.location.origin);
                        url.searchParams.append('key', payString);

                        // Mở URL trong trình duyệt
                        window.location.href = url.toString();
                    } 
                    
                })
                .catch(error => {
                    // Xử lý lỗi nếu có
                    console.error('Error fetching data:', error);
                });
        }

        // Gọi API ngay lập tức khi trang được tải
        callApi();

        // Thiết lập gọi API mỗi phút (60.000 milliseconds)
        setInterval(callApi, 30000);



        // Cập nhật ngay lập tức khi trang được tải
        updateCountdown();
       
        
    </script>
                            </div>
                            <div class="col-md-7">
                                <div class="card mb-5 mb-lg-4">
                                    <div class="card-header bg-light py-3">
                                        <h5 class="card-title text-white text-uppercase text-center">{{$product->title }}</h5>
                                        <h6 class="card-price text-white text-center">{{ number_format($product->price, 0, ',', '.') }}k<span class="term">/month</span></h6>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item bg-transparent"><i class="bx bx-check me-2 font-18"></i>Dung lượng: {{ number_format($product->capacity, 0, ',', '.') }}GB</li>
                                            <li class="list-group-item bg-transparent"><i class="bx bx-check me-2 font-18"></i>Giới hạn thiết bị: {{ $product->device }}</li>
                                            <li class="list-group-item bg-transparent"><i class="bx bx-check me-2 font-18"></i>Tốc độ mạng cao nhất: {{ $product->brandwidth }}Mbps/s</li>
                                            <li class="list-group-item bg-transparent"><i class="bx bx-check me-2 font-18"></i>Hỗ trợ sim: {{ $product->supportSim }}</li>
                                            <li class="list-group-item bg-transparent "><i class="bx bx-check me-2 font-18"></i>Máy chủ tại {{ $product->serverLocation }}</li>
                                        </ul>
                                       
                                    </div>
                                </div>
                                <div class="row">
                                        <div class=" d-flex px-3 py-3 mb-2 text-light" style="background: rgb(53, 56, 61); border-radius:25px">
                                            <input type="text" class="form-control aikopanel-input-coupon p-0" style="width:60%; margin-right:10px" placeholder="Nhập mã giảm giá (nếu có)"></input>
                                            <button type="button" class="btn btn-light " >
                                            <i class="fadeIn animated bx bx-money"></i>Xác Minh</button>
                                        </div>
                                        <div class="block block-link-pop block-rounded  px-4 py-4 text-light" style="border-radius:25px;background: rgb(53, 56, 61);">
                                            <h5 class="text-light mb-3">Tổng tiền đơn hàng</h5>
                                            <div class="row no-gutters pb-3" style="border-bottom: 1px solid rgb(100, 102, 105);">
                                                <div class="col-8">DATA RUBY x <span id="month">{{$number}}</span> Tháng</div><div class="col-4 text-right"> <span id="price">{{ number_format($product->price*1000*1*$number, 0, ',', '.') }}</span> VND </div>
                                            </div><div class="pt-3" style="color: rgb(100, 102, 105);">Tổng</div><h1 class="text-light mt-3 mb-3">{{ number_format($product->price*1000*1*$number, 0, ',', '.') }}VND</h1>
                                            <!-- Căn phải button -->

                                            <div class="d-flex justify-content-end">
                                                
                                                    <input class="ouput" type="hidden" value=1 name="number" id="number" >
                                                    <input class="ouput" type="hidden" value="{{$product->id }}" name="product_id" id="product_id" >
                                                    
                                            </div>
                                        </div>
                                </div>

                            </div>
                                
                            
                            
                            
        </div>
        

@endsection