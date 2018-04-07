<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;
use App\Http\Requests;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cursos = Curso::orderBy('created_at', 'desc')->paginate(10);
        return view('curso.index',['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $curso = new Curso;
        $curso->title               = $request->title;
        $curso->description         = $request->description;
        $curso->price               = $request->price;
        $curso->start           = $request->start;
        $curso->finish              = $request->finish;
        $curso->categoria_id      = $request->categoria_id;
        $curso->consultor_id      = $request->consultor_id;
        $curso->consultor_id      = $request->consultor_id;
        $curso->save();
        return redirect()->route('curso.index')->with('message', 'Curso Criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
    //$cursos = Curso::all();

    $cursos = Curso::join('categorias', 'cursos.categoria_id', '=', 'categorias.id')
    ->join('consultors', 'cursos.consultor_id', '=', 'consultors.id')
    ->join('enderecos', 'cursos.endereco_id', '=', 'enderecos.id')
            ->orderBy('title', 'asc')
            ->get();


          
        
       /* $cursos = Curso::
     join('categorias', function($query){
         $query->on('categorias.id','=','cursos.categoria_id') 
      })
      ->join('consultors', function($query){
         $query->on('consultors.id','=','cursos.consultor_id') 
      })
      ->join('enderecos',function($query){
         $query->on('enderecos.id','=','cursos.endereco_id') 
      });*/
     
        //dd($cursos);
        return view('curso.show')->with('cursos', $cursos);

    }

    public function getCursos(Request $dados)
    {
        //$cursos = Curso::all();
        $cursos = Curso::join('categorias', 'cursos.categoria_id', '=', 'categorias.id')
        ->orderBy('title', 'asc')
        ->orWhere('title', 'like', '%' . $dados["curso"] . '%')
        ->get();
        //dd($dados);
        //return \response($cursos);
        $html = "<div>".$cursos ."</div>";
        //$html = View::make('cursos.getCursos', $cursos)->render();
        //return Response::json(array('html' => $cursos));
        return \Response::json($html);

    }

    public function detalhes($id){

        $curso = Curso::join('categorias', 'cursos.categoria_id', '=', 'categorias.id')
        ->join('consultors', 'cursos.consultor_id', '=', 'consultors.id')
        ->join('enderecos', 'cursos.endereco_id', '=', 'enderecos.id')
        ->where('cursos.id','=',$id)
        ->get();

        //dd($curso[0][avatar]);
        if(empty($curso)) {
            return "Esse curso não existe";
        }
        return view('curso.detalhes')->with('p', $curso[0]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $id)
    {
        $curso = Curso::findOrFail($id);
        return view('curso.edit',compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $id)
    {
       $curso = Curso::findOrFail($id);
        $curso->title               = $request->title;
        $curso->description         = $request->description;
        $curso->price               = $request->price;
        $curso->start           = $request->start;
        $curso->finish              = $request->finish;
        $curso->categoria_id      = $request->categoria_id;
        $curso->consultor_id      = $request->consultor_id;
        $curso->consultor_id      = $request->consultor_id;
        $curso->save();
        return redirect()->route('curso.index')->with('message', 'Curso Alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return redirect()->route('curso.index')->with('alert-success','Curso deletado!');
    }
}
