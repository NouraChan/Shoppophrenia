<?php

namespace App\Repository\Interface;


interface IQueryRepository {

    public function getRomance($products);

    public function getFantacy($products);
    public function getHorror($products);
    public function getDrama($products);
    public function getEducational($products);
    public function getHistorical($products);
    public function getMystery($products);


}

