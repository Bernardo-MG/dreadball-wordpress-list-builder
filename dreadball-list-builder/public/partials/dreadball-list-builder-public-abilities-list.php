<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/Bernardo-MG
 * @since      1.0.0
 *
 * @package    Dreadball_List_Builder
 * @subpackage Dreadball_List_Builder/public/partials
 */

use Tabletop\Dreadball\Unit\DefaultAbility;

function abilities_table_rows() {
    $abilities = array(new DefaultAbility('Ability1'),  new DefaultAbility('Ability2'),  new DefaultAbility('Ability3'));

    $rows = '';
    foreach ($abilities as $ability){
        $rows .= '<tr><td>' . $ability->getName() . '</td></tr>';
    }

    return $rows;
}

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
    <h2>Abilities list</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        <?php
        echo abilities_table_rows();
        ?>
        </tbody>
    </table>
</div>
