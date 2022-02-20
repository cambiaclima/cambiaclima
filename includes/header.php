<?php
$gr=0;
if($aggiuntivo!=""){
  $gr=1;
}

?>
<header class="container-fluid" style="margin-bottom:0; background-color: #f2f2f2;">
			<div class="row align-items-center">
				<div class="col-md-<?php echo 4-$gr;?>"style="max-height: 150px;">
					<img name="logo" id="logo" src="/cambiaclima/img/logo.png" alt="Logo">
				</div>
				<div class="col-md-4">
					<h1><big>NUOVO TITOLO</big></h1>
				</div>
				<div class="col-md-<?php echo 4-$gr;?> d-none d-md-block text-right">
					<p>Sito creato dalla 5°A informatica 2021/22
					In collaborazione con:</p><br>
					<a target="_blank" href="https://www.arpalombardia.it">ARPA lombardia</a> |
					<a target="_blank" href="https://www.lifeprepair.eu/">PrepAIR</a> |
					<a target="_blank" href="https://www.iisfalcone-righi.edu.it">IIS Falcone-Righi</a> |
          <a target="_blank" href="https://www.github.com/tia-cima">Mattia Cimadomo</a>
				</div>
        <?php
					if($aggiuntivo!="")
						print '<div class="col-md-2 d-none d-md-block text-right" style="max-height: 150px;">'.$aggiuntivo.'</div>';
				?>
			</div>
		</header>
