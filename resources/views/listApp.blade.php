@extends('mainMenu')



@section('content')

<div class="page-content">
                                                <div class="card mb-5 ">
                                                    <div class="card-header bg-light py-3">
                                                        <h4 class="card-title text-white text-uppercase text-center">Thông báo cho IOS</h4>
                                                       
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <div class="my-4 mb3">APP IOS, ứng dụng trả phí ! Đặc biệt hơn, bạn có thể tải ứng dụng này MIỄN PHÍ Bằng ID Apple của chúng tôi, vì chúng tôi đã mua APP sẵn để các bạn tải miễn phí. Hãy nhấp vào nút bên dưới để Lấy ID Apple và tải xuống ngay lập tức.</div>
                                                        <!-- <ul class="list-group list-group-flush">
                                                            <li class="list-group-item bg-transparent"><span>Thông tin gói: BASIC</span></li>
                                                            <li class="list-group-item bg-transparent">HSD: </li>
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
                                                            
                                                        </ul> -->
                                                        

                                                    </div>
                                                </div>
                                                <div class="card mb-5 mb-lg-0">
                                                    <div class="card-header bg-light py-3 d-flex justify-content-between align-items-center">
                                                        
                                                        <h4 class="text-white text-uppercase " style="float:left;margin-bottom:0">Tổng hợp ứng dụng </h4>
                                                        <h4 style="float:right;margin-bottom:0">Hướng dẫn sử dụng App</h4>
                                                    </div>
                                                    <div class="card-body text-center">
                                                    
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="position-relative d-inline-block  font-weight-bold py-2 px-4 text-center">
                                                            <div class="position-absolute top-50 start-0 w-100 border-top border-secondary" style="height: 1px; z-index: -1;"></div>
                                                            <div class="text-center" style="width: fit-content;margin: 0 auto;border: 1px solid #fff1f147;padding: 5px 20px;border-radius: 20px;background-color: #285765d9;
 ">
                                                                Hệ Điều Hành Android
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/v2rayng.png')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">V2RayNG</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://play.google.com/store/apps/details?id=com.v2ray.ang&amp;hl=vi&amp;gl=VN" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/surfboard.png')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">Surfboard</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://play.google.com/store/apps/details?id=com.getsurfboard&amp;hl=vi_VN" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/nekobox.jpg')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">NekoBox</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://github.com/MatsuriDayo/NekoBoxForAndroid/releases/latest" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/sing-box.png')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">Sing-Box</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://play.google.com/store/apps/details?id=io.nekohasekai.sfa&amp;hl=vi_VN&amp;pli=1" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/clashforandroi.png')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">Clash For Android</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://drive.google.com/uc?export=download&amp;id=1pSvwUsKF0Vzksz8bZDu9J4JEmjKNJFdM" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/clashmeta.jpg')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">ClashMeta</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://github.com/MetaCubeX/ClashMetaForAndroid/releases/latest" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="position-relative d-inline-block  font-weight-bold py-2 px-4 text-center">
                                                            <div class="position-absolute top-50 start-0 w-100 border-top border-secondary" style="height: 1px; z-index: -1;"></div>
                                                            <div class="text-center" style="width: fit-content;margin: 0 auto;border: 1px solid #fff1f147;padding: 5px 20px;border-radius: 20px;background-color: #285765d9;
 ">
                                                                Hệ Điều Hành IOS
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/sing-box.png')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">Sing-box</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://apps.apple.com/vn/app/sing-box/id6451272673" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/shadowrocket.jpg')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">Shadowrocket</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://apps.apple.com/vn/app/shadowrocket/id932747118"  target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    199.000đ
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/Quantumult-X.jpg')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">Quantumult-X</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://apps.apple.com/vn/app/quantumult-x/id1443988620" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    1.299.000đ
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/Surge.jpg')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0 ps-3">Surge</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://apps.apple.com/vn/app/surge-5/id1442620678"  target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/stash.jpg')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">Stash</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://apps.apple.com/vn/app/stash-rule-based-proxy/id1596063349" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/karing.png')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">Karing</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://apps.apple.com/us/app/karing/id6472431552"  target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="position-relative d-inline-block  font-weight-bold py-2 px-4 text-center">
                                                            <div class="position-absolute top-50 start-0 w-100 border-top border-secondary" style="height: 1px; z-index: -1;"></div>
                                                            <div class="text-center" style="width: fit-content;margin: 0 auto;border: 1px solid #fff1f147;padding: 5px 20px;border-radius: 20px;background-color: #285765d9;
 ">
                                                                Hệ Điều Hành Windows
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/clashforandroi.png')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">Clash for Windows</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://clashforwindows.net/files/Clash.for.Windows.Setup.0.20.39.exe" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/NekoRay.jpg')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">NekoRay</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://github.com/MatsuriDayo/nekoray/releases/latest"  target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/Netch.jpg')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">Netch</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://github.com/netchx/netch/releases/latest" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/V2RayN.jpg')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">V2RayN</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://github.com/2dust/v2rayN/releases/tag/6.55 target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/karing.png')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">Karing</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://github.com/KaringX/karing/releases/latest" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="card mb-4">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="bg-success text-white text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Miễn phí
                                                                </div>
                                                                <div class="bg-light text-dark text-center" style="    border-bottom-right-radius: var(--bs-border-radius);border-top-left-radius: var(--bs-border-radius);height: fit-content;padding: 4px 8px;">
                                                                    Phiên bản: Latest
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center" style="padding:0.5rem 1rem">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="mr-2" src="{{asset('assets/images/app/clashforandroi.png')}}" alt="V2RayNG" style="width: 40px; margin:auto">
                                                                    <h5 class="ps-3 mb-0">Clash for Windows</h5>
                                                                </div>
                                                                <div>
                                                                    <a href="https://play.google.com/store/apps/details?id=com.v2ray.ang&amp;hl=vi&amp;gl=VN" target="_blank" class="btn btn-primary">
                                                                        <i class="fa fa-download"></i> Tải Xuống
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                        
                                                        

                                                    </div>
                                                </div>
</div>

@endsection