<?php

namespace App\Http\Resources;

use Illuminate\Support\Collection;

class Inspirational
{
    public $quote;
    public $author;
    public $category;

    private $quotes = [
        [
            "quote" => 'When there is no desire, all things are at peace.',
            "author" => 'Laozi',
            "category" => "inspiration",
            "tags" => [
                "mindfulness", "happiness", "peace",
            ],
        ],
        [
            "quote" => 'Simplicity is the ultimate sophistication.',
            "author" => 'Leonardo da Vinci',
            "category" => "inspiration",
            "tags" => [
                "mindfulness", "happiness", "life",
            ],
        ],
        [
            "quote" => 'Simplicity is the essence of happiness.',
            "author" => 'Cedric Bledsoe',
            "category" => "inspiration",
            "tags" => [
                "mindfulness", "happiness", "life",
            ],
        ],
        [
            "quote" => 'Smile, breathe, and go slowly.',
            "author" => 'Thich Nhat Hanh',
            "category" => "inspiration",
            "tags" => [
                "mindfulness", "life",
            ],
        ],
        [
            "quote" => 'Simplicity is an acquired taste.',
            "author" => 'Katharine Gerould',
            "category" => "inspiration",
            "tags" => [
                "mindfulness", "simplicity", "life",
            ],
        ],
        [
            "quote" => 'Well begun is half done.',
            "author" => 'Aristotle',
            "category" => "",
            "tags" => [
                "action", "building", "completion", "work",
            ],
        ],
        [
            "quote" => 'He who is contented is rich.',
            "author" => 'Laozi',
            "category" => "inspiration",
            "tags" => [
                "mindfulness", "happiness", "wealth",
            ],
        ],
        [
            "quote" => 'Very little is needed to make a happy life.',
            "author" => 'Marcus Antoninus',
            "category" => "inspiration",
            "tags" => [
                "mindfulness", "happiness",
            ],
        ],
        [
            "quote" => 'It is quality rather than quantity that matters.',
            "author" => 'Lucius Annaeus Seneca',
            "category" => "inspiration",
            "tags" => [
                "quality", "here", "now", "mindfulness",
            ],
        ],
        [
            "quote" => 'Act only according to that maxim whereby you can, at the same time, will that it should
become a universal law.',
            "author" => 'Immanuel Kant',
            "category" => "inspiration",
            "tags" => [
                "mindfulness",
            ]
        ],
        [
            "quote" => 'Knowing is not enough; we must apply. Being willing is not enough; we must do.',
            "author" => 'Leonardo da Vinci',
            "category" => "inspiration",
            "tags" => [
                "knowledge", "application", "doing",
            ],
        ],
        [
            "quote" => 'An unexamined life is not worth living.',
            "author" => 'Socrates',
            "category" => "inspiration",
            "tags" => [
                "mindfulness", "living", "life",
            ],
        ],
        [
            "quote" => 'Happiness is not something ready-made. It comes from your own actions.',
            "author" => 'Dalai Lama',
            "category" => "inspiration",
            "tags" => [
                "happiness", "building", "actions",
            ],
        ],
        [
            "quote" => 'The only way to do great work is to love what you do.',
            "author" => 'Steve Jobs',
            "category" => "inspiration",
            "tags" => [
                "work", "love",
            ],
        ],
        [
            "quote" => 'The whole future lies in uncertainty: live immediately.',
            "author" => 'Seneca',
            "category" => "inspiration",
            "tags" => [
                "mindfulness", "here", "now",
            ],
        ],
        [
            "quote" => 'Waste no more time arguing what a good man should be, be one.',
            "author" => 'Marcus Aurelius',
            "category" => "inspiration",
            "tags" => [
                "mindfulness", "humanity", "goodness",
            ],
        ],
        [
            "quote" => 'It is not the man who has too little, but the man who craves more, that is poor.',
            "author" => 'Seneca',
            "category" => "inspiration",
            "tags" => [
                "happiness", "wanting",
            ],
        ],
        [
            "quote" => 'I begin to speak only when I am certain what I will say is not better left unsaid',
            "author" => 'Cato the Younger',
            "category" => "inspiration",
            "tags" => [
                "thinking", "speaking",
            ],
        ],
        [
            "quote" => 'Order your soul. Reduce your wants.',
            "author" => 'Augustine',
            "category" => "inspiration",
            "tags" => [
                "simplicity",
            ],
        ],
        [
            "quote" => 'Be present above all else.',
            "author" => 'Naval Ravikant',
            "category" => "inspiration",
            "tags" => [
                "here", "now", "mindfulness",
            ],
        ],
        [
            "quote" => 'Let all your things have their places; let each part of your business have its time.',
            "author" => ' Benjamin Franklin',
            "category" => "inspiration",
            "tags" => [
                "places", "time", "organisation",
            ],
        ],
        [
            "quote" => 'if you do not have a consistent goal in life, you can not live it in a consistent way.',
            "author" => 'Marcus Aurelius',
            "category" => "inspiration",
            "tags" => [
                "goals",
            ],
        ],
        [
            "quote" => 'No surplus words or unnecessary actions.',
            "author" => 'Marcus Aurelius',
            "category" => "inspiration",
            "tags" => [
                "simplicity",
            ],
        ],
        [
            "quote" => 'People find pleasure in different ways. I find it in keeping my mind clear.',
            "author" => 'Marcus Aurelius',
            "category" => "inspiration",
            "tags" => [
                "mind", "pleasure",
            ],
        ],
        [
            "quote" => 'Simplicity is the consequence of refined emotions.',
            "author" => 'Jean D\'Alembert',
            "category" => "inspiration",
            "tags" => [
                "simplicity", "emotions",
            ],
        ],
    ];

    public function __construct()
    {
        $theQuote = Collection::make($this->quotes)->random();
        $this->quote = $theQuote['quote'];
        $this->author = $theQuote['author'];
        $this->category = $theQuote['category'];
        $this->tags = $theQuote['tags'];
    }
}
