<?php

namespace Toast\Extensions;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\ORM\DataExtension;
use Toast\Blocks\Block;

class BrokenExternalLinkExtension extends DataExtension
{

    /**
     * @return SiteTree
     */
    public function Block()
    {
        return $this->owner->Track()->Block();
    }
}
