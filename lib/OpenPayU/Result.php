<?php
/**
 * @copyright  Copyright (c) 2014 PayU
 * @license    http://opensource.org/licenses/LGPL-3.0  Open Software License (LGPL 3.0)
 *
 * http://www.payu.com
 * http://developers.payu.com
 * http://twitter.com/openpayu
 *
 */

/**
 * Class OpenPayU_Result
 */
class OpenPayU_Result
{
    private $status      = '';
    private $error       = '';
    private $success     = 0;
    private $request     = '';
    private $response    = '';
    private $sessionId   = '';
    private $message     = '';
    private $countryCode = '';
    private $reqId       = '';

    /**
     * @access public
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @access public
     * @param $value
     */
    public function setStatus($value)
    {
        $this->status = $value;
    }

    /**
     * @access public
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @access public
     * @param $value
     */
    public function setError($value)
    {
        $this->error = $value;
    }

    /**
     * @access public
     * @return int
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @access public
     * @param $value
     */
    public function setSuccess($value)
    {
        $this->success = $value;
    }

    /**
     * @access public
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @access public
     * @param $value
     */
    public function setRequest($value)
    {
        $this->request = $value;
    }

    /**
     * @access public
     * @return OpenPayU_Result
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @access public
     * @param $value
     */
    public function setResponse($value)
    {
        $this->response = $value;
    }

    /**
     * @access public
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @access public
     * @param $value
     */
    public function setSessionId($value)
    {
        $this->sessionId = $value;
    }

    /**
     * @access public
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @access public
     * @param $value
     */
    public function setMessage($value)
    {
        $this->message = $value;
    }

    /**
     * @access public
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @access public
     * @param $value
     */
    public function setCountryCode($value)
    {
        $this->countryCode = $value;
    }

    /**
     * @access public
     * @return string
     */
    public function getReqId()
    {
        return $this->reqId;
    }

    /**
     * @access public
     * @param $value
     */
    public function setReqId($value)
    {
        $this->reqId = $value;
    }

    /**
     * @param array $attributes
     */
    public function init($attributes)
    {
        $attributes = OpenPayU_Util::parseArrayToObject($attributes);

        if (!empty($attributes)) {
            foreach ($attributes as $name => $value) {
                $this->{$name} = $value;
            }
        }
    }
}
