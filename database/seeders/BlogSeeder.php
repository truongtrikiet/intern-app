<?php

namespace Database\Seeders;

use App\Enums\BlogStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'user_email' => 'demotest@gmail.com',
            'title' => 'Đừng để vẻ ngoài của Real Madrid đánh lừa',
            'slug' => Str::slug('Dung de ve ngoai cua Real Madrid danh lua'),
            'description' => 'Kylian Mbappe ghi bàn, Real Madrid thắng trận Siêu cúp châu Âu. Một khởi đầu dường như quá hoàn hảo với “Los Blancos”.',
            'content' => 'Cuộc sống vẫn tiếp diễn như thường lệ với Real Madrid. 
                            Không quan trọng đối thủ là ai, một lần nữa, như trận gặp Dortmund ở chung kết Champions League cách đây 3 tháng, “Los Blancos” trải qua hiệp một nhạt nhòa. 
                            Tuy nhiên, đại diện thủ đô Tây Ban Nha như sở hữu sức mạnh kỳ lạ, giúp bản thân luôn giành chiến thắng dù cho có chuyện gì xảy ra.',
            'publish_date' => Carbon::now(),
            'status_blog' => BlogStatus::NewBlog,
        ]);
    }
}
