<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $sito = [
            [
                'img' => 'https://picsum.photos/200',
                'name' => 'Chi siamo',
                'smallDescrip' => 'Entra per leggere chi siamo!',
                'link' => route('chisiamo')
            ],
            [
                'img' => 'https://picsum.photos/200',
                'name' => 'Servizi',
                'smallDescrip' => 'Entra per scoprire i nostri servizi!',
                'link' => route('servizi')
            ]
        ];

        return view('home', ['pagine' => $sito]);
    }

    public function chisiamo()
    {
        $persone = [
            [
                'name' => 'Ismaele Nichele',
                'role' => 'OP',
            ],
            [
                'name' => 'Antonino Lagona',
                'role' => 'Grande',
            ],
            [
                'name' => 'Renato Rongone',
                'role' => 'Maestro',
            ]
        ];
        return view('chisiamo', ['persone' => $persone]);
    }

    public function chisiamoDet($name)
    {
        $persone = [
            [
                'name' => 'Ismaele Nichele',
                'role' => 'OP',
                'anni' => '27',
                'img' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Antonino Lagona',
                'role' => 'Grande',
                'anni' => '25',
                'img' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Renato Rongone',
                'role' => 'Maestro',
                'anni' => '28',
                'img' => 'https://picsum.photos/200/300'
            ]
        ];

        foreach ($persone as $persona) {
            if ($persona['name'] == $name) {
                return view('chisiamo-det', ['persona' => $persona]);
            }
        }
        abort(404);
    }

    public function servizi()
    {
        $servizi = [
            [
                'name' => 'Sgommata',
                'function' => 'Mutanda Sporca'
            ],
            [
                'name' => 'Pioggerella',
                'function' => 'Un pò di acqua'
            ],
            [
                'name' => 'Bournout',
                'function' => 'Il mio cervello ora'
            ]
        ];
        return view('servizi', ['servizi' => $servizi]);
    }


    public function serviziDet($service)
    {
        $servizi = [
            [
                'name' => 'Sgommata',
                'function' => 'Mutanda Sporca',
                'prezzo' => '1000 Euri',
                'img' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Pioggerella',
                'function' => 'Un pò di acqua',
                'prezzo' => '1000 Euri',
                'img' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Bournout',
                'function' => 'Il mio cervello ora',
                'prezzo' => '1000 Euri',
                'img' => 'https://picsum.photos/200/300'
            ]
        ];
        foreach ($servizi as $servizio) {
            if ($servizio['name'] == $service) {
                return view('servizi-det', ['servizio' => $servizio]);
            }
        }
        abort(404);
    }
}
