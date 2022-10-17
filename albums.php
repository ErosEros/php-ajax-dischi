<?php

$albums = [
    [
        'title' => 'C@RA++ERE S?EC!@LE',
        'author' => 'THASUP',
        'year' => 2022,
        'poster' => 'https://www.rollingstone.it/wp-content/uploads/2022/09/thasup_Cover-album-b-1.jpg',
        'genre' => 'Rap'
    ],
    [
        'title' => 'MATERIA (PELLE)',
        'author' => 'Marco Mengoni',
        'year' => 2022,
        'poster' => 'https://www.allmusicitalia.it/wp-content/uploads/2022/10/marco-mengoni-cover-1024x1024-1.webp',
        'genre' => 'Pop'
    ],
    [
        'title' => 'BOTOX',
        'author' => 'Night Skinny',
        'year' => 2022,
        'poster' => 'https://www.newsic.it/wp-content/uploads/2022/09/NIGHT-SKINNY_BOTOX-album-2022-786x786.jpg',
        'genre' => 'Rap'
    ],
    [
        'title' => 'SIRIO',
        'author' => 'LAZZA',
        'year' => 2022,
        'poster' => 'https://m.media-amazon.com/images/I/810WA7s-7HL._SS500_.jpg',
        'genre' => 'Rap'
    ],
    [
        'title' => 'ANIMALS',
        'author' => 'PINK FLOYD',
        'year' => 2022,
        'poster' => 'https://m.media-amazon.com/images/I/61HYrCLz0ZL._AC_SY450_.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'NOI, LORO, GLI ALTRI',
        'author' => 'MARRACASH',
        'year' => 2022,
        'poster' => 'https://i.ytimg.com/vi/durbAfi4j6w/maxresdefault.jpg',
        'genre' => 'Rap'
    ]
];



header('Content-Type: application/json');
    echo json_encode($albums);


?>

