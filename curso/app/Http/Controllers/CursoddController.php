<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('created_at', 'desc')->paginate(10);
        return view('cursos.index',['cursos' => $cursos]);
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function add(CursoRequest $request)
    {
        $curso = new Curso;
        $curso->title       		= $request->title;
        $curso->description 		= $request->description;
        $curso->price       	    = $request->price;
        $curso->start     	 	= $request->start;
        $curso->finish      		= $request->finish
        $curso->categoria_id      = $request->categoria_id
        $curso->consultor_id      = $request->consultor_id
        $curso->consultor_id      = $request->consultor_id
        $curso->save();
        return redirect()->route('cursos.index')->with('message', 'Curso Criado com sucesso!');
    }
    public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit',compact('curso'));
    }

     public function update(CursoRequest $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->title       		= $request->title;
        $curso->description 		= $request->description;
        $curso->price       	    = $request->price;
        $curso->start     	 	= $request->start;
        $curso->finish      		= $request->finish
        $curso->categoria_id      = $request->categoria_id
        $curso->consultor_id      = $request->consultor_id
        $curso->consultor_id      = $request->consultor_id
        $curso->save();
        return redirect()->route('cursos.index')->with('message', 'Curso Alterado com sucesso!');
    }
  
    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return redirect()->route('cursos.index')->with('alert-success','Curso deletado!');
    }


}
