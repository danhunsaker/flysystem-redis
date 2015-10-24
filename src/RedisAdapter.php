<?php
namespace Danhunsaker\Flysystem\Redis;

use League\Flysystem\Adapter\AbstractAdapter;
use League\Flysystem\Adapter\Polyfill\StreamedTrait;
use League\Flysystem\Config;
use League\Flysystem\Util;
use Predis\Client;

class RedisAdapter extends AbstractAdapter
{
    use StreamedTrait;
    
    /**
     * @type Predis\Client
     */
    protected $redis;

    /**
     * @var string
     */
    protected $pathSeparator = ':';

    /**
     * @param Predis\Client $redis
     * @param string $prefix
     */
    public function __construct(Client $redis, $prefix = 'flysystem:')
    {
        $this->redis = $redis;
        $this->setPathPrefix($prefix);
    }

    /**
     * {@inheritdoc}
     */
    public function write($path, $contents, Config $config)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function has($path)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function read($path)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadata($path)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function getSize($path)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function getMimetype($path)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function getTimestamp($path)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function update($path, $contents, Config $config)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function rename($path, $newpath)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function copy($path, $newpath)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function delete($path)
    {
        
    }
    
    /**
     * {@inheritdoc}
     */
    public function createDir($dirname, Config $config)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function listContents($directory = '', $recursive = false)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function deleteDir($dirname)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function setVisibility($path, $visibility)
    {
        
    }
    
    /**
     * {@inheritdoc}
     */
    public function getVisibility($path)
    {
        
    }
}
