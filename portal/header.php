<?php
 @session_start();
?>

<!-- SideBar -->
<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				<small><strong>MENÚ PRINCIPAL</strong></small> <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/mysignals.png" alt="UserIcon">
					<figcaption class="text-center text-titles"><?php echo $_SESSION['user']; ?></figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.php">
						<!-- <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> HOME -->
						<!-- <i class="material-icons">more_vert</i> HOME -->
						<i class="material-icons"> home</i> HOME
					</a>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
					<i class="material-icons">dashboard</i> DASHBOARD BIOMÉTRICOS <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">

					<li>
					<a href="home.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> DASHBOARD # 1: SRT-GRAPH
					</a>
					</li>

					<li>
						<a href="home1.php">
							<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> DASHBOARD # 2: RT
						</a>
					</li>

					<li>
						<a href="home2.php">
							<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> DASHBOARD # 3: RT-GRAPH
						</a>
					</li>


						<!-- <li>
							<a href="graficalinea.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Gráfica Líneas [°C y RH %]</a>
						</li>
						<li>
							<a href="graficabarras.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Gráfica Barras [°C y RH %]</a>
						</li>
						<li>
							<a href="graficabarrasanual.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Estadística Mensual [°C y RH %]</a>
						</li> -->
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="material-icons">search</i> CONSULTAS<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="./consulta1.php"><i class="material-icons">pageview</i> Vista General</a>
						</li>
						<li>
							<a href="./consulta2.php"><i class="material-icons">date_range</i> Filtrar por Fechas</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="material-icons">print</i> REPORTES <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<!-- <a href="./consulta3/consulta3.php" target="_blank"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Reporte General</a> -->
							<a href="./reporte2.php" target="_blank"><i class="material-icons">local_printshop</i> General</a>
						</li>
						<li>
							<a href="./reporte1.php"><i class="material-icons">local_printshop</i> Por Fechas <i class="material-icons">date_range</i></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
					<i class="material-icons">info</i> ACERCA DE <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="acerca-hospital.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Asociado I.</a>
						</li>
						<li>
							<a href="acerca-autor.php"><i class="material-icons">info_outline</i> Autor</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>