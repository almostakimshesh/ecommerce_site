
<?php


use App\Models\Posts2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Fashio extends Controller
{
    public function Index()
    {
        $data['posts2s'] = Posts2::orderBy('id','desc')->paginate(5);
        return view('frontend.fashion',$data);
    }

}
