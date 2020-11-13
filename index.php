<?
  // Creator : Jamrei M. Manalo
  // Date Created : November 4, 2020
  // Subject : Advance Programming
  // Professor : Ms. Blances Sanchez
?>
<?php
        class User{
          //Properties
          public $nameKo;
          public $usernameKo;
          public $emailKo;
          //Methods
          /*function set_name($nameKo){
              $this->name=$nameKo;
          }
          function get_name(){
            return $this->name;
          }
          function set_username($usernameKo){
            $this->username=$usernameKo;
          }
          function get_username(){
            return $this->username;
          }
          function set_email($emailKo){
            $this->email=$emailKo;
          }
          function get_email(){
            return $this->email;
          }*/
          function addFriend($nameKo){
            echo "$nameKo" . " added a friend. <br>";
          }
          function postStatus($nameKo){
            echo "$nameKo" . " posted a status. <br>";
          }
        }
        $example = new User();
        /*$example -> set_name('Jamrei M. Manalo');
        $example -> set_username('jamrei12');
        $example -> set_email('jamreimanalo@gmail.com');
        echo "<br>";
        echo"Name : " . $example->get_name();
        echo "<br>";
        echo "Username : ". $example->get_username();
        echo "<br>";
        echo "Email Address   : ". $example->get_email();
        echo "<br><br>";*/
        echo $example->addFriend('Jamrei M. Manalo');
        echo "<br>";
        echo $example->postStatus('Jamrei M. Manalo');




  ?>
