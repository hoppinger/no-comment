<?php
# Plugin Name: No Comment
# Version: 0.1.0
# Description: WordPress plugin to disable comments.
# Author: Sebastiaan de Geus
# Author URI: https://www.hoppinger.com/
# Plugin URI: https://github.com/hoppinger/no_comment

require 'lib/no_comment.php';

$no_comment = new NoComment;
$no_comment->actions();
$no_comment->filters();
