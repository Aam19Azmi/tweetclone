<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class CekLogin implements FilterInterface
{

    public function before(RequestInterface $request, $argument = null)
    {
        
        if (!session()->get('currentuser')) {
            return redirect()->to('/auth');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response ,$argument = null)
    {
        
    }

}
