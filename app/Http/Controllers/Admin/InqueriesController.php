<?php

namespace App\Http\Controllers\Admin;

use App\Pipelines\Pipeline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingsRequest;
use App\Http\Requests\Admin\Settings\UpdateRequest;

class InqueriesController extends Controller
{
    protected $pipeline;

    public function __construct()
    {
        $this->pipeline = app(Pipeline::class)->setModel('Inquery');
    }

    public function index(Request $request)
    {
        $items = $this->pipeline->get();
        $delte_route = 'admin.inqueries.destroy';
        
        return view('admin.inqueries.index', compact('items','delte_route'));
    }

    public function export(Request $request)
    {
        //
    }
    
    public function destroy($id)
    {
        $this->pipeline->where('id', $id)->delete();

        return redirect()->route('admin.inqueries.index');
    }
    
}

