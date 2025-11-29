<?php

require_once 'basePokemon.php';

class Pokemon extends BasePokemon {
    public function train(int $trainType, int $intensity): void {
        $this->temp = $this->data;
        $stats = $this->data->stats;
        switch($trainType){
            case 0:
                $stats->atk += $intensity;
                break;
            case 1:
                $stats->def += $intensity;
                break;
            case 2:
                $stats->spd += $intensity;
        }
        $this->data->stats = $stats;
        $this->data->exp += $intensity;

        $this->levelUp($this->data->exp);
        $this->logTraining(
            $trainType, 
            $intensity, 
            $this->temp,
            $this->data);
        $this->save();
    }

    public function levelUp(int $exp): void {
        if ($this->data->threshold <= $exp){
            $this->data->level++;
            $this->data->stats->hp += 5;
            $this->data->exp = 0 ;

            $this->setNewThreshold();
        }
    }

    public function save(): void {
        file_put_contents('./data/stats.json',json_encode($this->data, JSON_PRETTY_PRINT));
    }

    public function logTraining(int $type, int $intensity, object $temp, object $data): void {
        $log = json_decode(file_get_contents('./data/log.json'));
        $newLog = (object)[
            "type" => $type,
            "intensity" => $intensity,
            "levelBefore" => $temp->level,
            "levelAfter" => $data->level,
            "hpBefore" => $temp->stats->hp,
            "hpAfter" => $data->stats->hp
        ];
        $log[] = $newLog;

        file_put_contents('./data/log.json', json_encode($log, JSON_PRETTY_PRINT));
    }
}