<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

  $aliases['ekravimvm.test'] = array(
    'uri' => 'test-ekravimvm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:fcba1b06ade84f84b1ffb99e09260028@dbserver.test.d92f8844-4506-4e7e-a6a5-7b081cbef374.drush.in:19180/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.d92f8844-4506-4e7e-a6a5-7b081cbef374.drush.in',
    'remote-user' => 'test.d92f8844-4506-4e7e-a6a5-7b081cbef374',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['ekravimvm.live'] = array(
    'uri' => 'live-ekravimvm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:355cc2decbc24db49f236f67372613c4@dbserver.live.d92f8844-4506-4e7e-a6a5-7b081cbef374.drush.in:13785/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.d92f8844-4506-4e7e-a6a5-7b081cbef374.drush.in',
    'remote-user' => 'live.d92f8844-4506-4e7e-a6a5-7b081cbef374',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['ekravimvm.dev'] = array(
    'uri' => 'dev-ekravimvm.pantheonsite.io',
    'db-url' => 'mysql://pantheon:ee4e4b8ca6264e3e84eb69728940005e@dbserver.dev.d92f8844-4506-4e7e-a6a5-7b081cbef374.drush.in:19538/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.d92f8844-4506-4e7e-a6a5-7b081cbef374.drush.in',
    'remote-user' => 'dev.d92f8844-4506-4e7e-a6a5-7b081cbef374',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['proximity-search-123.live'] = array(
    'uri' => 'live-proximity-search-123.pantheonsite.io',
    'db-url' => 'mysql://pantheon:371aece30af3460ab3fcbe5013c74b72@dbserver.live.7f494e1f-256d-4b1f-975b-e5e57fd8b9b3.drush.in:11044/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.7f494e1f-256d-4b1f-975b-e5e57fd8b9b3.drush.in',
    'remote-user' => 'live.7f494e1f-256d-4b1f-975b-e5e57fd8b9b3',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['proximity-search-123.test'] = array(
    'uri' => 'test-proximity-search-123.pantheonsite.io',
    'db-url' => 'mysql://pantheon:888c490ce5cc4cfb81fb13f703778f05@dbserver.test.7f494e1f-256d-4b1f-975b-e5e57fd8b9b3.drush.in:11110/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.7f494e1f-256d-4b1f-975b-e5e57fd8b9b3.drush.in',
    'remote-user' => 'test.7f494e1f-256d-4b1f-975b-e5e57fd8b9b3',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['proximity-search-123.dev'] = array(
    'uri' => 'dev-proximity-search-123.pantheonsite.io',
    'db-url' => 'mysql://pantheon:1800ac13fa014712ad205873cc6af488@dbserver.dev.7f494e1f-256d-4b1f-975b-e5e57fd8b9b3.drush.in:11241/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.7f494e1f-256d-4b1f-975b-e5e57fd8b9b3.drush.in',
    'remote-user' => 'dev.7f494e1f-256d-4b1f-975b-e5e57fd8b9b3',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
