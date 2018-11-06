<?php
/**
 * Category SEO Texts setup file
 *
 * @section LICENSE
 * This file is created by vianetz <info@vianetz.com>.
 * The code is distributed under the GPL license.
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@vianetz.com so we can send you a copy immediately.
 *
 * @category    Vianetz
 * @package     Vianetz_CategorySeoTexts
 * @author      Christoph Massmann, <C.Massmann@vianetz.com>
 * @link        https://www.vianetz.com
 * @copyright   Copyright (c) since 2006 vianetz - Dipl.-Ing. C. Massmann (https://www.vianetz.com)
 * @license     http://www.gnu.org/licenses/gpl-3.0.txt GNU GENERAL PUBLIC LICENSE
 */

/**
 * @var \Mage_Catalog_Model_Resource_Setup $installer
 */
$this->startSetup();

$categoryEntityTypeId = $this->getEntityTypeId('catalog_category');
$this->updateAttribute($categoryEntityTypeId, 'seo_text_bottom', 'is_wysiwyg_enabled', 1);

$this->endSetup();