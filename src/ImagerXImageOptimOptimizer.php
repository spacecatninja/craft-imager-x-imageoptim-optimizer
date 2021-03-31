<?php
/**
 * Rounded corners effect for Imager X
 *
 * @link      https://www.spacecat.ninja/
 * @copyright Copyright (c) 2020 André Elvan
 */

namespace spacecatninja\imagerximageoptimoptimizer;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use spacecatninja\imagerximageoptimoptimizer\optimizers\ImageoptimOptimizer;
use yii\base\Event;

/**
 * @author    SpaceCatNinja
 * @package   ImagerXRoundedCorners
 * @since     1.0.0
 *
 */
class ImagerXImageOptimOptimizer extends Plugin
{
    public function init()
    {
        parent::init();

        Event::on(\spacecatninja\imagerx\ImagerX::class,
            \spacecatninja\imagerx\ImagerX::EVENT_REGISTER_OPTIMIZERS,
            static function (\spacecatninja\imagerx\events\RegisterOptimizersEvent $event) {
                $event->optimizers['imageoptim'] = ImageoptimOptimizer::class;
            }
        );
    }
}
