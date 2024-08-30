@extends('mainMenu')



@section('content')
        <div class="row" style="padding: 2rem 2rem 0rem 2rem">
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
                                <div class="card mb-5 py4 mb-lg-4">
                                    <div class="card-header bg-light py-3">
                                        <h5 class="card-title text-white text-uppercase text-center">Thời hạn thanh toán</h5>
                                    </div>
                                    <div class="card-body px-5">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value=1 name="flexRadioDefault" id="flexRadioDefault1" checked="">
                                            <label class="form-check-label" for="flexRadioDefault2">1 tháng</label>
                                            <span style="float:right">{{ number_format($product->price*1000*1, 0, ',', '.') }}vnd</span>
                                        </div>
                                        <hr>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value=2 name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault1">2 tháng</label>
                                            <span style="float:right">{{ number_format($product->price*1000*2, 0, ',', '.') }}vnd</span>

                                        </div>
                                        <hr>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value=3 name="flexRadioDefault" id="flexRadioDefault3">
                                            <label class="form-check-label" for="flexRadioDefault1">3 tháng</label>
                                            <span style="float:right">{{ number_format($product->price*1000*3, 0, ',', '.') }}vnd</span>

                                        </div>
                                        <hr>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value=6 name="flexRadioDefault" id="flexRadioDefault6">
                                            <label class="form-check-label" for="flexRadioDefault1">6 tháng</label>
                                            <span style="float:right">{{ number_format($product->price*1000*6, 0, ',', '.') }}vnd</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            
                            <div class="col-md-5">
                                    <div class=" d-flex px-3 py-3 mb-2 text-light" style="background: rgb(53, 56, 61); border-radius:25px">
                                        <input type="text" class="form-control aikopanel-input-coupon p-0" style="width:60%; margin-right:10px" placeholder="Nhập mã giảm giá (nếu có)"></input>
                                        <button type="button" class="btn btn-light " >
                                        <i class="fadeIn animated bx bx-money"></i>Xác Minh</button>
                                    </div>
                                    <div class="block block-link-pop block-rounded  px-4 py-4 text-light" style="border-radius:25px;background: rgb(53, 56, 61);">
                                        <h5 class="text-light mb-3">Tổng tiền đơn hàng</h5>
                                        <div class="row no-gutters pb-3" style="border-bottom: 1px solid rgb(100, 102, 105);">
                                            <div class="col-8">DATA RUBY x <span id="month">1</span> Tháng</div><div class="col-4 text-right"> <span id="price">{{ number_format($product->price*1000*1, 0, ',', '.') }}</span> VND </div>
                                        </div><div class="pt-3" style="color: rgb(100, 102, 105);">Tổng</div><h1 class="text-light mt-3 mb-3">{{ number_format($product->price*1000*1, 0, ',', '.') }}VND</h1>
                                        <!-- Căn phải button -->

                                        <div class="d-flex justify-content-end">
                                            <form action="{{route('postPayment')}}" method="POST">
                                                @csrf
                                                <input class="ouput" type="hidden" value=1 name="number" id="number" >
                                                <input class="ouput" type="hidden" value="{{$product->id }}" name="product_id" id="product_id" >
                                                <button type="submit" class="btn btn-primary">
                                                    <span><i class="far fa-check-circle"></i> Đặt Hàng</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                            
        </div>
        <script>
            document.querySelectorAll('.form-check-input').forEach(function(radio) {
                radio.addEventListener('change', function() {
                    if (this.checked) {
                        // Update hidden input field and potentially other elements
                        document.getElementById('number').value = this.value;
                        updatePrice(this.value); // Call a function to update the displayed price
                    }
                });
            });

            function updatePrice(months) {
                const price = {{ $product->price }} * 1000 * months;
                const formattedPrice = new Intl.NumberFormat('vi-VN').format(price);
                document.querySelector('.text-light.mt-3.mb-3').textContent = formattedPrice + ' VND';
                document.getElementById('month').textContent=months;
                document.getElementById('price').textContent=formattedPrice;
            }
        </script>

@endsection