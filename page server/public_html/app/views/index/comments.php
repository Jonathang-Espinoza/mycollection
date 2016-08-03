<div class="container">
	<ol class="breadcrumb">
      <li><a href="?controller=Index">Index</a></li>
       <li class="active">Comentarios</li>
    </ol>
<!-- TUTORIAL VIDEO -->
<section class="wrap" id="tutorial-video">
	<div class="container">
		<h1>Nos importa tus comentarios!</h1>
		
		<p class="lead">
			La colecciones son  paciones de grandes y chicos, por tal motivo tuve la idea  de crear la pagina para que todo el mundo pueda ver las colecciones de todos, las 24 horas desde cualquier dispositivo. Aún falta destalles pero vamos paso a paso  logrando grandes cosas, <small>ya sabes comparte tu colección es gratis! </small> .
		</p>
		<p class="lead">
			Disfrute de este video de esta gran pación.
		</p>

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cGzWak1Hr5U" frameborder="0" allowfullscreen width="600px" height="150px" ></iframe><!-- embed-responsive-item -->
					
				</div><!-- embed-responsive  -->
			</div><!-- end col-sm-8 -->
		</div><!-- end row -->
	</div> <!-- end container -->
</section>
<!--  -->
<!-- END TUTORIAL VIDEO -->
</div><!-- end container -->

<!-- DISCUSSIONS -->
<section class="wrap" id="discussions">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">	
				<h2>Comentarios:</h2>

				<form action="lecture_submit" method="get" accept-charset="utf-8">
					<textarea class="form-control" rows="3" placeholder="Escribe tus comentarios..." name="txtComentarios"></textarea>
					<p id="btn-comentario">
						<button type="submit" class="btn btn-danger btn-lg">Publicar</button>
					</p>
				</form><!-- end form -->
			</div><!-- end col-sm-8  -->


		</div><!-- end row -->
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">

						<!-- COMMENT -->
						<div class="media">
							<div class="media-left">
								<img  class="media-object img-circle" src="img/user.png" width="64" height="64" alt="Foto del Perfil">
							</div><!-- end media-left -->
							<div class="media-body">
								<h4>DAC Laud <small class="text-muted">hace dos horas</small></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

								<p><button class="btn btn-primary btn-xs" type="button" data-toggle="collapse" data-target="#answerForm" aria-expanded="false"
								aria-controls="answerForm">Responder</button></p>

								<!-- FORM ANSWER -->
								<form  class="collapse" id="answerForm" accept-charset="utf-8">
									<textarea class="form-control" rows="3" placeholder="Escribe aquí tu respuesta...." name="txtAnswer"></textarea>

									<p id="btn-font-answer">
										<button type="submit" class="btn btn-danger btn-xs"> Enviar</button>
									</p>
								</form>
								<!-- END FORM ANSWER -->

								<!-- ANSWER -->
								<div class="media">
									<div class="media-left">
										<img  class="media-object img-circle" src="img/user.png" width="64" height="64" alt="Foto del Perfil">
									</div><!-- end media-left -->
									<div class="media-body">
										<h4>Luz Mery <small class="text-muted">hace una horas</small></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
									</div><!-- end media-body -->
								</div><!-- end media -->
								<!-- END ANSWER -->

							</div><!-- end media-body -->
						</div><!-- end media -->
						<!-- END COMMENT -->
					</div><!-- end panel-body -->
					
				</div><!-- end panel panel-default  -->
			</div><!--end col-sm-8  -->
		</div><!-- end row -->

	
</section>
<!-- END DISCUSSIONS -->

</div><!-- END container -->

