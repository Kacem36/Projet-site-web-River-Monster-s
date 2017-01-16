         <?php
            $msg="";
            if(isset($_POST['contacter'])){
                $msg=$_POST['contacter'];
                echo "Votre message a bien été enregistré $msg";
            }
?>


