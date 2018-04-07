@extends('layout.principal')

@section('conteudo')

<?php 
//print_r($cursos);
 ?>
 <div class="resultado">
 @if(empty($cursos))
  <div class="alert alert-danger">
    Você não tem nenhum produto cadastrado.
  </div>


 
 @else
  <div class="row bloco-curso" >
  @foreach ($cursos as $c)
 
    <div class="col-sm-5 col-md-3">
    <a href="{{action('CursoController@detalhes', $c->id)}}" class="link-bloco" style="text-decoration: none; color: #999999;">

      <div class="thumbnail" style="height: 130px;">
        <div style="margin-left: 5%;">
          <p>{{$c->category}}</p>
        </div>
        

        <div style="margin-left: 5%;">
           <h4 class="name-curso">{{$c->title}}</h4>
        </div>

        <div style="margin-left: 5%;" >
          <p>{{$c->city}}</p> 
        </div>

        <div class="rodape-bloco" >
          <div class="col-sm-11 col-md-9" style="margin-left: -1%; ">{{$c->start}}</div>
          <div class="col-sm-2 col-md-1" style="margin-left: 10%; "><span class="glyphicon glyphicon-calendar"></span></div>
        </div>

      </div>
      </a>
    </div>
    @endforeach

  </div>
  
 @endif

 <script type="text/javascript">
 var token = "{{ csrf_token() }}";
  
    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $(".pesquisa-curso").click(function(event){
      event.preventDefault()
      $.ajax({
        url: '{{URL::route('getCursos')}}',
        type:"post",

        /*beforeSend: function (xhr) {
          var token = $('meta[name="csrf_token"]').attr('content');

          if (token) {
          return xhr.setRequestHeader('X-CSRF-TOKEN', token);
          }
        },*/
        data: { '_token': token, curso: $(".pesq").val()},
        //dataType: 'json',
        success:function(data){
        $(".resultado").html(data);
        console.log(data);
        },error:function(){ 
        alert("error!!!!");
        }
      }); //end of ajax
    });
      

  </script>
 </div>



 

@stop