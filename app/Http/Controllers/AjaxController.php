<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Portfolio;

use App\Models\Emails;

class AjaxController extends Controller
{
    public function postIndex() {
        $id = (int)$_POST['id'];
        //echo $id;
        $obj = Portfolio::find($id);
        return view('ajax.modal', compact('obj'));
    }

    public function getEmail() {
        if (isset($_GET['email']) and $_GET['email']) {
            $obj = new Emails;
            $obj->email = $_GET['email'];
            $obj->save();
            echo "Ваш e-mail " . $_GET['email']  . " принят!";
        } else {
            echo "Произошла ошибка!";
        }
    }
}

