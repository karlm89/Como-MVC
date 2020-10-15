<?php 
    use FW\APP\Core\Application;
    include_once Application::$ROOT_DIR."/views/layouts/header.php" 
?>

        <h1 class="mb-3">Master View</h1>

        <table class="table table-sm table-hover table-striped table-bordered">
            <thead class="thead-dark">

                <tr class="d-flex">
                    <?php 
                        for($i = 1; $i <= 10; $i++) {
                            echo '<th class="" scope="col"> header '. $i .'</th>';
                        } 
                    ?>

                    <th class="" scope="col">Actions</th>
                </tr>

            </thead>
            <tbody>

                <tr class="d-flex">
                    <?php 
                        for ($x = 1; $x <= 10; $x++) {
                            echo '<td class=""> col '. $x .'</th>';
                        } 
                    ?>

                    <td class="">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete
                    </td>
                </tr>

            </tbody>
        </table>     

<?php include_once Application::$ROOT_DIR."/views/layouts/footer.php" ?>