<div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="index.php">
                    Century Debate Team
                </a>
            </li>
<?php
$result = mysqli_query($dbconnect, "SELECT * FROM `nav`;");
while($row = mysqli_fetch_array($result)){
?>
            <li>
                <a href="<?php echo $row{'href'}; ?>"><?php echo $row{'name'}; ?></a>
            </li>
            <?php } 
                if(isset($_SESSION['user'])){
            ?>
                <li>
                    <a href="meets.php">Meets</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            <?php
                }
                else { ?>
            <li>
                    <a href="login.php">Login</a>
                </li>
            <?php
                }
            ?>
        </ul>
    </div>