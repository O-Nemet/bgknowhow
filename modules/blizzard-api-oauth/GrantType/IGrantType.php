<?php
//namespace OAuth2\GrantType;

/**
 * Specific GrantType Interface
 */
interface IGrantType
{
    /**
     * Adds a specific Handling of the parameters
     *
     * @param mixed $parameters the parameters array (passed by reference)
     * @return array of Specific parameters to be sent.
     */
    public function validateParameters(&$parameters);
}
