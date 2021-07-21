<?php

class theme_settings
{
    public static function get_jmlayouts() {
    
        if (e107::isInstalled('jmlayouts')) {
            $tmp = e107::getDb()->retrieve('jmlayout', '*', null, true);
            foreach ($tmp as $layout) {
                $mode = $layout['layout_mode'] ;
                $layoutsOptions[$mode] =   $layout;
            }
        }
        else {
			/* without plugin do it manually... */
            $layoutsOptions['home']['layout_header'] = 'header_default.html';   
            $layoutsOptions['home']['layout_footer'] = 'footer_default.html';   
            $layoutsOptions['index']['layout_header'] = 'header_efiction.html';
            $layoutsOptions['index']['layout_footer'] = 'footer_default.html';
        } 
        return $layoutsOptions;
    }
    
    public static function get_membersonly_template()
    {
        $tmp['membersonly_start'] = '{LAYOUT_NAVBAR: key=default} 
          <section class="page-header section-height-85">
            <div class="container">
              <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-7 mx-auto">';

        $tmp['membersonly_end'] = '
        </div></div></div></section>{LAYOUT_FOOTER: key=social}
        ';

        return $tmp;
    }
    
    public static function get_singleforms() {
	    //$tmp['login_logo'] = '<div class="center">{LOGO: login}</div>';
        return $tmp;
	}

	public static function main_li_class() {
		$main_li_class = "";
		return $main_li_class;
	}

	public static function main_a_class() {
		$main_a_class  = "";
		return $main_a_class;
	}

	public static function main_sub_a_class() {
		$main_sub_a_class = "";
		return $main_sub_a_class;
	}

	public static function main_caret($name ='') {
		$tmp ='';
		return $tmp;
	} 

	public static function class_submit_button($name ='') {
		$tmp ='';
		return $tmp;
	}	
    
    public static function get_forum_template() {
	    $tmp['forum_header_background'] = 'bg-primary text-white';
        return $tmp;
	}
    
}