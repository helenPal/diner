<ul class="nav nav-sidebar">
	
					
						<?php 
						if($pageid==1){?>
						<li class="active"><a href="index.php">Overview <span class="sr-only">(current)</span></a></li>
						<?php
									  }
						else{
						?><li ><a href="index.php">Overview </a></li>
						<?php
						}
						?>
						
					
						<?php
						if ( $pageid == 2 ) {
							?>
							<li class="active"><a href="staff.php">Staff<span class="sr-only">(current)</span></a></li>
						<?php
						
									  }
						else{
						?>
							<li><a href="staff.php">Staff</a></li>
							<?php
						}
						?>
						<?php
						if ( $pageid == 3 ) {
							?>
							<li class="active"><a href="position.php">Positions<span class="sr-only">(current)</span></a></li>
						<?php
						
									  }
						else{
						?>
							<li><a href="position.php">Positions</a></li>
							<?php
						}
						?>
						<?php
						if ( $pageid == 4 ) {
							?>
							<li class="active"><a href="rosters.php">Roster<span class="sr-only">(current)</span></a></li>
						<?php
						
									  }
						else{
						?>
							<li><a href="rosters.php">Roster</a></li>
							<?php
						}
						?>								
					
					
					<?php  
  
					/* 
					 *ADD LOG OUT LINK TO MENU 
					 */  

					//Check if logged in 

						//add link to logout  


					?>  

				</ul>