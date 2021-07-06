<?php
return array (
  'profile' => 
  array (
    'oj-name' => 'Universal Online Judge',
    'oj-name-short' => 'UOJ',
    'administrator' => 'root',
    'admin-email' => 'admin@local_uoj.ac',
    'QQ-group' => '',
    'ICP-license' => '',
  ),
  'database' => 
  array (
    'database' => 'app_uoj233',
    'username' => 'root',
    'password' => 'root',
    'host' => '127.0.0.1',
  ),
  'web' => 
  array (
    'domain' => NULL,
    'main' => 
    array (
      'protocol' => 'http',
      'host' => UOJContext::httpHost(),
      'port' => 80,
    ),
    'blog' => 
    array (
      'protocol' => 'http',
      'host' => UOJContext::httpHost(),
      'port' => 80,
    ),
  ),
  'security' => 
  array (
    'user' => 
    array (
      'client_salt' => 'hAe2A8bfUrQwKQ0w6WA4GyjSVREARk81',
    ),
    'cookie' => 
    array (
      'checksum_salt' => 
      array (
        0 => 'tdwEnMHQWoMZkL5k',
        1 => 'TNR0InsnClmzOd8O',
        2 => 'kgb3GUy39hS6xhaH',
      ),
    ),
  ),
  'mail' => 
  array (
    'noreply' => 
    array (
      'username' => 'noreply@local_uoj.ac',
      'password' => '_mail_noreply_password_',
      'host' => 'smtp.local_uoj.ac',
      'secure' => 'tls',
      'port' => 587,
    ),
  ),
  'judger' => 
  array (
    'socket' => 
    array (
      'port' => '2333',
      'password' => 'gzQwoj7SnEH5fh6fhHq5EM2nJqbaYPZb',
    ),
  ),
  'switch' => 
  array (
    'web-analytics' => false,
    'blog-domain-mode' => 3,
  ),
);
