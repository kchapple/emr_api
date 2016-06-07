<?php
/**
 * Created by PhpStorm.
 * User: kchapple
 * Date: 6/7/16
 * Time: 1:31 PM
 */
namespace Mi2\Emr\OpenEMR\Criteria;

abstract class AbstractCriteria
{
    public function __construct( $args )
    {
        if ( is_array( $args ) ) {
            foreach ( $args as $key => $value ) {
                $this->{$key} = $value;
            }
        }
    }

    public abstract function execute();
}