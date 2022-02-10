<?php
if ( ! defined( 'ABSPATH' ) ) exit;
		
    include ('includes/panel-var.php');
	
if (isset($_GET['settings-updated'])) { ?>
		<div id="message" class="updated" >
        <p><?php _e('Settings saved successfully.', 'month-name-translation-benaceur') ?></p>
        </div>
<?php } ?>
		
            <h3 style="text-shadow:-8px 10px 1px #D2D2D2;"><b><?php _e('Month-Name-Translation-Benaceur', 'month-name-translation-benaceur'); ?> V <?php echo $this->MNTB_version(); ?></b></h3>
        <br /><br /><h2 style="font-family:DroidKufiRegular,Tahoma, Arial;"><?php _e('Settings', 'month-name-translation-benaceur'); ?></h2>
        <form method="post" action="options.php"  >
            <?php settings_fields( 'month_name_translation_benaceur_group' ); 
				do_settings_sections( 'month_name_translation_benaceur_group' );
			?>
<table class="form-table">
	<tr>
		<td>
    <div class="switch demo1">
                        <input type="hidden" value="" name="<?php echo $this->optionSett('enable'); ?>" >
                        <input type="checkbox"  value="1" <?php checked( $this->option('enable_plug') ); ?> name="<?php echo $this->optionSett('enable'); ?>" />
						<label></label>
	</div>
	<div style="font-family:DroidKufiRegular,Tahoma, Arial; width:max-content; margin:2px auto; padding-top:7px;" ><?php $en_dis = $this->option('enable_plug') ? __("Disable plugin",'month-name-translation-benaceur') : __("Enable plugin",'month-name-translation-benaceur') ; echo $en_dis; ?></div>
		</td>
	</tr>
</table>
<br />
<div class="wrap">
    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-3">
            <!-- sidebar -->
                    <div class="postbox">
                        <div class="inside">
<table border="0" width="98%" cellspacing="0" cellpadding="0">
<?php
$dis = "disabled"; echo '<style>.sm_benaceurlist_caps_input-mntb#h88521  input[type="text"]{color:#A8A8A8;background-color:#F5F5F5;}</style>'; ?>
	<tr>
		<td  width="50%">
              <table class="form-table-mntb">
                <tr valign="top">
                    <td style="word-wrap:break-word;min-width:20%;">
					<?php _e("The names of months before modification:",'month-name-translation-benaceur'); ?>                   
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_jan" value="<?php echo $mntb_jan; ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="month_name_translation_benaceur_jan" value="<?php echo $mntb_jan; ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Fev" value="<?php echo $mntb_Fev; ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="month_name_translation_benaceur_Fev" value="<?php echo $mntb_Fev; ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Mar" value="<?php echo $mntb_Mar; ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="month_name_translation_benaceur_Mar" value="<?php echo $mntb_Mar; ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Avr" value="<?php echo $mntb_Avr; ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="month_name_translation_benaceur_Avr" value="<?php echo $mntb_Avr; ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Mai" value="<?php echo $mntb_Mai; ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="month_name_translation_benaceur_Mai" value="<?php echo $mntb_Mai; ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="monthnametranslationbenaceurjuin" value="<?php echo $mntb_Juin; ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="monthnametranslationbenaceurjuin" value="<?php echo $mntb_Juin; ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="monthnametranslationbenaceurjuil" value="<?php echo $mntb_Juil; ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="monthnametranslationbenaceurjuil" value="<?php echo $mntb_Juil; ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Aou" value="<?php echo $mntb_Aou; ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="month_name_translation_benaceur_Aou" value="<?php echo $mntb_Aou; ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Sep" value="<?php echo $mntb_Sep; ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="month_name_translation_benaceur_Sep" value="<?php echo $mntb_Sep; ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Oct" value="<?php echo $mntb_Oct; ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="month_name_translation_benaceur_Oct" value="<?php echo $mntb_Oct; ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Nov" value="<?php echo $mntb_Nov; ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="month_name_translation_benaceur_Nov" value="<?php echo $mntb_Nov; ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_Dec" value="<?php echo $mntb_Dec; ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="month_name_translation_benaceur_Dec" value="<?php echo $mntb_Dec; ?>" />
					</div>
                   </td>
                </tr>
              </table>
		</td>
		<td  width="50%">
              <table class="form-table-mntb">
                <tr valign="top">
                    <td style="word-wrap:break-word;min-width:20%;">
					<?php _e("Enter the new names of the months of your choice (in order):",'month-name-translation-benaceur'); ?>                   
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_jan" value="<?php echo $mntb_t_jan; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Fev" value="<?php echo $mntb_t_Fev; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Mar" value="<?php echo $mntb_t_Mar; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Avr" value="<?php echo $mntb_t_Avr; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Mai" value="<?php echo $mntb_t_Mai; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="monthnametranslationbenaceurtjuin" value="<?php echo $mntb_t_Juin; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="monthnametranslationbenaceurtjuil" value="<?php echo $mntb_t_Juil; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Aou" value="<?php echo $mntb_t_Aou; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Sep" value="<?php echo $mntb_t_Sep; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Oct" value="<?php echo $mntb_t_Oct; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Nov" value="<?php echo $mntb_t_Nov; ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="month_name_translation_benaceur_t_Dec" value="<?php echo $mntb_t_Dec; ?>" /></div>
                   </td>
                </tr>
              </table>
		</td>
	</tr>
</table>
							</div> <!-- .inside -->
                         
                    </div> <!-- .postbox -->
        </div> <!-- #post-body .metabox-holder .columns-2 -->
        
    </div> <!-- #poststuff -->
</div> <!-- .wrap --> 

<div style="margin-bottom:-10px;" class="wrap588">
<?php
    for($i=1; $i<=12; $i++){
    $month[] = $this->get__month_name($i);
    }
?>
<div class="wrap">
    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-2">
            <!-- sidebar -->
            <div id="postbox-container-3" class="postbox-container">
                    <div class="postbox">
                     
                        <div class="current_names"><?php _e("The current names of months in your site",'month-name-translation-benaceur'); ?></div>
         
						<div class="inside">
                            <table class="form-table">
                            <tr>
                                <td><label for="mash_b"><?php echo $month[0]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month[1]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month[2]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month[3]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month[4]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month[5]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month[6]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month[7]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month[8]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month[9]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month[10]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month[11]; ?></label></td>
                            </tr>
                            </table>
							</div> <!-- .inside -->
                         
                    </div> <!-- .postbox -->
            </div> <!-- #postbox-container-1 .postbox-container -->
        </div> <!-- #post-body .metabox-holder .columns-2 -->
        <br class="clear">
    </div> <!-- #poststuff -->
</div> <!-- .wrap --> 
</div> 

<!-- abbreviation -->

<?php
//$hide_abb = get_locale() == 'ar' ? 'display:none;' : '';
$hide_abb = '';
?>
<div style="<?php echo $hide_abb; ?>" class="wrap">
    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-3">
            <!-- sidebar -->

                    <div class="postbox">
                        <div class="inside">
<table border="0" width="98%" cellspacing="0" cellpadding="0">
<?php
$dis = "disabled"; echo '<style>.sm_benaceurlist_caps_input-mntb#h88521  input[type="text"]{color:#A8A8A8;background-color:#F5F5F5;}</style>'; ?>
	<tr>
		<td  width="50%">
              <table class="form-table-mntb">
                <tr valign="top">
                    <td style="word-wrap:break-word;min-width:20%;">
					<?php _e("The abbreviation names of months before modification:",'month-name-translation-benaceur'); ?>                   
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('jan'); ?>" value="<?php echo $this->optionAbb('jan'); ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="<?php echo $this->optionA('jan'); ?>" value="<?php echo $this->optionAbb('jan'); ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('feb'); ?>" value="<?php echo $this->optionAbb('feb'); ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="<?php echo $this->optionA('feb'); ?>" value="<?php echo $this->optionAbb('feb'); ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('mar'); ?>" value="<?php echo $this->optionAbb('mar'); ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="<?php echo $this->optionA('mar'); ?>" value="<?php echo $this->optionAbb('mar'); ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('apr'); ?>" value="<?php echo $this->optionAbb('apr'); ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="<?php echo $this->optionA('apr'); ?>" value="<?php echo $this->optionAbb('apr'); ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('may'); ?>" value="<?php echo $this->optionAbb('may'); ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="<?php echo $this->optionA('may'); ?>" value="<?php echo $this->optionAbb('may'); ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('jun'); ?>" value="<?php echo $this->optionAbb('jun'); ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="<?php echo $this->optionA('jun'); ?>" value="<?php echo $this->optionAbb('jun'); ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('jul'); ?>" value="<?php echo $this->optionAbb('jul'); ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="<?php echo $this->optionA('jul'); ?>" value="<?php echo $this->optionAbb('jul'); ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('aug'); ?>" value="<?php echo $this->optionAbb('aug'); ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="<?php echo $this->optionA('aug'); ?>" value="<?php echo $this->optionAbb('aug'); ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('sep'); ?>" value="<?php echo $this->optionAbb('sep'); ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="<?php echo $this->optionA('sep'); ?>" value="<?php echo $this->optionAbb('sep'); ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('oct'); ?>" value="<?php echo $this->optionAbb('oct'); ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="<?php echo $this->optionA('oct'); ?>" value="<?php echo $this->optionAbb('oct'); ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('nov'); ?>" value="<?php echo $this->optionAbb('nov'); ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="<?php echo $this->optionA('nov'); ?>" value="<?php echo $this->optionAbb('nov'); ?>" />
					</div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb" id="h88521">
					<input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('dec'); ?>" value="<?php echo $this->optionAbb('dec'); ?>" <?php echo $dis; ?> />
					<input style="font-weight:bold;" type="hidden" name="<?php echo $this->optionA('dec'); ?>" value="<?php echo $this->optionAbb('dec'); ?>" />
					</div>
                   </td>
                </tr>
              </table>
		</td>
		<td  width="50%">
              <table class="form-table-mntb">
                <tr valign="top">
                    <td style="word-wrap:break-word;min-width:20%;">
					<?php _e("Enter the new abbreviation names of the months of your choice (in order):",'month-name-translation-benaceur'); ?>                   
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('jan_t'); ?>" value="<?php echo $this->optionAbb('jan_t'); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('feb_t'); ?>" value="<?php echo $this->optionAbb('feb_t'); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('mar_t'); ?>" value="<?php echo $this->optionAbb('mar_t'); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('apr_t'); ?>" value="<?php echo $this->optionAbb('apr_t'); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('may_t'); ?>" value="<?php echo $this->optionAbb('may_t'); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('jun_t'); ?>" value="<?php echo $this->optionAbb('jun_t'); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('jul_t'); ?>" value="<?php echo $this->optionAbb('jul_t'); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('aug_t'); ?>" value="<?php echo $this->optionAbb('aug_t'); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('sep_t'); ?>" value="<?php echo $this->optionAbb('sep_t'); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('oct_t'); ?>" value="<?php echo $this->optionAbb('oct_t'); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('nov_t'); ?>" value="<?php echo $this->optionAbb('nov_t'); ?>" /></div>
                   </td>
                </tr>
                <tr valign="top">
                    <td>
					<div class="sm_benaceurlist_caps_input-mntb"><input style="font-weight:bold;" type="text" name="<?php echo $this->optionA('dec_t'); ?>" value="<?php echo $this->optionAbb('dec_t'); ?>" /></div>
                   </td>
                </tr>
              </table>
		</td>
	</tr>
</table>
							</div> <!-- .inside -->
                         
                    </div> <!-- .postbox -->

        </div> <!-- #post-body .metabox-holder .columns-2 -->
    </div> <!-- #poststuff -->
</div> <!-- .wrap --> 

<div style="<?php echo $hide_abb; ?>" class="wrap588">
<?php
    for($i=1; $i<=12; $i++){
    $month_abb[] = $this->get__month_abbrev_name($i);
    }
?>
<div class="wrap">
    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-2">
            <!-- sidebar -->
            <div id="postbox-container-3" class="postbox-container">
                    <div class="postbox">
                     
                        <div class="current_names"><?php _e("The current abbreviation names of months in your site",'month-name-translation-benaceur'); ?></div>
         
						<div class="inside">
                            <table class="form-table">
                            <tr>
                                <td><label for="mash_b"><?php echo $month_abb[0]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month_abb[1]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month_abb[2]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month_abb[3]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month_abb[4]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month_abb[5]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month_abb[6]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month_abb[7]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month_abb[8]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month_abb[9]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month_abb[10]; ?></label></td>
                            </tr>
                            <tr>
                                <td><label for="mash_b"><?php echo $month_abb[11]; ?></label></td>
                            </tr>
                            </table>
							</div> <!-- .inside -->
                         
                    </div> <!-- .postbox -->
            </div> <!-- #postbox-container-1 .postbox-container -->
        </div> <!-- #post-body .metabox-holder .columns-2 -->
        <br class="clear">
    </div> <!-- #poststuff -->
</div> <!-- .wrap --> 
</div> 

<!-- abbreviation -->

<div class="wrap5588">
<div class="wrap">
<div id="poststuff">
<div id="post-body" class="metabox-holder columns-2">
<div class="postbox">
<div class="inside">
<table style="margin-top:20px;" >
                <tr>  
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->optionSett('in__admin'); ?>" >
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->optionSett('in__admin'); ?>" value="1" <?php checked( $this->option('disable_in_admin') ); ?>/>
						<span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
       <td class="mntb-td-sty"><?php _e('Disable in admin panel', 'month-name-translation-benaceur'); ?></td>
				   </td>
                </tr>
                <tr>  
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->optionSett('in_front'); ?>" >
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->optionSett('in_front'); ?>" value="1" <?php checked( $this->option('disable_in_front') ); ?>/>
						<span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
       <td class="mntb-td-sty"><?php _e('Disable in site interface', 'month-name-translation-benaceur'); ?></td>
				   </td>
                </tr>
</table>
				
<table style="margin-top:20px;" >
					<tr>
						<td>
                   <input type="radio" name="<?php echo $this->optionSett('delete_all_options'); ?>" value="delete_opt_mntb" <?php if( $this->option('delete_all_options') == 'delete_opt_mntb')echo 'checked';?> >
                    <td id="droidkufi"><?php _e("Remove all settings and data of the plugin from database when the plugin is disabled",'month-name-translation-benaceur'); ?></td>
						</td>
					</tr>
					<tr> 
						<td>
                   <input type="radio" name="<?php echo $this->optionSett('delete_all_options'); ?>" value="no_delete_opt_mntb" <?php if( $this->option('delete_all_options') == 'no_delete_opt_mntb')echo 'checked';?> >
						</td>
                   <td id="droidkufi"><?php _e("Do not delete",'month-name-translation-benaceur'); ?></td>
					</tr>
</table>
<br />
<table style="margin-top:20px;" >
	
                <tr>  
                    <td> 
					<label class="switch-nab">				

                        <input type="hidden" value="" name="<?php echo $this->optionSett('icon_evol_plug'); ?>" >
	                    <input type="checkbox" class="switch-input" name="<?php echo $this->optionSett('icon_evol_plug'); ?>" value="1" <?php checked( $this->option('hide_icon_evol_plug') ); ?>/>
						<span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                   </label>
       <td class="mntb-td-sty"><?php _e('Hide the plugin rating icon', 'month-name-translation-benaceur'); ?></td>
				   </td>
                </tr>
</table>
</div> <!-- .inside -->
</div></div><br class="clear"></div></div></div>

	<p id="droidkufi"><input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e( 'Save Changes' ); ?>"  /></p>
        </form>
		
<br />
<div id="month-name-translation-benaceur-font">
<br /><div class="to-tr"></div>
<br />
    <form action="options.php" method="post">
            <?php settings_fields( 'month_name_translation_benaceur_all_reset' ); ?>
	  <input type="hidden"  name="mntb_all_reset" value="1" <?php if(!$this->option('all_reset')) { echo 'checked="checked"'; } ?>/>
      <input id="droidkufi" type="submit" value="<?php _e('Reset all settings', 'month-name-translation-benaceur');?>" class="button-secondary" />
    </form>
<br />
    </div>
	
<br /><br />
<?php if(!$this->option('hide_icon_evol_plug')) {?>
<div class="hov-button-primary-sub-mntb"><div id="droidkufi" class="button-secondary"><a target="_blank" href="https://wordpress.org/support/view/plugin-reviews/month-name-translation-benaceur?filter=5"><?php _e('Do not forget to rate the plugin', 'month-name-translation-benaceur');?></a></div></div>
<?php } ?>

</br>

<div class="c-sub-mntb">		
<div id="sub-mntb">
<a target="_blank" href="https://wordpress.org/plugins/news-ticker-benaceur/">news-ticker-benaceur</a><br /><br />
<a target="_blank" href="https://wordpress.org/plugins/restrict-usernames-emails-characters/">restrict-usernames-emails-characters</a>
<br /><br />
</div>
<input type="button" id="bt-mntb" class="button-secondary" value='<?php _e('My plugins', 'month-name-translation-benaceur'); ?>' onclick="setVisibility_mntb('sub-mntb');";>
</div>

<style>
.mntb-new {background:url(<?php echo plugins_url( 'img/mntb-new.gif', __FILE__ ) ; ?>) no-repeat ;width:33px; height:11px;}
div.postbox {background: #fff url(<?php echo plugins_url( 'img/benaceur.png', __FILE__ ) ; ?>) repeat ;width:100%;border-radius: 5px;}
</style>

<script language="JavaScript">
function setVisibility_mntb(id) {
if(document.getElementById('bt-mntb').value=='<?php _e('Hide this list', 'month-name-translation-benaceur'); ?>'){
document.getElementById('bt-mntb').value = '<?php _e('My plugins', 'month-name-translation-benaceur'); ?>';
document.getElementById(id).style.display = 'none';
}else{
document.getElementById('bt-mntb').value = '<?php _e('Hide this list', 'month-name-translation-benaceur'); ?>';
document.getElementById(id).style.display = 'inline';
}
}
</script>