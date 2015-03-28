<?php

function my_connection_types() {
    p2p_register_connection_type( array(
        'name' => 'vacationPackage_to_destination', //Relation between vacationsPackages and hotels
        'from' => 'vacationpackage',
        'to' => 'destination'
    ) );
    p2p_register_connection_type( array(
        'name' => 'destination_to_hotel', //Relation between vacationsPackages and destinations
        'from' => 'destination',
        'to' => 'hotel'
    ) );
}

add_action( 'p2p_init', 'my_connection_types' );
?>