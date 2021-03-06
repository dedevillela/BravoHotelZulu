<span class="sub-menu-statistic column mobile">
	<a href="#" onclick="showSubMenu(); return false;">Statistics <i class="fa fa-plus"></i></a>
</span>
<div class="sub-menu sub-menu-container">
	<ul class="nav nav-pills">
		<li><a href="<?php print $globalURL; ?>/airport/<?php print $_GET['airport']; ?>" <?php if (strtolower($current_page) == "airport-detailed"){ print 'class="active"'; } ?>>Detailed</a></li>
		<li class="dropdown">
		    <a class="dropdown-toggle <?php if(strtolower($current_page) == "airport-statistics-aircraft" || strtolower($current_page) == "airport-statistics-registration" || strtolower($current_page) == "airport-statistics-manufacturer"){ print 'active'; } ?>" data-toggle="dropdown" href="#">
		      Aircraft <span class="caret"></span>
		    </a>
		    <ul class="dropdown-menu" role="menu">
		      <li><a href="<?php print $globalURL; ?>/airport/statistics/aircraft/<?php print $_GET['airport']; ?>">Aircraft Type</a></li>
					<li><a href="<?php print $globalURL; ?>/airport/statistics/registration/<?php print $_GET['airport']; ?>">Registration</a></li>
					<li><a href="<?php print $globalURL; ?>/airport/statistics/manufacturer/<?php print $_GET['airport']; ?>">Manufacturer</a></li>
		    </ul>
		</li>
		<li class="dropdown">
		    <a class="dropdown-toggle <?php if(strtolower($current_page) == "airport-statistics-airline" || strtolower($current_page) == "airport-statistics-airline-country"){ print 'active'; } ?>" data-toggle="dropdown" href="#">
		      Airline <span class="caret"></span>
		    </a>
		    <ul class="dropdown-menu" role="menu">
		      <li><a href="<?php print $globalURL; ?>/airport/statistics/airline/<?php print $_GET['airport']; ?>">Airline</a></li>
			  <li><a href="<?php print $globalURL; ?>/airport/statistics/airline-country/<?php print $_GET['airport']; ?>">Airline by Country</a></li>
		    </ul>
		</li>
		<li class="dropdown">
		    <a class="dropdown-toggle <?php if(strtolower($current_page) == "airport-statistics-departure-airport" || strtolower($current_page) == "airport-statistics-departure-airport-country" || strtolower($current_page) == "airport-statistics-arrival-airport" || strtolower($current_page) == "airport-statistics-arrival-airport-country"){ print 'active'; } ?>" data-toggle="dropdown" href="#">
		      Airport <span class="caret"></span>
		    </a>
		    <ul class="dropdown-menu" role="menu">
		      <li><a href="<?php print $globalURL; ?>/airport/statistics/departure-airport/<?php print $_GET['airport']; ?>">Departure Airport</a></li>
		      <li><a href="<?php print $globalURL; ?>/airport/statistics/departure-airport-country/<?php print $_GET['airport']; ?>">Departure Airport by Country</a></li>
			  <li><a href="<?php print $globalURL; ?>/airport/statistics/arrival-airport/<?php print $_GET['airport']; ?>">Arrival Airport</a></li>
			  <li><a href="<?php print $globalURL; ?>/airport/statistics/arrival-airport-country/<?php print $_GET['airport']; ?>">Arrival Airport by Country</a></li>
		    </ul>
		</li>
		<li><a href="<?php print $globalURL; ?>/airport/statistics/route/<?php print $_GET['airport']; ?>" <?php if (strtolower($current_page) == "airport-statistics-route"){ print 'class="active"'; } ?>>Route</a></li>
		<li><a href="<?php print $globalURL; ?>/airport/statistics/time/<?php print $_GET['airport']; ?>" <?php if (strtolower($current_page) == "airport-statistics-time"){ print 'class="active"'; } ?>>Time</a></li>
	</ul>
</div>