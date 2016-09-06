# Magento_Slider
Create an owl carrousel of products from a specified attribute set.

## Howto
After installing the module, activate and configure the slider in System > Configuration > Canal-Web > Slider.
You will need at least these attributes:
* name (required)
* image (required)
* link_url (can be empty)
* link_text (can be empty)
* description (can be empty)

Next step is to add needed ressources in your local xml:
```xml
<default>
    <reference name="head">
        <action method="addItem"><type>skin_js</type><name>carousel/owl.carousel.min.js</name></action>
        <action method="addItem"><type>skin_css</type><name>carousel/owl.carousel.css</name></action>
        <action method="addItem"><type>skin_css</type><name>carousel/owl.theme.css</name></action>
    </reference>
</default>
```

Then the slider block, wherever you want. Example:
```xml
<reference name="content">
    <block type="page/html" name="slider" template="slider/slider-block.phtml"></block>
</reference>
```
