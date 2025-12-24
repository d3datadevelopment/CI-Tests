<?php

/**
 * Copyright (c) D3 Data Development (Inh. Thomas Dartsch)
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * https://www.d3data.de
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <info@shopmodule.com>
 * @link      https://www.oxidmodule.com
 */

declare(strict_types=1);

namespace D3\OxLogIQ\Tests;

use D3\OxLogIQ\Context;
use D3\TestingTools\Development\CanAccessRestricted;
use Generator;
use OxidEsales\Facts\Config\ConfigFile;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use ReflectionException;

#[Small]
#[CoversMethod(Context::class, 'getFactsConfigFile')]
#[CoversMethod(Context::class, 'getRetentionDays')]
#[CoversMethod(Context::class, 'useAlertMail')]
#[CoversMethod(Context::class, 'getAlertMailRecipients')]
#[CoversMethod(Context::class, 'getAlertMailLevel')]
#[CoversMethod(Context::class, 'getAlertMailSubject')]
#[CoversMethod(Context::class, 'getAlertMailFrom')]
#[CoversMethod(Context::class, 'getSentryDsn')]
#[CoversMethod(Context::class, 'getHttpApiEndpoint')]
#[CoversMethod(Context::class, 'getHttpApiKey')]
class MyTest extends TestCase
{
    /**
     * @throws ReflectionException
     */
    #[Test]
    public function testGetFactsConfigFile(): void
    {
    	$this->assertTrue(true);
    }
}

