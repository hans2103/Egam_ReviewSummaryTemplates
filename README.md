Hans2103_ReviewSummaryTemplates
======================

This extension extends Mage_Review_Block_Helper to define more templates for the review summary. 
This is useful when implementing structured data for rich snippets. 

By default Magento defines two review summary templates:
- file: template/review/helper/summary.phtml -> to be used multiple times on the product detail page. 
  Directly under the product name and multiple times in the upsell.
- file: template/review/helper/summary_short.phtml -> to be used on the catalog page.

When implementing structured data for rich snippets summary.phtml is extended with structured data as defined on http://schema.org/aggregateRating.
Without any change the product detail page will contain multiple item properties aggregateRating. This is not needed. 

Therefor the product detail page needs a second template without structured data to implement the review summary.
By default this is not possible with Magento and this module allowes you to define a new template.


Compatibility
------------
Successfully tested on Community Edition 1.7.x
Not tested on previous versions. But feel free to do so and inform me so this readme can be updated.

Installation
------------
* Download the source code and copy the files in the corresponding Magento folders; 
* * cd app/ && wget -O - https://github.com/hans2103/Hans2103_ReviewSummaryTemplates/tarball/master/ | tar -zxvf - --exclude README.md --strip-components 1
* mind that you merge the directories. Do not replace the existing directories. :-)
* no Magento existing file is modified.
* clear cache and enjoy 

* installation with modman is possible too
* modman clone git@github.com:hans2103/Hans2103_ReviewSummaryTemplates.git

After installation you have the ability to use more review summary templates as defined in app/code/local/Hans2103/ReviewSummaryTemplate/Block/Helper.php.

Use
------------
- file: template/catalog/product/view.phtml
- find: <?php echo $this->getReviewsSummaryHtml($_product, false, true)?>
- change by: <?php echo $this->getReviewsSummaryHtml($_product, 'aggregate', true)?>
- save&close
- now copy template/review/helper/summary.phtml to template/review/helper/summary_aggregate.phtml and add your structured data.
- enjoy

When you want to create and call more review summary templates just add them to app/code/local/Hans2103/ReviewSummaryTemplate/Block/Helper.php

Credits
-----------
* Arjen Miedema for creating this simple Magento extension based on the Fontis.com blogpost.
* Fontis.com blogpost "Customised Magento review summary" http://www.fontis.com.au/blog/magento/customised-review-summary

Copyright
------------
Magento Hans2103_ReviewSummaryTemplates Extension is licensed under Open Software License ("OSL") v. 3.0
