<?php
return function ($kirby) {
  //don't show if use logged int
  if ($kirby->user()) {
    go('/');
  }
  $error = false;
  // hand the form submission
  if ($kirby->request()->is('POST') && get('login')) {
    //fetch the user by username
    if ($user = $kirby->user(get('email'))) {
      // if the user exists, try to log them in
      try {
        $user->login(get('password'));
        //redirect to home page
        // if the login was successful
        go('/');
      } catch (Exception $e) {
        $error = true;
      }
    } else {
      //make sure the alert is 
      // displayed in the template
      $error = true;
    }
  }
  return [
    'error' => $error
  ];
};
