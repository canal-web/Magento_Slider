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

Then the slider block, wherever you want. Example:
```xml
<reference name="content">
    <block type="slider/slider" name="slider" template="slider/slider-block.phtml"></block>
</reference>
```

## Changelog
* v1.0.1 : updates owl carrousel to its version 2.2.0 & creates layout update to automatically add needed assets css/js in head (no need to do it manually anymore)
