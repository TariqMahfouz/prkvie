<?php

namespace App\Http\Controllers\Admin;

use App\Pipelines\Pipeline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Galleries\CreateRequest;
use App\Http\Requests\Admin\Galleries\UpdateRequest;

class GalleryController extends Controller
{
    protected $pipeline;
    protected $has_files = false;

    public function __construct()
    {
        $this->pipeline = app(Pipeline::class);
    }

    public function index(Request $request)
    {
        $delete_route = 'admin.galleries.destroy';

        $allImages = $this->pipeline->setModel('Gallery')->get();
        $allImages = collect($allImages);

        $gallery = $allImages->where('type','gallery');
        $bgImages = $allImages->where('type','bg_image');
        
        return view('admin.galleries.index', compact('gallery','bgImages','delete_route'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $imagePath = uploadFile($request->image, 'uploads');
            $data = [
                'image' => $imagePath,
                'type' => 'gallery'
            ];
            $this->pipeline->setModel('Gallery')->create($data);
        }
        return redirect()->route('admin.galleries.index');
    }
    
    public function destroy($id)
    {
        $this->pipeline->setModel('Gallery')->where('id', $id)->delete();

        return redirect()->route('admin.galleries.index');
    }
    

    public function createBackground(Request $request)
    {
        if ($request->hasFile('image')) {
            $imagePath = uploadFile($request->image, 'uploads');
            $data = [
                'image' => $imagePath,
                'type' => 'bg_image'
            ];
            $this->pipeline->setModel('Gallery')->create($data);
        }
        return redirect()->route('admin.galleries.index');
    }

}

