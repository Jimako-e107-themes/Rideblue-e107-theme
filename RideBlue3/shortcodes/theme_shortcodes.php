<?php

/* universal default theme shortcodes - version 2 */
 
class default_theme_shortcodes extends e_shortcode
{
 
 
	/*******************   START OF MOVED SHORTCODES FROM JMTHEME PLUGIN VERSION 2.0 *************************/

	/**
	/* WAY HOW TO DISPLAY MENUS FROM DEFAULT LAYOUT on other layouts
	/* {DEFAULT_MENUAREA=100}
	 **/
	public function sc_default_menuarea($parm)
	{
		$path = $parm;
		/* don't render anything for default layout, let it on core, it has to be set in Menu Manager for default layout */
		if (THEME_LAYOUT == e107::getPref('sitetheme_deflayout'))
		{
			return "";
		}
		$footermenu = e107::getMenu();
		// tell menu manager that you want menus from default layout
		$footermenu->eMenuActive = $this->getDataLegacyTheme(e107::getPref('sitetheme_deflayout'));
		// render default menus and save it for later use
		$text = $footermenu->renderArea($parm);
		// return it back because it has to work without change in Menu Manager
		$footermenu->eMenuActive = $this->getDataLegacyTheme(THEME_LAYOUT);

		return $text;
	}

	/**
	 * Function to retrieve Menu data from tables.
	 * original: private function getDataLegacy()
	 * change: Layout name as parameter
	 */
	private function getDataLegacyTheme($menu_layout_field = '')
	{
		$sql = e107::getDb();
		//original:  $menu_layout_field = THEME_LAYOUT!=e107::getPref('sitetheme_deflayout') ? THEME_LAYOUT : "";
		$menu_layout_field = $menu_layout_field != e107::getPref('sitetheme_deflayout') ? THEME_LAYOUT : "";
		$cacheData = e107::getCache()->retrieve_sys("menus_" . USERCLASS_LIST . "_" . md5(e_LANGUAGE . $menu_layout_field));
		$menu_data = e107::unserialize($cacheData);

		$eMenuArea = array();
		if (empty($menu_data) || !is_array($menu_data))
		{
			$menu_qry = 'SELECT * FROM #menus WHERE menu_location > 0 AND menu_class IN (' . USERCLASS_LIST . ') AND menu_layout = "' . $menu_layout_field . '" ORDER BY menu_location,menu_order';
			if ($sql->gen($menu_qry))
			{
				while ($row = $sql->fetch())
				{
					$eMenuArea[$row['menu_location']][] = $row;
				}
			}
			$menu_data['menu_area'] = $eMenuArea;
			$menuData = e107::serialize($menu_data, 'json');
			e107::getCache()->set_sys('menus_' . USERCLASS_LIST . '_' . md5(e_LANGUAGE . $menu_layout_field), $menuData);
		}
		else
		{
			$eMenuArea = $menu_data['menu_area'];
		}
		return $eMenuArea;
	}

	/* {LAYOUT_BGIMAGE: template=bgimage} */
	public function sc_layout_bgimage($parm = NULL)
	{

		$sc   = e107::getScBatch('page', null, 'cpage');
	    $data = $sc->getVars();   
 
		$layout =  preg_replace('/[\W]/', '', THEME_LAYOUT);
 
		if(e107::isInstalled('jmlayouts')) {
			$where = " layout_mode = '".$layout."' LIMIT 1 ";
			$this->actualLayoutData = $this->layoutsOptions[$layout];
		}
 
		$template = $parm['template'];       
		if (empty($layout))     
		{
			return '';
		}
		if (empty($template))
		{
			$template = $layout;
		}                 
		if (empty($values))
		{
			$tempvalues = e107::unserialize($this->actualLayoutData['layout_options']);
			$values = $tempvalues['fields'];
		}           

		if (empty($values))
		{
			return '';
		}      
		$tpl = e107::getTemplate('jmlayouts', 'jmlayouts', $template);
		if (empty($tpl))
		{
			return '';
		}           
		if ($values['no-image'])
		{
			$imagepath = '';
			return '';
		}
		elseif ($values['background-image-url'])
		{
			$imagepath = $values['background-image-url'];
			$imagepath = e107::getParser()->replaceConstants($imagepath, 'full', true);

		}
		elseif ($values['background-image'])
		{
			$imagepath = $values['background-image'];
			$imagepath = e107::getParser()->replaceConstants($imagepath, 'full', true);
		}
		else
		{
			$imagepath = '';
			return '';
		}
		$fieldsvar['BGIMAGE'] = $imagepath;
		$start = e107::getParser()->simpleParse($tpl, $fieldsvar);
		
		return $start;
	}
    
    /* {THEME_MENU: path=chapternavigation} */
	/* {THEME_MENU: path=chapternavigation} */
	/* use Shortcode menu for using is in Menu Manager */
	function sc_theme_menu($parm, $mode='')
	{ 	
 
		if(is_array($parm)) 
		{
			$mpath = $parm['path'];   
			$mname = $mpath."_menu";
			$id = e107::getForm()->name2id($mpath . $mname);
			e107::getRender()->setUniqueId($id);    
			$menu_path =  e_THEME.$this->parentTheme."/menus/".$mname.'.php';
			deftrue(e_DEBUG) ? require($menu_path) : @include($menu_path);
		}
	}
    

	  /* {LAYOUT_ELEMENT: element=title} */
	  function sc_layout_element($parm = '')
	  {
		$layout =  preg_replace('/[\W]/', '', THEME_LAYOUT);
		$element = $parm['element'];
		$template = varset($parm['template'], true);
			
		if (empty($layout))
		{
		  return '';
		}
		if (empty($element))
		{
		  return '';
		}
 
		if(e107::isInstalled('jmlayouts')) {
			$where = " layout_mode = '".$layout."' LIMIT 1 ";
			$this->actualLayoutData = e107::getDb()->retrieve('jmlayout', '*', $where ); 
		}

		$ArrayData = $this->actualLayoutData['layout_options'];
	   
		if(trim($ArrayData) == 'Array') {
		   return '';
		}
			  
		$values = e107::unserialize($ArrayData);  
		$values = $values['fields'];
	 
		if (empty($values))
		{
		  return '';
		}
 
		if(isset($values[$element])) 
		{
		 
		 $elementvalue = $values[$element];
		 $elementvalue = e107::getParser()->replaceConstants($elementvalue, 'full', true);
		}
		else {
		 $elementvalue = '';
		}
		 
		if (empty($template))
		{
		  return $elementvalue;
		}
	
		$tpl = e107::getTemplate('jmlayouts', 'jmlayouts', $template);
	 
		if (empty($tpl))
		{
		  return $elementvalue; 
		}      
		$key = strtoupper($element); 
		$fieldsvar[$key] = $elementvalue; 
		$text = e107::getParser()->simpleParse($tpl, $fieldsvar);  
		return $text; 
	  }    
      
      

	/*******************   END OF MOVED SHORTCODES FROM JMTHEME PLUGIN *************************/
    
    public function sc_layout_navbar($parm = array()) 
	{
        return $this->sc_html_fragment("navbar", $parm);
    }
    
    public function sc_layout_header($parm = array()) 
	{
        return $this->sc_html_fragment("header", $parm);
    }   
    /* {LAYOUT_FOOTER} */
    public function sc_layout_footer($parm = array()) 
	{
        if(e_PAGE=="menus.php") {  
			return '';
		}	
		$text = $this->sc_html_fragment("footer", $parm);
 
		return $text;
    } 
    
    /* term snippet is used for form elements */
    /* {HTML_FRAGMENT: type=navigation&key=home&theme=bootstrap5-core} */
    public function sc_html_fragment($type = NULL, $parm = array()) {
 
		$key  = varset($parm['key'], "default");  

		$theme = e107::getPref('sitetheme');
		$themepath = e_THEME . $theme;
		
		$path = "{$themepath}/{$type}/{$type}_{$key}.html"; 

		e107::getDebug()->log("sc_html_fragment: ".$path ); 
        if (file_exists($path))
		{
			e107::getDebug()->log("path exists: ".$path ); 
            $text = file_get_contents($path);
		} 
        else return '';

		if(e_PAGE == "menus.php") {  
 
			return $text;
		}
		else {
			$text = e107::getParser()->parseTemplate($text); 
			return $text;
		} 
        
           
    }
 
    
    /* {THEME_PREF: code=header_width&default=container} */
    /* way how to use theme prefs as shortcodes in HTML layout */
	function sc_theme_pref($parm) 
	{   
 
		$name = $parm['name'];
		if(!isset($name)) 
		{
		return "";
		}
		$default = $parm['default'];
 
		$value = $this->themePrefs[$name];
 
		$value = varset($value, $default);
 
		return $value; 
  
 	}
    
	 /**
     * used for link to parent theme images
     * @shortcode {THEME_PATH}
	 * @return string
	*/
    
	function sc_theme_path($parm = array()) 
	{ 
		$this->sitetheme = e107::getPref('sitetheme');
		$path = e_THEME_ABS.$this->sitetheme."/" ;
		return $path;
	}
}