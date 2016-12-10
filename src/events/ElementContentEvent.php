<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\events;

use craft\base\ElementInterface;
use yii\base\Event;

/**
 * Element content event class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class ElementContentEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var ElementInterface The element model associated with the event.
     */
    public $element;
}
