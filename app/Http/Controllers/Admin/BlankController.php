<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blank;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class BlankController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        $blanks = Blank::paginate(14);

        return view('admin.blanks.index', compact('blanks'));
    }

    public function show(): void
    {
        abort(404);
    }

    public function create(): View
    {
        return view('admin.blanks.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required'
        ]);

        $blank = Blank::create($request->all());
        $blank->setFile($request->file('link'));

        $blank->saveOrFail();

        return redirect()->route('admin.blanks.index')->with('success', 'Бланк был создан.');
    }

    public function edit(Blank $blank): View
    {
        return view('admin.blanks.edit', compact('blank'));
    }

    public function update(Request $request, Blank $blank): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $blank->name = $request->get('name');

        if($request->file('link')) {
            $blank->setFile($request->file('link'));
        }

        $blank->saveOrFail();

        return redirect()->route('admin.blanks.index')->with('success', 'Бланк был обновлён.');
    }

    public function destroy(Blank $blank): RedirectResponse
    {
        $blank->delete();

        return redirect()->route('admin.blanks.index')->with('success', 'Бланк был удалён.');
    }
}