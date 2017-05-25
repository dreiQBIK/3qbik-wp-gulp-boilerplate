<?php

use Behat\Gherkin\Node\PyStringNode,
  Behat\Gherkin\Node\TableNode,
  WP_CLI\Process;

$steps->Given("/^I have TGMPA installed$/", function($world) {
  // Install a sample plugin that uses TGMPA
  $dest   = $world->variables["RUN_DIR"] . "/wp-content/mu-plugins/tgmpa-example.php";
  $source = __DIR__ . "/../extra/tgmpa-example.php";

  copy($source, $dest);

  mkdir(preg_replace("/\.php$/", "", $dest));

  // Create a zip archive for a plugin used in TGMPA
  $source = "example-plugin";
  $dest   = $world->variables["RUN_DIR"] . "/wp-content/mu-plugins/tgmpa-example/example-plugin.zip";
  $dir    = __DIR__ . "/../extra/";

  $world->proc("cd {$dir} && zip -r {$dest} {$source}")->run_check();
});

$steps->Given("/^tgmpa_register is not set$/", function($world) {
  $tgmpa = $world->variables["RUN_DIR"] . "/wp-content/mu-plugins/tgmpa-example.php";

  // Simulate missing action
  $disable = "\n\nremove_action('tgmpa_register', 'example_tgmpa_register_required_plugins');";
  $content = file_get_contents($tgmpa) . $disable;

  file_put_contents($tgmpa, $content);
});
