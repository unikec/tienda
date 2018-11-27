<?php
function GetHTMLPregunta()
{ // crea HTML lo devuelve como cadena
    $pregunta1 = [
        'text_pregunta' => 'Sexo',
        'tipo' => true,
        'campo' => 'sexo',
        'respuestas' => [
            [
                'etiqueta' => 'Hombre',
                'valor' => 'Hombre'
            ],
            [
                'etiqueta' => 'Mujer',
                'valor' => 'Mujer'
            ]
        ]
    ];
    
    $pregunta2 = [
        'text_pregunta' => 'Aficiones ',
        'tipo' => false,
        'campo' => 'aficiones[]',
        'respuestas' => [
            [
                'etiqueta' => 'Deporte',
                'valor' => 'Deporte',
                'funcion' => 'preguntaExtra()'
            ],
            [
                'etiqueta' => 'Cine',
                'valor' => 'Cine'
            ],
            [
                'etiqueta' => 'Teatro',
                'valor' => 'Teadro'
            ]
        ]
    ];
    $pregunta3 = [
        'text_pregunta' => 'Estudios que tiene ',
        'tipo' => false,
        'campo' => 'estudios[]',
        'respuestas' => [
            [
                'etiqueta' => 'ESO',
                'valor' => 'ESO',
                'funcion' => 'preguntaExtra()'
            ],
            [
                'etiqueta' => 'C.F.G Medio',
                'valor' => 'C.F.G Medio'
            ],
            [
                'etiqueta' => 'C.F.G Superior',
                'valor' => 'C.F.G Superior'
            ],
            [
                'etiqueta' => 'Grado',
                'valor' => 'Grado'
            ]
        ]
    ];
    
    $pregunta4 = [
        'text_pregunta' => 'Lugar al que te gustaría ir de vacaciones ',
        'tipo' => true,
        'campo' => 'vacaciones',
        'respuestas' => [
            [
                'etiqueta' => 'Mediterraneo',
                'valor' => 'Mediterraneo',
                'funcion' => 'preguntaExtra()'
            ],
            [
                'etiqueta' => 'Caribe',
                'valor' => 'Caribe'
            ],
            [
                'etiqueta' => 'EEUU',
                'valor' => 'EEUU'
            ],
            [
                'etiqueta' => 'Centro Europa',
                'valor' => 'Centro Europa'
            ]
        ]
    ];
    $preguntas = [
        '1' => $pregunta1,
        '2' => $pregunta2,
        '3' => $pregunta3,
        '4' => $pregunta4
    ];
    return $preguntas;
}

function GetHTMLPreguntasExtras()
{ // crea HTML lo devuelve como cadena
    $preguntasExtra1 = [
        'text_pregunta' => '¿Qué tipo de deporte ?',
        'tipo' => true,
        'campo' => 'deporte',
        'respuestas' => [
            [
                'etiE' => 'Ciclismo',
                'valorE' => 'Ciclimo'
            ],
            [
                'etiE' => 'Tennis',
                'valorE' => 'Tennis'
            ],
            [
                'etiE' => 'Futbol',
                'valorE' => 'Futbol'
            ],
            [
                'etiE' => 'Baloncesto',
                'valorE' => 'Baloncesto'
            ],
            [
                'etiE' => 'Voleibol',
                'valorE' => 'Voleibol'
            ]
        ]
    ];
    $preguntasExtra2 = [
        'text_pregunta' => '¿en que año finalizaste tus estudios ?'
    ];
    $preguntasExtra3 = [
        'text_pregunta' => '¿a que lugar del Mediterraneo en concreto ?',
        'tipo' => false,
        'campo' => 'mediterraneo',
        'respuestas' => [
            [
                'etiE' => 'Cataluña',
                'valorE' => 'Cataluña'
            ],
            [
                'etiE' => 'Valencia',
                'valorE' => 'Valencia'
            ],
            [
                'etiE' => 'Andalucia',
                'valorE' => 'Andalucia'
            ],
            [
                'etiE' => 'Tunez',
                'valorE' => 'Tunez'
            ]
        ]
    ];
    $preguntasExtra = [
        '1' => $preguntasExtra1,
        '2' => $preguntasExtra2,
        '3' => $preguntasExtra3
    ];
    return $preguntasExtra;
}