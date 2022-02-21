<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMenu;

class MenuController extends Controller
{
    public function index(){
        
        $menu = Menu::paginate();

        return view("menu.show", compact('menu'));
    }
    public function create(){
        return view("panel.menu.create");
    }
    public function show(){
        $menu = Menu::paginate();
        return view("panel.index", compact('menu'));
    }

    public function store(StoreMenu $request)
    {
        $menu = Menu::create($request->all());

        return redirect()->route("panel.index",$menu); //->with("ok","Menu Creado!");

    }
    
    public function edit(Menu $menu)
    {
        return view("panel.menu.edit", compact('menu'));
    }
    public function update(Request $request, Menu $menu)
    {
        $request->validate(
            [
            "dianumero"=>'required',
            "dianombre"=>'required',
            ]
        );

        $menu->update($request->all());
       
        return redirect()->route("panel.index"); //->with("ok","Menu Creado!");
    }
    public function destroy(Menu $menu)
    {

        $menu->delete();
       
        return redirect()->route("panel.index"); //->with("ok","Menu Creado!");
    }
}
