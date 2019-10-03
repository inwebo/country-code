<?php

namespace Inwebo\Geo\Model;

use Throwable;

class CountryException extends \Exception
{
    const PCRE_PATTERN_NUM     = '/^[0-9]{3}$/';
    const PCRE_PATTERN_ALPHA_2 = '/^[A-Z]{2}$/';
    const PCRE_PATTERN_ALPHA_3 = '/^[A-Z]{3}$/';

    /**
     * CountryException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     * @param string         $num
     * @param string         $alpha2
     * @param string         $alpha3
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null, string $num, string $alpha2, string $alpha3)
    {
        if($message === "") {
            $message = $this->prepareMessage($num, $alpha2, $alpha3);
        }

        parent::__construct($message, $code, $previous);
    }

    /**
     * @param string $num
     * @param string $alpha2
     * @param string $alpha3
     *
     * @return string
     */
    protected function prepareMessage(string $num, string $alpha2, string $alpha3): string
    {
        $msgNum    = '';
        $msgAlpha2 = '';
        $msgAlpha3 = '';

        if(preg_match(CountryException::PCRE_PATTERN_NUM, $num) === 0) {
            $msgNum = sprintf('$num argument must be a 3 digits string and validate this PCRE pattern\'%s\'. Your input %s', CountryException::PCRE_PATTERN_NUM, $num);
        }

        if(preg_match(CountryException::PCRE_PATTERN_ALPHA_2, $alpha2) === 0) {
            $msgNum = sprintf('$alpha 2 argument must be a 3 digits string and validate this PCRE pattern \'%s\'. Your input %s', CountryException::PCRE_PATTERN_ALPHA_2, $alpha2);
        }

        if(preg_match(CountryException::PCRE_PATTERN_ALPHA_3, $alpha2) === 0) {
            $msgNum = sprintf('$alpha 2 argument must be a 3 digits string and validate this PCRE pattern \'%s\'. Your input %s', CountryException::PCRE_PATTERN_ALPHA_3, $alpha3);
        }

        $message = sprintf('%s %s %s', $msgNum, $msgAlpha2, $msgAlpha3);

        return $message;
    }
}