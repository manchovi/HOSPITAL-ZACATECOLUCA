<?php
session_start();
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
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> DASHBOARD # 1
					</a>
				</li>

				<li>
					<a href="home1.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> DASHBOARD # 2
					</a>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
					<i class="zmdi zmdi-case zmdi-hc-fw"></i> GRÁFICAS [°C ~ RH%] <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="graficalinea.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Gráfica Líneas [°C y RH %]</a>
						</li>
						<li>
							<a href="graficabarras.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Gráfica Barras [°C y RH %]</a>
						</li>
						<li>
							<a href="graficabarrasanual.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Estadística Mensual [°C y RH %]</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> CONSULTAS<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="./consulta1.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Vista General</a>
						</li>
						<li>
							<a href="./consulta2.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Filtrar por Fechas</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> REPORTES <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<!-- <a href="./consulta3/consulta3.php" target="_blank"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Reporte General</a> -->
							<a href="./reporte2.php" target="_blank"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> General</a>
						</li>
						<li>
							<a href="./reporte1.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Por Fechas</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> ACERCA DE <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="acerca-hospital.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Hospital</a>
						</li>
						<li>
							<a href="acerca-autor.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Autor</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>