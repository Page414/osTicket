<?php
/*********************************************************************
    timebill.php

    Time & Billing

    Robin Toy <robin@strobe-it.co.uk>
    https://www.strobe-it.co.uk

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('staff.inc.php');
#require_once(INCLUDE_DIR.'class.faq.php');

#$category=null;
#if($_REQUEST['cid'] && !($category=Category::lookup($_REQUEST['cid'])))
#    $errors['err']=__('Unknown or invalid FAQ category');

#$inc='faq-categories.inc.php'; //KB landing page.
#if($category && $_REQUEST['a']!='search') {
#    $inc='faq-category.inc.php';
#}
$nav->setTabActive('timebills');
#$ost->addExtraHeader('<meta name="tip-namespace" content="knowledgebase.faqs" />',
#    "$('#content').data('tipNamespace', 'knowledgebase.faqs');");
require_once(STAFFINC_DIR.'header.inc.php');
#require_once(STAFFINC_DIR.$inc);
print "New Section to be created";
require_once(STAFFINC_DIR.'footer.inc.php');
?>
