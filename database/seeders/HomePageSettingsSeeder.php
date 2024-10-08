<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomePageSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_page_settings')->insert([
            [
                'id' => 1,
                'home_page_id' => 14,
                'key' => 'cooking',
                'value' => json_encode([
                    'title' => 'Become An Instructor',
                    'description' => "Training programs can bring you a super exciting experience of learning through online! You never face any negative experience while enjoying your classes.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent per conubi himenaeos Awesome site Lorem Ipsum has been the industry's standard dummy text ever since the unknown printer took a galley of type and scrambled.\r\n\r\nConsectetur adipiscing elit. Nunc vulputate ad litora torquent per conubi himenaeos Awesome site Lorem Ipsum has been the industry's standard dummy text ever since.",
                    'video_url' => 'https://www.youtube.com/watch?v=i-rv4VQiBko',
                    'image' => 'instructor_image.jpg',
                ]),
                'created_at' => '2024-05-15 09:43:54',
                'updated_at' => '2024-05-18 05:41:24',
            ],
            [
                'id' => 3,
                'home_page_id' => 15,
                'key' => 'university',
                'value' => json_encode([
                    'image' => '6645d6bfb089f.webp',
                    'faq_image' => '6645d6dde24a8.webp',
                ]),
                'created_at' => '2024-05-16 02:31:00',
                'updated_at' => '2024-05-20 00:49:13',
            ],
            [
                'id' => 4,
                'home_page_id' => 17,
                'key' => 'development',
                'value' => json_encode([
                    'title' => 'Leading the Way in Software Development',
                    'description' => "Far far away, behind the word mountains, far from the away countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.\r\nTraining programs can bring you a super exciting experience of learning through online! You never face any negative experience while enjoying your classes. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent",
                    'video_url' => null,
                    'image' => '664896388fa23.soft-dev-banner.webp',
                ]),
                'created_at' => '2024-05-18 05:40:13',
                'updated_at' => '2024-05-18 08:08:06',
            ],
            [
                'id' => 5,
                'home_page_id' => 13,
                'key' => 'kindergarden',
                'value' => json_encode([
                    'title' => 'Creating A Community Of Life Long Learners',
                    'description' => "Training programs can bring you a super exciting experience of learning through online! You never face any negative experience while enjoying your classes.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent\r\nTraining programs can bring you a super exciting experience of learning through online! You never face any negative experience while enjoying your classes. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent",
                    'video_url' => null,
                    'image' => '6648b505c1c03.community-banner.webp',
                ]),
                'created_at' => '2024-05-18 08:02:45',
                'updated_at' => '2024-05-18 08:07:59',
            ],
            [
                'id' => 6,
                'home_page_id' => 18,
                'key' => 'marketplace',
                'value' => json_encode([
                    'instructor' => [
                        'title' => 'Become an instructor',
                        'description' => "Training programs can bring you a super exciting experience of learning through online! You never face any negative experience while enjoying your classes.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ad litora torquent per conubi himenaeos Awesome site Lorem Ipsum has been the industry's standard dummy text ever since the unknown printer took a galley of type and scrambled.\r\n\r\nConsectetur adipiscing elit. Nunc vulputate ad litora torquent per conubi himenaeos Awesome site Lorem Ipsum has been the industry's standard dummy text ever since.",
                        'video_url' => 'https://www.youtube.com/watch?v=i-rv4VQiBko',
                        'image' => '6649b445b3b52.video-area-banner1.webp',
                    ],
                    'slider' => [
                        ['banner_title' => 'LEARN FROM TODAY', 'banner_description' => 'Academy Starter is a community for creative people'],
                        ['banner_title' => 'LEARN FROM TODAY', 'banner_description' => 'Academy Starter is a community for creative people'],
                        ['banner_title' => 'LEARN FROM TODAY', 'banner_description' => 'Academy Starter is a community for creative people'],
                        ['banner_title' => 'LEARN FROM TODAY', 'banner_description' => 'Academy Starter is a community for creative people'],
                    ],
                ]),
                'created_at' => '2024-05-18 22:55:44',
                'updated_at' => '2024-05-20 01:22:25',
            ],
            [
                'id' => 7,
                'home_page_id' => 19,
                'key' => 'meditation',
                'value' => json_encode([
                    'big_image' => '664b020ed2bbb.png',
                    'meditation' => [
                        ['banner_title' => 'Balance Body & Mind', 'image' => '664b07fa650dd.yoga-benefit-1.svg', 'banner_description' => 'It is a long established fact that a reader will be distracted by the readable content.'],
                        ['banner_title' => 'Balance Body & Minds', 'image' => '664b08157c7ed.yoga-benefit-2.svg', 'banner_description' => 'It is a long established fact that a reader will be distracted by the readable content.'],
                        ['banner_title' => 'Balance Body & Mind', 'image' => '664b08157cab8.yoga-benefit-3.svg', 'banner_description' => 'It is a long established fact that a reader will be distracted by the readable content.'],
                        ['banner_title' => 'Balance Body & Mind', 'image' => '664b08157d2be.yoga-benefit-4.svg', 'banner_description' => 'It is a long established fact that a reader will be distracted by the readable content.'],
                        ['banner_title' => 'Balance Body & Mind', 'image' => '664b08263ba18.yoga-benefit-5.svg', 'banner_description' => 'It is a long established fact that a reader will be distracted by the readable content.'],
                        ['banner_title' => 'Balance Body & Minddf', 'image' => '664b08263bcca.yoga-benefit-6.svg', 'banner_description' => 'It is a long established fact that a reader will be distracted by the readable content.'],
                    ],
                ]),
                'created_at' => '2024-05-19 23:54:56',
                'updated_at' => '2024-05-20 02:21:58',
            ],
        ]);
    }
}
