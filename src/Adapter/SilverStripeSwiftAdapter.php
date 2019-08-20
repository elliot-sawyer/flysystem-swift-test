<?php
namespace ElliotSawyer\FlysystemSwiftTest;
use Nimbusoft\Flysystem\OpenStack\SwiftAdapter;
use OpenStack\OpenStack;

/**
 * Sole reason for this to exist is to obtain the container name from our instance
 * and pass it onto the parent, which does the heavy lifting.
 * It would be awesome if this was completely injectable
 */
class SilverStripeSwiftAdapter extends SwiftAdapter
{
    public function __construct(OpenStack $client, $containerName, $prefix = null)
    {
        //get the container name
        $container = $client->objectStoreV1()->getContainer($containerName);

        //pass it into the parent constructor, if it exists
        if($container) {
            parent::__construct(
                $container,
                $prefix
            );
        }
    }
}
