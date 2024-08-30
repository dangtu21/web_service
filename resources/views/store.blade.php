@extends('mainMenu')

@section('content')
<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active">Cửa hàng </li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Settings</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<!-- Section: Pricing table -->
				<div class="pricing-table">
					<h6 class="mb-0 text-uppercase">Một số gói cơ bản </h6>
					<hr>
					<div class="row row-cols-1 row-cols-lg-3">
						<!-- Free Tier -->
                        @if($products->isEmpty())
                            <p>No products found.</p>
                        @else
                            @foreach($products as $product)
                            <div class="col">
                                <div class="card mb-5 mb-lg-0">
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
                                        <div class="d-grid"> <a href="{{ route('payment', ['product_id' => $product->id]) }}" class="btn btn-light my-2 radius-30">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        
						
					</div>
					<!--end row-->
					
				</div>
				<!-- Section: Pricing table -->
			</div>
@endsection