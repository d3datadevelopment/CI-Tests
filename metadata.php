<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * https://www.d3data.de
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <info@shopmodule.com>
 * @link      https://www.oxidmodule.com
 */

declare(strict_types=1);

use D3\MailConfigChecker\Application\Controller\Admin\MailCheckBase;
use D3\MailConfigChecker\Application\Controller\Admin\MailCheckMenu;
use D3\MailConfigChecker\Application\Controller\Admin\MailConfigCheck;
use D3\MailConfigChecker\Application\Controller\Admin\MailInfoPage;
use D3\MailConfigChecker\Application\Controller\Admin\MailTester;
use D3\MailConfigChecker\Application\Controller\Admin\SpfChecker;
use D3\MailConfigChecker\Application\Controller\Admin\SmtpChecker;
use D3\MailConfigChecker\Application\Model\Constants;

$sMetadataVersion = '2.1';

$logo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em">';

/**
 * Module information
 */
$aModule = [
    'id'          => 'd3mailconfigchecker',
    'title'       => [
        'de' => $logo.' E-Mail Konfigurationspr&uuml;fung',
        'en' => $logo.' Mail Configuration Check Tool',
    ],
    'description' => [
        'de' => '',
        'en' => '',
    ],
    'thumbnail'   => 'picture.svg',
    'version'     => '3.0.1.0',
    'author'      => 'D&sup3; Data Development (Inh.: Thomas Dartsch)',
    'email'       => 'support@shopmodule.com',
    'url'         => 'https://www.oxidmodule.com/',
    'controllers' => [],
    'templates'   => [],
];

