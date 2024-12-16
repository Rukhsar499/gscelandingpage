 <?php
        if(isset($_POST['submit']))
        {   
        //echo "its my life";
            // Read Data from Form
            //$subjects = filter_input(INPUT_POST, "subjectf");
            $name = filter_input(INPUT_POST, "name");
            $email = filter_input(INPUT_POST, "email");
            $phone = filter_input(INPUT_POST, "phone");
            $course = filter_input(INPUT_POST, "course");
            $email_from = "queries@georgekids.com";
            $email_subject = "New Enquiry: Website";

////$mail->IsHTML(true);
    

$email_body = "<table width='100%'  border='0' height='150px'>";

$email_body = $email_body . "<tr>";

$email_body = $email_body . "<td colspan='2' style='text-align:left; color:#FFF' bgcolor='#2D9DCE'>";

$email_body = $email_body . "&nbsp;&nbsp;You have received a New Enquiry";

$email_body = $email_body . "</td>";

$email_body = $email_body . "</tr>";



$email_body = $email_body . "<tr>";

$email_body = $email_body . "<td  width='25%' style='text-align:right' bgcolor='#EBF2F6'>";

$email_body = $email_body . "Name :";

$email_body = $email_body . "</td>";

$email_body = $email_body . "<td width='75%' style='text-align:left' bgcolor='#FFFFFF'>";

$email_body = $email_body . "<span>" .$name. "</span>";

$email_body = $email_body . "</td>";

$email_body = $email_body . "</tr>";




$email_body = $email_body . "<tr>";

$email_body = $email_body . "<td style='text-align:right' bgcolor='#EBF2F6'>";

$email_body = $email_body . "Email :";/*name Plate*/

$email_body = $email_body . "</td>";

$email_body = $email_body . "<td style='text-align:left' bgcolor='#FFFFFF'>";

$email_body = $email_body . "<span>" .$email. "</span>";/*Ghar ka naam*/

$email_body = $email_body . "</td>";

$email_body = $email_body . "</tr>";



$email_body = $email_body . "<tr>";

$email_body = $email_body . "<td style='text-align:right' bgcolor='#EBF2F6'>";

$email_body = $email_body . "Contact No :";

$email_body = $email_body . "</td>";

$email_body = $email_body . "<td style='text-align:left' bgcolor='#FFFFFF'>";

$email_body = $email_body . "<span>" .$phone. "</span>";

$email_body = $email_body . "</td>";

$email_body = $email_body . "</tr>";








				




$email_body = $email_body . "<tr>";

$email_body = $email_body . "<td style='text-align:right' bgcolor='#EBF2F6'>";

$email_body = $email_body . "Course :";

$email_body = $email_body . "</td>";

$email_body = $email_body . "<td style='text-align:left' bgcolor='#FFFFFF'>";

$email_body = $email_body . "<span>" .$course. "</span>";

$email_body = $email_body . "</td>";

$email_body = $email_body . "</tr>";



$email_body = $email_body . "<tr>";

$email_body = $email_body . "<td colspan='2' style='text-align:center; color:#FFF' bgcolor='#2D9DCE'> &nbsp; </td>";

$email_body = $email_body . "</tr>";

$email_body = $email_body . "</table>";









//$mail->Body =$email_body;

            // $cc="tarak.digitalwolf@gmail.com";
                
            $to = "rukshar.digitalwolf@gmail.com";
            //$to = "starblastanimation@gmail.com";
            //$bcc = "nknitinkumar7194@gmail.com";

            $headers = "From: $email_from"."\r\n";
            $headers .= "Reply-To: $email"."\r\n";
            //$headers .= "Cc: $cc"."\r\n";
            //$headers .= "Bcc: $bcc"."\r\n";

            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            mail($to,$email_subject,$email_body,$headers);
            
            //echo "<script> alert('Thank You for showing your Interest, Our Executive will reach you soon!'); </script>";
			echo "<script> setTimeout(function () { window.location.href= 'thankyou.html';},500);</script>";
        }
        else
        {
        //echo "<script> alert('".$email_body."'); </script>";
            // echo "empty submit";
        }
        ?>


 <?php
        if(isset($_POST['submit']))
        {   
        //echo "its my life";
            // Read Data from Form
            //$subjects = filter_input(INPUT_POST, "subjectf");
            $name = filter_input(INPUT_POST, "name");
            $email = filter_input(INPUT_POST, "email");
            $phone = filter_input(INPUT_POST, "phone");
            $course = filter_input(INPUT_POST, "course");
            $email_from = "queries@georgekids.com";
            $email_subject = "New Enquiry: Website";

////$mail->IsHTML(true);
    

$email_body = "<table width='100%'  border='0' height='150px'>";

$email_body = $email_body . "<tr>";

$email_body = $email_body . "<td colspan='2' style='text-align:left; color:#FFF' bgcolor='#2D9DCE'>";

$email_body = $email_body . "&nbsp;&nbsp;You have received a New Enquiry";

$email_body = $email_body . "</td>";

$email_body = $email_body . "</tr>";



$email_body = $email_body . "<tr>";

$email_body = $email_body . "<td  width='25%' style='text-align:right' bgcolor='#EBF2F6'>";

$email_body = $email_body . "Name :";

$email_body = $email_body . "</td>";

$email_body = $email_body . "<td width='75%' style='text-align:left' bgcolor='#FFFFFF'>";

$email_body = $email_body . "<span>" .$name. "</span>";

$email_body = $email_body . "</td>";

$email_body = $email_body . "</tr>";




$email_body = $email_body . "<tr>";

$email_body = $email_body . "<td style='text-align:right' bgcolor='#EBF2F6'>";

$email_body = $email_body . "Email :";/*name Plate*/

$email_body = $email_body . "</td>";

$email_body = $email_body . "<td style='text-align:left' bgcolor='#FFFFFF'>";

$email_body = $email_body . "<span>" .$email. "</span>";/*Ghar ka naam*/

$email_body = $email_body . "</td>";

$email_body = $email_body . "</tr>";



$email_body = $email_body . "<tr>";

$email_body = $email_body . "<td style='text-align:right' bgcolor='#EBF2F6'>";

$email_body = $email_body . "Contact No :";

$email_body = $email_body . "</td>";

$email_body = $email_body . "<td style='text-align:left' bgcolor='#FFFFFF'>";

$email_body = $email_body . "<span>" .$phone. "</span>";

$email_body = $email_body . "</td>";

$email_body = $email_body . "</tr>";








                
$email_body = $email_body . "<tr>";

$email_body = $email_body . "<td style='text-align:right' bgcolor='#EBF2F6'>";

$email_body = $email_body . "Course :";

$email_body = $email_body . "</td>";

$email_body = $email_body . "<td style='text-align:left' bgcolor='#FFFFFF'>";

$email_body = $email_body . "<span>" .$course. "</span>";

$email_body = $email_body . "</td>";

$email_body = $email_body . "</tr>";









//$mail->Body =$email_body;

            // $cc="tarak.digitalwolf@gmail.com";
            $to = "queries@georgekids.com";
            //$to = "starblastanimation@gmail.com";
            //$bcc = "nknitinkumar7194@gmail.com";

            $headers = "From: $email_from"."\r\n";
            $headers .= "Reply-To: $email"."\r\n";
            //$headers .= "Cc: $cc"."\r\n";
            //$headers .= "Bcc: $bcc"."\r\n";

            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            mail($to,$email_subject,$email_body,$headers);
            
            //echo "<script> alert('Thank You for showing your Interest, Our Executive will reach you soon!'); </script>";
            echo "<script> setTimeout(function () { window.location.href= 'thankyou.html';},500);</script>";
        }
        else
        {
        //echo "<script> alert('".$email_body."'); </script>";
            // echo "empty submit";
        }
        ?>
