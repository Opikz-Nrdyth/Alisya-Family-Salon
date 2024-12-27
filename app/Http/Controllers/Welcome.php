<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Welcome extends Controller
{
    public function welcome()
    {

        // Fetch products with their related prices
        $products = Product::with(['pricesOne', 'pricesTwo'])->get();

        // Transform the data to match the desired structure
        $cards = $products->map(function ($product) {
            return [
                'image' => $product->image,
                'titleOne' => $product->title_one,
                'titleTwo' => $product->title_two,
                'pricesOne' => $product->pricesOne->map(function ($price) {
                    return [
                        'name' => $price->name,
                        'price' => $this->formatPrice($price->price)
                    ];
                })->toArray(),
                'pricesTwo' => $product->pricesTwo->map(function ($price) {
                    return [
                        'name' => $price->name,
                        'price' => $this->formatPrice($price->price)
                    ];
                })->toArray(),
            ];
        })->toArray();

        $portofolio = [
            [
                'image' => 'https://placehold.co/400x400',
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
            ],
            [
                'image' => 'https://placehold.co/400x400',
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
            ],
            [
                'image' => 'https://placehold.co/400x400',
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
            ],
            [
                'image' => 'https://placehold.co/400x400',
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
            ],
            [
                'image' => 'https://placehold.co/400x400',
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
            ],
        ];

        $testimonials = [
            [
                'message' => 'Pelayanan yang luar biasa! Saya merasa sangat nyaman dan puas dengan potongan rambut saya. Staf salon sangat ramah dan profesional.',
                'user' => [
                    'name' => 'Sarah Johnson',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Salon ini benar-benar membuat saya merasa istimewa. Tidak hanya rambut saya yang jadi lebih bagus, tapi suasana di sini juga sangat menyenangkan.',
                'user' => [
                    'name' => 'Maria S.',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Sangat puas dengan perawatan kuku dan rambut saya. Hasilnya sempurna dan tahan lama! Tempatnya juga sangat bersih dan nyaman.',
                'user' => [
                    'name' => 'Jessica Brown',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Ini adalah salon terbaik yang pernah saya coba! Saya selalu merasa lebih percaya diri setelah setiap kunjungan.',
                'user' => [
                    'name' => 'Linda White',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Saya selalu merasa puas setelah melakukan perawatan wajah di salon ini. Tenaga ahli yang sangat berpengalaman membuat saya merasa aman.',
                'user' => [
                    'name' => 'Anne Lee',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Layanan yang sangat memuaskan! Saya datang untuk treatment rambut dan hasilnya luar biasa. Wajib coba!',
                'user' => [
                    'name' => 'Sophia Kim',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Salon ini benar-benar tahu bagaimana cara merawat rambut. Setelah perawatan di sini, rambut saya jadi lebih sehat dan berkilau!',
                'user' => [
                    'name' => 'Emily Carter',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Saya suka dengan pelayanan di salon ini. Mereka selalu memberikan tips yang berguna tentang perawatan rambut dan kulit.',
                'user' => [
                    'name' => 'Olivia Turner',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Hasil potongan rambut saya luar biasa! Salon ini sangat mengerti apa yang saya inginkan. Saya pasti akan kembali lagi.',
                'user' => [
                    'name' => 'Amelia Harris',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ],
            [
                'message' => 'Saya melakukan perawatan wajah di sini, dan hasilnya sangat memuaskan. Stafnya sangat ramah dan ahli dalam bidangnya.',
                'user' => [
                    'name' => 'Isabella Martinez',
                    'profile' => 'https://placehold.co/250x250'
                ]
            ]
        ];

        $location = "Universitas Teknologi Yogyakarta";

        $query = str_replace(" ", "+", $location);

        return view('welcome', [
            'cards' => $cards,
            'portofolio' => $portofolio,
            'testimonials' => $testimonials,
            'query' => $query
        ]);
    }

    private function formatPrice($price)
    {
        // Convert price from database (assuming it's stored in thousands)
        // For example, 130000 becomes "130k"
        return (floor($price / 1000)) . 'k';
    }
}
