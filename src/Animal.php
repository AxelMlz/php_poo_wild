ublic const SIZE_UNIT_CHANGE_LIMIT = 100;
    const THREATENED_LEVELS = array("NE (Not Evaluated)" => "NE", "DD (Data Deficient)" => "DD", "LC (Least Concern)" => "LC", "NT (Near Threatened)" =>  "NT", "VU (Vulnerable)" => "VU", "EN (Endangered)" =>  "EN", "CR (Critically Endangered)" => "CR", "EW (Extinct in the wild)" => "EW", "EX (Extinct)" => "EX");
    public function __construct(string $name, int $pawNumber)
    {
        $this->name = $name;
        $this->setPawNumber($pawNumber);
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPaws()
    {
        return $this->pawNumber;
    }
    private function setPawNumber(int $pawNumber): void
    {
        if ($pawNumber < 0) {
            $pawNumber = 0;
        }
        $this->pawNumber = $pawNumber;
    }

    private float $size = 100;
    public function getSize(): float
    {
        return $this->size;
    }
    public function setSize(int $size): void
    {
        $this->size = $size;
    }
    public function getSizeWithUnit(): string
    {
        if ($this->getSize() < self::SIZE_UNIT_CHANGE_LIMIT) {
            return $this->getSize() . 'cm';
        } else {
            return ($this->getSize() / self::CENTIMETERS_IN_METER) . 'm';
        }
    }

    public function speak(): string
    {
        return 'Welcome to the zoo, I am a ' . $this->name;
    }
    public function isDangerous(): bool
    {
        if ($this->size > 50 && $this->carnivorous === true) {
            $danger = true;
        } else {
            $danger = false;
        }

        return $danger;
    }

    protected bool $carnivorous = false;

    public function isCarnivorous()
    {
        return $this->carnivorous;
    }
    public function getCarnivorous()
    {
        return $this->carnivorous;
    }
    public function setCarnivorous(): bool
    {
        return $this->carnivorous;
    }

    public function isThreatened()
    {
        return $this->threatenedLevel;
    }
    public string $threatenedLevel = "LC";
    public function setThreatenedLevel(): string
    {
        if (in_array(
            $this->threatenedLevel,
            self::THREATENED_LEVELS,
            true
        )) {
            return $this->threatenedLevel =
                array_search($this->threatenedLevel, self::THREATENED_LEVELS);
        } else {
            return $this->threatenedLevel =
                'Unknown endangerement status';
        }
    }
    public function getThreatenedLevel()
    {
        return $this->threatenedLevel;
    }
}

class Mammal extends Animal
{
    private $pawNumber = 4;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }

    public function speak(): string
    {
        return 'Welcome human, I\'am a mammal too and my name is ' . $this->name;
    }
}



final class Felid extends Mammal
{
    public bool $carnivorous = true;
}
final class Equid extends Mammal
{
    public bool $carnivorous = false;
}



class Bird extends Animal
{
    private $pawNumber = 2;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}



class Reptile extends Animal
{
    public bool $carnivorous = true;
}



final class Crocodilian extends Reptile
{
    private $pawNumber = 4;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}



final class Snake extends Reptile
{
    private $pawNumber = 0;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}



class Arthropode  extends Animal
{
}
class Arachnide extends Arthropode
{
    private $pawNumber = 8;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}
final class Spider extends Arachnide
{
    public bool $carnivorous = true;
}
class Insect  extends Arthropode
{
    private $pawNumber = 6;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}

final class Fish  extends Animal
{
    private $pawNumber = 0;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}
