<?php
    $fields = array(
        array(
            'key' => 'first_name',
            'type' => 'text',
            'display' => array('register', 'edit'),
            'title' => __( 'First Name', 'real-estate-manager' ),
            'help' => '',
            'tab' => 'personal_info',
            'required' => true,
        ),
        array(
            'key' => 'last_name',
            'type' => 'text',
            'display' => array('register', 'edit'),
            'tab' => 'personal_info',
            'title' => __( 'Last Name', 'real-estate-manager' ),
            'help' => '',
            'required' => true,
        ),
        array(
            'key' => 'username',
            'type' => 'text',
            'display' => array('register'),
            'tab' => 'personal_info',
            'title' => __( 'Username', 'real-estate-manager' ),
            'help' => '',
            'required' => true,
        ),
        array(
            'key' => 'useremail',
            'type' => 'email',
            'display' => array('register', 'edit'),
            'title' => __( 'Email', 'real-estate-manager' ),
            'help' => '',
            'tab' => 'personal_info',
            'required' => true,
        ),
        array(
            'key' => 'password',
            'type' => 'password',
            'display' => array('register'),
            'title' => __( 'Password', 'real-estate-manager' ),
            'help' => '',
            'tab' => 'personal_info',
            'required' => true,
        ),
        array(
            'key' => 'repassword',
            'type' => 'password',
            'display' => array('register'),
            'title' => __( 'Pepeat Password', 'real-estate-manager' ),
            'help' => '',
            'tab' => 'personal_info',
            'required' => true,
        ),
        array(
            'key' => 'description',
            'type' => 'textarea',
            'display' => array('register', 'edit'),
            'title' => __( 'Biographical Info', 'real-estate-manager' ),
            'help' => '',
            'required' => true,
            'tab' => 'personal_info',
        ),
        array(
            'key' => 'rem_agent_meta_image',
            'type' => 'image',
            'display' => array('admin', 'edit'),
            'title' => __( 'Picture of Agent', 'real-estate-manager' ),
            'help' => __( 'Upload an additional image for your profile', 'real-estate-manager' ),
            'tab' => 'personal_info',
        ),
        array(
            'key' => 'rem_agent_url',
            'type' => 'text',
            'display' => array('card', 'register', 'edit', 'admin'),
            'tab' => 'personal_info',
            'icon_class' => 'fa fa-info-circle',
            'title' => __( 'Profile Url', 'real-estate-manager' ),
            'help' => __( 'Provide url for agent profile', 'real-estate-manager' ),
        ),
        array(
            'key' => 'rem_mobile_url',
            'type' => 'text',
            'display' => array('card', 'register', 'edit', 'admin'),
            'tab' => 'personal_info',
            'icon_class' => 'fa fa-phone',
            'title' => __( 'Phone Number', 'real-estate-manager' ),
        ),
        array(
            'key' => 'rem_facebook_url',
            'type' => 'text',
            'tab' => 'social_profiles',
            'display' => array('card', 'register', 'edit', 'admin'),
            'icon_class' => 'fab fa-facebook-f',
            'title' => __( 'Facebook Profile', 'real-estate-manager' ),
        ),
        array(
            'key' => 'rem_twitter_url',
            'type' => 'text',
            'tab' => 'social_profiles',
            'display' => array('card', 'register', 'edit', 'admin'),
            'icon_class' => 'fab fa-twitter',
            'title' => __( 'Twitter Profile', 'real-estate-manager' ),
        ),
        array(
            'key' => 'rem_googleplus_url',
            'type' => 'text',
            'tab' => 'social_profiles',
            'display' => array('card', 'register', 'edit', 'admin'),
            'icon_class' => 'fab fa-google-plus-g',
            'title' => __( 'Google+ Profile', 'real-estate-manager' ),
        ),
        array(
            'key' => 'rem_linkedin_url',
            'type' => 'text',
            'display' => array('card', 'register', 'edit', 'admin'),
            'tab' => 'social_profiles',
            'icon_class' => 'fab fa-linkedin-in',
            'title' => __( 'LinkedIn Profile', 'real-estate-manager' ),
        ),
        array(
            'key' => 'rem_facebook_page_url',
            'type' => 'text',
            'display' => array('card', 'register', 'edit', 'admin'),
            'tab' => 'social_profiles',
            'icon_class' => 'fab fa-facebook-square',
            'title' => __( 'Facebook Page', 'real-estate-manager' ),
        ),
        array(
            'key' => 'rem_instagram_url',
            'type' => 'text',
            'display' => array('card', 'register', 'edit', 'admin'),
            'tab' => 'social_profiles',
            'icon_class' => 'fab fa-instagram',
            'title' => __( 'Instagram', 'real-estate-manager' ),
        ),
        array(
            'key' => 'rem_youtube_url',
            'type' => 'text',
            'tab' => 'social_profiles',
            'display' => array('card', 'register', 'edit', 'admin'),
            'icon_class' => 'fab fa-youtube',
            'title' => __( 'YouTube', 'real-estate-manager' ),
        ),
        array(
            'key' => 'rem_user_tagline',
            'type' => 'text',
            'tab' => 'social_profiles',
            'display' => array('register', 'edit', 'admin'),
            'title' => __( 'User Tagline', 'real-estate-manager' ),
            'help' => __( 'Will display under username', 'real-estate-manager' ),
        ),
        array(
            'key' => 'rem_user_skills',
            'type' => 'textarea',
            'tab' => 'skills',
            'display' => array('register', 'edit', 'admin'),
            'title' => __( 'Skills Level', 'real-estate-manager' ),
            'help' => __( 'Skill name with value on each line, eg: Properties Sold, 185', 'real-estate-manager' ),
        ),
        array(
            'key' => 'rem_user_contact_sc',
            'type' => 'text',
            'display' => array('admin'),
            'title' => __( 'Contact Form Shortcode', 'real-estate-manager' ),
            'help' => __( 'Leave blank for default contact form', 'real-estate-manager' ),
        ),
    );
?>