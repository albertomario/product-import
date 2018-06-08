# XML import

The XML import provided allows you to import products from an XML file.

Example:

    bin/magento bigbridge:product:import --dry-run --auto-create-option="color" --auto-create-option="manufacturer" vendor/bigbridge/product-import/doc/example/some-products.xml

All options are listed with --help

    bin/magento bigbridge:product:import --help

## XML specification

See doc/example/some-products.xml for an example of the elements used.

Booleans are specified as 0 or 1.

## Remove an attribute value

To remove the value of a simple attribute, set the xml attribute "remove" to "true". For example

    <special_from_date remove="true" />

## Reference implementation

The XML import also serves as an example of how to use the library. Copy it and adapt it to your needs.
