<?php
if (isset($_POST["pedir"])){
    if(strlen($_POST["namee"])>1 && strlen($_POST["asunto"])>1 && strlen($_POST["msg"])>1 && strlen($_POST["email"])>1){
        $name= $_POST["namee"];
        $asunto=$_POST["asunto"];
        $msg=$_POST["msg"];
        $email= $_POST["email"];
        $header="From: noreply@example.com". "\r\n";
        $header.= "Reply-To: noreply@example.com". "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail= mail($email,$asunto,$msg,$header);
        if($mail){
             ?><h4 class="ok">¡Mail enviado exitosamente!<h4></script><?php
                
        }else{
            ?><h4 class="bad">erorr<h4><?php
        }
    }else{
        ?><h4 class="bad">ero22222rr<h4><?php
    }

}else{
    ?><h4 class="bad">incompleto<h4>  <?php
}
?>