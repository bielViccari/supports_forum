<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();
        return view('admin/supports/index', compact('supports'));
    }

    public function create() {
        return view('admin/supports/create');
    }

    public function store(Request $request) {
        $data = $request->only(['subject', 'body']);

        $data['status'] = 'a';  
        Support::create($data);
        return redirect()->route('support.index')->with('message',  'Assunto publicado com sucesso');
    }
}
