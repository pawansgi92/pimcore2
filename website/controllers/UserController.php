<?php

use Website\Controller\Action;

class UserController extends Action {

    public function registerAction() {


        if ($_POST['submit'] == 'Submit' or $_POST['submit'] == 'submit') {
            $customerType = $_POST['customerType'];
            $icno = $_POST['icno'];
            $name = $_POST['name'];
            $accountno = $_POST['accountNo'];
            $mobileno = $_POST['mobileNo'];
            $local = $_POST['isLocal'];
            $nric = $_POST['NRIC'];
            $mailing = $_POST['mailingAddress'];
            $delivery = $_POST['deliveryAddress'];
            $gender = $_POST['gender'];
            $race = $_POST['race'];
            $dob = $_POST['dob'];
            $nationality = $_POST['nationality'];
            $billing = $_POST['billingOptions'];
            $postcode = $_POST['Postcode'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $email = $_POST['emailAddress'];
            $password = $_POST['password'];
            $namakey = str_replace(' ', '_', $name) . "_" . strtotime(date("YmdHis"));

            $register = new Object_Customer();
            $register->setcustomerType($customerType);
            $register->seticno($icno);
            $register->setname($name);
            $register->setaccountNo($accountno);
            $register->setmobileNo($mobileno);
            $register->setisLocal($local);
            $register->setNRIC($nric);
            $register->setmailingAddress($mailing);
            $register->setdeliveryAddress($delivery);
            $register->setgender($gender);
            $register->setrace($race);
            $register->setdob($dob);
            $register->setnationality($nationality);
            $register->setbillingOptions($billingOptions);
            $register->setPostcode($postcode);
            $register->setcity($city);
            $register->setstate($state);
            $register->setcountry($country);
            $register->setemailAddress($email);

            $register->setKey(strtolower($namakey));
            $register->setO_parentId('47');
            $register->setIndex(0);
            $register->setPublished(1);
            $register->save();

            /* $emailDocument = "'".$_COOKIE['languagecode']."'/emailcontactus";
              print_r($emailDocument);
              $params = array('fullname' => $fname,
              'subject' => $subject,
              'email' => $email,
              'phone' => $phone,
              'location' => $location,
              'message' => $message
              );
              $mail->setDocument($emailDocument);
              $mail->setParams($params);
             */



            // $this->view->sm = '<div style="width:87%; padding: 10px; margin:5px 0; height: auto; border:2px solid #ddd; font-size:12px; background:#e6efc2; color:#264409; border-color:#c6d880; font-size:12px;">Your message has been successfully sent. Thank you for your confidence in us.</div>';

            $customerType = "";
            $icno = "";
            $name = "";
            $accountno = "";
            $mobileno = "";
            $local = "";
            $nric = "";
            $mailing = "";
            $delivery = "";
            $gender = "";
            $race = "";
            $dob = "";
            $nationality = "";
            $billing = "";
            $postcode = "";
            $city = "";
            $state = "";
            $country = "";
            $email = "";
            $password = "";
            $_POST['submit'] = "";
        }

        $this->enableLayout();
    }

}
