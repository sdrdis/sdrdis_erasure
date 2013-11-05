<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'name'    => 'Novius OS Erasure',
    'version' => 'chiba.2.2',
    'provider' => array(
        'name' => 'Novius OS',
    ),
    'namespace' => 'Sdrdis\Templates\Erasure',
    'i18n_file' => 'sdrdis_erasure::metadata',
    'launchers' => array(
    ),
    'enhancers' => array(
    ),
    'templates' => array(
        'sdrdis_erasure' => array(
            'file' => 'sdrdis_erasure::template_with_sidebar',
            'title' => 'Erasure with sidebar',
            'cols' => 1,
            'rows' => 1,
            'layout' => array(
                'content' => '0,0,1,1',
            ),
            'module' => '',
        ),
    ),
);
