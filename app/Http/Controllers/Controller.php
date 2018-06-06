<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get_info_cuc($url, $method, $body)
    {
        $body['appid'] = 'KEPaT6';
        $body['skey']= 'f255d83af93b3786ca280a978a8481e3d2ed6181';
        $client = new Client();
        $res= $client->request(
            $method,
            $url,
            ['json' => $body]
        );
    }
}
