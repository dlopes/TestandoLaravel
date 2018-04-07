
<script src="/js/jquery/jquery.min.js"></script>
	<script src="/css/bootstrap/js/bootstrap.min.js"></script>
	<link href="/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="/css/custom.css" rel="stylesheet">
<div class="container">

<?php 
$avatar ='data:image/png;base64,'.base64_encode($p->avatar);
 ?>

	<div class="row bloco-curso-det" style="position: relative;">

		

		<div class="bloco-top col-sm-12 col-md-12" style="height: 100px;">
			
			<a href="{{action('CursoController@show')}}" class="link-bloco" style="color: #fff;">
			<span class="glyphicon glyphicon-arrow-left"> </span>
			</a>
			<br>
			<br>
			<h2 style="" class="title-prin2" id="title-prin">
			{{$p->title}}
			</h2>		
		</div>

	    <div class="col-sm-2 col-md-2 " id="coluna-1"></div>

	    <div class="col-sm-7 col-md-7 absolute" id="absolute-mobile" style="">

	      	
			<div class="col-sm-12 col-md-12" >
				<div class="col-sm-12 col-md-12 title-detalhe" id="mobile">
					<p><h3 style="color: #000000;">{{$p->title}}</h3></p>
				</div>
				<div class="col-sm-12 col-md-12">
					<p>{{$p->description}}</p>
				</div>

				<div class="col-sm-12 col-md-10 ">
					<p><span class="glyphicon glyphicon-calendar"></span> {{$p->start}}</p>
				</div>
				<div class="col-sm-12 col-md-10">
					<p><span class="glyphicon glyphicon-time"></span> {{$p->start}}</p>
				</div>
				<div class="col-sm-12 col-md-10">
					<p><span class="glyphicon glyphicon-map-marker"></span> {{$p->street}}, {{$p->number}} - {{$p->neighborhood}} - {{$p->city}}</p>
				</div>
				<div class="col-sm-12 col-md-10">
					<p><span class="glyphicon glyphicon-usd"></span> {{$p->price}}</p>
				</div>
				<div class="col-sm-12 col-md-10">
					<p><span class="glyphicon glyphicon-log-out"></span></i> {{$p->category}}</p>
				</div>
				<div class="col-sm-12 col-md-10">
					<p>
					<img src="{{$avatar}}" class="img-responsive img-circle" alt="" width="30" height="30"> 
					<span width="60">{{$p->name}}</span>
					</p>
				</div>
				<div class="col-sm-12 col-md-10">
					<div class="col-sm-5 col-md-5"></div>
					<div class="col-sm-3 col-md-3 botao-isc">
						<button type="button" class="btn btn-warning" style="margin-left: 20%; color: #000000;">INSCRIÇÃO</button>
					</div>
					<div class="col-sm-2 col-md-2"></div>
					
				</div>

			</div>
		</div>
		<div class="col-sm-2 col-md-2"></div>


	</div>

	<script type="text/javascript">

	//https://pt.stackoverflow.com/questions/131677/identificar-se-o-dispositivo-%C3%A9-pc-ou-celular-e-utilizar-um-c%C3%B3digo-diferente-pra/131745

	var mobile = false;
	function detectar_mobile() {
	var check = false; //wrapper no check
		(function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
		return check;
	}
	mobile = detectar_mobile();

	if (mobile) {
		$("#title-prin").addClass( "title-prin" );
		$("#title-prin").removeClass( "title-prin2" );

		$("#mobile").removeClass("title-detalhe");
		$( "#mobile" ).addClass( "title-prin2" );
		$("#absolute-mobile").removeClass("absolute");
		$( "#absolute-mobile" ).addClass( "absolute-off" );

		$("#coluna-1").addClass( "bloco-prin" );
	

	} else {
		$("#title-prin").addClass( "title-prin2 " );
		$("#title-prin").removeClass( "title-prin" );

		$("#mobile").removeClass("title-prin2");
		$( "#mobile" ).addClass( "title-detalhe" );

		$("#absolute-mobile").removeClass("absolute-off");
		$( "#absolute-mobile" ).addClass( "absolute" );
	}
	</script>
	
</div>

