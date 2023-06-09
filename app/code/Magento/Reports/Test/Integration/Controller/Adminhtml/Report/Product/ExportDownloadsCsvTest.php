<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Reports\Test\Integration\Controller\Adminhtml\Report\Product;

use Magento\TestFramework\TestCase\AbstractBackendController;

/**
 * @magentoAppArea adminhtml
 */
class ExportDownloadsCsvTest extends AbstractBackendController
{
    public function testExecute()
    {
        $this->dispatch('backend/reports/report_product/exportDownloadsCsv');
        $this->assertEquals(302, $this->getResponse()->getHttpResponseCode());
    }
}
