<?php 


function permission($age) {

    if ($age < 18) { 

        echo ('You are not old enough');

    }

    else {

        echo 'You can access';

    }

}

