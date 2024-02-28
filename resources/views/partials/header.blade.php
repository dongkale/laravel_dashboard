<header>
	<nav class="navbar navbar-expand navbar-dark bg-primary">
		<a href="javascript:void(0)" class="sidebar-toggle text-light mr-3">
			<i class="fa fa-bars"></i>
		</a>
		<a href="" class="navbar-brand"> <i class="fa fa-clone"></i> Template </a>
		<div class="navbar-collapse collapse">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle"
						href="#"
						id="navbarDropdownMenuLink"
						data-toggle="dropdown">
						<i class="fa fa-user"></i> Hello, username!
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="javascript:void(0)" @click="state.peer = {}">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
</header>    