<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\VisitorInterest\Columns;

use Piwik\Columns\Column;
use Piwik\Piwik;

class VisitDuration extends Column
{
    public function getName()
    {
        return Piwik::translate('VisitorInterest_ColumnVisitDuration');
    }
}