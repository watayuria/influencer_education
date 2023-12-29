<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassName;
use App\Models\Curriculum;
use App\Models\Banner;
use App\Models\DeliveryTime;

class UserController extends Controller
{
    public function index() {
        $class_names = ClassName::all();
        $curriculums = Curriculum::all();
        $delivery_times = DeliveryTime::all();

        return view('index', compact('class_names', 'curriculums', 'delivery_times'));
    }

    public function top() {
        $banners = Banner::all();
        return view('top', compact('banners'));
    }
}
