<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Requests\PortfolioRequest;
use Auth;

class PortfolioController extends Controller
{
    public function postIndex(PortfolioRequest $r){
    	$r['user_id'] = Auth::user()->id;
    	//dd ($r->all());

    	$r['status'] = '';
    	if ($_FILES['picture1']){
    		//$r['picture'] = $_FILES['picture'];
    		$r['picture'] = \App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
    	} else {
    		$r['picture'] = '';
    	}
    	//dd($r['picture1']);
    	Portfolio::create($r->all());

    	/*$obj = new Portfolio;
    	$obj->name = $_POST['name'];
    	$obj->body = $_POST['body'];
    	$obj->picture = '';
    	$obj->user_id = Auth::user()->id;
    	$obj->save();*/

    	return redirect()->back();
    }

    public function getAll(){
    	$objs = Portfolio::all();
    	return view('portfolios', compact("objs"));
	}

    public function getOne($id=null){
        $obj = Portfolio::find($id);
        //dd($obj);
        return view('portfolio', compact("obj"));
    }

    public function getDelete($id=null){
        //$work = Portfolio::where('$userid', Auth::user()->id)->where('id', $id)->first();

        $work = Portfolio::find($id);
        $filepath = public_path(). '/uploads/' . Auth::user()->id . "/" . $work->picture;
        $filepath_s = public_path(). '/uploads/' . Auth::user()->id . "/s" . $work->picture;
        $filepath_ss = public_path(). '/uploads/' . Auth::user()->id . "/ss" . $work->picture;

        if (file_exists($filepath)){
            @unlink($filepath);
            @unlink($filepath_s);
            @unlink($filepath_ss);
        }
        $work->delete();
        return redirect()->back();
    }

    /**
     * @param id - идентификатор работы из портфолио
     * @return view с полями для редактирования
     */
    public function getEdit($id=null){
        $work = Portfolio::find($id);
        return view('portfolio_edit', compact('work'));
    }

    public function postEdit($id=null, Request $r){
        //$work = Portfolio::where('$userid', Auth::user()->id)->where('id', $id)->first();
        $work = Portfolio::find($id);
        //dd($r->all());
        isset($r->all()['name'])?$work->name = $r->all()['name']: null;
        isset($r->all()['body'])?$work->body = $r->all()['body']: null;

        $arr = [
            "name" => $work->name,
            "body" => $work->body,
        ];

    	if ($_FILES['picture1'] and $_FILES['picture1']['size']){
            $arr['picture'] = \App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
            $filepath = public_path(). '/uploads/' . Auth::user()->id . "/" . $work->picture;
            $filepath_s = public_path(). '/uploads/' . Auth::user()->id . "/s" . $work->picture;
            $filepath_ss = public_path(). '/uploads/' . Auth::user()->id . "/ss" . $work->picture;

            if (file_exists($filepath)){
                @unlink($filepath);
                @unlink($filepath_s);
                @unlink($filepath_ss);
            }

    	} else {
    		//$r['picture'] = '';
        }

        if (isset($r->all()['delete_picture']) and $r->all()['delete_picture'] === "on"){
            $filepath = public_path(). '/uploads/' . Auth::user()->id . "/" . $work->picture;
            $filepath_s = public_path(). '/uploads/' . Auth::user()->id . "/s" . $work->picture;
            $filepath_ss = public_path(). '/uploads/' . Auth::user()->id . "/ss" . $work->picture;

            if (file_exists($filepath)){
                @unlink($filepath);
                @unlink($filepath_s);
                @unlink($filepath_ss);
            }

            $arr['picture'] = \App::make('App\Libs\Imag')->url(public_path() . "/uploads/no_img.png");
        }


    	//dd($work);
        //Portfolio::update($work->all());
        //Portfolio::update($r->all());
        Portfolio::whereId($id)->update($arr);
        //Portfolio::find($id)->update(array($work->all()));

    	/*$obj = new Portfolio;
    	$obj->name = $_POST['name'];
    	$obj->body = $_POST['body'];
    	$obj->picture = '';
    	$obj->user_id = Auth::user()->id;
        $obj->save();*/
        //dd($this->getOne($id));
        //$this::class->getOne($id);

        //return $this->getOne($id);
        //$userId = Auth::user()->id;
        $works = Portfolio::where('user_id', Auth::user()->id)->get();
        return view('home', compact("works"));
        //$a = new HomeController::class;
        //return HomeController::->index();

        /* $work = Portfolio::find($id);
        $filepath = public_path(). '/uploads/' . Auth::user()->id . "/" . $work->picture;
        $filepath_s = public_path(). '/uploads/' . Auth::user()->id . "/s" . $work->picture;
        $filepath_ss = public_path(). '/uploads/' . Auth::user()->id . "/ss" . $work->picture;

        if (file_exists($filepath)){
            @unlink($filepath);
            @unlink($filepath_s);
            @unlink($filepath_ss);
        }
        $work->delete();
        return redirect()->back(); */




    }
}
