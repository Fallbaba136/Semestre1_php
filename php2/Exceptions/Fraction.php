<?php 
class Fraction 
{
    private int $numerateur;
    private int $denominateur;

    public function __construct(int $numerateur, int $denominateur)
    {
        $this->setNumerateur($numerateur);
        $this->setDenominateur($denominateur);
    }
    /**
     * @return int
     */

    public function getNumerateur(): int
    {
        return $this->numerateur;
    }

    /**
     * @param int $numerateur
     */

    public function setNumerateur(int $numerateur): void
    {
        $this->numerateur = $numerateur;
    }

    /**
     * @return int
     */
    public function getDenominateur(): int
    {
        return $this->denominateur;
    }

    /**
     * @param int $denominateur
     * @throws Execption
     */

    public function setDenominateur(int $denominateur): void
    {
        if ($denominateur == 0) {
            throw new Exception("Division par 0 !");
        }
        $this->denominateur = $denominateur;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return "$this->numerateur / $this->denominateur";
    }

}