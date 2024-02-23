<?php
/*Plugin Name: Quote WordPress Book Quote Plugin
Description: Quote Plugin For WordPress: Learn By Coding
Version: 1.0
Author: Scott Hughes
*/

function wpbook_quote() {
    $quotes=array(
        'Computer Science is no more about computers than astronomy is about telescopes.
        — Edsger W. Dijkstra',
        'Software is like entropy: It is difficult to grasp, weighs nothing, and obeys the Second Law of Thermodynamics; i.e., it always increases. — Norman Augustine',
        'Tell me and I forget.  Teach me and I remember.  Involve me and I learn.”
        — Benjamin Franklin',
        'Your most unhappy customers are your greatest source of learning.”
        — Bill Gates'
    );
    return $quotes[rand(0,3)];
    }


add_shortcode('wpbook_quote', 'wpbook_quote');