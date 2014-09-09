<?php
	debug($result);
    //ここにステージの情報が詰まってる

    foreach ($result as $key => $value1) {
        foreach ($value1 as $key => $value2) {
            echo $this->Html->Link($value2['stage_name'],'game/'.$value2['id'].'/'.$value2['scenario_id']);
        }
    }
