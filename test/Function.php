<?php


function Search($conn,$post ){
            $search = mysqli_real_escape_string($conn,$post);
            $sql = "SELECT * FROM project_link WHERE name LIKE '%$search%' ";
            $result = mysqli_query($conn,$sql);
            $quaryResult = mysqli_num_rows($result);
            
            echo '<h2 class="form-title" style="text-align:center;">'.'Your search result for '.$search.'</h2>';
            if($quaryResult>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo '<ul class="navbar-nav mr-auto">';
                    echo '<li class="nav-item" style="text-align:center;">';
                        echo "<a class='nav-link active' href='".$row['link']."'>".$row['link']."</a>";
                    echo '</li>';
                    echo '</ul>';
                
                
                }
            }else{
                echo "there is no result matching your result";
            }


}

function Addlinks($text,$Price){
    if ( $text!=NUll  and $Price!=Null ){
			
        $sql = "INSERT INTO project_link( name,link) VALUES ('$Price','$text');";
        mysqli_query($db,$sql);
    }
    
}



























?>