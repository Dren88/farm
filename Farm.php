<?php


class Farm
{
    private array $animals;

    public function addAnimal(Animal $animal)
    {
        $this->animals[get_class($animal)][] = $animal;
    }

    public function fillFarm($count, $type)
    {
        for ($i = 0; $i < $count; $i++){
            $this->addAnimal(new $type());
        }
    }

    public function countAnimal()
    {
        $count = [];
        foreach ($this->animals as $k => $animal){
            $count = array_merge($count, [$k => count($animal)]);
        }
        return $count;
    }

}
