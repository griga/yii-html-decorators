<?php
/** Created by griga at 30.05.13 | 21:29.
 * 
 */

class RowWidget extends CWidget {
	public $label = '';
	public $for = '';
	public $well = false;
	public function init()
	{
		$test='';
		echo CHtml::openTag('div', array('class' => 'control-group' . ($this->well ? ' well' : '') ));
		echo CHtml::label($this->label, $this->for, array('class' => 'control-label'));
		echo CHtml::openTag('div', array('class' => 'controls'));
	}

	public function run(){
		echo CHtml::closeTag('div');
		echo CHtml::closeTag('div');
	}


}