<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;

class Crudcontroller extends Controller
{
    public function tambahdata() {
    	$data = array(
    		'kode_angkot' => Input::get('kode_angkot'),
    		'id_awal' => Input::get('id_awal'),
    		'id_akhir' => Input::get('id_akhir'),
    		);

    	DB::table('angkot')->insert($data);
    	return Redirect::to('/read')->with('message', 'berhasil menambah data');
    }
}
