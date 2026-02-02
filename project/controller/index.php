<?php
include "../controller/controller.php";
if(isset($_REQUEST['act'])){
    $act= $_REQUEST['act'];
    switch($act){
        case 'danhmuc':
            $controller = new controller();
            $danhmuc = $controller->hienthidm();
            include "../view/danhmuc.php";
            break;

        case 'xl_themDM':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $dm = new danhmuc();
                $dm->setName(Name: $name);
                $controller = new controller();
                $controller->themdm(dm: $dm);
                $danhmuc = $controller->hienthidm();
                include "../view/danhmuc.php";
            }
            break;

        case 'xoadm':
            if (isset($_GET['id_dm'])) {
                $id_dm = $_GET['id_dm'];
                $dm = new danhmuc();
                $dm->setId(id_dm: $id_dm);
                $controller = new controller();
                $controller->xoadm(dm: $dm);
                $danhmuc = $controller->hienthidm();
                include "../view/danhmuc.php";
            }
            break;

        case 'timdm':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['keyword'];
                echo $name;
            }
            break;
    }
}
?>
