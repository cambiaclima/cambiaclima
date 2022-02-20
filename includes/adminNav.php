<nav class="navbar sticky-top navbar-expand-md navbar-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav mr-auto">
					<?php
						// Define each name associated with an URL
						$dir = "/admin/";
						$urls = array(
							'Bacheca' => $dir.'bacheca.php',
							'Login' => $dir.'login.php',
              'Logout' => $dir.'logout.php',
						);

						foreach ($urls as $name => $url) {
							print '<li  class="nav-item'.(($currentPage === $name) ? ' active': '').'">'."\n\t\t\t\t\t\t".
							'<a class="nav-link" href="'.$url.'">'.$name.'</a>'."\n\t\t\t\t\t".
							'</li>'."\n\t\t\t\t\t";
						}
						?>
</ul>
			</div>
		</nav>
