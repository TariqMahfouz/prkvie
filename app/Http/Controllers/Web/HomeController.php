<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InqueryRequest;

class HomeController extends Controller
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function index()
    {
        $galleryImages = $this->pipeline->setModel('Gallery')->get();
        $galleryImages = collect($galleryImages);

        $settings = array_flip($this->pipeline->setModel('Setting')->pluck('key','value')->toArray());
        
        $sliderlImages = $galleryImages->where('type','bg_image');
        $carouselImages = $galleryImages->where('type','gallery');
        $projectImage = $galleryImages->where('type','project_image')->first();
        $secondSectionImage = $galleryImages->where('type','second_section_bg_image')->first();
        
        return view('index', compact('settings','sliderlImages','carouselImages','projectImage','secondSectionImage'));
    }

    public function submit(InqueryRequest $request)
    {
        // dd($request->all());
        $data = $request->only(['name','phone','email','unit_type','prefered_time']);
        $this->pipeline->setModel('Inquery')->create($data);
        
        return back();
    }
}
