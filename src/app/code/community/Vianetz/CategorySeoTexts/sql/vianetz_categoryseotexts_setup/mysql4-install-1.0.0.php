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

$this->startSetup();

$this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'seo_text_bottom', array(
    'group' => 'General Information',
    'input' => 'textarea',
    'type' => 'text',
    'label' => 'SEO Text (bottom)',
    'backend' => '',
    'visible' => true,
    'required' => false,
    'visible_on_front' => true,
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));

$this->endSetup();