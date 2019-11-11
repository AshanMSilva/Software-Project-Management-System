<?php
$user_id=2;
$conn=new mysqli("localhost", "root", "", "spms");
$sql="SELECT project_id,title,progress, category from project NATURAL JOIN develops  where developer_id=$user_id ";
$proResult = $conn->query($sql);
?>
<?php while($row = $proResult->fetch_assoc()): ?>
    <?php
    $project_id=$row["project_id"];
    echo $project_id;
    $title=$row["title"];
    $progress=$row["progress"];
    $category=$row["category"];

    echo $title ."    ".$progress."%"."     ".$category 
    ?> 
    <ul class="actions">
        <li><a href="projectDetailsDev2.php?project_id=<?php echo $project_id;?>" >View</a></li><br>
    </ul>

<?php endwhile;?>

                                                                                                               
<!-- 
You can add the variable in the link to the next page:

<a href="page2.php?varname=<?php //echo $var_value ?>">Page2</a> -->
