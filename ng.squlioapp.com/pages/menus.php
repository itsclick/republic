<?php
// WEBSITE MENU //
						
function meniNEV($login){
	
$query="SELECT * from tblmenus, user_perimision where 
user_perimision.menuid=tblmenus.mid 
AND tblmenus.mparent=0 AND tblmenus.mstatus=1 
AND user_perimision.user=".$_SESSION['USER_ID']." group by tblmenus.mid";
$result = mysqli_query($login,$query);


		while($row=mysqli_fetch_array($result)) {
		

if(!empty($row['suffix'])){


$ec=$row['suffix'];
//$inlink="data-toggle=\"dropdown\" class=\"dropdown-toggle\"";
}
	$curre =''.$row["mlink"];

	$menuDisplay = '<li class="nav-item">
	<a href="#" class="nav-link">
			  
			  <i class="nav-icon '.$row['icons'].'"></i>
              <p>
                '.$row['mtitle'].'
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>'."\n";
			 	
		echo $menuDisplay;
		//echo '<span data-toggle="dropdown" class="dropdown-toggle">
										//<i class="ion-arrow-down-b"></i>
									//</span>';						
	// echo main menu
	
    $resultSubmenu = mysqli_query($login,"SELECT * FROM tblmenus WHERE mparent=" . $row['mid'] . " AND mstatus=1 ") or die(mysqli_error());
    if(mysqli_num_rows($resultSubmenu) >= 1){
	echo '
	<ul class="nav nav-treeview">'."\n";
        while($rowSub = mysqli_fetch_array($resultSubmenu)){
            echo "<li class='nav-item'><a href='".$rowSub['mlink']."' class='nav-link'> <i class='".$rowSub['icons']."'></i> ".$rowSub['mtitle']."</a>";
	
		$subsubmeneu = mysqli_query($login,"SELECT * FROM tblmenus WHERE mparent=".$rowSub['mid']." ORDER BY  mid") or die(mysql_error());
		if(mysqli_num_rows($subsubmeneu) >= 1){
		echo "<ul class=\"children\">";
			while($rowSubsub = mysqli_fetch_array($subsubmeneu)){
				echo "<li class='nav-item'><a href='".$rowSubsub['mlink']."'>".$rowSubsub['mtitle']."</a></li>"; // echo sub menu
			}
			echo "</ul>";
		}
						
			echo "</li>"."\n"; // echo sub menu
        }
		echo "</ul>"."\n";
    }echo "</li>"."\n";
} 

}

						?>