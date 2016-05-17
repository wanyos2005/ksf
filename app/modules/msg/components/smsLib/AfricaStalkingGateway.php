<?php

class AfricaStalkingGateway {

        protected $_username;
        protected $_apiKey;
        protected $_requestBody;
        protected $_requestUrl;
        protected $_responseBody;
        protected $_responseInfo;
        protected $_errorMessage;

        const URL = 'https://api.africastalking.com/version1/messaging';
        const AcceptType = 'application/json';

        /*
         * Turn this on if you run into problems. It will print the raw HTTP response from our server
         */
        const Debug = False;
        const HTTP_CODE_OK = 200;
        const HTTP_CODE_CREATED = 201;

        public function __construct($username_, $apiKey_)
        {
                $this->_username = $username_;
                $this->_apiKey = $apiKey_;

                $this->_requestBody = null;
                $this->_requestUrl = self::URL;

                $this->_responseBody = null;
                $this->_responseInfo = null;

                $this->_errorMessage = '';
        }

        public function sendMessage($to_, $message_, $from_ = null, $bulkSMSMode_ = 1)
        {
                /*
                 * The optional from_ parameter should be populated with the value of a shortcode or alphanumeric that is
                 * registered with us
                 * The optional  will be used by the Mobile Service Provider to determine who gets billed for a
                 * message sent using a Mobile-Terminated ShortCode. The default value is 1 (which means that
                 * you, the sender, gets charged). This parameter will be ignored for messages sent using
                 * alphanumerics or Mobile-Originated shortcodes.
                 */
                $params = array(
                    'username' => $this->_username,
                    'to' => $to_,
                    'message' => $message_,
                );

                if ($from_ !== null) {
                        $params['from'] = $from_;
                        $params['bulkSMSMode'] = $bulkSMSMode_;
                }

                $this->_requestUrl = self::URL;
                $this->buildPostBody($params);

                try {
                        $this->execute('POST');

                        if ($this->_responseInfo['http_code'] != self::HTTP_CODE_CREATED) {
                                $this->_errorMessage = "Error while connecting to the Gateway";
                                if (isset($this->_responseBody->SMSMessageData)) {
                                        $this->_errorMessage .= ": " . $this->_responseBody->SMSMessageData->Message;
                                }
                                return array();
                        }

                        return $this->_responseBody->SMSMessageData->Recipients;
                } catch (Exception $e) {
                        $this->_errorMessage = "Error while connecting to the Gateway";
                        return array();
                }
        }

        public function fetchMessages($lastReceivedId_, &$results_)
        {
                $username = $this->_username;
                $this->_requestUrl = self::URL . '?username=' . $username . '&lastReceivedId=' . intval($lastReceivedId_);

                try {
                        $this->execute('GET');
                        if ($this->_responseInfo['http_code'] != self::HTTP_CODE_OK) {
                                $this->_errorMessage = "Error while connecting to the Gateway.";
                                if (isset($this->_responseBody->SMSMessageData)) {
                                        $this->_errorMessage .= ": " . $this->_responseBody->SMSMessageData->Message;
                                }
                                return false;
                        }

                        $results_ = $this->_responseBody->SMSMessageData->Messages;
                        return true;
                } catch (Exception $e) {
                        $this->_errorMessage = "Error while connecting to the Gateway";
                        return false;
                }
        }

        public function getErrorMessage()
        {
                return $this->_errorMessage;
        }

        protected function execute($verb_)
        {
                $ch = curl_init();
                try {
                        switch (strtoupper($verb_)) {
                                case 'GET':
                                        $this->executeGet($ch);
                                        break;
                                case 'POST':
                                        $this->executePost($ch);
                                        break;
                                default:
                                        throw new InvalidArgumentException('Current verb (' . $verb_ . ') is not implemented.');
                        }
                } catch (InvalidArgumentException $e) {
                        curl_close($ch);
                        throw $e;
                } catch (Exception $e) {
                        curl_close($ch);
                        throw $e;
                }
        }

        protected function doExecute(&$curlHandle_)
        {
                $this->setCurlOpts($curlHandle_);
                $responseBody = curl_exec($curlHandle_);

                if (self::Debug) {
                        echo "Full response: " . print_r($responseBody, true);
                }

                $this->_responseInfo = curl_getinfo($curlHandle_);

                $this->_responseBody = json_decode($responseBody);

                curl_close($curlHandle_);
        }

        protected function executeGet($ch_)
        {
                $this->doExecute($ch_);
        }

        protected function executePost($ch_)
        {
                curl_setopt($ch_, CURLOPT_POSTFIELDS, $this->_requestBody);
                curl_setopt($ch_, CURLOPT_POST, 1);
                $this->doExecute($ch_);
        }

        protected function setCurlOpts(&$curlHandle_)
        {
                curl_setopt($curlHandle_, CURLOPT_TIMEOUT, 60);
                curl_setopt($curlHandle_, CURLOPT_SSL_VERIFYPEER, FALSE);
                curl_setopt($curlHandle_, CURLOPT_URL, $this->_requestUrl);
                curl_setopt($curlHandle_, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curlHandle_, CURLOPT_HTTPHEADER, array('Accept: ' . self::AcceptType,
                    'apikey: ' . $this->_apiKey));
        }

        protected function buildPostBody($data_)
        {
                if (!is_array($data_)) {
                        throw new InvalidArgumentException('Invalid data input for postBody.  Array expected');
                }

                $data_ = http_build_query($data_, '', '&');
                $this->_requestBody = $data_;
        }

        public function checkBalance()
        {
                $url = 'https://api.africastalking.com/version1/user?username=' . $this->_username;
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_TIMEOUT, 60);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: ' . self::AcceptType,
                    'apikey: ' . $this->_apiKey));
                $responseBody = curl_exec($ch);

                if (self::Debug) {
                        echo "Full response: " . print_r($responseBody, true);
                }

                $this->_responseInfo = curl_getinfo($ch);

                $this->_responseBody = json_decode($responseBody);

                curl_close($ch);
                if ($this->_responseInfo['http_code'] != self::HTTP_CODE_OK) {
                        $this->_errorMessage = "Error while connecting to the Gateway.";
                        return false;
                }
                return $this->_responseBody;
        }

}
