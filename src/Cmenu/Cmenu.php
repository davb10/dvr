<?php
/**
 * @author david
 *
 */
class Cmenu {
	
	/*PROPERITIES  */
	private $menu = array();	
	
	/**------------------------------------------------------------------------------
	 * SetMenu
	* ------------------------------------------------------------------------------
	* Creates Items in the menu in an array
	* In : $name is the link name, $item menu list in array
	* Out: 
	* ------------------------------------------------------------------------------**/
	function SetMenu($name,$item){
		$this -> menu[$name] = $item;
		
	}

	/**------------------------------------------------------------------------------
	 * generateMenu
	* ------------------------------------------------------------------------------
	* Load menu as an array and return html
	* In : 
	* Out: $html return menu array in html
	* ------------------------------------------------------------------------------**/
	function GenerateMenu() {
		$html = "<nav>\n";
		foreach($this->menu as $item) {
			$html .= "<a href='{$item['url']}'>{$item['text']}</a>\n";}
			$html .= "</nav>\n";
			return $html;
	}
	
}