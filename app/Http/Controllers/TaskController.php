<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function get() {
      return Task::where('user_id', Auth::id())->get();
    }

    public function getFromDate($date) {
      return Task::where('user_id', Auth::id())
        ->whereBetween('conclusion_date', [$date.' 00:00:00', $date.' 23:59:59'])
        ->get();
    }

    public function delete($id) {
      Task::where('id', $id)->update(array('deleted' => true));
      return ["status"=>"success"];
    }
}
