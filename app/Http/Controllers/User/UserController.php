<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Payment;

use App\Models\Order_Detail;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\AuthController;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;
use \Firebase\JWT\JWT;
class UserController extends Controller
{   
    public function dashboard()
    {
        $user = Auth::user();
        
        $orderDetailsWithProducts = Order_Detail::join('product', 'order_details.product_id', '=', 'product.id')
        ->where('order_details.user_id', $user->id)  // Điều kiện tìm kiếm theo user_id
        ->where('order_details.payment', 'DONE')    // Thêm điều kiện kiểm tra payment
        ->select('order_details.*', 'product.*')    // Chọn các cột cần thiết
        ->get();  // Lấy tất cả các bản ghi phù hợp
        return view('dashboard', compact('orderDetailsWithProducts', 'user'));
    }

    
    public function subscribeLink(Request $request )
    {
        // Tạo URL cơ bản
        $link = "sub://";
  
        $domain = "http://13.213.30.33:8000/api/subscribe?token=";
        
        // Tạo token cho sản phẩm
        $token = $this->createTokenProduct($request->product_id);
        
        // Nối token vào URL
        $domain = $domain . $token;
        // Mã hóa URL bằng base64
        $code = base64_encode($domain);
        
        // Nối phần mã hóa vào link
        $link = $link . $code;
        $link = $link . "#danganhtu.id.vn";
       
        // Chuyển hướng người dùng đến liên kết
        return response()->json(['redirect_url' => $link]);
    }
    public function subscribe(Request $request)
    {
        // Lấy các query parameters từ request
        $token = $request->query('token');
        $flag = $request->query('flag');
    
        try{
            $decoded = JWTAuth::getJWTProvider()->decode($token);
            // Tìm kiếm bản ghi trong Order_Detail dựa trên product_id và user_id
            $orderDetail = Order_Detail::where('product_id', $decoded['product_id'])
            ->where('user_id', $decoded['sub'])
            ->first();
            if ($orderDetail) {
                $vmess_links = '
                STATUS=⛔HSD:20-09-2024 ✅ Dùng: 23,58 GB/2.000.000,00 GB
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY3My5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B1%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B373%20HNI%20-%20MANGVIP.&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYyNS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B2%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B325%20HBO-MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY5MS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B3%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B391%20ICO%20-%20MANGVIP.&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYyMy5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B4%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B323%20CNN-MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMDUubWFuZ3ZpcC5jb206ODA=?tfo=0&remark=%5B5%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B3105%20BIG%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY4Ny5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B6%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B387%20STA%20-%20MANGVIP.&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY5NS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B7%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B395%20MXE%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYyMS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B8%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B321%20HPP-MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYzMy5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B9%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B333%20ZIK%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY3OS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B10%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B379%20MCP%20-%20MANGVIP.&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY2Ny5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B11%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B367%20CMA%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY2OS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B12%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B369%20BGA%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY4OS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B13%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B389%20KCM%20-%20MANGVIP.&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYyOS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B14%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B329%20LFM%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMDMubWFuZ3ZpcC5jb206ODA=?tfo=0&remark=%5B15%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B3103%20MAC%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY2NS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B16%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B365%20TNG%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY1Ny5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B17%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B357%20ACM%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY1MS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B18%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B351%20LLK%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY5Ni5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B19%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B396%20VJA%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMDAubWFuZ3ZpcC5jb206ODA=?tfo=0&remark=%5B20%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B3100%20CFO%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxOS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B21%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B319%20SAF%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY0Ny5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B22%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B347%20DEV%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYyNy5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B23%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B327%20MOK%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMDEubWFuZ3ZpcC5jb206ODA=?tfo=0&remark=%5B24%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B3101%20GGC%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMy5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B25%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B313%20GBO%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYzOS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B26%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B339%20BFM%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY4My5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B27%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B383%20DNO%20-%20MANGVIP.&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY1NS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B28%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B355%20MIA%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY1My5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B29%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B353%20VBF%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY4MS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B30%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B381%20MOX%20-%20MANGVIP.&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY1OS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B31%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B359%20HMI%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMDIubWFuZ3ZpcC5jb206ODA=?tfo=0&remark=%5B32%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B3102%20PIK%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYzNy5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B33%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B337%20LGC%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYzMS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B34%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B331%20BBO%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMDQubWFuZ3ZpcC5jb206ODA=?tfo=0&remark=%5B35%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B3104%20CBC%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxNy5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B36%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B327%20TIK-MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY0OS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B37%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B349%20PPA%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY5OS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B38%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B399%20KAI%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY4NS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B39%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B385%20HBI%20-%20MANGVIP.&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY0MS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B40%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B341%20VOM%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYzNS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B41%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B335%20FBN%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY3MS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B42%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B371%20DBN%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY0My5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B43%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B343%20SUN%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY5Mi5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B44%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B392%20PCL%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY0NS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B45%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B345%20VIF%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxNS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B46%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B325%20TCI-MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY3NS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B47%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B375%20BMI%20-%20MANGVIP.&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY2MS5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B48%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B361%20NTA%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMDYubWFuZ3ZpcC5jb206ODA=?tfo=0&remark=%5B49%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B3106%20SOM%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY5OC5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B50%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B398%20VIN%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY3Ny5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B51%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B377%20RRY%20-%20MANGVIP.&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY5My5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B52%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B393%20HPK%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY5NC5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B53%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B394%20JES%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMTUubWFuZ3ZpcC5jb206ODA=?tfo=0&remark=%5B54%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B3115%20HNX%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMTIubWFuZ3ZpcC5jb206ODA=?tfo=0&remark=%5B55%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B3112%20HNO%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMTQubWFuZ3ZpcC5jb206ODA=?tfo=0&remark=%5B56%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B3114%20HNA%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMTMubWFuZ3ZpcC5jb206ODA=?tfo=0&remark=%5B57%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B3113%20HNK%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXYxMTYubWFuZ3ZpcC5jb206ODA=?tfo=0&remark=%5B58%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B3116%20HNP%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY2My5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B59%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B363%20MIX%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
vmess://YXV0bzo2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGRAbXY5Ny5tYW5ndmlwLmNvbTo4MA==?tfo=0&remark=%5B60%5D%E2%80%BA%20%F0%9F%87%BB%F0%9F%87%B397%20LOF%20-%20MANGVIP&alterId=0&obfs=websocket&obfsParam=v9.tiktokcdn.com
';

                $encodedData = base64_encode($vmess_links);
                return response($encodedData);
            } else {
                $bool = false; // Nếu không tìm thấy, đặt $bool là false
            }
        }catch (JWTException $e){
            return $e;
        }
        
    }
    public function createTokenProduct($product_id){
        $data = [
            'sub' => Auth::user()->id,
            'product_id'=>$product_id,
            'random'=>rand().time()
        ];
        $token=JWTAuth::getJWTProvider()->encode($data);
        return $token;
    }
    
    public function store(){
        
        // Lấy tất cả dữ liệu từ bảng Product
        $products = Product::all();
        
        // Trả dữ liệu tới view
        return view('store', compact('products'));
    }
    public function payment(Request $request){
        
        $product = Product::find($request->product_id);
        return view('payment', compact('product'));
    }
    public function postPayment(Request $request){
        $product = Product::find($request->product_id);
        // Xác thực dữ liệu đầu vào
        $validatedData = $request->validate([
            'number' => 'required|integer',
            'product_id' => 'required|integer',
        ]);
        if($validatedData['number']<1){
            return;
        }
        $number=$validatedData['number'];
        // Xử lý dữ liệu đã xác thực
        $orderDetail = new Order_Detail();
        $orderDetail->num = $validatedData['number'];
        $orderDetail->product_id = $validatedData['product_id'];
        $orderDetail->price = $product->price;
        $orderDetail->total_money = $product->price*$validatedData['number'];
        $orderDetail->user_id = Auth::id();
        // Lấy ngày hiện tại
        $today = Carbon::now();
        // Cộng thêm 2 tháng
        $nextTwoMonths = $today->addMonths($validatedData['number']);
        $orderDetail->expiration_date = $nextTwoMonths;
        $orderDetail->payment = "pending";

        $orderDetail->save();
         // Sinh một mã khóa duy nhất

        $payString = $this->generateUniquePayString();
        $payment = new Payment();
        $payment->payString = $payString;
        $payment->order_id = $orderDetail->id;
        $payment->save();
        
        return view('MBPay', compact('product','number','payString'));
    }
    // Hàm sinh mã khóa duy nhất
    private function generateUniquePayString()
    {
        do {
            // Sinh một chuỗi mã khóa ngẫu nhiên
            $payString = Str::random(10); // Sinh chuỗi 10 ký tự (có thể thay đổi độ dài)
        } while (Payment::where('payString', $payString)->exists()); // Kiểm tra tính duy nhất

        return $payString;
    }
    public function checkTime(String $id){
        $result=false;
        $i=1;
        while($result!=true){
            $result = $this->this->checkPayment($id);
        
            if ($result) {
                return true;
            } else {
                echo "ID not found in payments.\n "+$i;
                if(i > 5){
                    return false;
                }
            }
            sleep(60*$i);
            $i++;
        }
    }

    public function checkPaymentMain(Request $request)
    {
        $payString = $request->query('key'); // Lấy tham số từ query string

        if ($this->checkPayment($payString)) {
            $payment = Payment::where('payString', $payString)->first();
            if ($payment) {
                $orderDetail = Order_Detail::find($payment->order_id);
                if ($orderDetail) {
                    $orderDetail->payment = "DONE";
                    $orderDetail->save();
                }
            }
            return view("paymentSuccess");
        } else {
            return response()->json(['message' => 'Error payment'], 404);
        }
    }
    public function checkPayment(String $id) {
        $responses = $this->getPayment(); 
        foreach ($responses as $response) {
            // Kiểm tra nếu $id xuất hiện trong addDescription
            if (strpos($response['addDescription'], $id) !== false) {
                return true;
            }
        }
    
        return false;
    }
    
    public function getPayment() {
        $response = Http::withHeaders([ 
            'Accept' => '*/*', 
            'User-Agent' => 'Thunder Client (https://www.thunderclient.com)', 
        ]) 
        ->get('http://54.255.162.118:3000/getTransaction'); 
        
        return $response->json(); // Trả về dữ liệu JSON dưới dạng mảng
    }
    
    public function getServer(){
        try{
            // if(!auth('api')){
            //      return response()->json(['error' => 'Unauthorized'], 405);
            // }
            $vmess_links = 'vmess://eyJ2IjoiMiIsInBzIjoiWzFdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzM3IExHQyAtIE1BTkdWSVAiLCJhZGQiOiJtdjM3Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzJdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzY3IENNQSAtIE1BTkdWSVAiLCJhZGQiOiJtdjY3Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzNdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzg1IEhCSSAtIE1BTkdWSVAuIiwiYWRkIjoibXY4NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzRdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzk0IEpFUyAtIE1BTkdWSVAiLCJhZGQiOiJtdjk0Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzVdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzU5IEhNSSAtIE1BTkdWSVAiLCJhZGQiOiJtdjU5Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzZdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzg5IEtDTSAtIE1BTkdWSVAuIiwiYWRkIjoibXY4OS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzddXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzIzIENOTi1NQU5HVklQIiwiYWRkIjoibXYyMy5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzhdXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzkyIFBDTCAtIE1BTkdWSVAiLCJhZGQiOiJtdjkyLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzldXHUyMDNhIFx1ZDgzY1x1ZGRmYlx1ZDgzY1x1ZGRmMzkzIEhQSyAtIE1BTkdWSVAiLCJhZGQiOiJtdjkzLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzEwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM1MyBWQkYgLSBNQU5HVklQIiwiYWRkIjoibXY1My5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzExXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5OCBWSU4gLSBNQU5HVklQIiwiYWRkIjoibXY5OC5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzEyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDMgTUFDIC0gTUFOR1ZJUCIsImFkZCI6Im12MTAzLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzEzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyOSBMRk0gLSBNQU5HVklQIiwiYWRkIjoibXYyOS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzE0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3MSBEQk4gLSBNQU5HVklQIiwiYWRkIjoibXY3MS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzE1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM4MSBNT1ggLSBNQU5HVklQLiIsImFkZCI6Im12ODEubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzE2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM4MyBETk8gLSBNQU5HVklQLiIsImFkZCI6Im12ODMubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzE3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM2OSBCR0EgLSBNQU5HVklQIiwiYWRkIjoibXY2OS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzE4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMzOSBCRk0gLSBNQU5HVklQIiwiYWRkIjoibXYzOS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzE5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5NSBNWEUgLSBNQU5HVklQIiwiYWRkIjoibXY5NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzIwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0NyBERVYgLSBNQU5HVklQIiwiYWRkIjoibXY0Ny5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzIxXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyNyBUSUstTUFOR1ZJUCIsImFkZCI6Im12MTcubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzIyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMzMyBaSUsgLSBNQU5HVklQIiwiYWRkIjoibXYzMy5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzIzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMzNSBGQk4gLSBNQU5HVklQIiwiYWRkIjoibXYzNS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzI0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0NSBWSUYgLSBNQU5HVklQIiwiYWRkIjoibXY0NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzI1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM1NSBNSUEgLSBNQU5HVklQIiwiYWRkIjoibXY1NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzI2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM2NSBUTkcgLSBNQU5HVklQIiwiYWRkIjoibXY2NS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzI3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyNSBUQ0ktTUFOR1ZJUCIsImFkZCI6Im12MTUubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzI4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5MSBJQ08gLSBNQU5HVklQLiIsImFkZCI6Im12OTEubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzI5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDEgR0dDIC0gTUFOR1ZJUCIsImFkZCI6Im12MTAxLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzMwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3NSBCTUkgLSBNQU5HVklQLiIsImFkZCI6Im12NzUubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzMxXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDUgQklHIC0gTUFOR1ZJUCIsImFkZCI6Im12MTA1Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzMyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3MyBITkkgLSBNQU5HVklQLiIsImFkZCI6Im12NzMubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzMzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0OSBQUEEgLSBNQU5HVklQIiwiYWRkIjoibXY0OS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzM0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDQgQ0JDIC0gTUFOR1ZJUCIsImFkZCI6Im12MTA0Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzM1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDAgQ0ZPIC0gTUFOR1ZJUCIsImFkZCI6Im12MTAwLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzM2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM2MSBOVEEgLSBNQU5HVklQIiwiYWRkIjoibXY2MS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzM3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM1MSBMTEsgLSBNQU5HVklQIiwiYWRkIjoibXY1MS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzM4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0MyBTVU4gLSBNQU5HVklQIiwiYWRkIjoibXY0My5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzM5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyNSBIQk8tTUFOR1ZJUCIsImFkZCI6Im12MjUubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzQwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDIgUElLIC0gTUFOR1ZJUCIsImFkZCI6Im12MTAyLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzQxXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM4NyBTVEEgLSBNQU5HVklQLiIsImFkZCI6Im12ODcubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzQyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyMSBIUFAtTUFOR1ZJUCIsImFkZCI6Im12MjEubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzQzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM1NyBBQ00gLSBNQU5HVklQIiwiYWRkIjoibXY1Ny5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzQ0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMyNyBNT0sgLSBNQU5HVklQIiwiYWRkIjoibXYyNy5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzQ1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5NiBWSkEgLSBNQU5HVklQIiwiYWRkIjoibXY5Ni5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzQ2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMzMSBCQk8gLSBNQU5HVklQIiwiYWRkIjoibXYzMS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzQ3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxOSBTQUYgLSBNQU5HVklQIiwiYWRkIjoibXYxOS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzQ4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMyBHQk8gLSBNQU5HVklQIiwiYWRkIjoibXYxMy5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzQ5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3NyBSUlkgLSBNQU5HVklQLiIsImFkZCI6Im12NzcubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzUwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5OSBLQUkgLSBNQU5HVklQIiwiYWRkIjoibXY5OS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzUxXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMDYgU09NIC0gTUFOR1ZJUCIsImFkZCI6Im12MTA2Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzUyXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM0MSBWT00gLSBNQU5HVklQIiwiYWRkIjoibXY0MS5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzUzXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM3OSBNQ1AgLSBNQU5HVklQLiIsImFkZCI6Im12NzkubWFuZ3ZpcC5jb20iLCJwb3J0IjoiODAiLCJpZCI6IjYwMjkwYmIwLTQ1NDMtNDE0ZS05YzhhLTgzMjc2Njg1YzA0ZCIsImFpZCI6IjAiLCJuZXQiOiJ3cyIsInR5cGUiOiJub25lIiwiaG9zdCI6InY5LnRpa3Rva2Nkbi5jb20iLCJwYXRoIjoiIiwidGxzIjoiIn0=
                vmess://eyJ2IjoiMiIsInBzIjoiWzU0XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTMgSE5LIC0gTUFOR1ZJUCIsImFkZCI6Im12MTEzLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzU1XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTUgSE5YIC0gTUFOR1ZJUCIsImFkZCI6Im12MTE1Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzU2XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTQgSE5BIC0gTUFOR1ZJUCIsImFkZCI6Im12MTE0Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzU3XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTYgSE5QIC0gTUFOR1ZJUCIsImFkZCI6Im12MTE2Lm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzU4XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjMxMTIgSE5PIC0gTUFOR1ZJUCIsImFkZCI6Im12MTEyLm1hbmd2aXAuY29tIiwicG9ydCI6IjgwIiwiaWQiOiI2MDI5MGJiMC00NTQzLTQxNGUtOWM4YS04MzI3NjY4NWMwNGQiLCJhaWQiOiIwIiwibmV0Ijoid3MiLCJ0eXBlIjoibm9uZSIsImhvc3QiOiJ2OS50aWt0b2tjZG4uY29tIiwicGF0aCI6IiIsInRscyI6IiJ9
                vmess://eyJ2IjoiMiIsInBzIjoiWzU5XVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM2MyBNSVggLSBNQU5HVklQIiwiYWRkIjoibXY2My5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                vmess://eyJ2IjoiMiIsInBzIjoiWzYwXVx1MjAzYSBcdWQ4M2NcdWRkZmJcdWQ4M2NcdWRkZjM5NyBMT0YgLSBNQU5HVklQIiwiYWRkIjoibXY5Ny5tYW5ndmlwLmNvbSIsInBvcnQiOiI4MCIsImlkIjoiNjAyOTBiYjAtNDU0My00MTRlLTljOGEtODMyNzY2ODVjMDRkIiwiYWlkIjoiMCIsIm5ldCI6IndzIiwidHlwZSI6Im5vbmUiLCJob3N0IjoidjkudGlrdG9rY2RuLmNvbSIsInBhdGgiOiIiLCJ0bHMiOiIifQ==
                ';

        $encodedData = base64_encode($vmess_links);
        return response($encodedData, 200)
        ->header('Content-Type', 'text/plain');
        }catch(JWTException $ex){
            return response()->json(['error' => 'Unauthorized'], 409);
        }
    }
}
