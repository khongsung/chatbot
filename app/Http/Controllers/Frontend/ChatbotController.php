<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
   	public function index() {
   		return response()->json([
   			'name' => 'Abigail',
   			'state' => 'CA',
   		]);
   	}
}
