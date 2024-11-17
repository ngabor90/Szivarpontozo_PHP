<?php

enum Origin: string{
    case Dominika = 'Dominika';
    case Nicaragua = 'Nicaragua';
    case Honduras = 'Honduras';
    case Kuba = 'Kuba';
    case Egyeb = 'Egyeb';
}

enum Score: string{
    case Legjobb = 'Legjobb';
    case Jó = 'Jó';
    case Közepes = 'Közepes';
    case Elmegy = 'Elmegy';
    case Rossz = 'Rossz';
}

class Cigar{
    // Adattagok
    private string $name;
    private string $cigarName;
    private Origin $origin;
    private string $size;
    private float $time;
    private Score $score;
    private bool $buyAgain;

    // Konstruktor
    public function __construct(string $name, string $cigarName, Origin $origin, string $size, float $time, Score $score, bool $buyAgain){
        $this->name = $name;
        $this->cigarName = $cigarName;
        $this->origin = $origin;
        $this->size = $size;
        $this->time = $time;
        $this->score = $score;
        $this->buyAgain = $buyAgain;
    }

    // Getters
    public function getName(): string{
        return $this->name;
    }

    public function getCigarName(): string{
        return $this->cigarName;
    }

    public function getOrigin(): Origin{
        return $this->origin;
    }

    public function getSize(): string{
        return $this->size;
    }

    public function getTime(): float{
        return $this->time;
    }

    public function getScore(): Score{
        return $this->score;
    }

    public function getBuyAgain(): bool{
        return $this->buyAgain;
    }
    
    // Alprogramok
    public function CSV(): string{
        return $this->name . ";" . $this->cigarName . ";" . $this->origin->value . ";" . $this->size . ";" . $this->time . ";" . $this->score->value . ";" . ($this->buyAgain ? '1' : '0') . "\n";
    }

    public static function csvToCigar(array $elements): Cigar{
        return new Cigar($elements[0], $elements[1], Origin::from($elements[2]), $elements[3], floatval($elements[4]), Score::from($elements[5]), $elements[6] == '1');
    }
}