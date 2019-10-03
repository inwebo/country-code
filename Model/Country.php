<?php

namespace Inwebo\Geo\Model;

/**
 * Class Country
 *
 * @see https://en.wikipedia.org/wiki/ISO_3166-1
 * @see https://www.iso.org/obp/ui/#search
 */
class Country
{
    /** @var string */
    private $num;
    /** @var string */
    private $alpha2;
    /** @var string */
    private $alpha3;
    /** @var bool */
    private $independent;

    /**
     * @return string
     */
    public function getNum(): string
    {
        return $this->num;
    }

    /**
     * @param string $num
     */
    protected function setNum(string $num): void
    {
        $this->num = $num;
    }

    /**
     * @return string
     */
    public function getAlpha2(): string
    {
        return $this->alpha2;
    }

    /**
     * @param string $alpha2
     */
    protected function setAlpha2(string $alpha2): void
    {
        $this->alpha2 = $alpha2;
    }

    /**
     * @return string
     */
    public function getAlpha3(): string
    {
        return $this->alpha3;
    }

    /**
     * @param string $alpha3
     */
    protected function setAlpha3(string $alpha3): void
    {
        $this->alpha3 = $alpha3;
    }

    /**
     * @return bool
     */
    public function isIndependent(): bool
    {
        return $this->independent;
    }

    /**
     * @param bool $independent
     */
    protected function setIndependent(bool $independent): void
    {
        $this->independent = $independent;
    }

    /**
     * Country constructor.
     *
     * @param string $num         3 digits string
     * @param string $alpha2      2 chars string
     * @param string $alpha3      3 chars string
     * @param bool   $isIndependent
     */
    public function __construct(string $num, string $alpha2, string $alpha3, bool $isIndependent)
    {
        $this->setNum($num);
        $this->setAlpha2($alpha2);
        $this->setAlpha3($alpha3);
        $this->setIndependent($isIndependent);
    }
}