<?php

/**
 * @params string $path
 * @return string
 */

function get_base_path($path = '')
{
   return __DIR__ . '/' . $path;
}

/**
 * @params string $name
 * @return void
 */

function handle_load_view($name)
{
   $viewspath = get_base_path('views/' . $name . '.view.php');
   if (file_exists($viewspath)) {
      require $viewspath;
   } else {
      echo '<div class="p-8">Page not found</div>';
   }
}

/**
 * @params string $name
 * @return void
 */

function handle_load_partial($name)
{
   $basePath =  get_base_path('views/partials/' . $name . '.php');
   if (file_exists($basePath)) {
      require $basePath;
   } else {
      echo  '<div class="p-8">Partial not found</div>';
   }
}

/**
 * @param mixed $data
 * @return void
 * 
 */

function handle_inspect($data)
{
   echo '<pre>';
   var_dump($data);
   echo '</pre>';
}

/**
 * @param mixed $data
 * @return void
 * 
 */

function handle_inspect_exit($data)
{
   echo '<pre>';
   die(var_dump($data));
   echo '</pre>';
}
