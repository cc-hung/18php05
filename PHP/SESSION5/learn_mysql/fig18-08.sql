-- lay  productName, listPrice, discountPercent tu bang products chi lay cac truong ma listPrice < 500 sau do xap xep theo productName
SELECT productName, listPrice, discountPercent
FROM products
WHERE listPrice < 500
ORDER BY productName
-- lay  productName, listPrice, discountPercent tu bang products chi lay cac truong ma listPrice < 500 sau do xap xep theo productName 
--theo thu tu giam dan
SELECT productName, listPrice, discountPercent
FROM products
WHERE listPrice < 500
ORDER BY listPrice DESC
-- lay  productName, listPrice, discountPercent tu bang products chi lay cac truong ma listPrice < 500 sau do xap xep theo discountPercent 
-- va listPrice theo thu tu giam dan
SELECT productName, listPrice, discountPercent
FROM products
ORDER BY discountPercent, listPrice DESC