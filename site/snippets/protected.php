<?php
if (!$kirby->user()) {
  go('login');
}
