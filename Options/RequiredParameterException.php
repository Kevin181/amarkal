<?php

namespace Amarkal\Widget;

/**
 * Exception thrown if a field is instantiated without a required parameter.
 * 
 * The required parameters are defined on a per-field basis.
 * 
 * @see FieldInterface::required_settings()
 */
class RequiredParameterException extends \RuntimeException { }
