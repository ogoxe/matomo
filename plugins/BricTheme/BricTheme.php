<?php
/**
 * Matomo - free/libre analytics platform.
 *
 * @see http://matomo.org
 *
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\BricTheme;

class BricTheme extends \Piwik\Plugin
{
    public function registerEvents()
    {
        return [
            'Theme.configureThemeVariables' => 'configureThemeVariables',
        ];
    }

    public function configureThemeVariables(\Piwik\Plugin\ThemeStyles $vars)
    {
        $vars->colorLink = '#2c3b8d';
        $vars->colorBrand = '#2c3b8d';
        $vars->colorHeaderBackground = '#2c3b8d';
        $vars->colorMenuContrastTextActive = '#2c3b8d'; // primary-color500
        $vars->colorBackgroundBase = '#f3f5f7'; // primary-color100
        $vars->colorBaseSeries = '#b2002d';
    }
}
