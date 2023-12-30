<?php

namespace App\Controllers\Stok;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;

class Penyesuaian extends BaseController
{
    public function index($page = 'index')
    {
        $uri = current_url(true);

        if (!is_file(APPPATH . 'Views/stok/penyesuaian/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $data = [
            "title" => ucfirst('Penyesuaian'),
            "uri"   => $uri,
            "session" => session(),
        ];
        return view('stok/penyesuaian/' . $page, $data);
    }
}
