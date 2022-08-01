<?php
/**
 * Mohith_Logger extension
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Mohith
 * @package   Mohith_Logger
 * @copyright Copyright (c) 2022
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Mohith_Logger',
    __DIR__
);