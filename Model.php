<?php


class Model
{
    public $operations = [];

    public function setOperations($operations) {
        $this->operations = $operations;
    }

    public function getStocks()
    {
        $result = [];
        foreach ($this->operations as $item) {
            if ($item['type'] === "import") {
                $result[] = $item;
            }
        }
        return $result;
    }
}