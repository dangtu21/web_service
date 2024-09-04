<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product'; // Tên bảng, chú ý là 'Product' viết hoa theo định nghĩa của bạn
    protected $primaryKey = 'id'; // Khóa chính của bảng
    public $timestamps = true; // Sử dụng timestamps (created_at và updated_at)

    // Các thuộc tính có thể được mass-assigned
    protected $fillable = [
        'category_id', 'title', 'price', 'time', 'capacity', 'brandwidth', 'supportSim', 'serverLocation', 'discount','device', 'deleted'
    ];

    // Nếu bạn không muốn lưu `deleted`, có thể thêm thuộc tính `hidden`
    protected $hidden = ['deleted'];
}
