<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table = 'order_details'; // Tên bảng, chú ý là 'Product' viết hoa theo định nghĩa của bạn
    protected $primaryKey = 'id'; // Khóa chính của bảng
    public $timestamps = true; // Sử dụng timestamps (created_at và updated_at)

    // Các thuộc tính có thể được mass-assigned
    protected $fillable = [
        'product_id', 'price', 'num', 'total_money', 'user_id' ,'expiration_date','payment','created_at'
    ];
}
