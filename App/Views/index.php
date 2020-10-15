<?php 
    use FW\APP\Core\Application;
    include_once Application::$ROOT_DIR."/views/layouts/header.php" 
?>
    <h1 class="text-center">Hello, <?php echo $name ?>!</h1>
    <h2 class="text-center pb-2">This view is for testing longer views</h2>


    <?php
        for ($x = 0; $x <= 10; $x++) {
        echo 
            "<p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id justo a libero vulputate faucibus non in ante. Ut sed libero est. Phasellus ornare metus sit amet nibh imperdiet vehicula. Cras suscipit ipsum in ipsum pharetra, a imperdiet sapien lacinia. Ut ornare eget velit ut fringilla. Vestibulum pretium finibus erat, quis volutpat diam aliquam viverra. Integer ut est ut ex rutrum tincidunt. In dictum est id porta fringilla.
            </p>

            <p>
                Ut finibus dictum nisi eu maximus. Sed sagittis est eu ullamcorper scelerisque. Cras maximus sollicitudin volutpat. Vestibulum pulvinar porttitor quam dapibus maximus. Fusce tempor ultricies tellus hendrerit congue. Curabitur blandit, urna a tincidunt aliquet, velit lectus efficitur ante, vel laoreet massa elit ac tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed et lacus efficitur, condimentum felis eu, elementum velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla libero erat, consequat quis massa id, congue dapibus risus. Curabitur eget sem id dui eleifend interdum. Cras turpis mauris, cursus eget fringilla sed, sagittis sed turpis. Etiam ac ultricies turpis. Suspendisse commodo velit in justo lobortis, et pretium lacus semper.
            </p>

            <p>
                Pellentesque cursus ante in feugiat porta. Donec scelerisque dui at tempus eleifend. Vivamus commodo diam vitae urna aliquet viverra. Integer sed tincidunt mauris, convallis pellentesque ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus bibendum, arcu in fermentum convallis, mi tellus consequat velit, sit amet cursus nibh ex eget est. Mauris scelerisque finibus consequat. Ut scelerisque vitae dui et iaculis. Ut lobortis nisl vehicula lorem egestas, sed tristique leo dapibus. Proin posuere, justo vel malesuada elementum, eros turpis dapibus justo, sit amet ultrices nulla purus ut lectus. Sed in consectetur mauris, vitae tincidunt elit. Quisque eu varius elit, non faucibus urna. Donec accumsan enim et erat feugiat scelerisque ac ullamcorper purus. Cras vel magna vel urna mattis lacinia at eget dui.
            </p>";
        }
    ?>

<?php include_once Application::$ROOT_DIR."/views/layouts/footer.php" ?>