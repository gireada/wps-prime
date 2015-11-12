<?php

/*
*
*	Theme Settings
*
*/
/*
Title: Branding Settings
Setting: wps_prime_settings
Tab: Branding
*/

piklist('field', array(
  'type' => 'file'
  ,'field' => 'company_logo'
  ,'label' => 'Upload company logo',
  'validate'  => array(
    array(
      'type'    => 'limit',
      'options' => array(
        'min'     => 1,
        'max'     => 1
      )
    )
    ),
));
 
piklist('field', array(
 'type' => 'select'
 ,'field' => 'logo_setting'
 ,'label' => 'Branding Settings'
 ,'description' => 'Choose from the drop-down.'
 ,'help' => 'Choose what to display.'
 ,'attributes' => array(
    'class' => 'text'
 ),
   'choices' => array(
      'brand_logo' => 'Use Logo',
      'brand_title' => 'Use Title' 
 )
 ));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_name'
  ,'label' => 'Company Name'
  ,'description' => 'Add name (default site name)'
  ,'help' => 'The Company name will be used for branding purpouses in the footer ex. S.C. Company Name S.R.L'
  ,'value' => get_bloginfo('name')
  ,'attributes' => array(
  'class' => 'text'
  )
 ));


piklist('field', array(
 'type' => 'datepicker'
 ,'scope' => 'post_meta' // Not used for settings sections
 ,'field' => 'company_launch_date'
 ,'label' => 'Company Launch Year'
 ,'description' => 'Select year'
 ,'attributes' => array(
   'class' => 'text'
 )
,'options' => array(
   'dateFormat' => 'yy'
   ,'firstDay' => '0'
)
));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_phone_nr'
  ,'label' => 'Company phone number'
  ,'description' => 'Add main contact number'
  ,'help' => 'The Company main phone number for contact purpouses'
  ,'value' => '07XX XXX XXX'
  ,'attributes' => array(
  'class' => 'text'
  )
 ));

piklist('field', array(
  'type' => 'text'
  ,'field' => 'company_contact_email_address'
  ,'label' => 'Company contact email address'
  ,'description' => 'Add main email address'
  ,'help' => 'Main contact email adress'
  ,'value' => 'your-company@mail.com'
  ,'attributes' => array(
  'class' => 'text'
  )
 ));