# Magento_Slider
Create an owl carrousel of products from a specified attribute set.

## Howto
After installing the module, activate and configure the slider in System > Configuration > Slider.
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

And the slider block wherever you want. Example:
```xml
<reference name="home">
  <block type="page/template_links" name="product_selector" template="productselector/selector-block.phtml"/>
</reference>
```
