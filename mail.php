<?php
$array = array("nom" => "", "email" => "", "nomerror" => "", "emailerror" => "", "isSuccess" => false);
$email = "email";
$nom = $_POST["nom"];
$email = $_POST["email"];


function sendmail($nom, $email){
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $email)) {
        $passage_ligne = "\r\n";
    } else {
        $passage_ligne = "\n";
    }

    $message_txt = "";

    //=====Création de la boundary.
    $boundary = "-----=" . md5(rand());
    $boundary_alt = "-----=" . md5(rand());
    //=====Définition du sujet.
    $sujet = "Vous avez reçu une carte de voeux de la part de .$nom. !";

    //=====Création du header de l'e-mail.
    $header = "From: <merrychristmas.com>" . $passage_ligne;

    $header .= "Reply-to: <merrychristmas.com>" . $passage_ligne;

    $header .= "MIME-Version: 1.0" . $passage_ligne;

    $header .= "Content-Type: multipart/mixed;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;

    //=====Création du message.
    $message = $passage_ligne . "--" . $boundary . $passage_ligne;

    $message .= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary_alt\"" . $passage_ligne;

    $message .= $passage_ligne . "--" . $boundary_alt . $passage_ligne;

    //=====Ajout du message au format texte.
    $message .= "Content-Type: text/plain; charset=\"ISO-8859-1\"" . $passage_ligne;
    $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
    $message .= $passage_ligne . $message_txt . $passage_ligne;
    $message .= $passage_ligne . "--" . $boundary_alt . $passage_ligne;

    $message_html = '<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title></title><!--[if !mso]><!-- --><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
    body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
    table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
    img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
    p { display:block;margin:13px 0; }</style><!--[if mso]>
  <xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
  </xml>
  <![endif]--><!--[if lte mso 11]>
  <style type="text/css">
    .mj-outlook-group-fix { width:100% !important; }
  </style>
  <![endif]--><style type="text/css">@media only screen and (min-width:480px) {
  .mj-column-per-100 { width:100% !important; max-width: 100%; }
  }</style><style type="text/css">@media only screen and (max-width:480px) {
  table.mj-full-width-mobile { width: 100% !important; }
  td.mj-full-width-mobile { width: auto !important; }
  }</style></head><body><div><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><v:rect style="width:600px;" xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false"><v:fill origin="0.5, 0" position="0.5, 0" src="https://p5.storage.canalblog.com/50/70/1670638/125251534.jpg" type="tile" /><v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0"><![endif]--><div style="background:url(https://p5.storage.canalblog.com/50/70/1670638/125251534.jpg) top center / cover no-repeat;margin:0px auto;max-width:600px;"><div style="line-height:0;font-size:0;"><table align="center" background="https://p5.storage.canalblog.com/50/70/1670638/125251534.jpg" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:url(https://p5.storage.canalblog.com/50/70/1670638/125251534.jpg) top center / cover no-repeat;width:100%;"><tbody><tr><td st² &1yle="direction:ltr;font-size:0px;padding:20px 0;text-align:center;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:20px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr><td style="width:200px;"><img height="auto" src="https://www.fcgueugnon.fr/wp/wp-content/uploads/2015/12/santa-pere-noel-graphic-head-tete-fcg-fc-gueugnon.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="200"></td></tr></tbody></table></td></tr><tr><td style="font-size:0px;padding:10px 25px;word-break:break-word;"><p style="border-top:solid 4px #DB1D13;font-size:1;margin:0px auto;width:100%;"></p><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 4px #DB1D13;font-size:1;margin:0px auto;width:550px;" role="presentation" width="550px" ><tr><td style="height:0;line-height:0;"> &nbsp;
  </td></tr></table><![endif]--></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:mountains_of_christmasregular;font-size:20px;line-height:1;text-align:center;color:#570000;"><h1>JOYEUX NOEL !</h1></div></td></tr><tr><td style="font-size:0px;padding:10px 25px;word-break:break-word;"><p style="border-top:solid 4px #DB1D13;font-size:1;margin:0px auto;width:100%;"></p><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 4px #DB1D13;font-size:1;margin:0px auto;width:550px;" role="presentation" width="550px" ><tr><td style="height:0;line-height:0;"> &nbsp;
  </td></tr></table><![endif]--></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:mountains_of_christmasregular;font-size:20px;line-height:1;text-align:center;color:#570000;"><br>'.$nom.' vous a envoyé un message,<br>Retrouvez le au :<br><a href="https://jordanm.promo-31.codeur.online/carte_de_voeux/">Votre carte de voeux</a><br><br><h2>ET PASSEZ DE BONNES FETES !</h2></div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div></div><!--[if mso | IE]></v:textbox></v:rect></td></tr></table><![endif]--></div></body></html>';

    //=====Ajout du message au format HTML.
    $message .= "Content-Type: text/html; charset=\"ISO-8859-1\"" . $passage_ligne;
    $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
    $message .= $passage_ligne . $message_html . $passage_ligne;

    //=====On ferme la boundary alternative.
    $message .= $passage_ligne . "--" . $boundary_alt . "--" . $passage_ligne;

    //==========
    $message .= $passage_ligne . "--" . $boundary . $passage_ligne;
  mail($email, "Carte de voeux", $message, $header);
}


function verify($var) {
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $array["nom"] = verify($_POST["nom"]);
    $array["email"] = verify($_POST["email"]);
    $array["isSuccess"] = true;
    // $emailContent = "";
    if (empty($array["nom"])){
        $array["nomerror"] = "Ce champ est requis";
        $array["isSuccess"] = false;
    } else {
        // $emailContent .="Nom : {$array["nom"]}\n";
    }
    if (empty($array["email"])){
        $array["emailerror"] = "Ce champ est requis";
        $array["isSuccess"] = false;
    } else {
        // $emailContent .="Email : {$array["nom"]}\n";
    }
        if ($array["isSuccess"]){
            sendmail($nom, $email);
        }
    header('Content-type: application/json');
    echo json_encode($array);
}



