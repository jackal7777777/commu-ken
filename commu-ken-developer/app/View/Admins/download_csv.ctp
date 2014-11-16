<?php

$this->Csv->addRow($th);

	//debug($th);

	switch ($model) {
		case 'User':
			
			//foreach ($td as $t) {
			    $this->Csv->addField($td);
			    //$this->Csv->addField('sdfgsdfg');
			    $this->Csv->endRow();
			//}

			break;

		case 'Survey':
			
			foreach ($td as $t) {
			    $this->Csv->addField($t['Survey']['user_id']);
			    $this->Csv->addField($t['Survey']['step_id']);
			    $this->Csv->addField($t['Survey']['survey_flag']);
			    $this->Csv->addField($t['Survey']['survey_text']);
			    $this->Csv->endRow();
			}

			break;

		case 'Play_history':
			
			foreach ($td as $t) {
			    $this->Csv->addField($t['Play_history']['step_id']);
			    $this->Csv->addField($t['Play_history']['answer_id']);
			    $this->Csv->endRow();
			}

			break;
		
		default:
			# code...
			break;
	}






$this->Csv->setFilename($filename);
echo $this->Csv->render();