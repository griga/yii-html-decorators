<?php
/** Created by griga at 05.07.13 | 14:43.
 * 
 */

class TableWidget extends CWidget{

	public $stripped;
	public $condensed;
	public $hover;
	public $bordered;
	public $class;

	public function init()
	{
		echo CHtml::openTag('table',array('class'=>'table '
		.($this->stripped ? 'table-striped ' : '')
		.($this->hover ? 'table-hover ' : '')
		.($this->bordered ? 'table-bordered ' : '')
		.($this->condensed ? 'table-condensed ' : '')
		.($this->class ? $this->class : ''),
		));
	}

	public function run()
	{
		if ($this->bodyTagOpened){
			echo CHtml::closeTag('tbody');
		}
		echo '</table>';
	}

	public function header($headers = array()){
		if (count($headers)>0) {
			echo CHtml::openTag('thead');
			echo CHtml::openTag('tr');
			foreach ($headers as $header) {
				echo CHtml::tag('th',array(),$header);
			}
			echo CHtml::closeTag('tr');
			echo CHtml::closeTag('thead');
		}
	}

	/** @var bool to properly close tbody tag when finish widget or footer */
	private $bodyTagOpened = false;

	public function row($cells = array(), $handleTbody = true){
		if (!$this->bodyTagOpened && $handleTbody){
			echo CHtml::openTag('tbody');
			$this->bodyTagOpened = true;
		}
		if (count($cells)>0) {
			echo CHtml::openTag('tr');
			foreach ($cells as $cell) {
				echo CHtml::tag('td',array(),$cell);
			}
			echo CHtml::closeTag('tr');
		}
	}

}




