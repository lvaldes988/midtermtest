3:
Let's write a user class with the tools we have  acquired. This class will contain the first and last name of each user and will be able to say hello to anyone who uses our application. Make sure that:
1) The attributes are private.
2) Create a public interface to set and get our attributes
3) Say hello!
4) Use a constructor to set up the initial state of your object.


<?php 
class User {
    private $first;
    private $last;
    public function getAttributes($first, 
    $last){
        if ($first && $last){
            echo ('Hello '.$first.' '.$last);
        } else {
            alert('Please enter your first and last name.');
        }
    }
        
}
?>