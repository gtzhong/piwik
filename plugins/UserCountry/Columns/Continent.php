<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\UserCountry\Columns;

use Piwik\Columns\Column;
use Piwik\Piwik;

class Continent extends Column
{
    public function getName()
    {
        return Piwik::translate('UserCountry_Continent');
    }
}