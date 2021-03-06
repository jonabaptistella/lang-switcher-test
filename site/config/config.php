<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('languages', array(
  array(
    'name'    => 'English',
    'code'    => 'en',
    'locale'  => 'en_US',
    'default' => true,
    'url'     => '/'
  ),
  array(
    'name'    => 'Portugues',
    'code'    => 'pt-BR',
    'locale'  => 'pt_BR',
    'url'     => '/br'
  ),
  array(
    'name'    => 'Norsk',
    'code'    => 'nb-no',
    'locale'  => 'nb_NO',
    'url'     => '/no'
  )
));

c::set('language.detect', true);
