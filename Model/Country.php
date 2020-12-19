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
    private string $num;
    private string $alpha2;
    private string $alpha3;
    private bool   $independent;

    public function getNum(): string
    {
        return $this->num;
    }

    protected function setNum(string $num): void
    {
        $this->num = $num;
    }

    public function getAlpha2(): string
    {
        return $this->alpha2;
    }

    protected function setAlpha2(string $alpha2): void
    {
        $this->alpha2 = $alpha2;
    }

    public function getAlpha3(): string
    {
        return $this->alpha3;
    }

    protected function setAlpha3(string $alpha3): void
    {
        $this->alpha3 = $alpha3;
    }

    public function isIndependent(): bool
    {
        return $this->independent;
    }

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