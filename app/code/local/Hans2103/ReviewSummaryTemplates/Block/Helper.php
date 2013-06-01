<?php

class Hans2103_ReviewSummaryTemplates_Block_Helper extends Mage_Review_Block_Helper
{
	protected $_availableTemplates = array(
        'default'   => 'review/helper/summary.phtml',
        'short'     => 'review/helper/summary_short.phtml',
		'aggregate' => 'review/helper/summary_aggregate.phtml',
    );
}