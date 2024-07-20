@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <img src="https://cdnthumb.baotintuc.vn/ha_w/300/https@@$$media.baotintuc.vn/Upload/of1YDQmgYWjUVVEP2wPLg/files/2024/06/TinPR/bosch19_7.jpg" class="card-img-top" alt="Ảnh tin tức">
                <div class="card-body">
                    <h1 class="card-title">VinFast bàn giao lô SUV điện VF e34 đầu tiên tại Indonesia</h1>
                    <p class="card-text">Ngày 18/7/2024, VinFast - nhà sản xuất ô tô điện hàng đầu Việt Nam, đã chính thức bàn giao lô SUV điện VF e34 đầu tiên tại Indonesia. Đây là một mốc son quan trọng trong hành trình mở rộng thị trường quốc tế của VinFast.</p>
                    <p class="card-text"><small class="text-muted">Lượt xem: {{ rand(1000, 10000) }}</small></p>
                    <p class="card-text">Nội dung chi tiết tin tức...</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Tin tức liên quan</h3>
            <div class="card mb-3">
                <img src="https://cdnthumb.baotintuc.vn/ha_w/300/https@@$$media.baotintuc.vn/Upload/of1YDQmgYWjUVVEP2wPLg/files/2024/06/TinPR/bosch19_7.jpg" class="card-img-top" alt="Ảnh tin tức liên quan 1" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><a href="#">Trung tâm Nghiên cứu và Phát triển công nghệ ô tô Bosch Việt Nam đánh dấu 10 năm đổi mới sáng tạo</a></h5>
                    <p class="card-text"><small class="text-muted">Lượt xem: {{ rand(500, 5000) }}</small></p>
                </div>
            </div>
            <div class="card mb-3">
                <img src="https://cdnthumb.baotintuc.vn/ha_w/300/https@@$$media.baotintuc.vn/Upload/XjfgEPYM30O8z6jY3MHxSw/files/2024/07/1907/01-Pearl-Reaidence.png" class="card-img-top" alt="Ảnh tin tức liên quan 2" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><a href="#">Tổ hợp căn hộ Pearl Residence – Nơi tận hưởng phong vị biển trọn ngày đêm tại Cửa Lò</a></h5>
                    <p class="card-text"><small class="text-muted">Lượt xem: {{ rand(500, 5000) }}</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


