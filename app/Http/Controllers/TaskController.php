<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function get() {
      return Task::where('user_id', Auth::id())->get();
    }
    public function delete($id) {
      return Task::where('id', $id)->update(array('deleted' => true));
    }
}
