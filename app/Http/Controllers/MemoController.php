<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class MemoController extends Controller
{
    public function view()
    {
        $memos = Memo::all();
        return view('memos', compact('memos'));
    }

    public function create()
    {
        return view('memos.create'); // メモ登録フォームを表示
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:255',
        ]);

        // メモを保存
        Memo::create([
            'content' => $request->content,
        ]);

        return redirect('/memos-view')->with('success', 'メモを登録しました！');
    }

    public function destroy($id)
    {
        $memo = Memo::findOrFail($id); // IDでメモを取得
        $memo->delete();

        return redirect('/memos-view')->with('success', 'メモを削除しました！');
    }

}

