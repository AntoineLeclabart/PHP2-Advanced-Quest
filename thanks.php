<?php
       if(isset($_POST['user_firstname']))$user_Prenoms = $_POST['user_firstname'];
       if(isset($_POST['user_name']))$user_name = $_POST['user_name'];
       if(isset($_POST['user_email']))$user_email = $_POST['user_email'];
       if(isset($_POST['user_phone_number']))$user_telephone = $_POST['telephone'];
       if(isset($_POST['select_subject']))$user_sujet = $_POST['sujet'];       
       if(isset($_POST['user_message']))$user_message = $_POST['user_message'];

if (filter_var($user_email, FILTER_VALIDATE_EMAIL) && (!empty($user_email)) && (!empty($user_name)) && preg_match ( " /^.+@.+.[a-zA-Z]{2,}$/ ", $user_email ) )
echo("Merci de nous avoir contacté $user_name $user_firstname nous allons prendre contacte avec vous au mail suivant : $user_email, votre numéro de téléphone est le suivant : $user_telephone, vous nous avez contacté au sujet de $user_sujet, votre message est le suivant : $user_message");


?>
