<div align="center">
  <img src="https://github.com/sandroschutt/wp-theme-setup/blob/main/wp-child-theme-seyup-logo-github-logo.webp"/>
</div>

<div align="center">
  
![WordPress](https://img.shields.io/badge/WordPress-21759B?style=for-the-badge&logo=wordpress&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Node.js](https://img.shields.io/badge/Node.js-339933?style=for-the-badge&logo=nodedotjs&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)

</div>

<p align="center"><i>Setup a WordPress Child Theme in no time!</i></p>

<p align="center" style="text-align: center"><i>With WPCTS you have a solid base structure to focus on extending your website style and features rahter than structure.</i></p>
<br/><br/>

## Overview
WPCTS is aimed to developers who are tired of setting up child themes over and over. The boilerplate template is based on the WordPress Plugin Boilerplate (WPPB), which help developers to adopt a standard while developing plugins.

This boileplate lend some of WPPB ideas and bring them to child themes, making it easy to install and configure a new child theme. It does so by organizing a standard for using action and filter hooks inside a child theme, leaving function declaration and logic separate from the hook calls.

The main ideia is:
- theme-public.php: handles all frontend custom code;
- theme-admin: handles all admin panel custom code;
- theme-settings.php: handles action and filter hooks, custom functions calls and methods.

Setup your code and get to work!
<br/><br/>

## Release notes:
- Title: WordPress Child Theme Setup
- Author: Sandro Schutt
- Author URI: https://sandroschutt.com.br/about
- URL: https://github.com/sandroschutt/wp-theme-setup/
- Version: 1.0.0

#### Tested with:
- PHP: 8.2
- WordPress: 6.5
- Themes: classic, Gutenberg, Elementor, Vamtam
<br/><br/>

## Installation
Clone or download this repository into your themes folder.

Open your root WordPress installation folder into a terminal and type:
<br/><br/>
```
cd wp-content/themes && git clone https://github.com/sandroschutt/wp-theme-setup.git
```
<br/><br/>
If you downloaded the project to your machine through the direct download button, just move it all into the themes folder located in /wp-content.

After that, just activate the theme in the wp-admin Appearence->Themes page.

> [!ATTENTION]
> This child theme defaults to Twenty Twenty Four as the parent theme. Don't forgrt to change the style.css file in the root folder.
<br/><br/>
## Usage
Load your custom frontend scripts, styles and PHP in the /includes/theme-public.php file.

Load your custom backend (admin) scripts, styles and PHP in the /includes/theme-admin.php file.

The boilerplate relies on OOP, so every function you add to any of the mentioned files should be called inside the /include/theme-settings.php file.

#### Example:
Add a test function to theme-public.php:
<br/><br/>
```
// includes/theme-public.php

function is_front_page()
{
  if(is_front_page()) {
    echo "Indeed, it is the front page.";
  }
}
```
<br/><br/>
Call it inside theme-settings.php
<br/><br/>
```
    public function action_hooks() {
        /**
        /* Function hook calls...
        */

        $this->public->is_front_page();
    }
```
<br/><br/>

### More information
 - [Project release post](https://sandroschutt.com.br/projects/wordpress-child-theme-setup)
 - [Author LinkedIn](https://linkedin.com/in/sandro-schutt)

<br/><br/>
### Tutorials
- Soon
