<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'title' => 'Trung tâm Nghiên cứu và Phát triển công nghệ ô tô Bosch Việt Nam đánh dấu 10 năm đổi mới sáng tạo',
            'content' => 'This is a summary of the first news item.',
            'category_id' => 1,
            'views' => 100,
            'image_url' => 'https://cdnthumb.baotintuc.vn/ha_w/300/https@@$$media.baotintuc.vn/Upload/of1YDQmgYWjUVVEP2wPLg/files/2024/06/TinPR/bosch19_7.jpg'
        ]);

        News::create([
            'title' => 'Đặc quyền sống tiện nghi, kinh doanh sầm uất tại nơi cửa ngõ thông thương quốc tế',
            'content' => 'This is a summary of the second news item.',
            'category_id' => 2,
            'views' => 300,
            'image_url' => 'https://cdnthumb.baotintuc.vn/ha_w/300/https@@$$media.baotintuc.vn/Upload/XjfgEPYM30O8z6jY3MHxSw/files/2024/07/1807/Vinhomes-Ocean%20-Park-2.jpg'
        ]);
        
        News::create([
            'title' => 'Tổ hợp căn hộ Pearl Residence – Nơi tận hưởng phong vị biển trọn ngày đêm tại Cửa Lò',
            'content' => 'This is a summary of the third news item.',
            'category_id' => 3,
            'views' => 240,
            'image_url' => 'https://cdnthumb.baotintuc.vn/ha_w/300/https@@$$media.baotintuc.vn/Upload/XjfgEPYM30O8z6jY3MHxSw/files/2024/07/1907/VinFast-1.jpg'
        ]);

        News::create([
            'title' => 'Tổ hợp căn hộ Pearl Residence – Nơi tận hưởng phong vị biển trọn ngày đêm tại Cửa Lò',
            'content' => 'This is a summary of the fourth news item.',
            'category_id' => 4,
            'views' => 270,
            'image_url' => 'https://cdnthumb.baotintuc.vn/ha_w/300/https@@$$media.baotintuc.vn/Upload/XjfgEPYM30O8z6jY3MHxSw/files/2024/07/1907/01-Pearl-Reaidence.png'
        ]);

        News::create([
            'title' => 'Triển vọng khai thác đất hiếm ở Việt Nam từ hợp tác doanh nghiệp Việt Nam - Hàn Quốc',
            'content' => 'This is a summary of the fifth news item.',
            'category_id' => 5,
            'views' => 800,
            'image_url' => 'https://cdnthumb.baotintuc.vn/ha_w/300/https@@$$media.baotintuc.vn/Upload/BUnOnh8kCJUksZiuSPj5yg/files/2024/07/kyketdathiem.jpg'
        ]);

        News::create([
            'title' => 'Tạo ra đột phá mới trong lĩnh vực chăm sóc sức khỏe',
            'content' => 'This is a summary of the sixth news item.',
            'category_id' => 6,
            'views' => 500,
            'image_url' => 'https://cdnmedia.baotintuc.vn/Upload/XjfgEPYM30O8z6jY3MHxSw/files/2024/07/1907/ky-ket.jpg'
        ]);
    }
}
