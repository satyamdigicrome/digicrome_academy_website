<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Festive Season Theme
    |--------------------------------------------------------------------------
    |
    | A temporary, date-driven theme: twinkling lights falling through the
    | header, a one-time petal / sparkle shower, and on the homepage a
    | clickable banner above the hero, a canopy of lights across the hero and
    | a greeting card with rotating quotes. Each phase switches itself on and off by date
    | (Asia/Kolkata, both ends inclusive), so nothing needs to be removed by
    | hand once the season is over.
    |
    | Set FESTIVE_THEME=false in .env to switch everything off immediately.
    | Add ?festive=diwali (or any phase key) to a URL to preview a phase
    | outside its dates; ?festive=off previews the site without the theme.
    |
    */

    'enabled' => env('FESTIVE_THEME', true),

    'phases' => [

        // Mahalaya (10 Oct) through the day after Vijaya Dashami (21 Oct 2026).
        'durga-puja' => [
            'starts' => '2026-10-10',
            'ends' => '2026-10-22',

            'eyebrow' => 'Shubho Durga Puja',

            // Homepage banner above the hero; clicking it opens the enquiry
            // form. Swap in your own artwork any time (webp/jpg/png all work),
            // updating width/height to match the new files.
            'banner' => [
                'desktop' => ['src' => 'assets/images/festive/durga-puja-banner-desktop.webp', 'width' => 1600, 'height' => 600],
                'mobile' => ['src' => 'assets/images/festive/durga-puja-banner-mobile.webp', 'width' => 900, 'height' => 760],
                'alt' => 'Shubho Durga Puja from Digicrome: this Puja, gift a friend Data Science & AI. Enquire now.',
            ],

            'title' => 'This Puja, gift a friend the power of Data Science',
            'text' => 'Celebrate the festival of strength by helping someone you care about start a career in Data Science & AI. Refer a friend and earn exciting rewards when they enroll.',
            'lead_source' => 'Website Festive offer',

            'quotes' => [
                'May Maa Durga bless you with the strength to learn, the courage to grow, and the power of Data Science.',
                'This Durga Puja, the best gift for your friend is not a sweet box — it is a career in Data Science.',
                'Just as good triumphs over evil, may data-driven decisions triumph over guesswork in your career.',
                'Pandal hopping with friends? Take them on a bigger journey this Puja — Data Science & AI.',
                'Share the festive joy: refer a friend to Digicrome and both of you start the season with a reward.',
            ],
        ],

        // Lead-up to Diwali (8 Nov) through the day after Bhai Dooj (10 Nov 2026).
        'diwali' => [
            'starts' => '2026-10-23',
            'ends' => '2026-11-11',

            'eyebrow' => 'Happy Diwali',

            'banner' => [
                'desktop' => ['src' => 'assets/images/festive/diwali-banner-desktop.svg', 'width' => 1600, 'height' => 600],
                'mobile' => ['src' => 'assets/images/festive/diwali-banner-mobile.svg', 'width' => 900, 'height' => 760],
                'alt' => 'Happy Diwali from Digicrome: this Diwali, gift a friend Data Science & AI. Enquire now.',
            ],

            'title' => 'This Diwali, light up a friend’s career with Data Science',
            'text' => 'A diya lights one home; a skill lights a whole future. Gift a friend the reward of learning Data Science & AI this festive season — and earn exciting rewards when they enroll.',
            'lead_source' => 'Website Festive offer',

            'quotes' => [
                'This Diwali, gift your friend something brighter than diyas — a career in Data Science.',
                'Let the lights of Diwali guide you from raw data to real insights.',
                'Sweets last a day, crackers last a minute — Data Science skills last a lifetime.',
                'May Maa Lakshmi bless you with growth — and may your models grow more accurate every day.',
                'Light a diya at home, and light up a friend’s future: refer them to Digicrome and earn a reward.',
            ],
        ],

    ],

];
