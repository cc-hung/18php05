-- lay productName tu bang products chi lay cac truong ma productName co cac ki tu Fender va sau do la cac ki tu khac 
SELECT productName FROM products
WHERE productName LIKE 'Fender%'
-- lay productName tu bang products chi lay cac truong ma productName co cac ki tu khac roi sau do den ki tuFender va sau do la cac ki tu khac
SELECT productName FROM products
WHERE productName LIKE '%cast%'
-- lay zipCode tu bang addresses chi lay cac truong ma zipCode co cac ki tu 076 va sau do la 2 ki tu bat ki
SELECT zipCode FROM addresses
WHERE zipCode LIKE '076__'
-- lay orderDate tu bang orders chi lay cac truong ma orderDate tu nam 2010 thang 06 va ngay bat ki trong thang 6
SELECT orderDate FROM orders
WHERE orderDate LIKE '2010-06-__%'
