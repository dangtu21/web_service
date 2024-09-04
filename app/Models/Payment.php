<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    // Định nghĩa tên bảng nếu không tuân theo quy tắc tự động
    protected $table = 'payment';

    // Các thuộc tính không thể bị mass assign
    protected $fillable = ['payString', 'order_id'];

    // Nếu bạn sử dụng các trường `timestamps`, bạn có thể định nghĩa chúng ở đây
    public $timestamps = false;

    // Định nghĩa mối quan hệ với model OrderDetails
    public function orderDetails()
    {
        return $this->belongsTo(OrderDetails::class, 'order_id');
    }
}
