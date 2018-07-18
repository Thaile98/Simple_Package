<?php

namespace THAILV\SimplePackage;

use App\Http\Controllers\Controller;
use App\JobStreetLink;

class SimplePackageController extends Controller {

      // public function __construct() {
      //   $this->middleware('auth');
      // }

      /**
      * Display a listing of the resource.
      *
      * @return Response
      */
      public function index()
      {
        $links = JobStreetLink::all();

        return view('SimplePackage::package')->with('links', $links);
      }
}