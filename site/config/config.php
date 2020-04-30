<?php
return [
  'panel' => [
    'install' => true
  ],
  'debug' => true,
  'email' => [
    'presets' => [
      'contact' => [
        'from'    => 'no-reply@supercompany.com',
        'subject' => 'Thank you for your contact request',
        'cc'      => 'wley3337@gmail.com',
        'body'    => 'We will never reply'
      ]
    ]
  ],
  'routes' => [
    [
      'pattern' => 'logout',
      'action' => function () {
        if ($user = kirby()->user()) {
          $user->logout();
        }
        go('login');
      }
    ]
  ]
];
