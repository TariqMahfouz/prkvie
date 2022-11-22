<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends CRUDController
{
    public function __invoke(Request $request)
    {
        $data = [
            'admins' => $this->pipeline->setModel('Admin')->count(),
            'inqueries' => $this->pipeline->setModel('Inquery')->count(),
        ];
        return view('admin.home')->with($data);
    }

}
