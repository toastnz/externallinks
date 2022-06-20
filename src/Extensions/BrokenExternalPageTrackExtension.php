<?php

namespace Toast\Extensions;

use SilverStripe\ORM\DataExtension;
use Toast\Blocks\Block;

class BrokenExternalPageTrackExtension extends DataExtension
{

    private static $has_one = array(
        'Block' => Block::class
    );
}
