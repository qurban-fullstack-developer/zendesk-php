<?php

namespace Qurban\ZendeskAPI\Resources\Core;

use Qurban\ZendeskAPI\Resources\ResourceAbstract;
use Qurban\ZendeskAPI\Traits\Resource\FindAll;

/**
 * The Translations class finds the manifest files for localizations
 */

class Translations extends ResourceAbstract
{
    use FindAll;
    /**
     * {@inheritdoc}
     */
    protected function setUpRoutes()
    {
        $this->setRoutes([
            'manifest'      => "{$this->resourceName}/manifest.json",
        ]);
    }

    /**
     * Get the manifest json file
     *
     * @param array $params
     *
     * @throws \Exception
     *
     * @return \stdClass | null
     */
    public function manifest(array $params = [])
    {
        return $this->findAll($params, __FUNCTION__);
    }

}