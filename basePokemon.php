<?php

abstract class BasePokemon {
    protected object $data;
    protected object $temp;

    public function __construct(object $json) {
        $this->data = $json;
        if ($this->data->threshold == 0) $this->data->threshold = round(array_sum((array)$this->data->stats) / 100 * $this->data->level);
    }
    
    public function getData(): mixed {
        return $this->data;
    }

    public function setNewThreshold(): void {
        $this->data->threshold = round(array_sum((array)$this->data->stats) / 100 * $this->data->level);
    }
    abstract public function train(int $trainType, int $intensity): void;
    abstract protected function levelUp(int $exp): void;
    abstract protected function save(): void;
    abstract protected function logTraining(
        int $type, 
        int $intensity, 
        object $temp, 
        object $data
    ): void;
}
        
        