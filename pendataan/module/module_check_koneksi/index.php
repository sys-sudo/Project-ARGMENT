<?php
  function is_online() {
    $hostname_google = "google.com";
    $port_google = 80;

    $fp_google = @fsockopen($hostname_google, $port_google, $errno, $errstr, 2);

    if (!$fp_google) {
      return "Offline";
    } else {
      fclose($fp_google);
      return "Online";
    }
  }

  if (isset($_GET['action']) && $_GET['action'] === 'check') {
    $status_internet = is_online();
    $color_internet = $status_internet === "Online" ? "green" : "red";

    echo "<span style='color: $color_internet;'>$status_internet</span>";
    exit;
  }