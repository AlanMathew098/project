<?php
include("dbx.php");
if (! empty($_POST["keyword"])) {
    $sql = $mysqli->prepare("SELECT * FROM home WHERE product_name LIKE  ? ORDER BY product_name LIMIT 0,6");
    $search = "{$_POST['keyword']}%";
    $sql->bind_param("s", $search);
    $sql->execute();
    $result = $sql->get_result();
    if (! empty($result)) {
        ?>
<ul id="country-list">
<?php
        foreach ($result as $home) {
            ?>
   <li onClick="selectCountry('<?php echo $home["prouct_name"]; ?>');">
      <?php echo $home["product_name"]; ?>
    </li>
<?php
        }// end for
    ?>
</ul>
    <?php
    }// end if not empty
}
?>