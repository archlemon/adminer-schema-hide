<?php

/** Hide some schemas
* @link https://www.adminer.org/plugins/#use
* @author Matt Edmonston, https://github.com/archlemon
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/
class AdminerSchemaHide {
    protected $disabled;

    /**
    * @param array case insensitive schema names in values
    */
    function __construct($disabled = []) {
        $this->disabled = array_map('strtolower', $disabled);
    }

    function schemas() {
        $return = [];
        foreach (schemas() as $schema) {
            if (!in_array(strtolower($schema), $this->disabled)) {
                $return[] = $schema;
            }
        }
        return $return;
    }
}
