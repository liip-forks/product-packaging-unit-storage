<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductPackagingUnitStorage\Persistence;

use Orm\Zed\ProductPackagingUnitStorage\Persistence\SpyProductAbstractPackagingStorageQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;
use Spryker\Zed\ProductPackagingUnitStorage\ProductPackagingUnitStorageDependencyProvider;

/**
 * @method \Spryker\Zed\ProductPackagingUnitStorage\ProductPackagingUnitStorageConfig getConfig()
 * @method \Spryker\Zed\ProductPackagingUnitStorage\Persistence\ProductPackagingUnitStorageQueryContainerInterface getQueryContainer()
 */
class ProductPackagingUnitStoragePersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\ProductPackagingUnitStorage\Persistence\SpyProductAbstractPackagingStorageQuery
     */
    public function createSpyProductAbstractPackagingStorageQuery()
    {
        return SpyProductAbstractPackagingStorageQuery::create();
    }

    /**
     * @return \Spryker\Zed\ProductPackagingUnitStorage\Dependency\QueryContainer\ProductPackagingUnitStorageToProductQueryContainerInterface
     */
    public function getProductQueryContainer()
    {
        return $this->getProvidedDependency(ProductPackagingUnitStorageDependencyProvider::QUERY_CONTAINER_PRODUCT);
    }
}
