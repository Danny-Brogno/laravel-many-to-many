<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loggedController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }

  public function edit($id) {

    return view("pages.edit");
  }
}
