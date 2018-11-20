<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

    public function create(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'max:255',
            'conclusion_date' => 'nullable|date',
        ]);
        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'conclusion_date' => $request->input('conclusion_date'),
            'user_id' => Auth::id()
        ]);
        return response()->json(['status' => 'success']);
    }

    public function delete($id) {
      Task::where('id', $id)->update(array('deleted' => true));
      return ["status"=>"success"];
    }
}
